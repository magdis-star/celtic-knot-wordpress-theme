<?php
/**
 * Tie the Celtic Knot Theme Functions
 */

// Safe get_field wrapper for ACF
function celtic_knot_get_field($field_name, $post_id = false, $default = '') {
    if (function_exists('get_field')) {
        // If 'option' is passed, get the Homepage Settings page ID instead
        if ($post_id === 'option') {
            $settings_page = get_page_by_title('Homepage Settings');
            $post_id = $settings_page ? $settings_page->ID : false;
        }

        $value = get_field($field_name, $post_id);
        return $value ? $value : $default;
    }
    return $default;
}

// Theme Setup
function celtic_knot_setup() {
    // Add theme support
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));

    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'celtic-knot'),
        'footer' => __('Footer Menu', 'celtic-knot'),
    ));

    // Add image sizes
    add_image_size('hero-image', 1920, 1080, true);
    add_image_size('gallery-image', 800, 600, true);
    add_image_size('blog-thumbnail', 600, 400, true);
    add_image_size('og-image', 1200, 630, true); // For social media sharing
}
add_action('after_setup_theme', 'celtic_knot_setup');

// Add SEO Meta Tags
function celtic_knot_seo_meta_tags() {
    // Site name
    $site_name = get_bloginfo('name');
    $site_description = get_bloginfo('description');
    $site_url = home_url();

    // Page specific data
    if (is_singular()) {
        $title = get_the_title();
        $description = has_excerpt() ? get_the_excerpt() : wp_trim_words(get_the_content(), 30);
        $url = get_permalink();
        $image = has_post_thumbnail() ? get_the_post_thumbnail_url(get_the_ID(), 'og-image') : get_template_directory_uri() . '/images/logo-heart.png';
    } else {
        $title = $site_name;
        $description = $site_description;
        $url = $site_url;
        $image = get_template_directory_uri() . '/images/logo-heart.png';
    }

    ?>
    <!-- SEO Meta Tags -->
    <meta name="description" content="<?php echo esc_attr(wp_strip_all_tags($description)); ?>">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <link rel="canonical" href="<?php echo esc_url($url); ?>">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="<?php echo is_singular('post') ? 'article' : 'website'; ?>">
    <meta property="og:url" content="<?php echo esc_url($url); ?>">
    <meta property="og:title" content="<?php echo esc_attr($title); ?>">
    <meta property="og:description" content="<?php echo esc_attr(wp_strip_all_tags($description)); ?>">
    <meta property="og:image" content="<?php echo esc_url($image); ?>">
    <meta property="og:site_name" content="<?php echo esc_attr($site_name); ?>">
    <meta property="og:locale" content="en_CA">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="<?php echo esc_url($url); ?>">
    <meta name="twitter:title" content="<?php echo esc_attr($title); ?>">
    <meta name="twitter:description" content="<?php echo esc_attr(wp_strip_all_tags($description)); ?>">
    <meta name="twitter:image" content="<?php echo esc_url($image); ?>">

    <!-- Additional SEO -->
    <meta name="geo.region" content="CA-ON">
    <meta name="geo.placename" content="Ontario">
    <?php
}
add_action('wp_head', 'celtic_knot_seo_meta_tags', 1);

// Add JSON-LD Schema for LocalBusiness
function celtic_knot_schema_markup() {
    if (is_front_page()) {
        $schema = array(
            '@context' => 'https://schema.org',
            '@type' => 'LocalBusiness',
            '@id' => home_url() . '#business',
            'name' => 'Tie the Celtic Knot',
            'description' => 'Licensed Humanist Wedding Celebrant in Ontario. Specializing in Celtic-inspired ceremonies, handfasting rituals, and personalized weddings.',
            'url' => home_url(),
            'telephone' => '',
            'email' => 'kerstin@tiethecelticknot.ca',
            'image' => get_template_directory_uri() . '/images/logo-heart.png',
            'logo' => get_template_directory_uri() . '/images/logo-heart.png',
            'address' => array(
                '@type' => 'PostalAddress',
                'addressRegion' => 'Ontario',
                'addressCountry' => 'CA'
            ),
            'geo' => array(
                '@type' => 'GeoCoordinates',
                'addressCountry' => 'CA'
            ),
            'sameAs' => array(
                'https://www.instagram.com/tiethecelticknot/'
            ),
            'priceRange' => '$300-$895',
            'areaServed' => array(
                '@type' => 'State',
                'name' => 'Ontario'
            ),
            'hasOfferCatalog' => array(
                '@type' => 'OfferCatalog',
                'name' => 'Wedding Ceremony Services',
                'itemListElement' => array(
                    array(
                        '@type' => 'Offer',
                        'itemOffered' => array(
                            '@type' => 'Service',
                            'name' => 'Deluxe Wedding Ceremony',
                            'description' => 'Complete wedding ceremony package with rehearsal'
                        ),
                        'price' => '895',
                        'priceCurrency' => 'CAD'
                    ),
                    array(
                        '@type' => 'Offer',
                        'itemOffered' => array(
                            '@type' => 'Service',
                            'name' => 'Full Service Wedding',
                            'description' => 'Customized wedding ceremony'
                        ),
                        'price' => '650',
                        'priceCurrency' => 'CAD'
                    )
                )
            )
        );

        echo '<script type="application/ld+json">' . wp_json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . '</script>' . "\n";
    }

    // Article schema for blog posts
    if (is_singular('post')) {
        global $post;
        $schema = array(
            '@context' => 'https://schema.org',
            '@type' => 'Article',
            'headline' => get_the_title(),
            'description' => has_excerpt() ? get_the_excerpt() : wp_trim_words(get_the_content(), 30),
            'image' => has_post_thumbnail() ? get_the_post_thumbnail_url(get_the_ID(), 'full') : '',
            'datePublished' => get_the_date('c'),
            'dateModified' => get_the_modified_date('c'),
            'author' => array(
                '@type' => 'Person',
                'name' => get_the_author()
            ),
            'publisher' => array(
                '@type' => 'Organization',
                'name' => get_bloginfo('name'),
                'logo' => array(
                    '@type' => 'ImageObject',
                    'url' => get_template_directory_uri() . '/images/logo-heart.png'
                )
            )
        );

        echo '<script type="application/ld+json">' . wp_json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . '</script>' . "\n";
    }
}
add_action('wp_head', 'celtic_knot_schema_markup', 2);

// Enable XML Sitemaps (WordPress 5.5+)
add_filter('wp_sitemaps_enabled', '__return_true');

// Add custom post types to sitemap
function celtic_knot_add_to_sitemap($post_types) {
    $post_types[] = 'testimonial';
    $post_types[] = 'service';
    return $post_types;
}
add_filter('wp_sitemaps_post_types', 'celtic_knot_add_to_sitemap');

// Optimize excerpt for SEO
function celtic_knot_custom_excerpt_length($length) {
    return 30; // ~155 characters for meta description
}
add_filter('excerpt_length', 'celtic_knot_custom_excerpt_length', 999);

// Add trailing slash to URLs for consistency (SEO best practice)
function celtic_knot_add_trailing_slash($url) {
    if (substr($url, -1) != '/') {
        $url .= '/';
    }
    return $url;
}
add_filter('user_trailingslashit', 'celtic_knot_add_trailing_slash');

// Enqueue styles and scripts
function celtic_knot_scripts() {
    // Get theme version
    $theme_version = wp_get_theme()->get('Version');

    // Main stylesheet with version for cache busting
    wp_enqueue_style('celtic-knot-style', get_stylesheet_uri(), array(), $theme_version);

    // JavaScript for smooth scrolling
    wp_enqueue_script('celtic-knot-script', get_template_directory_uri() . '/js/script.js', array(), $theme_version, true);
}
add_action('wp_enqueue_scripts', 'celtic_knot_scripts');

// Register widget areas
function celtic_knot_widgets_init() {
    register_sidebar(array(
        'name'          => __('Sidebar', 'celtic-knot'),
        'id'            => 'sidebar-1',
        'description'   => __('Add widgets here to appear in your sidebar.', 'celtic-knot'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));

    register_sidebar(array(
        'name'          => __('Footer Widgets', 'celtic-knot'),
        'id'            => 'footer-widgets',
        'description'   => __('Add widgets here to appear in your footer.', 'celtic-knot'),
        'before_widget' => '<section id="%1$s" class="footer-widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'celtic_knot_widgets_init');

// Custom excerpt length
function celtic_knot_excerpt_length($length) {
    return 30;
}
add_filter('excerpt_length', 'celtic_knot_excerpt_length');

// Custom excerpt more text
function celtic_knot_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'celtic_knot_excerpt_more');

// Register custom post type for Testimonials
function celtic_knot_register_testimonials() {
    $args = array(
        'labels' => array(
            'name' => __('Testimonials', 'celtic-knot'),
            'singular_name' => __('Testimonial', 'celtic-knot'),
            'add_new' => __('Add New Testimonial', 'celtic-knot'),
            'add_new_item' => __('Add New Testimonial', 'celtic-knot'),
            'edit_item' => __('Edit Testimonial', 'celtic-knot'),
            'new_item' => __('New Testimonial', 'celtic-knot'),
            'view_item' => __('View Testimonial', 'celtic-knot'),
            'search_items' => __('Search Testimonials', 'celtic-knot'),
            'not_found' => __('No testimonials found', 'celtic-knot'),
        ),
        'public' => true,
        'has_archive' => false,
        'menu_icon' => 'dashicons-testimonial',
        'supports' => array('title', 'editor'),
        'show_in_rest' => true,
    );
    register_post_type('testimonial', $args);
}
add_action('init', 'celtic_knot_register_testimonials');

// Note: Old "Services" custom post type removed - we only use "Other Services" below

// Register custom post type for Gallery
function celtic_knot_register_gallery() {
    $args = array(
        'labels' => array(
            'name' => __('Gallery Images', 'celtic-knot'),
            'singular_name' => __('Gallery Image', 'celtic-knot'),
            'add_new' => __('Add New Image', 'celtic-knot'),
            'add_new_item' => __('Add New Gallery Image', 'celtic-knot'),
            'edit_item' => __('Edit Gallery Image', 'celtic-knot'),
        ),
        'public' => true,
        'has_archive' => false,
        'menu_icon' => 'dashicons-format-gallery',
        'supports' => array('title', 'thumbnail'),
        'show_in_rest' => true,
    );
    register_post_type('gallery_image', $args);
}
add_action('init', 'celtic_knot_register_gallery');

// Register custom post type for Service Packages
function celtic_knot_register_packages() {
    $args = array(
        'labels' => array(
            'name' => __('Service Packages', 'celtic-knot'),
            'singular_name' => __('Package', 'celtic-knot'),
            'add_new' => __('Add New Package', 'celtic-knot'),
            'add_new_item' => __('Add New Package', 'celtic-knot'),
            'edit_item' => __('Edit Package', 'celtic-knot'),
        ),
        'public' => true,
        'has_archive' => false,
        'menu_icon' => 'dashicons-star-filled',
        'supports' => array('title', 'editor', 'page-attributes'),
        'show_in_rest' => true,
    );
    register_post_type('service_package', $args);
}
add_action('init', 'celtic_knot_register_packages');

// Register custom post type for Other Services (Child Naming, Funerals, etc.)
function celtic_knot_register_other_services() {
    $args = array(
        'labels' => array(
            'name' => __('Other Services', 'celtic-knot'),
            'singular_name' => __('Other Service', 'celtic-knot'),
            'add_new' => __('Add New Service', 'celtic-knot'),
            'add_new_item' => __('Add New Other Service', 'celtic-knot'),
            'edit_item' => __('Edit Other Service', 'celtic-knot'),
        ),
        'public' => true,
        'has_archive' => false,
        'menu_icon' => 'dashicons-groups',
        'supports' => array('title', 'editor', 'page-attributes'),
        'show_in_rest' => true,
        'description' => 'Other meaningful ceremonies (Child Naming, Funerals, etc.)',
    );
    register_post_type('other_service', $args);
}
add_action('init', 'celtic_knot_register_other_services');

// Register custom post type for FAQs
function celtic_knot_register_faqs() {
    $args = array(
        'labels' => array(
            'name' => __('FAQs', 'celtic-knot'),
            'singular_name' => __('FAQ', 'celtic-knot'),
            'add_new' => __('Add New FAQ', 'celtic-knot'),
            'add_new_item' => __('Add New FAQ', 'celtic-knot'),
            'edit_item' => __('Edit FAQ', 'celtic-knot'),
        ),
        'public' => true,
        'has_archive' => false,
        'menu_icon' => 'dashicons-editor-help',
        'supports' => array('title', 'page-attributes'),
        'show_in_rest' => true,
        'description' => 'Frequently Asked Questions for the homepage',
    );
    register_post_type('faq', $args);
}
add_action('init', 'celtic_knot_register_faqs');

// Add meta boxes for package details
function celtic_knot_add_package_meta_boxes() {
    add_meta_box(
        'package_details',
        'Package Details',
        'celtic_knot_package_details_callback',
        'service_package',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'celtic_knot_add_package_meta_boxes');

// Add meta boxes for other service details
function celtic_knot_add_other_service_meta_boxes() {
    add_meta_box(
        'other_service_details',
        'Service Details',
        'celtic_knot_other_service_details_callback',
        'other_service',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'celtic_knot_add_other_service_meta_boxes');

// Add meta boxes for FAQ details
function celtic_knot_add_faq_meta_boxes() {
    add_meta_box(
        'faq_details',
        'FAQ Answer',
        'celtic_knot_faq_details_callback',
        'faq',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'celtic_knot_add_faq_meta_boxes');

// Meta box callback
function celtic_knot_package_details_callback($post) {
    wp_nonce_field('celtic_knot_save_package_meta', 'celtic_knot_package_nonce');

    $price = get_post_meta($post->ID, '_package_price', true);
    $most_popular = get_post_meta($post->ID, '_package_most_popular', true);
    $features = get_post_meta($post->ID, '_package_features', true);
    $display_order = $post->menu_order;
    ?>
    <p>
        <label for="package_price"><strong>Price (numbers only, e.g., 650):</strong></label><br>
        <input type="text" id="package_price" name="package_price" value="<?php echo esc_attr($price); ?>" style="width: 200px;">
    </p>
    <p>
        <label>
            <input type="checkbox" name="package_most_popular" value="1" <?php checked($most_popular, '1'); ?>>
            <strong>Mark as "Most Popular"</strong> (only check one package)
        </label>
    </p>
    <p>
        <label for="package_order"><strong>Display Order (0=first/left, 1=second, 2=third, etc.):</strong></label><br>
        <input type="number" id="package_order" name="package_order" value="<?php echo esc_attr($display_order); ?>" style="width: 100px;" min="0" step="1">
        <br><em>Controls left-to-right display on homepage. Lower numbers appear first.</em>
    </p>
    <p>
        <label for="package_features"><strong>Features (one per line):</strong></label><br>
        <textarea id="package_features" name="package_features" rows="10" style="width: 100%;"><?php echo esc_textarea($features); ?></textarea>
        <em>Enter each feature on a new line. These will appear as checkmarks.</em>
    </p>
    <?php
}

// Save package meta
function celtic_knot_save_package_meta($post_id) {
    if (!isset($_POST['celtic_knot_package_nonce']) || !wp_verify_nonce($_POST['celtic_knot_package_nonce'], 'celtic_knot_save_package_meta')) {
        return;
    }
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    if (isset($_POST['package_price'])) {
        update_post_meta($post_id, '_package_price', sanitize_text_field($_POST['package_price']));
    }

    if (isset($_POST['package_most_popular'])) {
        update_post_meta($post_id, '_package_most_popular', '1');
    } else {
        update_post_meta($post_id, '_package_most_popular', '0');
    }

    if (isset($_POST['package_features'])) {
        update_post_meta($post_id, '_package_features', sanitize_textarea_field($_POST['package_features']));
    }

    // Save display order
    if (isset($_POST['package_order'])) {
        $order = intval($_POST['package_order']);
        wp_update_post(array(
            'ID' => $post_id,
            'menu_order' => $order
        ));
    }
}
add_action('save_post_service_package', 'celtic_knot_save_package_meta');

// Meta box callback for other services
function celtic_knot_other_service_details_callback($post) {
    wp_nonce_field('celtic_knot_save_other_service_meta', 'celtic_knot_other_service_nonce');

    $icon_type = get_post_meta($post->ID, '_service_icon', true);
    $button_text = get_post_meta($post->ID, '_service_button_text', true);
    $display_order = $post->menu_order;
    ?>
    <p>
        <label for="service_icon"><strong>Icon Type:</strong></label><br>
        <select id="service_icon" name="service_icon" style="width: 300px;">
            <option value="child" <?php selected($icon_type, 'child'); ?>>Child/Family (Child Naming)</option>
            <option value="heart" <?php selected($icon_type, 'heart'); ?>>Heart (Funerals/Memorials)</option>
            <option value="users" <?php selected($icon_type, 'users'); ?>>People/Community</option>
            <option value="celebrate" <?php selected($icon_type, 'celebrate'); ?>>Celebration</option>
        </select>
    </p>
    <p>
        <label for="service_button_text"><strong>Button Text:</strong></label><br>
        <input type="text" id="service_button_text" name="service_button_text" value="<?php echo esc_attr($button_text); ?>" style="width: 100%;" placeholder="e.g., Celebrate Your Child">
    </p>
    <p>
        <label for="service_order"><strong>Display Order (0=first/left, 1=second, etc.):</strong></label><br>
        <input type="number" id="service_order" name="service_order" value="<?php echo esc_attr($display_order); ?>" style="width: 100px;" min="0" step="1">
        <br><em>Controls left-to-right display on homepage. Lower numbers appear first.</em>
    </p>
    <p>
        <em><strong>Note:</strong> The service title and description are entered in the main editor above.</em>
    </p>
    <?php
}

// Save other service meta
function celtic_knot_save_other_service_meta($post_id) {
    if (!isset($_POST['celtic_knot_other_service_nonce']) || !wp_verify_nonce($_POST['celtic_knot_other_service_nonce'], 'celtic_knot_save_other_service_meta')) {
        return;
    }
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    if (isset($_POST['service_icon'])) {
        update_post_meta($post_id, '_service_icon', sanitize_text_field($_POST['service_icon']));
    }

    if (isset($_POST['service_button_text'])) {
        update_post_meta($post_id, '_service_button_text', sanitize_text_field($_POST['service_button_text']));
    }

    // Save display order
    if (isset($_POST['service_order'])) {
        $order = intval($_POST['service_order']);
        wp_update_post(array(
            'ID' => $post_id,
            'menu_order' => $order
        ));
    }
}
add_action('save_post_other_service', 'celtic_knot_save_other_service_meta');

// Meta box callback for FAQs
function celtic_knot_faq_details_callback($post) {
    wp_nonce_field('celtic_knot_save_faq_meta', 'celtic_knot_faq_nonce');

    $answer = get_post_meta($post->ID, '_faq_answer', true);
    $display_order = $post->menu_order;
    ?>
    <p>
        <em><strong>Note:</strong> The FAQ question is entered in the "Title" field above.</em>
    </p>
    <p>
        <label for="faq_answer"><strong>Answer:</strong></label><br>
        <textarea id="faq_answer" name="faq_answer" rows="5" style="width: 100%;"><?php echo esc_textarea($answer); ?></textarea>
        <br><em>Type the answer to this frequently asked question.</em>
    </p>
    <p>
        <label for="faq_order"><strong>Display Order (0=first/top, 1=second, etc.):</strong></label><br>
        <input type="number" id="faq_order" name="faq_order" value="<?php echo esc_attr($display_order); ?>" style="width: 100px;" min="0" step="1">
        <br><em>Controls top-to-bottom display on homepage. Lower numbers appear first.</em>
    </p>
    <?php
}

// Save FAQ meta
function celtic_knot_save_faq_meta($post_id) {
    if (!isset($_POST['celtic_knot_faq_nonce']) || !wp_verify_nonce($_POST['celtic_knot_faq_nonce'], 'celtic_knot_save_faq_meta')) {
        return;
    }
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    if (isset($_POST['faq_answer'])) {
        update_post_meta($post_id, '_faq_answer', wp_kses_post($_POST['faq_answer']));
    }

    // Save display order
    if (isset($_POST['faq_order'])) {
        $order = intval($_POST['faq_order']);
        wp_update_post(array(
            'ID' => $post_id,
            'menu_order' => $order
        ));
    }
}
add_action('save_post_faq', 'celtic_knot_save_faq_meta');

// Create Homepage Settings page automatically (on theme activation)
function celtic_knot_create_homepage_settings_page() {
    // Check if page already exists
    $page_check = get_page_by_title('Homepage Settings');

    if (!isset($page_check->ID)) {
        // Create the page
        $page_id = wp_insert_post(array(
            'post_title' => 'Homepage Settings',
            'post_content' => 'This page is used to manage homepage content. Edit the fields below to update your Hero section and My Story section.',
            'post_status' => 'publish',
            'post_type' => 'page',
            'post_author' => 1,
            'page_template' => 'template-homepage-settings.php'
        ));

        // Set page to private so it doesn't show in menus
        wp_update_post(array(
            'ID' => $page_id,
            'post_status' => 'draft'
        ));
    }
}
add_action('after_switch_theme', 'celtic_knot_create_homepage_settings_page');

// Register ACF fields for homepage
if (function_exists('acf_add_local_field_group')) {
    acf_add_local_field_group(array(
        'key' => 'group_homepage_content',
        'title' => 'Homepage Content',
        'fields' => array(
            // Hero Section
            array(
                'key' => 'field_hero_title',
                'label' => 'Hero Title',
                'name' => 'hero_title',
                'type' => 'text',
                'instructions' => 'Main headline at the top of the homepage',
                'default_value' => 'Your love story deserves a ceremony as unique as you are',
            ),
            array(
                'key' => 'field_hero_description',
                'label' => 'Hero Description',
                'name' => 'hero_description',
                'type' => 'textarea',
                'instructions' => 'Subheading text below the main title',
                'default_value' => 'Licensed Humanist Celebrant in Ontario, crafting personalized wedding ceremonies rooted in Celtic tradition and your unique love story.',
            ),
            array(
                'key' => 'field_hero_button_text',
                'label' => 'Hero Button Text',
                'name' => 'hero_button_text',
                'type' => 'text',
                'default_value' => 'Check Availability',
            ),

            // My Story Section
            array(
                'key' => 'field_story_image',
                'label' => 'My Story - Photo',
                'name' => 'story_image',
                'type' => 'image',
                'instructions' => 'Photo of Kerstin',
                'return_format' => 'url',
            ),
            array(
                'key' => 'field_story_label',
                'label' => 'My Story - Label',
                'name' => 'story_label',
                'type' => 'text',
                'default_value' => 'Meet Kerstin',
            ),
            array(
                'key' => 'field_story_title',
                'label' => 'My Story - Title',
                'name' => 'story_title',
                'type' => 'text',
                'default_value' => 'The Officiant Behind the Knot',
            ),
            array(
                'key' => 'field_story_content',
                'label' => 'My Story - Bio Content',
                'name' => 'story_content',
                'type' => 'wysiwyg',
                'instructions' => 'Biography text with paragraphs',
                'toolbar' => 'basic',
            ),
            array(
                'key' => 'field_story_button_text',
                'label' => 'My Story - Button Text',
                'name' => 'story_button_text',
                'type' => 'text',
                'default_value' => 'Start the Conversation Today',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'template-homepage-settings.php',
                ),
            ),
        ),
    ));
}

// Formspree form submission
function celtic_knot_get_formspree_endpoint() {
    return get_option('formspree_endpoint', 'https://formspree.io/f/xzbwqelz');
}
?>
