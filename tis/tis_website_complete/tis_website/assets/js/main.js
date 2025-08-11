// TIS Saudi Arabia Website JavaScript

// DOM Content Loaded
document.addEventListener('DOMContentLoaded', function() {
    // Initialize all functions
    initNavbar();
    initScrollAnimations();
    initContactForm();
    initSmoothScrolling();
    initLazyLoading();
    initParallax();
});

// Navbar functionality
function initNavbar() {
    const navbar = document.getElementById('mainNav');
    const navbarToggler = document.querySelector('.navbar-toggler');
    const navbarCollapse = document.querySelector('.navbar-collapse');
    
    // Navbar scroll effect
    window.addEventListener('scroll', function() {
        if (window.scrollY > 100) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });
    
    // Close mobile menu when clicking on links
    document.querySelectorAll('.nav-link').forEach(link => {
        link.addEventListener('click', function() {
            if (navbarCollapse.classList.contains('show')) {
                navbarToggler.click();
            }
        });
    });
    
    // Active nav link highlighting
    const sections = document.querySelectorAll('section[id]');
    const navLinks = document.querySelectorAll('.nav-link[href^="#"]');
    
    window.addEventListener('scroll', function() {
        let current = '';
        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.clientHeight;
            if (window.scrollY >= (sectionTop - 200)) {
                current = section.getAttribute('id');
            }
        });
        
        navLinks.forEach(link => {
            link.classList.remove('active');
            if (link.getAttribute('href') === `#${current}`) {
                link.classList.add('active');
            }
        });
    });
}

// Scroll animations
function initScrollAnimations() {
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('loaded');
                
                // Counter animation for numbers
                if (entry.target.classList.contains('counter')) {
                    animateCounter(entry.target);
                }
                
                // Stagger animation for cards
                if (entry.target.classList.contains('stagger-container')) {
                    animateStagger(entry.target);
                }
            }
        });
    }, observerOptions);
    
    // Observe elements for animation
    document.querySelectorAll('.loading, .counter, .stagger-container').forEach(el => {
        observer.observe(el);
    });
    
    // Add loading class to animated elements
    document.querySelectorAll('.service-card, .project-card, .feature-item, .process-step').forEach(el => {
        el.classList.add('loading');
    });
}

// Counter animation
function animateCounter(element) {
    const target = parseInt(element.getAttribute('data-target'));
    const duration = 2000;
    const step = target / (duration / 16);
    let current = 0;
    
    const timer = setInterval(function() {
        current += step;
        if (current >= target) {
            current = target;
            clearInterval(timer);
        }
        element.textContent = Math.floor(current);
    }, 16);
}

// Stagger animation
function animateStagger(container) {
    const items = container.querySelectorAll('.loading');
    items.forEach((item, index) => {
        setTimeout(() => {
            item.classList.add('loaded');
        }, index * 100);
    });
}

// Contact form functionality
function initContactForm() {
    const form = document.getElementById('contactForm');
    
    if (form) {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Get form data
            const formData = new FormData(form);
            const data = {
                name: formData.get('name') || document.getElementById('name').value,
                phone: formData.get('phone') || document.getElementById('phone').value,
                email: formData.get('email') || document.getElementById('email').value,
                service: formData.get('service') || document.getElementById('service').value,
                message: formData.get('message') || document.getElementById('message').value
            };
            
            // Validate form
            if (validateForm(data)) {
                // Show loading state
                const submitBtn = form.querySelector('button[type="submit"]');
                const originalText = submitBtn.textContent;
                submitBtn.textContent = 'جاري الإرسال...';
                submitBtn.disabled = true;
                
                // Simulate form submission (replace with actual API call)
                setTimeout(() => {
                    showNotification('تم إرسال رسالتك بنجاح! سنتواصل معك قريباً.', 'success');
                    form.reset();
                    submitBtn.textContent = originalText;
                    submitBtn.disabled = false;
                }, 2000);
            }
        });
        
        // Real-time validation
        const inputs = form.querySelectorAll('input, select, textarea');
        inputs.forEach(input => {
            input.addEventListener('blur', function() {
                validateField(this);
            });
            
            input.addEventListener('input', function() {
                if (this.classList.contains('is-invalid')) {
                    validateField(this);
                }
            });
        });
    }
}

// Form validation
function validateForm(data) {
    let isValid = true;
    
    // Name validation
    if (!data.name || data.name.trim().length < 2) {
        showFieldError('name', 'يرجى إدخال اسم صحيح');
        isValid = false;
    } else {
        clearFieldError('name');
    }
    
    // Phone validation
    const phoneRegex = /^[+]?[0-9\s\-\(\)]{10,}$/;
    if (!data.phone || !phoneRegex.test(data.phone)) {
        showFieldError('phone', 'يرجى إدخال رقم هاتف صحيح');
        isValid = false;
    } else {
        clearFieldError('phone');
    }
    
    // Email validation
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!data.email || !emailRegex.test(data.email)) {
        showFieldError('email', 'يرجى إدخال بريد إلكتروني صحيح');
        isValid = false;
    } else {
        clearFieldError('email');
    }
    
    // Service validation
    if (!data.service) {
        showFieldError('service', 'يرجى اختيار الخدمة المطلوبة');
        isValid = false;
    } else {
        clearFieldError('service');
    }
    
    // Message validation
    if (!data.message || data.message.trim().length < 10) {
        showFieldError('message', 'يرجى إدخال رسالة تحتوي على 10 أحرف على الأقل');
        isValid = false;
    } else {
        clearFieldError('message');
    }
    
    return isValid;
}

// Validate individual field
function validateField(field) {
    const value = field.value.trim();
    const fieldName = field.id;
    
    switch (fieldName) {
        case 'name':
            if (value.length < 2) {
                showFieldError(fieldName, 'يرجى إدخال اسم صحيح');
                return false;
            }
            break;
        case 'phone':
            const phoneRegex = /^[+]?[0-9\s\-\(\)]{10,}$/;
            if (!phoneRegex.test(value)) {
                showFieldError(fieldName, 'يرجى إدخال رقم هاتف صحيح');
                return false;
            }
            break;
        case 'email':
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(value)) {
                showFieldError(fieldName, 'يرجى إدخال بريد إلكتروني صحيح');
                return false;
            }
            break;
        case 'service':
            if (!value) {
                showFieldError(fieldName, 'يرجى اختيار الخدمة المطلوبة');
                return false;
            }
            break;
        case 'message':
            if (value.length < 10) {
                showFieldError(fieldName, 'يرجى إدخال رسالة تحتوي على 10 أحرف على الأقل');
                return false;
            }
            break;
    }
    
    clearFieldError(fieldName);
    return true;
}

// Show field error
function showFieldError(fieldName, message) {
    const field = document.getElementById(fieldName);
    const existingError = field.parentNode.querySelector('.invalid-feedback');
    
    field.classList.add('is-invalid');
    field.classList.remove('is-valid');
    
    if (!existingError) {
        const errorDiv = document.createElement('div');
        errorDiv.className = 'invalid-feedback';
        errorDiv.textContent = message;
        field.parentNode.appendChild(errorDiv);
    } else {
        existingError.textContent = message;
    }
}

// Clear field error
function clearFieldError(fieldName) {
    const field = document.getElementById(fieldName);
    const existingError = field.parentNode.querySelector('.invalid-feedback');
    
    field.classList.remove('is-invalid');
    field.classList.add('is-valid');
    
    if (existingError) {
        existingError.remove();
    }
}

// Show notification
function showNotification(message, type = 'info') {
    // Remove existing notifications
    const existingNotifications = document.querySelectorAll('.notification');
    existingNotifications.forEach(notification => notification.remove());
    
    // Create notification
    const notification = document.createElement('div');
    notification.className = `notification alert alert-${type === 'success' ? 'success' : 'info'} alert-dismissible fade show`;
    notification.style.cssText = `
        position: fixed;
        top: 100px;
        right: 20px;
        z-index: 9999;
        min-width: 300px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.15);
    `;
    
    notification.innerHTML = `
        ${message}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    `;
    
    document.body.appendChild(notification);
    
    // Auto remove after 5 seconds
    setTimeout(() => {
        if (notification.parentNode) {
            notification.remove();
        }
    }, 5000);
}

// Smooth scrolling
function initSmoothScrolling() {
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            
            if (target) {
                const headerOffset = 80;
                const elementPosition = target.offsetTop;
                const offsetPosition = elementPosition - headerOffset;
                
                window.scrollTo({
                    top: offsetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });
}

// Lazy loading for images
function initLazyLoading() {
    const images = document.querySelectorAll('img[data-src]');
    
    const imageObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                img.src = img.dataset.src;
                img.classList.remove('lazy');
                imageObserver.unobserve(img);
            }
        });
    });
    
    images.forEach(img => imageObserver.observe(img));
}

// Parallax effect
function initParallax() {
    const parallaxElements = document.querySelectorAll('.parallax');
    
    window.addEventListener('scroll', () => {
        const scrolled = window.pageYOffset;
        const rate = scrolled * -0.5;
        
        parallaxElements.forEach(element => {
            element.style.transform = `translateY(${rate}px)`;
        });
    });
}

// Utility functions
function debounce(func, wait, immediate) {
    let timeout;
    return function executedFunction() {
        const context = this;
        const args = arguments;
        const later = function() {
            timeout = null;
            if (!immediate) func.apply(context, args);
        };
        const callNow = immediate && !timeout;
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
        if (callNow) func.apply(context, args);
    };
}

// Performance optimization
const debouncedScroll = debounce(function() {
    // Scroll-based animations can be added here
}, 10);

window.addEventListener('scroll', debouncedScroll);

// Accessibility improvements
document.addEventListener('keydown', function(e) {
    // Skip to main content with Tab key
    if (e.key === 'Tab' && !e.shiftKey && document.activeElement === document.body) {
        const mainContent = document.querySelector('main') || document.querySelector('#home');
        if (mainContent) {
            mainContent.focus();
            e.preventDefault();
        }
    }
});

// Error handling
window.addEventListener('error', function(e) {
    console.error('JavaScript Error:', e.error);
    // You can add error reporting here
});

// Service Worker registration (for PWA capabilities)
if ('serviceWorker' in navigator) {
    window.addEventListener('load', function() {
        navigator.serviceWorker.register('/sw.js')
            .then(function(registration) {
                console.log('ServiceWorker registration successful');
            })
            .catch(function(err) {
                console.log('ServiceWorker registration failed');
            });
    });
}

