
    // GSAP Animation for Navbar
    gsap.from(".navbar-brand", { duration: 1, opacity: 0, y: -50 });
    gsap.from(".nav-link", { duration: 1.2, opacity: 0, x: 50, stagger: 0.2 });

    // GSAP Animation for Hero Section Background Image Slices
    const slices = document.querySelectorAll('.image-slice');
    gsap.set(slices, { scale: 1.5, x: (i) => i % 2 === 0 ? '-100%' : '100%', opacity: 0 });

    // Animate the slices to join together
    gsap.to(slices, {
      scale: 1,
      x: 0,
      opacity: 1,
      duration: 2,
      ease: "power4.out",
      stagger: 0.1
    });

    // GSAP Animation for Hero Section Content
    gsap.from(".hero-title", { duration: 1.2, opacity: 0, y: -50, delay: 2, ease: "power4.out" });
    gsap.from(".hero-subtitle", { duration: 1.5, opacity: 0, y: -30, delay: 2.3, ease: "power4.out" });
    gsap.from(".hero-buttons .btn", { duration: 1.8, opacity: 0, y: 20, stagger: 0.3, delay: 2.6, ease: "power3.out" });

    // Sticky Navbar Activation
    const navbar = document.getElementById('navbar');

    window.onscroll = function() {
      if (window.pageYOffset > 0) {
        navbar.classList.add('sticky-active');
      } else {
        navbar.classList.remove('sticky-active');
      }
    };

    
      // GSAP ScrollTrigger animation
    gsap.registerPlugin(ScrollTrigger);

      gsap.from('.about-title', {
        duration: 1.5,
        opacity: 0,
        y: -50,
        ease: "power3.out",
        scrollTrigger: {
          trigger: '.about-section',
          start: "top 80%",
          toggleActions: "play none none reverse"
        }
      });

      gsap.from('.about-text h2, .about-text p', {
        duration: 1.5,
        opacity: 0,
        y: 50,
        ease: "power3.out",
        scrollTrigger: {
          trigger: '.about-text',
          start: "top 80%",
          toggleActions: "play none none reverse"
        }
      });

      gsap.from('.about-images .img-box', {
        duration: 1.5,
        opacity: 0,
        scale: 0.8,
        stagger: 0.3,
        ease: "power3.out",
        scrollTrigger: {
          trigger: '.about-images',
          start: "top 80%",
          toggleActions: "play none none reverse"
        }
      });

     // Interactive Circle Animation with Mouse Movement
      const circles = document.querySelectorAll('.circle');

      document.addEventListener('mousemove', (e) => {
          const x = (e.clientX / window.innerWidth) * 100;
          const y = (e.clientY / window.innerHeight) * 100;

          // Adjust the movement intensity based on screen width
          const smallCircleMovementFactor = window.innerWidth <= 768 ? 0.1 : 0.2;
          const largeCircleMovementFactor = window.innerWidth <= 768 ? 0.2 : 0.4;

          gsap.to('.circle-small', {
              x: (x - 50) * smallCircleMovementFactor,
              y: (y - 50) * smallCircleMovementFactor,
              duration: 1,
              ease: "power1.out"
          });

          gsap.to('.circle-large', {
              x: (x - 50) * largeCircleMovementFactor,
              y: (y - 50) * largeCircleMovementFactor,
              duration: 1,
              ease: "power1.out"
          });
      });


        // GSAP Scroll Trigger Animation for Unique Dish Section
      gsap.registerPlugin(ScrollTrigger);

      gsap.from(".dish-card", {
        scrollTrigger: {
          trigger: "#unique-dish",
          start: "top center",
          toggleActions: "play none none reverse"
        },
        duration: 1.2,
        opacity: 0,
        y: 50,
        stagger: 0.3,
        ease: "power3.out"
      });
      // Parallax effect using GSAP
      gsap.to(".unique-dish", {
        backgroundPosition: "50% 100%",
        ease: "none",
        scrollTrigger: {
          trigger: ".unique-dish",
          scrub: true // Parallax effect on scroll
        }
      });
              // GSAP ScrollTrigger animation
            gsap.registerPlugin(ScrollTrigger);

        // Function to count numbers with synchronized start and finish timing
        function countUp(element, duration) {
          const target = +element.getAttribute('data-target');
          const increment = target / (duration / 16); // Determines the increment based on the duration
          let current = 0;

          const updateCount = () => {
            current += increment;
            if (current < target) {
              element.innerText = Math.ceil(current);
              requestAnimationFrame(updateCount);
            } else {
              element.innerText = target + ""; // Final value with plus symbol
            }
          };

          updateCount();
        }

        // GSAP animations and synchronized counting for different sections
        ScrollTrigger.create({
          trigger: ".number-section",
          start: "top 75%",
          onEnter: function () {
            const duration = 2000; // Total counting duration in milliseconds

            // Separate counting for Happy Customers
            const happyCustomerElement = document.querySelector('.happy-customer');
            countUp(happyCustomerElement, duration);

            // Separate counting for Special Orders
            const specialOrdersElement = document.querySelector('.special-orders');
            countUp(specialOrdersElement, duration);

            // Separate counting for Years of Experience
            const yearsExperienceElement = document.querySelector('.years-experience');
            countUp(yearsExperienceElement, duration);
          }
        });

        // GSAP Animations for the number boxes and icons
        gsap.fromTo(".number-box", {
                    opacity: 0,
                    y: 50,
                }, {
                    opacity: 1,
                    y: 0,
                    duration: 1.5,
                    ease: "power3.out",
                    stagger: 0.3,
                    scrollTrigger: {
                        trigger: ".number-section",
                        start: "top 75%",
                        toggleActions: "play none none reverse"
                    }
                });

                gsap.fromTo(".number-icon", {
                    scale: 0.8,
                }, {
                    scale: 1,
                    duration: 1,
                    ease: "back.out(1.7)",
                    stagger: 0.3
                });
             // GSAP animation for the testimonials
        gsap.from('.testimonial-card', {
            opacity: 0,
            y: 50,
            duration: 1.5,
            stagger: 0.3,
            ease: 'power2.out',
            scrollTrigger: {
                trigger: '.testimonial-section',
                start: "top bottom",
                end: "bottom center",
                scrub: 1
            }
        });
        // GSAP parallax effect for background image
        gsap.to('.testimonial-section', {
            backgroundPositionY: '50%',
            ease: 'none',
            scrollTrigger: {
                trigger: '.testimonial-section',
                start: "top bottom",
                end: "bottom top",
                scrub: true
            }
        });

       // Product section
document.addEventListener("DOMContentLoaded", function() {
    const categories = document.querySelectorAll('.product-categories .category'); // Select product categories
    const productGrids = document.querySelectorAll('.product-grid');
    const sectionTitle = document.querySelector('.section-title'); // Select the heading

    // Animate the heading with a fade-in and slide-up effect triggered by scroll
    gsap.fromTo(sectionTitle, 
        { y: -50, opacity: 0 }, 
        { y: 0, opacity: 1, duration: 1.5, ease: "power4.out", 
          scrollTrigger: {
            trigger: sectionTitle,
            start: "top 80%",  // Animation starts when the heading is 80% into the viewport
            toggleActions: "play none none reverse"  // Play animation on scroll down, reverse on scroll up
        }}
    );

    // Animate the product categories with a staggered fade-in and slide-up effect triggered by scroll
    gsap.fromTo(categories, 
        { y: -30, opacity: 0 }, 
        { y: 0, opacity: 1, stagger: 0.2, duration: 1, ease: "power4.out",
          scrollTrigger: {
            trigger: '.product-categories',  // The trigger element for this animation
            start: "top 80%",  // Start animation when .product-categories is 80% into the viewport
            toggleActions: "play none none reverse"
        }}
    );

    // Default grid on page load with scroll-triggered animation
    const defaultGrid = document.querySelector('.product-grid.active');

    if (defaultGrid) {
        gsap.fromTo(defaultGrid.children, 
            { y: -50, opacity: 0 }, 
            { y: 0, opacity: 1, stagger: { amount: 0.5, from: "start" }, duration: 1, 
              scrollTrigger: {
                trigger: defaultGrid,  // Trigger animation when the grid is in view
                start: "top 80%",  // Start when the grid is 80% into the viewport
                toggleActions: "play none none reverse"
            }}
        );
    }

    categories.forEach(category => {
        category.addEventListener('click', function(e) {
            e.preventDefault();
            const selectedCategory = this.getAttribute('data-category');

            // Remove active class from all grids
            productGrids.forEach(grid => {
                grid.classList.remove('active');
            });

            // Add active class to the selected grid
            const activeGrid = document.querySelector(`.product-grid[data-category="${selectedCategory}"]`);
            activeGrid.classList.add('active');

            // GSAP animation for product grid (after the grid becomes active) with scroll trigger
            gsap.fromTo(activeGrid.children, 
                { y: -50, opacity: 0 }, 
                { y: 0, opacity: 1, stagger: { amount: 1.5, from: "start" }, duration: 0.2,
                  scrollTrigger: {
                    trigger: activeGrid,  // Trigger animation when the active grid is in view
                    start: "top 80%",  // Start when the grid is 80% into the viewport
                    toggleActions: "play none none reverse"
                }}
            );
        });
    });
});

          // GSAP ScrollTrigger for footer animations
        gsap.registerPlugin(ScrollTrigger);

      gsap.from(".footer-title", {
        scrollTrigger: {
          trigger: ".footer",
          start: "top bottom",
          toggleActions: "play none none none"
        },
        y: 50,
        opacity: 0,
        duration: 1,
        stagger: 0.3
      });

      gsap.from(".social-icons a", {
        scrollTrigger: {
          trigger: ".footer",
          start: "top bottom",
          toggleActions: "play none none none"
        },
        scale: 0,
        opacity: 0,
        duration: 1,
        stagger: 0.2
      });

      gsap.from(".footer-logo", {
        scrollTrigger: {
          trigger: ".footer",
          start: "top bottom",
          toggleActions: "play none none none"
        },
        scale: 0,
        opacity: 0,
        duration: 1,
        stagger: 0.2
      });
      gsap.from(".Company-para", {
        scrollTrigger: {
          trigger: ".footer",
          start: "top bottom",
          toggleActions: "play none none none"
        },
        scale: 0,
        opacity: 0,
        duration: 1,
        stagger: 0.2
      });
      gsap.from(".text", {
        scrollTrigger: {
          trigger: ".footer",
          start: "top bottom",
          toggleActions: "play none none none"
        },
        scale: 0,
        opacity: 0,
        duration: 1,
        stagger: 0.2
      });
      gsap.from(".contact-para", {
        scrollTrigger: {
          trigger: ".footer",
          start: "top bottom",
          toggleActions: "play none none none"
        },
        scale: 0,
        opacity: 0,
        duration: 1,
        stagger: 0.2
      });