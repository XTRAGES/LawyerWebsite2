document.addEventListener('DOMContentLoaded', () => {
    // Smooth scrolling for navigation links
    document.querySelectorAll('a[href*="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            const targetUrl = new URL(this.href);
            const currentUrl = new URL(window.location.href);

            if (targetUrl.pathname === currentUrl.pathname) {
                e.preventDefault();
                const targetId = this.getAttribute('href').split('#')[1];
                const targetElement = document.getElementById(targetId);

                if (targetElement) {
                    const headerOffset = document.querySelector('header').offsetHeight;
                    const additionalOffset = 50; // Add extra space
                    const elementPosition = targetElement.getBoundingClientRect().top;
                    const offsetPosition = elementPosition + window.pageYOffset - headerOffset - additionalOffset;

                    window.scrollTo({
                        top: offsetPosition,
                        behavior: 'smooth'
                    });
                }
            }
        });
    });

    // Contact form submission status
    const contactForm = document.getElementById('contact-form');
    if (contactForm) {
        const urlParams = new URLSearchParams(window.location.search);
        const status = urlParams.get('status');

        if (status === 'success') {
            const successMessage = document.createElement('p');
            successMessage.style.color = 'var(--primary-color)';
            successMessage.textContent = 'Message sent successfully!';
            contactForm.parentNode.insertBefore(successMessage, contactForm);
            contactForm.reset();
        } else if (status === 'error') {
            const errorMessage = document.createElement('p');
            errorMessage.style.color = 'red';
            errorMessage.textContent = 'An error occurred. Please try again.';
            contactForm.parentNode.insertBefore(errorMessage, contactForm);
        }
    }
});