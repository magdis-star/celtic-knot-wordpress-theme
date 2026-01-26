# How to Edit Pricing Packages

Your pricing packages are fully editable through the WordPress admin panel. The design and styling will remain exactly the same - you're just changing the content.

## Where to Find It

Go to: **Service Packages > All Packages** in your WordPress dashboard

## The Current Packages

You currently have 4 pricing packages:
1. Basic Signing Package - $300
2. Custom Ceremony - $450
3. Full Service Wedding - $650 (Most Popular)
4. Deluxe Wedding Ceremony - $895

## How to Edit an Existing Package

1. Go to **Service Packages > All Packages**
2. Click on the package you want to edit
3. You'll see these fields:

### Main Fields:
- **Title**: Package name (e.g., "Full Service Wedding")
- **Content**: Optional description (usually left empty)

### Package Details Box:
- **Price**: Enter numbers only (e.g., 650, not $650)
- **Mark as "Most Popular"**: Check this box to highlight the package with dark background and yellow badge
  - ⚠️ Only check this for ONE package
- **Features**: Enter one feature per line, like this:
  ```
  Initial meeting included
  One consultation (one to two weeks before)
  Unlimited phone calls & emails
  Customised service with rituals & traditional elements
  Paperwork filled out & mailed within 24 hours
  ```

### Display Order Field (in "Package Details" box):
- Controls left-to-right display order
- Lower numbers appear first (left)
- Suggested: 0, 1, 2, 3
- This field is right in the Package Details box - easy to find!

4. Click **"Update"** to save

## Example: Editing "Full Service Wedding"

Let's say you want to change the price from $650 to $700:

1. Go to **Service Packages > All Packages**
2. Click **"Full Service Wedding"**
3. Find the **"Package Details"** box
4. Change **Price** from `650` to `700`
5. Click **"Update"**

**Result**: The package will now display "$700" on the homepage, with exact same styling!

## Adding a New Package

1. Click **"Add New"** button
2. Fill in:
   - **Title**: Your package name
   - **Price**: Numbers only
   - **Features**: One per line
   - **Most Popular**: Only if you want this highlighted
   - **Order**: Set display position (e.g., 0=leftmost, 3=rightmost)
3. Click **"Publish"**

## Deleting a Package

1. Go to **Service Packages > All Packages**
2. Hover over the package
3. Click **"Trash"**

## Changing Package Order

To rearrange how packages appear left to right:

1. Edit each package
2. Find the **"Display Order"** field in the "Package Details" box
3. Set numbers:
   - 0 = First position (leftmost)
   - 1 = Second position
   - 2 = Third position
   - 3 = Fourth position (rightmost)
4. Click **"Update"**

**Current recommended order**:
- Basic Signing Package: Display Order = 0
- Custom Ceremony: Display Order = 1
- Full Service Wedding: Display Order = 2 (Most Popular)
- Deluxe Wedding Ceremony: Display Order = 3

## What Shows on the Homepage?

Each package displays as a card with:
- Package name (Title)
- Price in large bold text
- List of features with checkmarks
- "Book This Package" button
- Special styling if marked "Most Popular" (dark background, yellow badge)

## Design & Styling

✅ **These stay the same automatically**:
- Card layout and spacing
- Colors (green, white, yellow)
- Fonts and text sizes
- Checkmark icons
- Button styling
- Responsive mobile layout
- "Most Popular" badge design

❌ **You cannot change** (requires code editing):
- Colors and styling
- Card layouts
- Section headers
- Button text (always says "Book This Package")

## Important Tips

1. **Price Format**: Enter numbers only (no $ or commas)
   - ✅ Correct: `650`
   - ❌ Wrong: `$650` or `$650.00`

2. **Most Popular**: Only check ONE package or the styling will apply to multiple

3. **Features**: Keep them concise and consistent
   - Each feature appears with a checkmark
   - Don't add bullet points or dashes
   - One feature per line

4. **Testing**: After updating, refresh your homepage to see changes

## Common Changes

### Change a Price
Edit package → Change "Price" field → Update

### Add a Feature to a Package
Edit package → Add new line to "Features" field → Update

### Remove a Feature
Edit package → Delete line from "Features" field → Update

### Switch Which Package is "Most Popular"
1. Edit the current "Most Popular" package → Uncheck the box → Update
2. Edit the new package you want featured → Check the box → Update

### Update Package Name
Edit package → Change "Title" field → Update

## First Time Setup

When you first install this theme, you'll need to create these 4 packages manually (copy the content from CONTENT-TO-ADD.md). After that, you can edit them anytime!

**Fallback**: If no packages are created, the hardcoded default packages will display automatically.

## Need Help?

Contact your developer if you need to:
- Change button text
- Modify colors or styling
- Add custom fields
- Change the section layout
