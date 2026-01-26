# Contact Form Setup Guide

The website contact form has been updated to use **Contact Form 7** instead of Formspree. Follow these steps to configure it.

## Step 1: Install Contact Form 7 Plugin

1. Log into WordPress admin at https://tiethecelticknot.ca/wp-admin
2. Go to **Plugins > Add New**
3. Search for "Contact Form 7"
4. Click **Install Now** on "Contact Form 7" by Takayuki Miyoshi
5. Click **Activate**

## Step 2: Create the Contact Form

1. Go to **Contact > Contact Forms** in WordPress admin
2. You should see a default form - click on it to edit
3. Replace the form template with this code:

```
<div class="contact-form-wrapper">
<label> Your Name *
    [text* your-name class:form-input]
</label>

<label> Email *
    [email* your-email class:form-input]
</label>

<label> Phone Number
    [tel your-phone class:form-input]
</label>

<label> Ceremony Date
    [date ceremony-date class:form-input]
</label>

<label> Tell me about your ceremony *
    [textarea* your-message class:form-textarea]
</label>

[submit class:form-submit "Send Message"]
</div>
```

4. Click **Save**

## Step 3: Configure Email Settings

1. Still in the Contact Form editor, click the **Mail** tab
2. Configure these settings:

**To:** `kerstin@tiethecelticknot.ca`

**From:** `[your-email]`

**Subject:** `New Ceremony Inquiry from [your-name]`

**Additional Headers:**
```
Reply-To: [your-email]
```

**Message Body:**
```
New inquiry from your website!

Name: [your-name]
Email: [your-email]
Phone: [your-phone]
Ceremony Date: [ceremony-date]

Message:
[your-message]

---
Sent from: https://tiethecelticknot.ca
```

3. Click **Save**

## Step 4: Update the Theme (if needed)

The theme has been updated to use Contact Form 7. If the form ID is not "1", you need to update it:

1. Note the form ID (shown in the Contact Forms list - usually in parentheses like "(ID: 1)")
2. Edit the file `front-page.php` at line 657
3. Replace `id="1"` with your actual form ID: `id="123"`

## Step 5: Add Custom Styling (Optional)

Add this CSS to **Appearance > Customize > Additional CSS** to match the site design:

```css
/* Contact Form 7 Styling */
.contact-form-wrapper .form-input,
.contact-form-wrapper .form-textarea {
    width: 100%;
    padding: 0.75rem;
    border: 1px solid #ddd;
    border-radius: 0.5rem;
    font-size: 1rem;
    margin-top: 0.5rem;
    margin-bottom: 1rem;
    font-family: inherit;
}

.contact-form-wrapper label {
    display: block;
    margin-bottom: 0.5rem;
    font-weight: 600;
    color: #374151;
}

.contact-form-wrapper .form-submit {
    width: 100%;
    background-color: #1e3a2d;
    color: white;
    padding: 0.75rem 1.5rem;
    border: none;
    border-radius: 0.5rem;
    font-weight: 600;
    font-size: 1rem;
    cursor: pointer;
    transition: background-color 0.3s;
}

.contact-form-wrapper .form-submit:hover {
    background-color: #0f1f19;
}

.wpcf7-not-valid-tip {
    color: #dc2626;
    font-size: 0.875rem;
    margin-top: 0.25rem;
}

.wpcf7-response-output {
    margin: 1rem 0;
    padding: 1rem;
    border-radius: 0.5rem;
}

.wpcf7-mail-sent-ok {
    background: #d1fae5;
    border: 1px solid #10b981;
    color: #065f46;
}

.wpcf7-mail-sent-ng,
.wpcf7-validation-errors {
    background: #fee2e2;
    border: 1px solid #ef4444;
    color: #991b1b;
}
```

## Step 6: Test the Form

1. Go to https://tiethecelticknot.ca/#contact
2. Fill out and submit the form
3. Check your email at kerstin@tiethecelticknot.ca
4. Also check your spam folder

## Troubleshooting

### Emails Not Arriving?

**Option 1: Install WP Mail SMTP Plugin**
1. Go to **Plugins > Add New**
2. Search for "WP Mail SMTP"
3. Install and activate
4. Configure with your email provider settings

**Option 2: Use Gmail SMTP**
1. Install WP Mail SMTP
2. Choose Gmail as mailer
3. Connect your Gmail account
4. All form emails will send through Gmail (more reliable)

### Form ID is Different?

If your Contact Form 7 has a different ID:
1. Check the form ID in Contact > Contact Forms
2. Update line 657 in `front-page.php` with the correct ID

### Contact Form 7 Not Installed?

The theme will show a fallback message directing people to email directly: kerstin@tiethecelticknot.ca

---

**Need Help?** Contact your developer or refer to [Contact Form 7 Documentation](https://contactform7.com/docs/)
