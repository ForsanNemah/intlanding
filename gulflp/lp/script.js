// Countdown Timer Functionality
function initCountdownTimer() {
    // Set the date we're counting down to (30 days from now)
    const countDownDate = new Date().getTime() + (30 * 24 * 60 * 60 * 1000);
    
    // Update the countdown every 1 second
    const countdownInterval = setInterval(function() {
        // Get current date and time
        const now = new Date().getTime();
        
        // Find the distance between now and the countdown date
        const distance = countDownDate - now;
        
        // Time calculations for days, hours, minutes and seconds
        const days = Math.floor(distance / (1000 * 60 * 60 * 24));
        const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((distance % (1000 * 60)) / 1000);
        
        // Display the result in the elements with respective IDs
        document.getElementById("days").innerHTML = days.toString().padStart(2, '0');
        document.getElementById("hours").innerHTML = hours.toString().padStart(2, '0');
        document.getElementById("minutes").innerHTML = minutes.toString().padStart(2, '0');
        document.getElementById("seconds").innerHTML = seconds.toString().padStart(2, '0');
        
        // If the countdown is finished, write some text
        if (distance < 0) {
            clearInterval(countdownInterval);
            document.querySelector('.countdown-timer').innerHTML = "<h4>انتهى العرض!</h4>";
        }
    }, 1000);
}

// Smooth scrolling for navigation links
function initSmoothScrolling() {
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
}

// Animate elements on scroll
function initScrollAnimations() {
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('loading');
            }
        });
    }, observerOptions);
    
    // Observe all cards and sections
    document.querySelectorAll('.service-card, .offer-card, .before-after-card').forEach(card => {
        observer.observe(card);
    });
}

// Floating buttons functionality
function initFloatingButtons() {
    // WhatsApp button click tracking
    document.querySelector('.whatsapp-btn').addEventListener('click', function() {
        // You can add analytics tracking here
        console.log('WhatsApp button clicked');
    });
    
    // Google Maps button click tracking
    document.querySelector('.maps-btn').addEventListener('click', function() {
        // You can add analytics tracking here
        console.log('Google Maps button clicked');
    });
}

// Offer buttons functionality
function initOfferButtons() {
    document.querySelectorAll('.offer-btn').forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            
            // Add a visual feedback
            const originalText = this.textContent;
            this.textContent = 'جاري التحميل...';
            this.disabled = true;
            
            // Simulate booking process
            setTimeout(() => {
                this.textContent = 'تم الإرسال!';
                this.style.background = 'linear-gradient(45deg, #059669, #10b981)';
                
                // Reset after 2 seconds
                setTimeout(() => {
                    this.textContent = originalText;
                    this.disabled = false;
                    this.style.background = '';
                }, 2000);
            }, 1500);
            
            // You can add actual booking functionality here
            console.log('Offer booking requested');
        });
    });
}

// CTA button functionality
function initCTAButton() {
    document.querySelector('.cta-button').addEventListener('click', function(e) {
        e.preventDefault();
        
        // Scroll to offers section
        document.getElementById('offers').scrollIntoView({
            behavior: 'smooth',
            block: 'start'
        });
        
        // Add a pulse effect to the offers section
        const offersSection = document.getElementById('offers');
        offersSection.style.animation = 'pulse 1s ease-in-out';
        
        setTimeout(() => {
            offersSection.style.animation = '';
        }, 1000);
    });
}

// Add pulse animation to CSS dynamically
function addPulseAnimation() {
    const style = document.createElement('style');
    style.textContent = `
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.02); }
            100% { transform: scale(1); }
        }
    `;
    document.head.appendChild(style);
}

// Parallax effect for hero section
function initParallaxEffect() {
    window.addEventListener('scroll', function() {
        const scrolled = window.pageYOffset;
        const parallax = document.querySelector('.hero-section');
        const speed = scrolled * 0.5;
        
        if (parallax) {
            parallax.style.transform = `translateY(${speed}px)`;
        }
    });
}

// Service cards hover effect enhancement
function initServiceCardEffects() {
    document.querySelectorAll('.service-card').forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-10px) scale(1.02)';
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0) scale(1)';
        });
    });
}

// Offer cards special effects
function initOfferCardEffects() {
    document.querySelectorAll('.offer-card').forEach(card => {
        card.addEventListener('mouseenter', function() {
            const badge = this.querySelector('.offer-badge');
            if (badge) {
                badge.style.animation = 'bounce 0.6s ease-in-out';
            }
        });
        
        card.addEventListener('mouseleave', function() {
            const badge = this.querySelector('.offer-badge');
            if (badge) {
                badge.style.animation = '';
            }
        });
    });
}

// Add bounce animation
function addBounceAnimation() {
    const style = document.createElement('style');
    style.textContent = `
        @keyframes bounce {
            0%, 20%, 60%, 100% { transform: translateY(0); }
            40% { transform: translateY(-10px); }
            80% { transform: translateY(-5px); }
        }
    `;
    document.head.appendChild(style);
}

// Social media icons hover effects
function initSocialIconEffects() {
    document.querySelectorAll('.social-icon').forEach(icon => {
        icon.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-3px) rotate(5deg)';
        });
        
        icon.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0) rotate(0deg)';
        });
    });
}

// Initialize all functionality when DOM is loaded
document.addEventListener('DOMContentLoaded', function() {
    // Initialize all features
    initCountdownTimer();
    initSmoothScrolling();
    initScrollAnimations();
    initFloatingButtons();
    initOfferButtons();
    initCTAButton();
    initParallaxEffect();
    initServiceCardEffects();
    initOfferCardEffects();
    initSocialIconEffects();
    
    // Add custom animations
    addPulseAnimation();
    addBounceAnimation();
    
    // Add loading class to initially visible elements
    setTimeout(() => {
        document.querySelectorAll('.hero-section .container > *').forEach(element => {
            element.classList.add('loading');
        });
    }, 100);
    
    console.log('Al-Afia Medical Complex website loaded successfully!');
});

// Handle window resize for responsive adjustments
window.addEventListener('resize', function() {
    // Adjust countdown timer layout on mobile
    const countdownDisplay = document.querySelector('.countdown-display');
    if (window.innerWidth < 576) {
        countdownDisplay.style.gap = '0.5rem';
    } else if (window.innerWidth < 768) {
        countdownDisplay.style.gap = '1rem';
    } else {
        countdownDisplay.style.gap = '2rem';
    }
});

// Add scroll-to-top functionality
function addScrollToTop() {
    // Create scroll to top button
    const scrollButton = document.createElement('button');
    scrollButton.innerHTML = '<i class="fas fa-arrow-up"></i>';
    scrollButton.className = 'scroll-to-top';
    scrollButton.style.cssText = `
        position: fixed;
        bottom: 150px;
        right: 30px;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        background: linear-gradient(45deg, #1e40af, #3b82f6);
        color: white;
        border: none;
        cursor: pointer;
        opacity: 0;
        visibility: hidden;
        transition: all 0.3s ease;
        z-index: 1000;
        box-shadow: 0 4px 15px rgba(30, 64, 175, 0.3);
    `;
    
    document.body.appendChild(scrollButton);
    
    // Show/hide button based on scroll position
    window.addEventListener('scroll', function() {
        if (window.pageYOffset > 300) {
            scrollButton.style.opacity = '1';
            scrollButton.style.visibility = 'visible';
        } else {
            scrollButton.style.opacity = '0';
            scrollButton.style.visibility = 'hidden';
        }
    });
    
    // Scroll to top when clicked
    scrollButton.addEventListener('click', function() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
    
    // Hover effect
    scrollButton.addEventListener('mouseenter', function() {
        this.style.transform = 'scale(1.1)';
    });
    
    scrollButton.addEventListener('mouseleave', function() {
        this.style.transform = 'scale(1)';
    });
}

// Initialize scroll to top after DOM is loaded
document.addEventListener('DOMContentLoaded', function() {
    addScrollToTop();
});









   

    
