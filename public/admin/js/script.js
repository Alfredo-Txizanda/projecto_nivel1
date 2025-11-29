$(document).ready(function() {
    console.log("Document is ready. script.js loaded.");

    // Função para configurar a validação de datas
    function setupDateValidation(checkinSelector, checkoutSelector) {
        const checkinInput = $(checkinSelector);
        const checkoutInput = $(checkoutSelector);

        if (checkinInput.length && checkoutInput.length) {
            const today = new Date().toISOString().split('T')[0];

            checkinInput.attr('min', today);
            
            // Define o 'min' do checkout com base no checkin existente ou hoje
            const minCheckoutDate = checkinInput.val() && checkinInput.val() >= today ? checkinInput.val() : today;
            checkoutInput.attr('min', minCheckoutDate);

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

    // --- DELEGAÇÃO DE EVENTOS para os Modais ---
    // Isto garante que o código funciona mesmo com conteúdo carregado via AJAX.
    $(document).on('show.bs.modal', '#addReservaModal', function () {
        console.log('Add reserva modal opened');
        setupDateValidation('#checkin', '#checkout');
    });

    $(document).on('show.bs.modal', '#editReservaModal', function () {
        console.log('Edit reserva modal opened');
        // Preenche os dados do modal de edição (código movido para cá para garantir execução)
        var button = event.relatedTarget;
        var id = button.getAttribute('data-id');
        var hospede = button.getAttribute('data-hospede');
        var quarto = button.getAttribute('data-quarto');
        var checkin = button.getAttribute('data-checkin');
        var checkout = button.getAttribute('data-checkout');
        var estado = button.getAttribute('data-estado');

        var modal = $(this);
        modal.find('.modal-title').text('Editar Reserva #' + id);
        modal.find('#editReservaId').val(id);
        modal.find('#editHospede').val(hospede);
        modal.find('#editQuarto').val(quarto);
        modal.find('#editCheckin').val(checkin);
        modal.find('#editCheckout').val(checkout);
        modal.find('#editEstado').val(estado);
        
        // Executa a validação DEPOIS de preencher os campos
        setupDateValidation('#editCheckin', '#editCheckout');
    });
    
    $(document).on('show.bs.modal', '#deleteReservaModal', function(event) {
        var button = $(event.relatedTarget);
        var id = button.data('id');
        var modal = $(this);
        modal.find('#deleteReservaId').val(id);
    });


    // Get the initial dashboard content
    var initialContent = $('.content').html();

    // Delegação de eventos para os links da sidebar
    $(document).on('click', '.sidebar-nav a', function(e) {
        e.preventDefault();
        var tab = $(this).data('tab');
        $('.sidebar-nav a').removeClass('active');
        $(this).addClass('active');

        if (tab === 'dashboard') {
            $('.content').html(initialContent);
            return;
        }

        var url = '/projecto_nivel1/app/view/admin/' + tab + '/Main.php';

        $.ajax({
            url: url,
            type: 'GET',
            success: function(response) {
                $('.content').html(response);
            },
            error: function(xhr) {
                console.error("AJAX Error: ", xhr.status, xhr.responseText);
                $('.content').html('<p class="alert alert-danger">Error ' + xhr.status + ': Could not load content.</p>');
            }
        });
    });
});
