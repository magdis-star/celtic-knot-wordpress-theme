# How to Find and Use the Order Field

The **Order** field controls the left-to-right display of packages and services on your homepage.

## Where is the Order Field?

When editing a Service Package or Other Service, look in the **RIGHT SIDEBAR** for a box called **"Page Attributes"**.

```
┌─────────────────────────────┐
│ Publish                     │
│ [Update Button]             │
└─────────────────────────────┘

┌─────────────────────────────┐
│ Page Attributes             │ ← Look for this box
├─────────────────────────────┤
│ Order: [0]                  │ ← This is what you need!
└─────────────────────────────┘

┌─────────────────────────────┐
│ Package Details             │
│ Price: [650]                │
│ ...                         │
└─────────────────────────────┘
```

## If You Don't See "Page Attributes" Box

The box might be hidden. Here's how to show it:

1. While editing a package, look at the **top right** of the screen
2. Click **"Screen Options"** (small tab at the very top)
3. A panel will drop down with checkboxes
4. Find and **check** the box next to **"Page Attributes"**
5. Close the Screen Options panel
6. The "Page Attributes" box should now appear in the right sidebar

```
Screen Options ▼  ← Click this tab
┌─────────────────────────────────────┐
│ ☐ Excerpt                           │
│ ☐ Discussion                        │
│ ☑ Page Attributes  ← Check this box │
│ ☐ Featured Image                    │
└─────────────────────────────────────┘
```

## How to Use the Order Field

1. Edit a package or service
2. Find the **"Order"** field in the "Page Attributes" box
3. Enter a number:
   - **0** = First position (leftmost)
   - **1** = Second position
   - **2** = Third position
   - **3** = Fourth position (rightmost)
4. Click **"Update"**
5. Repeat for other packages/services

## Example: Arrange 4 Pricing Packages

You want them to appear in this order from left to right:

1. Basic Signing Package
2. Custom Ceremony
3. Full Service Wedding
4. Deluxe Wedding Ceremony

**Set these Order values:**
- Basic Signing Package → Order: **0**
- Custom Ceremony → Order: **1**
- Full Service Wedding → Order: **2**
- Deluxe Wedding Ceremony → Order: **3**

## Alternative: Drag and Drop (Quick Edit)

If you prefer, you can also:

1. Go to **Service Packages > All Packages**
2. Items are listed in a table
3. Some WordPress setups allow drag-and-drop reordering
4. OR click **"Quick Edit"** and change the Order value there

## Important Notes

- **Lower numbers appear FIRST (left side)**
- **Higher numbers appear LAST (right side)**
- You can skip numbers (e.g., 0, 5, 10, 20 works fine)
- You can use negative numbers if needed (e.g., -1 will be before 0)
- If all packages have the same Order value (or no value), they display by date published

## What If I Still Can't Find It?

If the Page Attributes box doesn't appear even after checking Screen Options, you might need to:

1. **Save the package first** - Try clicking "Publish" or "Update" once, then the box may appear
2. **Check your WordPress theme** - Some themes hide this
3. **Contact your developer** - They can verify the custom post type is set up correctly

## Visual Guide

### Desktop View Location:
```
┌─────────────────────────────────────────────────────────────┐
│ Edit Package: Full Service Wedding                         │
├─────────────────────────────┬───────────────────────────────┤
│                             │  ┌─────────────────────────┐  │
│ Title: [Full Service...]   │  │ Publish                 │  │
│                             │  │ [Update]                │  │
│ Content:                    │  └─────────────────────────┘  │
│ [                        ]  │                               │
│                             │  ┌─────────────────────────┐  │
│ ┌─────────────────────────┐ │  │ Page Attributes        │  │
│ │ Package Details         │ │  ├─────────────────────────┤  │
│ ├─────────────────────────┤ │  │ Order: [2]             │  │
│ │ Price: [650]            │ │  └─────────────────────────┘  │
│ │ ☑ Most Popular          │ │              ↑                │
│ │ Features: [...]         │ │         THIS IS IT!           │
│ └─────────────────────────┘ │                               │
└─────────────────────────────┴───────────────────────────────┘
```

## Pro Tip

If you find the Order field confusing, you can also control the display order by **changing the published date** of packages:
- Newer = appears later (right)
- Older = appears first (left)

But using the Order field is cleaner and more explicit!

## Need More Help?

Contact your developer if:
- The Page Attributes box never appears
- The Order field doesn't seem to work
- You want a different way to control order
