// Modern Header Enhancement Script

document.addEventListener('DOMContentLoaded', function() {
    const header = document.getElementById('header-main');
    let ticking = false;

    // Add scroll effect to header
    function updateHeaderOnScroll() {
        if (window.scrollY > 10) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
        ticking = false;
    }

    // Optimize scroll performance with requestAnimationFrame
    window.addEventListener('scroll', function() {
        if (!ticking) {
            window.requestAnimationFrame(updateHeaderOnScroll);
            ticking = true;
        }
    });

    // Watch for dark theme changes
    const observer = new MutationObserver(function(mutations) {
        mutations.forEach(function(mutation) {
            if (mutation.attributeName === 'class') {
                // Dark theme class has been toggled
                // CSS will handle the visual updates automatically
            }
        });
    });

    // Observe changes to the body element's class attribute
    const body = document.body;
    observer.observe(body, { attributes: true, attributeFilter: ['class'] });

    // Set active nav link based on current page with animation
    const currentPath = window.location.pathname;
    const navLinks = document.querySelectorAll('.nav-link');

    navLinks.forEach(link => {
        const href = link.getAttribute('href');
        if (href === currentPath || (href === '/' && currentPath === '/')) {
            link.classList.add('active');
            // Trigger animation by adding a small delay for the active state
            setTimeout(() => {
                link.style.animation = 'none';
                link.offsetHeight; // Trigger reflow
                link.style.animation = '';
            }, 50);
        } else {
            link.classList.remove('active');
        }
    });

    // Add smooth animation when switching between tabs
    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            // Remove active class from all links
            navLinks.forEach(l => l.classList.remove('active'));
            // Add active class to clicked link
            this.classList.add('active');
        });
    });

    // Close mobile menu when a link is clicked
    const mobileLinks = document.querySelectorAll('[href*="/"]');
    const mobileMenuToggle = document.querySelector('.mobile-menu-toggle');
    const mobileMenu = document.getElementById('menu-mobile');

    if (mobileMenu && mobileMenuToggle) {
        mobileLinks.forEach(link => {
            link.addEventListener('click', function() {
                // Close the offcanvas menu after clicking a link
                const bsOffcanvas = new bootstrap.Offcanvas(mobileMenu);
                bsOffcanvas.hide();
            });
        });
    }

    // Enhance button interactions
    const registerBtn = document.querySelector('.btn-register');
    if (registerBtn) {
        registerBtn.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-2px)';
        });
        registerBtn.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
        });
    }

    const loginBtn = document.querySelector('.btn-login');
    if (loginBtn) {
        loginBtn.addEventListener('mouseenter', function() {
            this.style.boxShadow = '0 4px 12px rgba(241, 145, 61, 0.2)';
        });
        loginBtn.addEventListener('mouseleave', function() {
            this.style.boxShadow = '';
        });
    }

    // Smooth transitions for nav items
    const navItems = document.querySelectorAll('.nav-item');
    navItems.forEach(item => {
        item.addEventListener('mouseenter', function() {
            this.style.transition = 'all 0.3s ease';
        });
    });

    // Prevent scroll on modal open (accessibility)
    const modals = document.querySelectorAll('[data-bs-toggle="modal"]');
    modals.forEach(modal => {
        modal.addEventListener('click', function() {
            document.body.style.overflow = 'hidden';
        });
    });

    // Restore scroll on modal close
    const modalBackdrops = document.querySelectorAll('.modal-backdrop');
    document.addEventListener('hidden.bs.modal', function() {
        document.body.style.overflow = '';
    });
});

// Add keyboard navigation support
document.addEventListener('keydown', function(event) {
    // ESC key to close modals
    if (event.key === 'Escape') {
        const modals = document.querySelectorAll('.modal.show');
        modals.forEach(modal => {
            const bsModal = bootstrap.Modal.getInstance(modal);
            if (bsModal) {
                bsModal.hide();
            }
        });
    }
});
