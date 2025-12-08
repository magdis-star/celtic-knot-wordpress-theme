<?php get_header(); ?>

<!-- Hero Section -->
<section class="hero-section" style="background-image: linear-gradient(rgba(30, 58, 45, 0.75), rgba(30, 58, 45, 0.75)), url('<?php echo get_template_directory_uri(); ?>/images/photo1celtic.png'); background-size: cover; background-position: center;">
    <div class="hero-content">
        <h1 class="hero-title">
            <?php echo esc_html(celtic_knot_get_field('hero_title', 'option', 'Your Love Story. Woven with Meaning and Celtic Spirit.')); ?>
        </h1>
        <p class="hero-description">
            <?php echo esc_html(celtic_knot_get_field('hero_description', 'option', 'Licensed Humanist Officiant Kerstin Sandstrom specializes in bespoke ceremonies, from ancient handfasting rituals to modern, inclusive celebrations, grounded in nature and authenticity.')); ?>
        </p>
        <a href="#contact" class="button">
            <?php echo esc_html(celtic_knot_get_field('hero_button_text', 'option', 'Inquire & Check Availability')); ?>
        </a>
    </div>
</section>

<!-- Wedding Spotlight Section -->
<section class="section" style="background: linear-gradient(to bottom right, #e8f5e9, #dde5d5);">
    <div class="container">
        <div class="grid-2-cols">
            <div>
                <div style="display: inline-block; background: #1e3a2d; color: white; padding: 0.5rem 1rem; border-radius: 9999px; font-size: 0.875rem; font-weight: bold; text-transform: uppercase; margin-bottom: 1rem;">
                    Specializing in Weddings
                </div>
                <h2 class="wedding-spotlight-title" style="font-size: 2.25rem; font-weight: bold; color: #1e3a2d; font-family: Georgia, serif; margin-bottom: 1.5rem;">Your Celtic Wedding Ceremony Awaits</h2>
                <p style="font-size: 1.25rem; color: #374151; margin-bottom: 1.5rem; line-height: 1.6;">
                    From traditional handfasting rituals to modern inclusive celebrations, I create bespoke wedding ceremonies that honor your unique love story with Celtic elegance and meaning.
                </p>
                <ul style="list-style: none; padding: 0; margin-bottom: 2rem;">
                    <li style="display: flex; align-items: flex-start; margin-bottom: 1rem;">
                        <svg style="width: 1.5rem; height: 1.5rem; color: #1e3a2d; margin-right: 0.75rem; margin-top: 0.25rem; flex-shrink: 0;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <span style="font-size: 1.125rem; color: #374151;">Fully personalized handfasting & ribbon-tying ceremonies</span>
                    </li>
                    <li style="display: flex; align-items: flex-start; margin-bottom: 1rem;">
                        <svg style="width: 1.5rem; height: 1.5rem; color: #1e3a2d; margin-right: 0.75rem; margin-top: 0.25rem; flex-shrink: 0;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <span style="font-size: 1.125rem; color: #374151;">Licensed Ontario Celebrant - legally binding ceremonies</span>
                    </li>
                    <li style="display: flex; align-items: flex-start;">
                        <svg style="width: 1.5rem; height: 1.5rem; color: #1e3a2d; margin-right: 0.75rem; margin-top: 0.25rem; flex-shrink: 0;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <span style="font-size: 1.125rem; color: #374151;">Nature-based, Celtic-inspired, & humanist traditions</span>
                    </li>
                </ul>
                <a href="#contact" class="button">Book Your Wedding Ceremony</a>
            </div>
            <div class="wedding-image-wrapper">
                <div style="aspect-ratio: 4/3; border-radius: 0.75rem; overflow: hidden; box-shadow: 0 20px 50px rgba(0,0,0,0.3); border: 4px solid rgba(255,255,255,0.2);">
                    <div style="width: 100%; height: 100%; background-image: url('<?php echo get_template_directory_uri(); ?>/images/Hand-fast-1.jpg'); background-size: cover; background-position: center;"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section id="services" class="section" style="background-color: #f0f3ed;">
    <div class="container">
        <div class="section-header">
            <span class="section-label">We Also Offer</span>
            <h2 class="section-title">Other Meaningful Ceremonies</h2>
            <p class="section-description">Beyond weddings, I create heartfelt ceremonies for all of life's important moments</p>
        </div>

        <div class="grid-services">
            <!-- Child Naming -->
            <div style="background: white; padding: 2rem; border-radius: 0.75rem; box-shadow: 0 4px 6px rgba(0,0,0,0.1); text-align: center; border: 1px solid #c8d4c0; transition: box-shadow 0.3s;">
                <div style="width: 7rem; height: 7rem; background: #1e3a2d; border-radius: 50%; margin: 0 auto 1.5rem; display: flex; align-items: center; justify-content: center;">
                    <svg style="width: 4rem; height: 4rem; color: white;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                </div>
                <h3 style="font-size: 1.5rem; font-weight: 600; color: #1e3a2d; margin-bottom: 0.75rem; font-family: Georgia, serif;">Child Naming Ceremonies</h3>
                <p style="color: #666; margin-bottom: 1rem; line-height: 1.6;">
                    A non-religious, joyful celebration of new life. Honouring the child and welcoming them into the community with meaningful readings and symbolic acts.
                </p>
                <a href="#contact" style="color: #1e3a2d; text-decoration: none; font-weight: 600; display: inline-flex; align-items: center;">
                    Celebrate Your Child
                    <svg style="width: 1rem; height: 1rem; margin-left: 0.5rem;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
            </div>

            <!-- Funerals -->
            <div style="background: white; padding: 2rem; border-radius: 0.75rem; box-shadow: 0 4px 6px rgba(0,0,0,0.1); text-align: center; border: 1px solid #c8d4c0; transition: box-shadow 0.3s;">
                <div style="width: 7rem; height: 7rem; background: #1e3a2d; border-radius: 50%; margin: 0 auto 1.5rem; display: flex; align-items: center; justify-content: center;">
                    <svg style="width: 4rem; height: 4rem; color: white;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                    </svg>
                </div>
                <h3 style="font-size: 1.5rem; font-weight: 600; color: #1e3a2d; margin-bottom: 0.75rem; font-family: Georgia, serif;">Funerals & Memorials</h3>
                <p style="color: #666; margin-bottom: 1rem; line-height: 1.6;">
                    Warm, authentic, and compassionate services that honour the life lived. Creating a dignified and personal tribute that brings comfort and reflection.
                </p>
                <a href="#contact" style="color: #1e3a2d; text-decoration: none; font-weight: 600; display: inline-flex; align-items: center;">
                    Arrange a Tribute
                    <svg style="width: 1rem; height: 1rem; margin-left: 0.5rem;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Pricing Section -->
<section id="pricing" class="section" style="background-color: white;">
    <div class="container">
        <div class="section-header">
            <span class="section-label">Investment in Your Special Day</span>
            <h2 class="section-title">Service Packages</h2>
            <p class="section-description">Choose the package that best suits your ceremony needs</p>
        </div>

        <div class="grid-pricing">
            
            <!-- Package 1 - Deluxe - MOST POPULAR -->
            <div style="background: linear-gradient(to bottom right, #1e3a2d, #0f1f19); color: white; padding: 2rem; border-radius: 0.75rem; box-shadow: 0 10px 25px rgba(0,0,0,0.2); position: relative; border: 4px solid #1e3a2d;">
                <div style="position: absolute; top: 0; right: 0; background: #fbbf24; color: #1e3a2d; padding: 0.25rem 1rem; font-size: 0.75rem; font-weight: bold; border-bottom-left-radius: 0.5rem;">MOST POPULAR</div>
                <h3 style="font-size: 1.5rem; font-weight: bold; margin-bottom: 0.5rem; font-family: Georgia, serif;">Deluxe Wedding Ceremony</h3>
                <div style="font-size: 3rem; font-weight: bold; margin-bottom: 1.5rem;">$895</div>
                <ul style="list-style: none; padding: 0; margin-bottom: 1.5rem; line-height: 1.8; font-size: 0.9rem;">
                    <li style="display: flex; align-items: flex-start; margin-bottom: 0.75rem;">
                        <svg style="width: 1.25rem; height: 1.25rem; color: #fbbf24; margin-right: 0.5rem; margin-top: 0.125rem; flex-shrink: 0;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" />
                        </svg>
                        <span>Initial meeting included</span>
                    </li>
                    <li style="display: flex; align-items: flex-start; margin-bottom: 0.75rem;">
                        <svg style="width: 1.25rem; height: 1.25rem; color: #fbbf24; margin-right: 0.5rem; margin-top: 0.125rem; flex-shrink: 0;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" />
                        </svg>
                        <span>Two more consultations (one month out & one to two weeks before)</span>
                    </li>
                    <li style="display: flex; align-items: flex-start; margin-bottom: 0.75rem;">
                        <svg style="width: 1.25rem; height: 1.25rem; color: #fbbf24; margin-right: 0.5rem; margin-top: 0.125rem; flex-shrink: 0;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" />
                        </svg>
                        <span>Unlimited phone calls & emails</span>
                    </li>
                    <li style="display: flex; align-items: flex-start; margin-bottom: 0.75rem;">
                        <svg style="width: 1.25rem; height: 1.25rem; color: #fbbf24; margin-right: 0.5rem; margin-top: 0.125rem; flex-shrink: 0;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" />
                        </svg>
                        <span>One rehearsal - includes wine & cheese for wedding party</span>
                    </li>
                    <li style="display: flex; align-items: flex-start; margin-bottom: 0.75rem;">
                        <svg style="width: 1.25rem; height: 1.25rem; color: #fbbf24; margin-right: 0.5rem; margin-top: 0.125rem; flex-shrink: 0;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" />
                        </svg>
                        <span>Customised service with rituals & traditional elements</span>
                    </li>
                    <li style="display: flex; align-items: flex-start;">
                        <svg style="width: 1.25rem; height: 1.25rem; color: #fbbf24; margin-right: 0.5rem; margin-top: 0.125rem; flex-shrink: 0;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" />
                        </svg>
                        <span>Paperwork filled out & mailed within 24 hours</span>
                    </li>
                </ul>
                <a href="#contact" style="display: block; width: 100%; text-align: center; background: #fbbf24; color: #1e3a2d; padding: 0.75rem; border-radius: 0.5rem; font-weight: bold; text-decoration: none;">Book This Package</a>
            </div>

            <!-- Package 2 - Full Service Wedding -->
            <div style="background: white; padding: 2rem; border-radius: 0.75rem; box-shadow: 0 10px 15px rgba(0,0,0,0.1); border: 2px solid #c8d4c0;">
                <h3 style="font-size: 1.5rem; font-weight: bold; color: #1e3a2d; margin-bottom: 0.5rem; font-family: Georgia, serif;">Full Service Wedding</h3>
                <div style="font-size: 3rem; font-weight: bold; color: #1e3a2d; margin-bottom: 1.5rem;">$650</div>
                <ul style="list-style: none; padding: 0; color: #374151; line-height: 1.8; font-size: 0.9rem;">
                    <li style="display: flex; align-items: flex-start; margin-bottom: 0.75rem;">
                        <svg style="width: 1.25rem; height: 1.25rem; color: #1e3a2d; margin-right: 0.5rem; margin-top: 0.125rem; flex-shrink: 0;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" />
                        </svg>
                        <span>Initial meeting included</span>
                    </li>
                    <li style="display: flex; align-items: flex-start; margin-bottom: 0.75rem;">
                        <svg style="width: 1.25rem; height: 1.25rem; color: #1e3a2d; margin-right: 0.5rem; margin-top: 0.125rem; flex-shrink: 0;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" />
                        </svg>
                        <span>One consultation (one to two weeks before)</span>
                    </li>
                    <li style="display: flex; align-items: flex-start; margin-bottom: 0.75rem;">
                        <svg style="width: 1.25rem; height: 1.25rem; color: #1e3a2d; margin-right: 0.5rem; margin-top: 0.125rem; flex-shrink: 0;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" />
                        </svg>
                        <span>Unlimited phone calls & emails</span>
                    </li>
                    <li style="display: flex; align-items: flex-start; margin-bottom: 0.75rem;">
                        <svg style="width: 1.25rem; height: 1.25rem; color: #1e3a2d; margin-right: 0.5rem; margin-top: 0.125rem; flex-shrink: 0;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" />
                        </svg>
                        <span>Customised service with rituals & traditional elements</span>
                    </li>
                    <li style="display: flex; align-items: flex-start;">
                        <svg style="width: 1.25rem; height: 1.25rem; color: #1e3a2d; margin-right: 0.5rem; margin-top: 0.125rem; flex-shrink: 0;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" />
                        </svg>
                        <span>Paperwork filled out & mailed within 24 hours</span>
                    </li>
                </ul>
            </div>

            <!-- Package 3 - Custom Ceremony -->
            <div style="background: white; padding: 2rem; border-radius: 0.75rem; box-shadow: 0 10px 15px rgba(0,0,0,0.1); border: 2px solid #c8d4c0;">
                <h3 style="font-size: 1.5rem; font-weight: bold; color: #1e3a2d; margin-bottom: 0.5rem; font-family: Georgia, serif;">Custom Ceremony</h3>
                <div style="font-size: 3rem; font-weight: bold; color: #1e3a2d; margin-bottom: 1.5rem;">$450</div>
                <ul style="list-style: none; padding: 0; color: #374151; line-height: 1.8; font-size: 0.9rem;">
                    <li style="display: flex; align-items: flex-start; margin-bottom: 0.75rem;">
                        <svg style="width: 1.25rem; height: 1.25rem; color: #1e3a2d; margin-right: 0.5rem; margin-top: 0.125rem; flex-shrink: 0;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" />
                        </svg>
                        <span>Initial meeting included</span>
                    </li>
                    <li style="display: flex; align-items: flex-start; margin-bottom: 0.75rem;">
                        <svg style="width: 1.25rem; height: 1.25rem; color: #1e3a2d; margin-right: 0.5rem; margin-top: 0.125rem; flex-shrink: 0;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" />
                        </svg>
                        <span>One consultation (one to two weeks before)</span>
                    </li>
                    <li style="display: flex; align-items: flex-start; margin-bottom: 0.75rem;">
                        <svg style="width: 1.25rem; height: 1.25rem; color: #1e3a2d; margin-right: 0.5rem; margin-top: 0.125rem; flex-shrink: 0;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" />
                        </svg>
                        <span>Unlimited phone calls & emails</span>
                    </li>
                    <li style="display: flex; align-items: flex-start; margin-bottom: 0.75rem;">
                        <svg style="width: 1.25rem; height: 1.25rem; color: #1e3a2d; margin-right: 0.5rem; margin-top: 0.125rem; flex-shrink: 0;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" />
                        </svg>
                        <span>Customised service with rituals & traditional elements</span>
                    </li>
                    <li style="display: flex; align-items: flex-start;">
                        <svg style="width: 1.25rem; height: 1.25rem; color: #1e3a2d; margin-right: 0.5rem; margin-top: 0.125rem; flex-shrink: 0;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" />
                        </svg>
                        <span>Paperwork filled out & mailed within 24 hours</span>
                    </li>
                </ul>
            </div>

            <!-- Package 4 - Basic Signing Package -->
            <div style="background: white; padding: 2rem; border-radius: 0.75rem; box-shadow: 0 10px 15px rgba(0,0,0,0.1); border: 2px solid #c8d4c0;">
                <h3 style="font-size: 1.5rem; font-weight: bold; color: #1e3a2d; margin-bottom: 0.5rem; font-family: Georgia, serif;">Basic Signing Package</h3>
                <div style="font-size: 3rem; font-weight: bold; color: #1e3a2d; margin-bottom: 1.5rem;">$300</div>
                <ul style="list-style: none; padding: 0; color: #374151; line-height: 1.8; font-size: 0.9rem;">
                    <li style="display: flex; align-items: flex-start; margin-bottom: 0.75rem;">
                        <svg style="width: 1.25rem; height: 1.25rem; color: #1e3a2d; margin-right: 0.5rem; margin-top: 0.125rem; flex-shrink: 0;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" />
                        </svg>
                        <span>Initial meeting included</span>
                    </li>
                    <li style="display: flex; align-items: flex-start; margin-bottom: 0.75rem;">
                        <svg style="width: 1.25rem; height: 1.25rem; color: #1e3a2d; margin-right: 0.5rem; margin-top: 0.125rem; flex-shrink: 0;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" />
                        </svg>
                        <span>One consultation (one to two weeks before)</span>
                    </li>
                    <li style="display: flex; align-items: flex-start; margin-bottom: 0.75rem;">
                        <svg style="width: 1.25rem; height: 1.25rem; color: #1e3a2d; margin-right: 0.5rem; margin-top: 0.125rem; flex-shrink: 0;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" />
                        </svg>
                        <span>Unlimited phone calls & emails</span>
                    </li>
                    <li style="display: flex; align-items: flex-start;">
                        <svg style="width: 1.25rem; height: 1.25rem; color: #1e3a2d; margin-right: 0.5rem; margin-top: 0.125rem; flex-shrink: 0;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" />
                        </svg>
                        <span>Paperwork filled out & mailed within 24 hours</span>
                    </li>
                </ul>
            </div>

        </div>
    </div>
</section>

<!-- Process Section -->
<section id="process" class="section" style="background-color: #e8ede7;">
    <div class="container">
        <div class="section-header">
            <span class="section-label">Your Journey Together</span>
            <h2 class="section-title">Creating Your Perfect Ceremony: The 3-Step Process</h2>
        </div>

        <div class="process-steps">
            <!-- Step 1 -->
            <div class="process-step">
                <div class="step-number">1</div>
                <div class="step-content">
                    <h3>Discovery & Vision</h3>
                    <p>We begin with a connection call to discuss your date, location, and the specific emotions you want your ceremony to evoke. We talk about your story and your specific cultural or symbolic desires (like handfasting).</p>
                </div>
            </div>

            <!-- Step 2 -->
            <div class="process-step">
                <div class="step-number">2</div>
                <div class="step-content">
                    <h3>Deep Dive & Custom Drafting</h3>
                    <p>I conduct a "story deep dive" to gather all the rich details. I then meticulously draft a custom script, incorporating your vows, readings, and unique rituals, ensuring every word feels true to you.</p>
                </div>
            </div>

            <!-- Step 3 -->
            <div class="process-step">
                <div class="step-number">3</div>
                <div class="step-content">
                    <h3>Rehearsal & The Celebration</h3>
                    <p>We finalize the details, and I handle all necessary paperwork. On the day, I deliver the ceremony with warmth, confidence, and professionalism, allowing you to fully relax and immerse yourselves in the moment.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Gallery Section -->
<section id="gallery" class="section" style="background-color: white;">
    <div class="container">
        <div class="section-header">
            <span class="section-label">Our Work</span>
            <h2 class="section-title">Ceremonies We've Celebrated</h2>
            <p class="section-description">Every ceremony is unique and deeply personal. These are some of the beautiful moments we've been honored to be part of.</p>
        </div>

        <?php
        // Query gallery images
        $gallery_images = new WP_Query(array(
            'post_type' => 'gallery_image',
            'posts_per_page' => 6,
            'post_status' => 'publish',
            'orderby' => 'date',
            'order' => 'DESC'
        ));
        ?>

        <?php if ($gallery_images->have_posts()) : ?>
            <div class="photo-gallery">
                <?php while ($gallery_images->have_posts()) : $gallery_images->the_post(); ?>
                    <div class="gallery-item">
                        <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('gallery-image', array('alt' => get_the_title())); ?>
                        <?php endif; ?>
                        <div class="gallery-caption">
                            <p><?php the_title(); ?></p>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php else : ?>
            <!-- Fallback to default images if no gallery items exist -->
            <div class="photo-gallery">
                <div class="gallery-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/Hand-fast-1.jpg" alt="Handfasting Ceremony">
                    <div class="gallery-caption">
                        <p>Handfasting Ceremony</p>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/photo2celtic.jpg" alt="Wedding Ceremony Setup">
                    <div class="gallery-caption">
                        <p>Ceremony Setup</p>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/photo3celtic.jpg" alt="Outdoor Wedding Ceremony">
                    <div class="gallery-caption">
                        <p>Outdoor Celebration</p>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
    </div>
</section>

<!-- Testimonials Section -->
<section id="testimonials" class="section" style="background-color: #f0f3ed;">
    <div class="container">
        <div class="section-header">
            <span class="section-label">Social Proof</span>
            <h2 class="section-title">What Couples & Families Are Saying</h2>
        </div>

        <?php
        // Query testimonials
        $testimonials = new WP_Query(array(
            'post_type' => 'testimonial',
            'posts_per_page' => 3,
            'post_status' => 'publish',
            'orderby' => 'date',
            'order' => 'DESC'
        ));
        ?>

        <?php if ($testimonials->have_posts()) : ?>
            <div class="testimonials-grid">
                <?php while ($testimonials->have_posts()) : $testimonials->the_post(); ?>
                    <div class="testimonial-card">
                        <div class="star-rating">
                            <svg viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" /></svg>
                            <svg viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" /></svg>
                            <svg viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" /></svg>
                            <svg viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" /></svg>
                            <svg viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" /></svg>
                        </div>
                        <p class="testimonial-text">
                            <?php the_content(); ?>
                        </p>
                        <p class="testimonial-author">— <?php the_title(); ?></p>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php else : ?>
            <!-- Fallback to default testimonials if none exist -->
            <div class="testimonials-grid">
                <div class="testimonial-card">
                    <div class="star-rating">
                        <svg viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" /></svg>
                        <svg viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" /></svg>
                        <svg viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" /></svg>
                        <svg viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" /></svg>
                        <svg viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" /></svg>
                    </div>
                    <p class="testimonial-text">
                        "Kerstin made our ceremony absolutely perfect. Her warmth and professionalism made us feel completely at ease. The handfasting ritual was a beautiful touch that made our ceremony truly unique."
                    </p>
                    <p class="testimonial-author">— Sarah & Michael</p>
                </div>
                <div class="testimonial-card">
                    <div class="star-rating">
                        <svg viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" /></svg>
                        <svg viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" /></svg>
                        <svg viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" /></svg>
                        <svg viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" /></svg>
                        <svg viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" /></svg>
                    </div>
                    <p class="testimonial-text">
                        "We couldn't have asked for a better celebrant. Kerstin took the time to understand our story and created a ceremony that was personal and meaningful. Highly recommend!"
                    </p>
                    <p class="testimonial-author">— Jennifer & David</p>
                </div>
                <div class="testimonial-card">
                    <div class="star-rating">
                        <svg viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" /></svg>
                        <svg viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" /></svg>
                        <svg viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" /></svg>
                        <svg viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" /></svg>
                        <svg viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" /></svg>
                    </div>
                    <p class="testimonial-text">
                        "Kerstin's Celtic-inspired ceremony was exactly what we were looking for. She was professional, punctual, and made our special day unforgettable. Thank you!"
                    </p>
                    <p class="testimonial-author">— Emily & James</p>
                </div>
            </div>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
    </div>
</section>

<!-- My Story Section -->
<section id="story" class="section" style="background-color: white;">
    <div class="container">
        <div class="grid-story">
            <!-- Photo -->
            <div>
                <div style="border-radius: 0.75rem; box-shadow: 0 25px 50px rgba(0,0,0,0.25); overflow: hidden; border: 4px solid #c8d4c0;">
                    <?php
                    $image_url = celtic_knot_get_field('story_image', 'option', get_template_directory_uri() . '/images/KerstinO-scaled-e1603739338128-300x300-1.jpg');
                    ?>
                    <img src="<?php echo esc_url($image_url); ?>" alt="Kerstin Sandstrom - Licensed Ontario Celebrant">
                </div>
            </div>

            <!-- Bio Content -->
            <div style="display: flex; flex-direction: column; gap: 1.5rem;">
                <span class="section-label" style="text-align: left;">
                    <?php echo esc_html(celtic_knot_get_field('story_label', 'option', 'Meet Kerstin')); ?>
                </span>
                <h2 style="font-size: 2.5rem; font-weight: bold; color: #1e3a2d; font-family: Georgia, serif; text-align: left; margin: 0;">
                    <?php echo esc_html(celtic_knot_get_field('story_title', 'option', 'The Officiant Behind the Knot')); ?>
                </h2>
                <?php
                $story_content = celtic_knot_get_field('story_content', 'option', '');
                if ($story_content) {
                    echo wp_kses_post($story_content);
                } else {
                    ?>
                    <p style="font-size: 1.125rem; color: #374151; line-height: 1.6;">
                        Hello! I'm Kerstin Sandstrom, a licensed Ontario Celebrant through Humanist Canada. My mission is to ensure your ceremony is not just a formality, but a <strong>profound, unforgettable piece of theatre</strong> rooted in your shared story.
                    </p>
                    <p style="color: #374151; line-height: 1.6;">
                        My passion for the natural world, history, and the rich symbolism of Celtic traditions informs every ceremony I write. Whether we are incorporating a Viking oath ring, designing a custom handfasting, or simply capturing the essence of your non-religious love, my focus is always on creating <strong>authenticity, meaning, and a touch of magic</strong>.
                    </p>
                    <p style="color: #374151; line-height: 1.6; font-weight: 600;">
                        I am here to honor all relationships, identities, and spiritual backgrounds, ensuring your ceremony is exactly as you envision it.
                    </p>
                    <?php
                }
                ?>
                <a href="#contact" style="display: inline-flex; align-items: center; color: #1e3a2d; font-weight: 600; text-decoration: none;">
                    <?php echo esc_html(celtic_knot_get_field('story_button_text', 'option', 'Start the Conversation Today')); ?>
                    <span style="margin-left: 0.5rem;">→</span>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="section" style="background-color: #e8ede7;">
    <div class="container" style="max-width: 56rem;">
        <div class="section-header">
            <span class="section-label">Common Questions</span>
            <h2 class="section-title">Frequently Asked Questions</h2>
        </div>

        <div style="display: flex; flex-direction: column; gap: 1.5rem;">
            <!-- FAQ 1 -->
            <details style="background: white; border-radius: 0.75rem; padding: 1.5rem; box-shadow: 0 4px 6px rgba(0,0,0,0.1); border-left: 8px solid #1e3a2d;">
                <summary style="font-size: 1.25rem; font-weight: bold; color: #1e3a2d; cursor: pointer; list-style: none;">
                    Are you legally registered in Ontario?
                </summary>
                <p style="color: #374151; margin-top: 1rem; line-height: 1.6;">
                    Yes! I am a fully licensed Ontario Celebrant through Humanist Canada, authorized to perform legally binding weddings anywhere in the province. All paperwork and registration is handled professionally.
                </p>
            </details>

            <!-- FAQ 2 -->
            <details style="background: white; border-radius: 0.75rem; padding: 1.5rem; box-shadow: 0 4px 6px rgba(0,0,0,0.1); border-left: 8px solid #1e3a2d;">
                <summary style="font-size: 1.25rem; font-weight: bold; color: #1e3a2d; cursor: pointer; list-style: none;">
                    How far in advance should I book?
                </summary>
                <p style="color: #374151; margin-top: 1rem; line-height: 1.6;">
                    I recommend booking 6-12 months in advance, especially for peak wedding season (May-October). However, I can accommodate shorter timelines when possible. Contact me to check my availability for your date.
                </p>
            </details>

            <!-- FAQ 3 -->
            <details style="background: white; border-radius: 0.75rem; padding: 1.5rem; box-shadow: 0 4px 6px rgba(0,0,0,0.1); border-left: 8px solid #1e3a2d;">
                <summary style="font-size: 1.25rem; font-weight: bold; color: #1e3a2d; cursor: pointer; list-style: none;">
                    What is a handfasting ceremony?
                </summary>
                <p style="color: #374151; margin-top: 1rem; line-height: 1.6;">
                    Handfasting is an ancient Celtic tradition where couples' hands are tied together with ribbons or cords, symbolizing the binding of two lives. It's a beautiful, visual ritual that can be incorporated into your ceremony and personalized with meaningful colors and symbolism.
                </p>
            </details>

            <!-- FAQ 4 -->
            <details style="background: white; border-radius: 0.75rem; padding: 1.5rem; box-shadow: 0 4px 6px rgba(0,0,0,0.1); border-left: 8px solid #1e3a2d;">
                <summary style="font-size: 1.25rem; font-weight: bold; color: #1e3a2d; cursor: pointer; list-style: none;">
                    Can we write our own vows?
                </summary>
                <p style="color: #374151; margin-top: 1rem; line-height: 1.6;">
                    Of course! You can write your own vows, use traditional vows, or work with me to craft something unique. I can provide guidance, templates, and feedback to help you create vows that feel authentic and meaningful to you.
                </p>
            </details>
        </div>
    </div>
</section>

<!-- Blog Section -->
<section id="blog" class="section" style="background-color: white;">
    <div class="container">
        <div class="section-header">
            <span class="section-label">From the Blog</span>
            <h2 class="section-title">Latest Articles & Insights</h2>
            <p class="section-description">Tips, ideas, and stories about meaningful ceremonies</p>
        </div>

        <?php
        // Query the latest 3 blog posts
        $blog_posts = new WP_Query(array(
            'post_type' => 'post',
            'posts_per_page' => 3,
            'post_status' => 'publish',
            'orderby' => 'date',
            'order' => 'DESC'
        ));
        ?>

        <?php if ($blog_posts->have_posts()) : ?>
            <div class="grid-blog">
                <?php while ($blog_posts->have_posts()) : $blog_posts->the_post(); ?>
                    <article class="blog-card">
                        <?php if (has_post_thumbnail()) : ?>
                            <a href="<?php the_permalink(); ?>" class="blog-card-image">
                                <?php the_post_thumbnail('medium_large', array('style' => 'width: 100%; height: 100%; object-fit: cover;')); ?>
                            </a>
                        <?php else : ?>
                            <a href="<?php the_permalink(); ?>" class="blog-card-image" style="background: linear-gradient(135deg, #1e3a2d 0%, #2d5a47 100%); display: flex; align-items: center; justify-content: center;">
                                <svg style="width: 4rem; height: 4rem; color: rgba(255,255,255,0.3);" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                </svg>
                            </a>
                        <?php endif; ?>

                        <div class="blog-card-content">
                            <div class="blog-card-meta">
                                <?php echo get_the_date(); ?>
                                <?php if (has_category()) : ?>
                                    <span style="color: #999;"> • </span>
                                    <?php the_category(', '); ?>
                                <?php endif; ?>
                            </div>

                            <h3 class="blog-card-title">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h3>

                            <div class="blog-card-excerpt">
                                <?php echo wp_trim_words(get_the_excerpt(), 20); ?>
                            </div>

                            <a href="<?php the_permalink(); ?>" class="blog-card-link">
                                Read More
                                <svg style="width: 1rem; height: 1rem; margin-left: 0.25rem;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                            </a>
                        </div>
                    </article>
                <?php endwhile; ?>
            </div>

            <div style="text-align: center; margin-top: 3rem;">
                <a href="<?php echo get_permalink(get_option('page_for_posts')); ?>" class="button">View All Articles</a>
            </div>
        <?php else : ?>
            <div style="text-align: center; padding: 3rem; color: #666;">
                <p>No blog posts yet. Check back soon for ceremony tips and inspiration!</p>
            </div>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="section" style="background-color: #f9fafb;">
    <div class="container">
        <div class="section-header">
            <span class="section-label">Get In Touch</span>
            <h2 class="section-title">Let's Discuss Your Ceremony</h2>
            <p class="section-description">Fill out the form below and I'll get back to you within 24 hours</p>
        </div>

        <div style="max-width: 600px; margin: 0 auto;">
            <form action="https://formspree.io/f/xzbwqelz" method="POST" id="contact-form">
                <div style="margin-bottom: 1rem;">
                    <label for="name" style="display: block; margin-bottom: 0.5rem; font-weight: 600;">Your Name *</label>
                    <input type="text" id="name" name="name" required style="width: 100%; padding: 0.75rem; border: 1px solid #ddd; border-radius: 0.5rem; font-size: 1rem;">
                </div>

                <div style="margin-bottom: 1rem;">
                    <label for="email" style="display: block; margin-bottom: 0.5rem; font-weight: 600;">Email *</label>
                    <input type="email" id="email" name="email" required style="width: 100%; padding: 0.75rem; border: 1px solid #ddd; border-radius: 0.5rem; font-size: 1rem;">
                </div>

                <div style="margin-bottom: 1rem;">
                    <label for="phone" style="display: block; margin-bottom: 0.5rem; font-weight: 600;">Phone Number</label>
                    <input type="tel" id="phone" name="phone" style="width: 100%; padding: 0.75rem; border: 1px solid #ddd; border-radius: 0.5rem; font-size: 1rem;">
                </div>

                <div style="margin-bottom: 1rem;">
                    <label for="date" style="display: block; margin-bottom: 0.5rem; font-weight: 600;">Ceremony Date</label>
                    <input type="date" id="date" name="date" style="width: 100%; padding: 0.75rem; border: 1px solid #ddd; border-radius: 0.5rem; font-size: 1rem;">
                </div>

                <div style="margin-bottom: 1rem;">
                    <label for="message" style="display: block; margin-bottom: 0.5rem; font-weight: 600;">Tell me about your ceremony *</label>
                    <textarea id="message" name="message" rows="6" required style="width: 100%; padding: 0.75rem; border: 1px solid #ddd; border-radius: 0.5rem; font-size: 1rem; font-family: inherit;"></textarea>
                </div>

                <button type="submit" class="button" style="width: 100%;">Send Message</button>
            </form>

            <!-- Social Media Call-out -->
            <div style="margin-top: 3rem; text-align: center;">
                <p style="color: #666; margin-bottom: 0.75rem;">
                    Want to see recent ceremonies and get inspiration?
                </p>
                <a href="https://www.instagram.com/tiethecelticknot/" target="_blank" rel="noopener noreferrer" style="display: inline-flex; align-items: center; gap: 0.5rem; color: #1e3a2d; font-weight: 600; text-decoration: none; transition: color 0.3s;">
                    <svg style="width: 1.5rem; height: 1.5rem;" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                    </svg>
                    Follow @tiethecelticknot on Instagram
                </a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
