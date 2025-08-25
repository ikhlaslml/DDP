        // Optional JavaScript for additional interactivity
        document.querySelectorAll('.testimonial-card').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.querySelector('.quote-icon').classList.add('text-primary');
            });
            card.addEventListener('mouseleave', function() {
                this.querySelector('.quote-icon').classList.remove('text-primary');
            });
        });