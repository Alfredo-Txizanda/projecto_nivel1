//RESERVA DE QUARTO - INÍCIO
document.addEventListener('DOMContentLoaded', function() {
    const reservationForm = document.getElementById('reservationForm');

    // Add date validation
    const checkInInput = document.getElementById('checkIn');
    const checkOutInput = document.getElementById('checkOut');

    // Set minimum date to today
    const today = new Date().toISOString().split('T')[0];
    checkInInput.setAttribute('min', today);
    checkOutInput.setAttribute('min', today);

    // When check-in date changes, update check-out minimum
    checkInInput.addEventListener('change', function() {
        if (this.value) {
            checkOutInput.setAttribute('min', this.value);
        }
    });

    // When check-out date changes, validate it's after check-in
    checkOutInput.addEventListener('change', function() {
        if (this.value && checkInInput.value) {
            const checkInDate = new Date(checkInInput.value);
            const checkOutDate = new Date(this.value);

            if (checkOutDate <= checkInDate) {
                alert('Check-out date must be after check-in date.');
                this.value = '';
            }
        }
    });

    // Form submission handling
    reservationForm.addEventListener('submit', function(e) {
        e.preventDefault();

        // Validate form fields
        const room = document.getElementById('room').value;
        const adults = document.getElementById('adults').value;
        const children = document.getElementById('children').value;
        const checkIn = document.getElementById('checkIn').value;
        const checkOut = document.getElementById('checkOut').value;

        // Simple validation
        if (!room || !adults || !children || !checkIn || !checkOut) {
            alert('Please fill in all required fields.');
            return;
        }

        if (adults < 1) {
            alert('At least one adult is required.');
            return;
        }

        // Simulate form submission
        alert('Reservation submitted successfully! Redirecting to payment...');

        // In a real application, you would send data to a server here
        // Example: fetch('/api/reservation', { method: 'POST', body: formData })

        // For demo purposes, we'll just log the data
        console.log({
            room: room,
            adults: adults,
            children: children,
            checkIn: checkIn,
            checkOut: checkOut
        });

        // You could redirect to a payment page here
        // window.location.href = 'payment.html';
    });

    // Add some visual feedback when clicking buttons
    const submitButton = reservationForm.querySelector('button[type="submit"]');
    submitButton.addEventListener('click', function() {
        this.classList.add('animate-pulse');
        setTimeout(() => {
            this.classList.remove('animate-pulse');
        }, 500);
    });
});
//RESERVA DE QUARTO - FIM

//DETALHES DE QUARTOS - INÍCIO
// JavaScript funcionalidades para os detalhes de quartos
document.addEventListener('DOMContentLoaded', function() {
    const bookNowBtn = document.getElementById('bookNowBtn');

    // Add click event to the book now button
    bookNowBtn.addEventListener('click', function() {
        // Show confirmation message
        alert('Booking process started! Please select your dates and complete the reservation.');

        // In a real application, you would redirect to a booking page or open a modal
        // Example: window.location.href = 'booking.html';

        // You could also add some visual feedback
        this.classList.add('animate-pulse');
        setTimeout(() => {
            this.classList.remove('animate-pulse');
        }, 500);
    });

    // Add some additional interactivity
    bookNowBtn.addEventListener('mouseenter', function() {
        this.style.transform = 'translateY(-2px)';
    });

    bookNowBtn.addEventListener('mouseleave', function() {
        this.style.transform = 'translateY(0)';
    });

    // Optional: Add automatic carousel rotation
    const carousel = document.getElementById('roomCarousel');
    if (carousel) {
        // Set interval for automatic sliding (every 5 seconds)
        const interval = setInterval(() => {
            const nextButton = carousel.querySelector('.carousel-control-next');
            if (nextButton) {
                nextButton.click();
            }
        }, 5000);

        // Stop automatic rotation when user interacts with carousel
        carousel.addEventListener('click', () => {
            clearInterval(interval);
        });
    }
});
//DETALHES DE QUARTOS - FIM

/*RESERVA - MODAL*/
