# Development Guidelines

## Code Quality Standards

### HTML Structure Patterns
- **DOCTYPE Declaration**: Always use `<!DOCTYPE html>` for HTML5 compliance
- **Meta Tags**: Include charset UTF-8 and viewport meta tags for responsive design
- **Semantic HTML**: Use appropriate HTML5 semantic elements and structure
- **Bootstrap Integration**: Utilize Bootstrap classes consistently throughout the application

### CSS Styling Conventions
- **Important Declarations**: Use `!important` sparingly, primarily for overriding Bootstrap defaults
- **Color Scheme**: Maintain consistent dark theme with black backgrounds and white text
- **Responsive Design**: Follow mobile-first approach with Bootstrap grid system
- **Hover Effects**: Implement smooth transitions (0.3s ease) for interactive elements
- **Image Styling**: Use `object-fit: cover` for consistent image display in cards

### JavaScript Development Patterns
- **Event Handling**: Use `addEventListener` with proper event delegation
- **DOM Ready**: Wrap initialization code in `DOMContentLoaded` event listener
- **Smooth Scrolling**: Implement smooth scrolling for anchor links with `scrollIntoView`
- **Modern JavaScript**: Use const/let declarations and arrow functions where appropriate

## Structural Conventions

### File Organization
- **Asset Separation**: Keep CSS, JavaScript, and images in dedicated `assets/` subdirectories
- **Admin Separation**: Maintain separate `admin_area/` directory for administrative functionality
- **Naming Convention**: Use lowercase with underscores for PHP files (e.g., `insert_product.php`)

### Bootstrap Implementation
- **Container Usage**: Use `container-fluid` for full-width layouts
- **Grid System**: Implement responsive columns with `col-md-*` classes
- **Component Classes**: Utilize Bootstrap components (navbar, cards, buttons) consistently
- **Utility Classes**: Leverage Bootstrap utilities for spacing, colors, and positioning

### Navigation Patterns
- **Multi-Level Navigation**: Implement primary and secondary navigation bars
- **Sidebar Navigation**: Use vertical navigation for categories and brands
- **Button Styling**: Apply consistent Bootstrap button classes (`btn btn-info`, `btn btn-primary`)

## Semantic Patterns

### PHP Structure
- **HTML Integration**: Embed PHP within HTML structure using standard PHP tags
- **File Inclusion**: Use relative paths for asset inclusion (`assets/css/style.css`)
- **Admin Interface**: Implement centralized admin dashboard with action buttons

### Component Design
- **Card Components**: Use Bootstrap card structure for product display
- **Responsive Images**: Implement consistent image sizing with height/width attributes
- **Form Elements**: Utilize Bootstrap form classes for search and input elements

### Color and Theming
- **Dark Theme**: Maintain consistent dark color scheme across all pages
- **Brand Colors**: Use secondary colors (`bg-secondary`) for navigation elements
- **Accent Colors**: Apply info and primary colors for call-to-action buttons

## Best Practices

### Performance Optimization
- **CDN Usage**: Load Bootstrap and Font Awesome from CDN for better performance
- **Image Optimization**: Use WebP format for product images where possible
- **CSS Specificity**: Avoid overly specific selectors, use classes over IDs

### Accessibility
- **Alt Attributes**: Include descriptive alt text for all images
- **Semantic Navigation**: Use proper nav elements and ARIA labels
- **Color Contrast**: Ensure sufficient contrast with dark theme implementation

### Code Organization
- **Consistent Indentation**: Use consistent spacing for HTML and CSS
- **Comment Usage**: Include descriptive comments for major sections
- **Asset Loading**: Load JavaScript at the end of body for better performance

### Maintenance Standards
- **Bootstrap Version**: Maintain consistent Bootstrap version (5.3.8) across all pages
- **Asset Paths**: Use relative paths for local assets, absolute URLs for CDN resources
- **Code Reusability**: Create reusable components for common UI elements