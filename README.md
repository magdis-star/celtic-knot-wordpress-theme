# Tie the Celtic Knot - WordPress Theme

Custom WordPress theme for Tie the Celtic Knot - Humanist Wedding Celebrant website.

## Features

- Custom homepage with editable sections
- Built-in blog functionality
- Custom post types for Services, Testimonials, and Gallery
- Fully customizable through WordPress admin
- Contact form integration with Formspree
- Responsive design
- Easy content management without touching code

## Installation

### 1. Upload Theme

1. Download/copy the entire `celtic-knot-wordpress-theme` folder
2. Rename it to `celtic-knot` (remove `-wordpress-theme` if needed)
3. Upload to your WordPress installation at `wp-content/themes/celtic-knot`
4. Or zip the folder and upload via WordPress admin: **Appearance > Themes > Add New > Upload Theme**

### 2. Activate Theme

1. Go to **Appearance > Themes** in WordPress admin
2. Find "Tie the Celtic Knot" theme
3. Click **Activate**

### 3. Install Required Plugins

Install these plugins for full functionality:

**Required:**
- **Advanced Custom Fields (ACF)** - For easy content editing
  - Go to **Plugins > Add New**
  - Search for "Advanced Custom Fields"
  - Install and Activate

**Recommended:**
- **Classic Editor** or **Block Editor** (Gutenberg) - Your choice for blog posts
- **Yoast SEO** - For search engine optimization
- **Akismet** - For spam protection on comments

### 4. Set Up Custom Fields (ACF)

After installing ACF, create field groups for easy content editing:

#### Homepage Settings Field Group

1. Go to **Custom Fields > Add New**
2. Name: "Homepage Settings"
3. Add these fields:

**Hero Section:**
- Field Name: `hero_background_image` | Type: Image | Return: URL
- Field Name: `hero_title` | Type: Text
- Field Name: `hero_description` | Type: Textarea
- Field Name: `hero_button_text` | Type: Text

**Services Section:**
- Field Name: `services_label` | Type: Text
- Field Name: `services_title` | Type: Text
- Field Name: `services_description` | Type: Textarea

**Gallery Section:**
- Field Name: `gallery_label` | Type: Text
- Field Name: `gallery_title` | Type: Text
- Field Name: `gallery_description` | Type: Textarea

**Testimonials Section:**
- Field Name: `testimonials_label` | Type: Text
- Field Name: `testimonials_title` | Type: Text

**Contact Information:**
- Field Name: `email` | Type: Email
- Field Name: `phone` | Type: Text

4. **Location Rules:** Set to "Options Page" = "Homepage Settings"
5. Click **Publish**

#### Testimonial Fields

1. Create new field group: "Testimonial Details"
2. Add field:
   - Field Name: `couple_names` | Type: Text | Label: "Couple Names"
3. Location: Post Type = Testimonial
4. Publish

### 5. Set Up Homepage

1. Go to **Pages > Add New**
2. Title: "Home"
3. Publish (content can be empty - it uses the custom template)
4. Go to **Settings > Reading**
5. Set "Your homepage displays" to "A static page"
6. Select "Home" as Homepage
7. Create a new page called "Blog" for blog posts
8. Select "Blog" as Posts page
9. Save Changes

### 6. Set Up Menus

1. Go to **Appearance > Menus**
2. Create a new menu called "Primary Menu"
3. Add custom links or pages:
   - Services (Custom Link: `#services`)
   - Your Process (Custom Link: `#process`)
   - Gallery (Custom Link: `#gallery`)
   - Testimonials (Custom Link: `#testimonials`)
   - Blog (Link to Blog page)
   - Contact (Custom Link: `#contact`)
4. Assign to "Primary Menu" location
5. Save Menu

### 7. Upload Logo

1. Go to **Appearance > Customize > Site Identity**
2. Upload your logo (logo-heart.png is included in theme)
3. Set site title: "Tie the Celtic Knot"
4. Set tagline: "Humanist Wedding Celebrant"
5. Publish

### 8. Configure Homepage Content

1. Go to **Homepage Settings** in WordPress admin sidebar
2. Fill in all the hero section text
3. Upload hero background image (photo1celtic.png recommended)
4. Fill in section labels and titles
5. Save Changes

### 9. Add Services

1. Go to **Services > Add New**
2. Title: e.g., "Full Wedding Ceremony"
3. Content: Add description
4. Featured Image: Upload an icon or image
5. Publish
6. Repeat for each service you offer

### 10. Add Gallery Images

1. Go to **Gallery Images > Add New**
2. Title: Caption for the image (e.g., "Outdoor Ceremony")
3. Featured Image: Upload the ceremony photo
4. Publish
5. Repeat for each photo (photo1celtic.png, photo2celtic.jpg, photo3celtic.jpg are included)

### 11. Add Testimonials

1. Go to **Testimonials > Add New**
2. Title: Client name (e.g., "Sarah & John")
3. Content: Their testimonial text
4. In "Couple Names" field: Add formatted couple names
5. Publish
6. Repeat for each testimonial

### 12. Configure Contact Form

The contact form uses Formspree. Current endpoint is already configured, but to change it:

1. Go to [Formspree.io](https://formspree.io)
2. Sign up and create a new form
3. Get your form endpoint
4. Edit `functions.php` line 142 to update the endpoint

### 13. Start Blogging

1. Go to **Posts > Add New**
2. Write your blog post
3. Add featured image (shown on blog page)
4. Assign categories and tags
5. Publish

## Content Management Guide

### How to Edit Text on Homepage

1. Go to **Homepage Settings** in admin sidebar
2. Edit any field
3. Click "Update"
4. View changes on homepage

### How to Add/Edit Services

1. Go to **Services** in admin
2. Edit existing or add new
3. Use drag-and-drop to reorder

### How to Add/Edit Testimonials

1. Go to **Testimonials** in admin
2. Edit existing or add new
3. Drag to reorder

### How to Add/Edit Gallery Photos

1. Go to **Gallery Images** in admin
2. Upload new photos as Featured Images
3. Add captions as titles
4. Drag to reorder

### How to Change Colors

Edit `style.css` and search for color codes:
- Primary green: `#1e3a2d`
- Background cream: `#f4ead7`
- Light green background: `#f0f3ed`

## File Structure

```
celtic-knot/
├── style.css          # Theme styles
├── functions.php      # Theme functions and setup
├── header.php         # Site header and navigation
├── footer.php         # Site footer
├── front-page.php     # Homepage template
├── index.php          # Blog archive
├── single.php         # Single blog post
├── images/            # Theme images
│   ├── logo-heart.png
│   ├── photo1celtic.png
│   ├── photo2celtic.jpg
│   └── photo3celtic.jpg
├── js/
│   └── script.js      # Theme JavaScript
└── README.md          # This file
```

## Support

For theme customization or issues, contact Dadada Design.

## Changelog

### Version 1.0
- Initial theme release
- Homepage template with all sections
- Blog functionality
- Custom post types for Services, Testimonials, Gallery
- ACF integration for easy content editing
