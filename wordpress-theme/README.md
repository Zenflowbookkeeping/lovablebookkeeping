# Wenonah Bookkeeping WordPress Theme

A professional one-page WordPress theme for bookkeeping services.

## Installation

1. Download or clone this theme folder
2. Zip the `wordpress-theme` folder (rename it to `wenonah-bookkeeping` first)
3. Go to WordPress Admin → Appearance → Themes → Add New → Upload Theme
4. Upload the zip file and activate

## Theme Structure

```
wenonah-bookkeeping/
├── style.css           # Main stylesheet with theme header
├── functions.php       # Theme functions, scripts, and customizer
├── index.php           # Fallback template
├── header.php          # Header template
├── footer.php          # Footer template
├── front-page.php      # Homepage template
├── screenshot.png      # Theme preview image (replace with actual screenshot)
├── README.md           # This file
└── assets/
    ├── js/
    │   └── main.js     # Theme JavaScript
    └── images/
        └── (add your images here)
```

## Setup Instructions

### 1. Add Your Images
Place your images in `assets/images/`:
- `jake-portrait.png` - The main portrait image

### 2. Create Screenshot
Replace `screenshot.png` with a 1200x900 PNG image of your theme preview.

### 3. Set Up Menus
1. Go to Appearance → Menus
2. Create a new menu and add custom links:
   - Services → #services
   - Pricing → #pricing
   - Testimonials → #testimonials
   - About → #about
   - Contact → #contact
3. Assign to "Primary Menu" location

### 4. Customize Theme
Go to Appearance → Customize to update:
- Site Title & Tagline
- Logo
- Contact Information (phone, email)
- Social Media Links

### 5. Set Homepage
1. Go to Settings → Reading
2. Select "A static page"
3. Set Homepage to any page (the front-page.php template will be used)

## Customizer Options

- **Contact Information**: Phone number and email
- **Social Links**: Facebook, LinkedIn, Instagram URLs

## Features

- Responsive design
- One-page layout with smooth scrolling
- Contact form with AJAX submission
- Customizer integration for easy editing
- SEO-friendly structure
- Mobile-friendly navigation

## Requirements

- WordPress 5.0+
- PHP 7.4+

## License

GNU General Public License v2 or later
