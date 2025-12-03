<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- LocalBusiness Schema Markup for Local SEO -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "LocalBusiness",
      "name": "Tie the Celtic Knot",
      "description": "Licensed Ontario Celebrant specializing in bespoke wedding ceremonies, handfasting rituals, child naming ceremonies, and memorials. Inclusive, nature-based, and Celtic-inspired celebrations.",
      "url": "https://tiethecelticknot.ca",
      "telephone": "+1-647-505-1834",
      "email": "kerstin@tiethecelticknot.ca",
      "image": "<?php echo get_template_directory_uri(); ?>/images/logoceltic.svg",
      "logo": "<?php echo get_template_directory_uri(); ?>/images/logoceltic.svg",
      "priceRange": "$$",
      "areaServed": {
        "@type": "State",
        "name": "Ontario",
        "address": {
          "@type": "PostalAddress",
          "addressCountry": "CA",
          "addressRegion": "ON"
        }
      },
      "openingHoursSpecification": {
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": [
          "Monday",
          "Tuesday",
          "Wednesday",
          "Thursday",
          "Friday",
          "Saturday",
          "Sunday"
        ],
        "opens": "09:00",
        "closes": "21:00"
      },
      "serviceType": [
        "Wedding Ceremonies",
        "Handfasting Ceremonies",
        "Child Naming Ceremonies",
        "Memorial Services",
        "Vow Renewals"
      ],
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Ceremony Services",
        "itemListElement": [
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Essential Ceremony",
              "description": "Simple, heartfelt ceremony crafted just for you"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Complete Ceremony",
              "description": "Full ceremony with handfasting ritual"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Bespoke Celebration",
              "description": "Fully customized ceremony with all the details"
            }
          }
        ]
      }
    }
    </script>

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div style="min-height: 100vh;">
    <!-- Fixed Header Navigation -->
    <header class="site-header">
        <div style="max-width: 1280px; margin: 0 auto; padding: 1rem; display: flex; justify-content: space-between; align-items: center;">
            <!-- Logo / Brand Name -->
            <a href="<?php echo esc_url(home_url('/')); ?>" style="display: flex; align-items: center; gap: 0.75rem; text-decoration: none; transition: opacity 0.3s;">
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo-heart.png" alt="Celtic Heart Knot" style="height: 3.5rem; width: 3.5rem;">
                <div style="display: flex; flex-direction: column; align-items: flex-start;">
                    <span style="font-family: Georgia, 'Times New Roman', serif; font-weight: bold; color: #1e3a2d; font-size: 1.25rem; line-height: 1.2;">
                        Tie the Celtic Knot
                    </span>
                    <span style="color: #1e3a2d; opacity: 0.7; font-size: 0.75rem;">
                        Humanist Wedding Celebrant
                    </span>
                </div>
            </a>

            <!-- Desktop Navigation -->
            <nav style="display: none; gap: 2rem; align-items: center; font-weight: 500;">
                <a href="#services" style="color: #666; text-decoration: none; font-weight: 500; transition: color 0.3s;">Services</a>
                <a href="#process" style="color: #666; text-decoration: none; font-weight: 500; transition: color 0.3s;">Your Process</a>
                <a href="#story" style="color: #666; text-decoration: none; font-weight: 500; transition: color 0.3s;">My Story</a>
                <a href="#blog" style="color: #666; text-decoration: none; font-weight: 500; transition: color 0.3s;">Blog</a>
                <a href="#contact" style="background-color: #1e3a2d; color: white; padding: 0.5rem 1rem; border-radius: 0.5rem; text-decoration: none; font-weight: 600; transition: background-color 0.3s; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">Check Availability</a>
            </nav>

            <!-- Mobile Menu Button -->
            <button class="mobile-menu-toggle" onclick="toggleMobileMenu()" aria-label="Toggle menu" style="display: flex; flex-direction: column; gap: 0.25rem; background: none; border: none; cursor: pointer; padding: 0.5rem;">
                <span style="width: 1.5rem; height: 2px; background: #1e3a2d;"></span>
                <span style="width: 1.5rem; height: 2px; background: #1e3a2d;"></span>
                <span style="width: 1.5rem; height: 2px; background: #1e3a2d;"></span>
            </button>
        </div>

        <!-- Mobile Menu Overlay -->
        <div id="mobile-menu" style="display: none; background-color: #f0f3ed; box-shadow: 0 10px 15px rgba(0,0,0,0.1); padding: 1rem 0;">
            <nav style="display: flex; flex-direction: column; gap: 0.75rem; padding: 0 1rem;">
                <a href="#services" onclick="closeMobileMenu()" style="color: #374151; text-decoration: none; padding: 0.5rem 0; border-bottom: 1px solid #c8d4c0;">Services</a>
                <a href="#process" onclick="closeMobileMenu()" style="color: #374151; text-decoration: none; padding: 0.5rem 0; border-bottom: 1px solid #c8d4c0;">Your Process</a>
                <a href="#story" onclick="closeMobileMenu()" style="color: #374151; text-decoration: none; padding: 0.5rem 0; border-bottom: 1px solid #c8d4c0;">My Story</a>
                <a href="#blog" onclick="closeMobileMenu()" style="color: #374151; text-decoration: none; padding: 0.5rem 0; border-bottom: 1px solid #c8d4c0;">Blog</a>
                <a href="#contact" onclick="closeMobileMenu()" style="background-color: #1e3a2d; color: white; text-align: center; padding: 0.75rem; margin-top: 0.5rem; border-radius: 0.5rem; text-decoration: none; box-shadow: 0 4px 6px rgba(0,0,0,0.1);">Check Availability</a>
            </nav>
        </div>
    </header>

    <main id="main-content">

    <style>
        @media (min-width: 768px) {
            nav[style*="display: none"] {
                display: flex !important;
            }
            .mobile-menu-toggle {
                display: none !important;
            }
            .site-header img {
                height: 4rem !important;
                width: 4rem !important;
            }
            .site-header span:first-of-type {
                font-size: 1.5rem !important;
            }
            .site-header span:last-of-type {
                font-size: 0.875rem !important;
            }
        }
        nav a:hover {
            color: #1e3a2d !important;
        }
        nav a[style*="background-color: #1e3a2d"]:hover {
            background-color: #0f1f19 !important;
        }
    </style>

    <script>
        function toggleMobileMenu() {
            var menu = document.getElementById('mobile-menu');
            if (menu.style.display === 'none' || menu.style.display === '') {
                menu.style.display = 'block';
            } else {
                menu.style.display = 'none';
            }
        }

        function closeMobileMenu() {
            document.getElementById('mobile-menu').style.display = 'none';
        }

        // Smooth scroll for anchor links
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        e.preventDefault();
                        target.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                });
            });
        });
    </script>
