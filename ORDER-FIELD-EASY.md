# Display Order Field - Now Much Easier!

The **Display Order** field is now built directly into the Package Details and Service Details boxes. You don't need to hunt for it!

## Where to Find It

### For Pricing Packages:

When editing a Service Package, look in the **"Package Details"** box:

```
┌─────────────────────────────────────┐
│ Package Details                     │
├─────────────────────────────────────┤
│                                     │
│ Price: [650]                        │
│                                     │
│ ☑ Mark as "Most Popular"           │
│                                     │
│ Display Order: [2]  ← RIGHT HERE!  │
│ (0=first/left, 1=second, etc.)      │
│                                     │
│ Features (one per line):            │
│ [Initial meeting included...]       │
│                                     │
└─────────────────────────────────────┘
```

### For Other Services:

When editing an Other Service, look in the **"Service Details"** box:

```
┌─────────────────────────────────────┐
│ Service Details                     │
├─────────────────────────────────────┤
│                                     │
│ Icon Type: [Child/Family ▼]        │
│                                     │
│ Button Text: [Celebrate Your...]   │
│                                     │
│ Display Order: [0]  ← RIGHT HERE!  │
│ (0=first/left, 1=second, etc.)      │
│                                     │
└─────────────────────────────────────┘
```

## How It Works

- **Lower numbers appear FIRST (left side)**
- **Higher numbers appear LAST (right side)**

### Example: Arrange 4 Pricing Packages

You want them left to right as:
1. Basic Signing Package
2. Custom Ceremony
3. Full Service Wedding
4. Deluxe Wedding Ceremony

**Set these Display Order values:**
- Basic Signing Package → **0**
- Custom Ceremony → **1**
- Full Service Wedding → **2**
- Deluxe Wedding Ceremony → **3**

### Example: Arrange 2 Services

You want them left to right as:
1. Child Naming Ceremonies
2. Funerals & Memorials

**Set these Display Order values:**
- Child Naming Ceremonies → **0**
- Funerals & Memorials → **1**

## Tips

- Start with 0 for the first item
- You can use any numbers (0, 10, 20, 30 also works)
- If you don't set order, items appear by publish date
- Don't worry about gaps in numbers - it just looks at which is lower

## That's It!

No need to look for "Page Attributes" or "Screen Options" - the Display Order field is right there in the main editing boxes where you enter all the other information!
