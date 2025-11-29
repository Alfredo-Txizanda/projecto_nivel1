$(document).ready(function() {
    console.log("Document is ready. script.js loaded.");

    // Função para configurar a validação de datas
    function setupDateValidation(checkinSelector, checkoutSelector) {
        const checkinInput = $(checkinSelector);
        const checkoutInput = $(checkoutSelector);

        if (checkinInput.length && checkoutInput.length) {
            const today = new Date().toISOString().split('T')[0];

            checkinInput.attr('min', today);
            
            // Se o check-in já tiver um valor (no caso de edição), define o min do checkout
            if(checkinInput.val()){
                checkoutInput.attr('min', checkinInput.val());
            } else {
                checkoutInput.attr('min', today);
            }

            checkinInput.on('change', function() {
                if (this.value) {
                    checkoutInput.attr('min', this.value);
                    if (checkoutInput.val() && new Date(checkoutInput.val()) < new Date(this.value)) {
                        checkoutInput.val('');
                    }
                }
            });

            checkoutInput.on('change', function() {
                if (this.value && checkinInput.val()) {
                    const checkInDate = new Date(checkinInput.val());
                    const checkOutDate = new Date(this.value);

                    if (checkOutDate <= checkInDate) {
                        alert('A data de Check-out deve ser posterior à data de Check-in.');
                        this.value = '';
                    }
                }
            });
        }
    }

    // Evento para o modal de adicionar reserva
    $('#addReservaModal').on('show.bs.modal', function () {
        setupDateValidation('#checkin', '#checkout');
    });

    // Evento para o modal de editar reserva
    $('#editReservaModal').on('show.bs.modal', function () {
        setupDateValidation('#editCheckin', '#editCheckout');
    });

    // Get the initial dashboard content
    var initialContent = $('.content').html();

    // Delegação de eventos para os links da sidebar
    $(document).on('click', '.sidebar-nav a', function(e) {
        e.preventDefault();
        console.log("Sidebar link clicked.");

        var tab = $(this).data('tab');
        console.log("Tab data attribute: " + tab);

        // Update active class
        $('.sidebar-nav a').removeClass('active');
        $(this).addClass('active');

        if (tab === 'dashboard') {
            console.log("Loading dashboard content.");
            // Restore the initial content
            $('.content').html(initialContent);
            return;
        }

        // Construct the URL for the AJAX request
        var url = '/projecto_nivel1/app/view/admin/' + tab + '/Main.php';
        console.log("Requesting URL: " + url);

        $.ajax({
            url: url,
            type: 'GET',
            success: function(response) {
                console.log("AJAX request successful.");
                $('.content').html(response);
            },
            error: function(xhr, status, error) {
                console.error("AJAX Error: ", status, error);
                console.error("Status: " + xhr.status + ", Response: " + xhr.responseText);
                $('.content').html('<p class="alert alert-danger">Error ' + xhr.status + ': Could not load content. Please check the browser console for more details.</p>');
            }
        });
    });
});
