$(document).ready(function() {
    console.log("Document is ready. script.js loaded.");

    // Get the initial dashboard content
    var initialContent = $('.content').html();

    $('.sidebar-nav a').on('click', function(e) {
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
