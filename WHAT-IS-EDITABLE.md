# What Your Client Can Edit Right Now

## ✅ Already Editable (No plugins needed)

### 1. Blog Posts
**Location:** Posts > All Posts > Add New

Your client can:
- Create unlimited blog posts
- Add titles and content
- Upload featured images
- Assign categories
- Publish or save as draft

**Appears on:** Homepage (latest 3) and Blog archive page

---

### 2. Testimonials
**Location:** Testimonials > All Testimonials > Add New

Your client can:
- Add new testimonials
- Edit existing ones
- **Title field** = Client name (e.g., "Sarah & Michael")
- **Content field** = Testimonial text
- Delete testimonials

**Appears on:** Homepage testimonials section (latest 3 testimonials)

**How to add:** See CONTENT-TO-ADD.md for the 3 existing testimonials to enter

---

### 3. Gallery Images
**Location:** Gallery Images > All Gallery Images > Add New

Your client can:
- Upload new ceremony photos
- **Title field** = Photo caption (e.g., "Handfasting Ceremony")
- **Featured Image** = The actual photo to display
- Delete old photos

**Appears on:** Homepage gallery section (latest 6 images)

**How to add:** See CONTENT-TO-ADD.md for setup instructions

---

### 4. Service Packages (Pricing)
**Location:** Service Packages > All Packages > Add New

Your client can:
- Add/edit/delete pricing packages
- **Title field** = Package name (e.g., "Full Service Wedding")
- **Content field** = Optional description
- **Price field** = Price in dollars (numbers only, e.g., 650)
- **Features field** = One feature per line (shown as checkmarks)
- **Most Popular checkbox** = Highlights this package
- **Order** = Use "Order" field to arrange packages left to right

**Appears on:** Homepage pricing section

---

### 5. Other Services (Ceremonies)
**Location:** Other Services > All Other Services > Add New
**Icon:** People/groups icon (not to be confused with the star icon for packages)

Your client can:
- Add/edit/delete other ceremony types
- **Title field** = Service name (e.g., "Child Naming Ceremonies")
- **Content field** = Service description
- **Icon Type** = Choose icon (Child/Family, Heart, People, Celebration)
- **Button Text** = Call-to-action text (e.g., "Celebrate Your Child")
- **Order** = Use "Order" field to arrange services

**Appears on:** Homepage "Other Meaningful Ceremonies" section

---

### 6. FAQs (Frequently Asked Questions)
**Location:** FAQs > All FAQs > Add New
**Icon:** Question mark/help icon

Your client can:
- Add/edit/delete FAQ questions and answers
- **Title field** = The question (e.g., "How far in advance should I book?")
- **Answer field** = The answer to the question
- **Order** = Use "Order" field to arrange FAQs top to bottom

**Appears on:** Homepage FAQ section

---

## ✅ NOW EDITABLE (With ACF Plugin Installed)

### Homepage Sections You Can Edit:

1. **Hero Section** (Top Banner)
   - Main title
   - Description text
   - Button text
   - **Where to edit:** Pages → Homepage Settings → Edit (scroll down to see ACF fields)

2. **My Story Section (About Me)**
   - Kerstin's photo (upload new image)
   - Section label
   - Section title
   - Full bio content (rich text editor)
   - Button text
   - **Where to edit:** Pages → Homepage Settings → Edit (scroll down to see ACF fields)

**Note:** "Homepage Settings" is a regular WordPress Page (found in Pages menu), NOT a special menu item. The theme automatically creates this page when activated. Just edit it like any other page, and scroll down to see the ACF fields for Hero and My Story sections.

---

## 🔒 Intentionally NOT Editable (Strategic Content)

These are hard-coded to prevent accidental changes:

1. **Wedding Spotlight Section** - Core messaging
2. **Process Section** - Fixed workflow steps
3. **Contact Form** - Form structure and Formspree endpoint

**Why keep these hard-coded?**
- Don't change frequently
- Complex layouts that could break
- Strategic content that should be updated intentionally
- Keeps admin interface simple for client

---

## Current Status Summary

### ✅ Fully Editable Right Now
With ACF plugin installed:
- **Hero section** - Title, description, button via Homepage Settings
- **My Story section** - Photo, bio, button via Homepage Settings
- **Blog posts** - Unlimited posts with categories
- **Testimonials** - Add/edit client reviews
- **Gallery images** - Upload ceremony photos
- **Service Packages** - All pricing packages fully editable
- **Other Services** - Child Naming, Funerals, etc. fully editable
- **FAQs** - All questions and answers fully editable

### 🔒 Strategic Content (Hard-coded by Design)
- Wedding Spotlight messaging
- Process steps
- Contact form structure

### ✅ Technical Features
- Comprehensive SEO (meta tags, Open Graph, Schema.org)
- Mobile responsive design
- Fast loading with cache-busting
- XML sitemap
- All sections match Next.js version exactly

---

## Perfect Balance

This setup gives your client:
- **Easy editing** of content that changes regularly (blog, testimonials, hero, bio, pricing, services, FAQs)
- **Protection** of strategic content (process, core messaging)
- **Simple interface** that's not overwhelming
- **Professional results** without risk of breaking layouts
- **Full control** over pricing, service offerings, and frequently asked questions

When process steps or core messaging need updates (rarely), you can update the code files directly.
