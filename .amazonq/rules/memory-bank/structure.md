# Project Structure

## Directory Organization

```
deer/
├── admin_area/           # Administrative interface
│   └── index.php        # Admin dashboard and management panel
├── assets/              # Static resources
│   ├── css/            # Stylesheets
│   │   └── style.css   # Custom styling
│   ├── images/         # Product and branding images
│   │   ├── deer.jpeg   # Logo and branding
│   │   ├── sec.jpeg    # Hero/banner image
│   │   └── *.webp      # Product images (shoes, pants, watches, etc.)
│   └── js/             # JavaScript files
│       └── script.js   # Custom JavaScript functionality
└── index.php           # Main storefront page
```

## Core Components

### Frontend Components
- **Main Storefront** (`index.php`): Customer-facing product catalog with navigation, search, and cart
- **Admin Dashboard** (`admin_area/index.php`): Administrative interface for managing products, categories, and orders

### Asset Management
- **CSS Styling** (`assets/css/style.css`): Custom styles complementing Bootstrap framework
- **JavaScript** (`assets/js/script.js`): Interactive functionality and dynamic behavior
- **Images** (`assets/images/`): Product photos, logos, and promotional graphics

## Architectural Patterns

### Layout Structure
- **Bootstrap Grid System**: Responsive 12-column layout with container-fluid approach
- **Component-Based Design**: Modular navbar, sidebar, product cards, and footer sections
- **Mobile-First Responsive**: Adaptive design using Bootstrap's responsive utilities

### Navigation Architecture
- **Primary Navigation**: Main menu with Home, Products, Register, Contact, and Cart
- **Secondary Navigation**: User authentication links (Welcome Guest, Login)
- **Sidebar Navigation**: Brand filtering and category browsing
- **Admin Navigation**: Centralized button-based management interface

### Content Organization
- **Product Grid**: 3-column responsive product display with card components
- **Sidebar Filtering**: 2-column layout with main content and filtering options
- **Administrative Layout**: Centralized management dashboard with action buttons

## Component Relationships
- Main storefront serves as the primary customer interface
- Admin area provides separate management functionality
- Shared asset structure supports both frontend and admin interfaces
- Bootstrap framework provides consistent styling across all components