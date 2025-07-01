document.addEventListener('DOMContentLoaded', function() {
    const hamburger = document.getElementById('hamburger');
    const navContent = document.getElementById('nav-content');
    const backdrop = document.getElementById('backdrop');
    const body = document.body;

    // Toggle mobile menu
    hamburger.addEventListener('click', function() {
        navContent.classList.toggle('hidden');
        navContent.classList.toggle('show');
        backdrop.classList.toggle('hidden');
        body.classList.toggle('menu-open');
        
        // Toggle hamburger icon
        const icon = hamburger.querySelector('i');
        icon.classList.toggle('fa-bars');
        icon.classList.toggle('fa-times');
    });

    // Close mobile menu when clicking backdrop
    backdrop.addEventListener('click', function() {
        navContent.classList.add('hidden');
        navContent.classList.remove('show');
        backdrop.classList.add('hidden');
        body.classList.remove('menu-open');
        
        // Reset hamburger icon
        const icon = hamburger.querySelector('i');
        icon.classList.add('fa-bars');
        icon.classList.remove('fa-times');
    });

    // Handle dropdowns
    const dropdowns = document.querySelectorAll('.dropdown');
    dropdowns.forEach(dropdown => {
        const trigger = dropdown.querySelector('.dropdown-trigger');
        const content = dropdown.querySelector('.dropdown-content');

        // Show dropdown on hover for desktop
        if (window.innerWidth >= 1024) {
            dropdown.addEventListener('mouseenter', () => {
                content.classList.remove('hidden');
            });

            dropdown.addEventListener('mouseleave', () => {
                content.classList.add('hidden');
            });
        }

        // Toggle dropdown on click for mobile
        trigger.addEventListener('click', (e) => {
            if (window.innerWidth < 1024) {
                e.preventDefault();
                content.classList.toggle('hidden');
            }
        });
    });
});