# Tie the Celtic Knot - WordPress Theme

Custom WordPress theme for Tie the Celtic Knot - Humanist Wedding Celebrant website.

**Version:** 2.0
**Last Updated:** January 26, 2026
**Requires:** WordPress 5.0+, ACF (Free Version)

---

## 🎯 Features

### Content Management
- ✅ **Fully editable homepage** - Hero, My Story, Pricing, Services, FAQs
- ✅ **Blog functionality** - Unlimited blog posts with categories
- ✅ **Gallery system** - Upload ceremony photos
- ✅ **Testimonials** - Add client reviews
- ✅ **Service Packages** - Manage pricing packages
- ✅ **Other Services** - Child naming, funerals, etc.
- ✅ **FAQs** - Frequently asked questions (NEW!)
- ✅ **100% editable via WordPress** - No code editing required

### Technical Features
- ✅ **Responsive design** - Works on all devices
- ✅ **SEO optimized** - Meta tags, Open Graph, Schema.org markup
- ✅ **Fast loading** - Optimized images and code
- ✅ **Contact form** - Formspree integration
- ✅ **Works with FREE ACF** - No PRO version needed

---

## 📦 Installation

### Step 1: Upload Theme

**Option A: Via WordPress Admin (Recommended)**
1. Go to **Appearance → Themes → Add New → Upload Theme**
2. Choose `celtic-knot-theme-FREE-ACF-VERSION.zip`
3. Click **Install Now**
4. Click **Activate**

**Option B: Via FTP**
1. Unzip the theme folder
2. Upload to `/wp-content/themes/`
3. Go to **Appearance → Themes**
4. Activate "Tie the Celtic Knot"

### Step 2: Install Required Plugin

**Advanced Custom Fields (Free Version)**
1. Go to **Plugins → Add New**
2. Search for **"Advanced Custom Fields"**
3. Install the one by **WP Engine** (free version - NOT PRO)
4. Click **Activate**

**Note:** You only need the FREE version - no need to buy ACF PRO!

### Step 3: Verify Installation

After activating the theme, check that these appear in your left menu:
- ✅ Posts
- ✅ Media
- ✅ Pages (should include "Homepage Settings" page)
- ✅ Testimonials
- ✅ Gallery Images
- ✅ Service Packages
- ✅ Other Services
- ✅ FAQs

If "Homepage Settings" page is missing:
1. Go to **Appearance → Themes**
2. Click **Deactivate** on Celtic Knot theme
3. Click **Activate** again
4. Check **Pages** - the page should now appear

---

## 🚀 Quick Start Guide

### 1. Edit Homepage Settings

**Hero Section & My Story:**
1. Go to **Pages → Homepage Settings → Edit**
2. Scroll down to see all fields:
   - Hero Title
   - Hero Description
   - Hero Button Text
   - My Story Photo
   - My Story Label
   - My Story Title
   - My Story Bio Content
   - My Story Button Text
3. Fill in your content
4. Click **Update**

### 2. Add Service Packages (Pricing)

1. Go to **Service Packages → Add New**
2. **Title:** Package name (e.g., "Full Service Wedding")
3. Scroll down to **Package Details**:
   - **Price:** Enter numbers only (e.g., 650)
   - **Features:** One per line (e.g., "Custom ceremony script")
   - **Most Popular:** Check if this is your featured package
   - **Order:** 0 = first/left, 1 = second, 2 = third
4. Click **Publish**

### 3. Add Gallery Images

1. Go to **Gallery Images → Add New**
2. **Title:** Photo caption (e.g., "Outdoor Handfasting Ceremony")
3. **Set Featured Image:** Upload your ceremony photo
4. Scroll down to set **Display Order**
5. Click **Publish**

### 4. Add Testimonials

1. Go to **Testimonials → Add New**
2. **Title:** Couple's names (e.g., "Sarah & Michael")
3. **Content:** Their testimonial text
4. Click **Publish**

### 5. Add FAQs

1. Go to **FAQs → Add New**
2. **Title:** The question (e.g., "How far in advance should I book?")
3. **Answer field:** Type the answer
4. **Display Order:** Set order (0 = first/top)
5. Click **Publish**

### 6. Add Other Services

1. Go to **Other Services → Add New**
2. **Title:** Service name (e.g., "Child Naming Ceremonies")
3. **Content:** Service description
4. Scroll down to **Service Details**:
   - **Icon Type:** Choose appropriate icon
   - **Button Text:** Call-to-action (e.g., "Celebrate Your Child")
   - **Order:** Set display order
5. Click **Publish**

### 7. Write Blog Posts

1. Go to **Posts → Add New**
2. Write your post title and content
3. **Set Featured Image** (shows on blog listing)
4. Click **Publish**

---

## 📋 What's Editable

### ✅ Fully Editable via WordPress:

| Section | Location | What You Can Edit |
|---------|----------|-------------------|
| **Hero Banner** | Pages → Homepage Settings | Title, description, button text |
| **My Story (About)** | Pages → Homepage Settings | Photo, label, title, bio, button |
| **Service Packages** | Service Packages menu | Price, features, order, "most popular" |
| **Other Services** | Other Services menu | Title, description, icon, button, order |
| **Gallery** | Gallery Images menu | Photos, captions, order |
| **Testimonials** | Testimonials menu | Names, reviews, order |
| **FAQs** | FAQs menu | Questions, answers, order |
| **Blog Posts** | Posts menu | All blog content |

### 🔒 Not Editable (Hard-coded):

- Wedding Spotlight section
- Process steps section
- Contact form structure

**Why?** These sections don't change frequently and are strategically designed. If you need to update them, edit the theme files directly.

---

## 📚 Detailed Documentation

### Service Packages

**Location:** Service Packages → Add New

**Fields:**
- **Title:** Package name displayed on website
- **Content:** (Optional) Additional description
- **Price:** Numbers only, no $ sign (e.g., 650)
- **Features:** One feature per line, displays as checkmarks
- **Most Popular:** Check to highlight this package
- **Order:** Controls left-to-right display (0=leftmost)

**Example:**
```
Title: Signature Ceremony
Price: 650
Features:
Initial consultation
Custom ceremony script
Unlimited email support
Ceremony rehearsal
Wedding ceremony on your chosen date
```

### Gallery Images

**Location:** Gallery Images → Add New

**How it works:**
- **Title** = Photo caption
- **Featured Image** = The actual photo displayed
- **Order** = Top to bottom display order
- Latest 6 images show on homepage

**Tips:**
- Use high-quality photos
- Get permission from couples before posting
- Add 2-3 photos after each ceremony

### Testimonials

**Location:** Testimonials → Add New

**How it works:**
- **Title** = Couple's names (e.g., "Sarah & Michael")
- **Content** = Their review/testimonial
- Latest 3 testimonials show on homepage

### FAQs

**Location:** FAQs → Add New

**How it works:**
- **Title** = The question
- **Answer field** = The answer
- **Order** = Top to bottom display (0=first)
- All FAQs show on homepage in accordion format

**Fallback:** If no FAQs are created, 4 default FAQs appear automatically.

### Other Services

**Location:** Other Services → Add New

**How it works:**
- **Title** = Service name
- **Content** = Service description (2-3 sentences)
- **Icon Type** = Visual icon (Child, Heart, People, Celebration)
- **Button Text** = Call-to-action text
- **Order** = Display order

**Examples:**
- Child Naming Ceremonies
- Funeral Services
- Vow Renewals
- Commitment Ceremonies

### Homepage Settings

**Location:** Pages → Homepage Settings (Edit)

**Hero Section Fields:**
- Hero Title
- Hero Description
- Hero Button Text

**My Story Section Fields:**
- Story Image (photo upload)
- Story Label (small text above heading)
- Story Title
- Story Content (full bio with formatting)
- Story Button Text

**Note:** This is a regular WordPress Page with ACF fields attached. You don't need to view it - just edit it!

---

## 🎨 Customization

### Colors

Main brand colors (edit in `style.css`):
- Primary Green: `#1e3a2d`
- Light Green Background: `#e8ede7`
- Accent Gold: `#c8a882`
- Text Dark: `#1f2937`

### Logo

1. Go to **Appearance → Customize → Site Identity**
2. Upload your logo
3. Recommended size: 200x200px PNG with transparent background

### Contact Form

The theme uses Formspree for the contact form.

**Current endpoint:** `https://formspree.io/f/xzbwqelz`

**To change:**
1. Sign up at [Formspree.io](https://formspree.io)
2. Create new form
3. Edit `functions.php` line ~678 to update endpoint

---

## 🗂️ File Structure

```
celtic-knot-wordpress-theme/
├── style.css                           # Main stylesheet
├── functions.php                       # Theme functions & custom post types
├── header.php                          # Site header & navigation
├── footer.php                          # Site footer
├── front-page.php                      # Homepage template
├── index.php                           # Blog archive
├── single.php                          # Single blog post template
├── template-homepage-settings.php      # Homepage Settings page template
├── images/                             # Theme images
│   ├── logo-heart.png
│   ├── photo1celtic.jpg
│   ├── photo2celtic.jpg
│   ├── photo3celtic.jpg
│   └── KerstinO-*.jpg
├── js/
│   └── script.js                       # Smooth scrolling & interactions
├── README.md                           # This file
├── WHAT-IS-EDITABLE.md                # Complete editing guide
├── HOW-TO-EDIT-HOMEPAGE.md            # Homepage editing instructions
├── HOW-TO-EDIT-PRICING.md             # Pricing packages guide
├── HOW-TO-EDIT-SERVICES.md            # Other services guide
└── Various setup guides...
```

---

## 🔧 Troubleshooting

### "I don't see Homepage Settings"

**Solution:**
1. Make sure ACF plugin is installed and **activated**
2. Go to **Pages** (not a special menu item)
3. Look for a page called "Homepage Settings"
4. If missing, deactivate and reactivate the theme

### "My changes aren't showing on the website"

**Solution:**
1. Make sure you clicked **Update** or **Publish**
2. Hard refresh your browser: **Shift + Command + R** (Mac) or **Ctrl + F5** (Windows)
3. Clear your browser cache
4. If using a caching plugin, clear its cache

### "I can't see the ACF fields"

**Solution:**
1. Go to **Plugins**
2. Make sure **Advanced Custom Fields** is activated (should say "Deactivate")
3. If not installed, install it: **Plugins → Add New → Search "Advanced Custom Fields"**

### "FAQs aren't showing on homepage"

**Solution:**
1. Make sure you **published** the FAQs (not just saved as draft)
2. Check that FAQs have both a question (title) and answer filled in
3. Clear cache and refresh the page

### "Package order isn't working"

**Solution:**
1. Order field controls left-to-right display
2. Use: 0 = leftmost, 1 = middle, 2 = rightmost
3. Make sure to click **Update** after changing order

---

## 📖 Additional Resources

- **WHAT-IS-EDITABLE.md** - Complete list of what can be edited
- **HOW-TO-EDIT-HOMEPAGE.md** - Detailed homepage editing guide
- **HOW-TO-EDIT-PRICING.md** - Service packages guide
- **HOW-TO-EDIT-SERVICES.md** - Other services guide
- **HOW-TO-INSTALL-ACF-PLUGIN.md** - ACF installation instructions

---

## 🆕 Changelog

### Version 2.0 (January 26, 2026)
- ✅ Added FAQ custom post type with editable questions/answers
- ✅ Fixed Homepage Settings to work with FREE ACF (no PRO needed)
- ✅ Homepage Settings now uses WordPress Page instead of Options Page
- ✅ Updated all documentation
- ✅ Improved fallback content system

### Version 1.5 (January 23, 2026)
- Added Service Packages custom post type
- Added Other Services custom post type
- Added order field to control display order
- Improved admin interface

### Version 1.0 (December 2024)
- Initial theme release
- Homepage template with all sections
- Blog functionality
- Custom post types for Gallery and Testimonials
- ACF integration

---

## 💚 Support

**Theme developed by:** Dadada Design
**Client:** Tie the Celtic Knot
**Website:** tiethecelticknot.ca

For theme support or customization, contact your web developer.

---

## 📄 License

This is a custom theme developed specifically for Tie the Celtic Knot. All rights reserved.
