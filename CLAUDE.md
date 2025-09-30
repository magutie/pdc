# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

Patriotas del Caribe is a PHP-based website for a nonprofit organization that supports Cuban migrants in the Dominican Republic. The site provides migration guidance, legal orientation, and community registration services.

**Technology Stack:**
- PHP 7.4+ backend with MySQL database
- PHPMailer for email confirmations
- Vanilla JavaScript with Google Analytics/GTM integration
- Responsive CSS with Google Fonts
- Apache with .htaccess optimizations

## Development Commands

### Dependency Management
```bash
# Install PHP dependencies
composer install --no-dev --optimize-autoloader

# Development with dev dependencies
composer install

# Run tests (PHPUnit configured)
composer test
# or
vendor/bin/phpunit
```

### Environment Setup
```bash
# Copy environment configuration
cp env.example .env
# Edit .env with actual database and email credentials

# Database setup (manual)
# Import SQL structure from README.md for:
# - pendientes_confirmacion table
# - registros_confirmados table
```

### Local Development
- Use PHP built-in server: `php -S localhost:8000`
- Or configure Apache/Nginx to serve from project root
- Ensure MySQL is running and database is configured

### Image Optimization
```bash
# Convert images to WebP format (requires cwebp utility)
./convert-to-webp.sh

# The script processes all PNG/JPG images in images/ directory
# and generates .webp versions while preserving originals
```

## Project Architecture

### Directory Structure
```
├── index.php              # Main landing page
├── procesar.php           # Form submission processing
├── confirmar.php          # Email confirmation handler
├── includes/              # Reusable PHP components and utilities
│   ├── head.php           # Meta tags, SEO, and performance optimization
│   ├── config.php         # Site configuration and helper functions
│   ├── schemas.php        # JSON-LD structured data
│   ├── navigation-system.php
│   ├── cta-templates.php
│   ├── meta-templates.php
│   ├── image-optimizer.php
│   ├── performance-optimizer.php
│   └── footer.php
├── Content pages (root):  # Individual content pages
│   ├── historia.php
│   ├── mision_patriotica.php
│   ├── sobre_cuba.php
│   ├── valores.php
│   ├── faq.php
│   ├── plan_trabajo.php
│   ├── quienes-somos.php
│   ├── transparencia.php
│   ├── testimonios.php
│   ├── cubanos-en-rd-guia.php      # Hub page
│   ├── trabajo-derechos-rd.php     # Cluster page
│   ├── regularizacion-rd.php
│   ├── enlaces-utiles.php
│   ├── privacidad.php
│   └── terminos.php
├── images/                # Optimized images and favicons
├── css/                   # Stylesheets
│   └── style-patriotas.css
├── docs/                  # SEO strategy and documentation
├── convert-to-webp.sh     # Image optimization script
├── .htaccess              # Apache configuration
├── sitemap.xml            # SEO sitemap
├── robots.txt             # Search engine directives
└── vendor/                # Composer dependencies
```

### Key Components

**includes/head.php**: Centralized head template with:
- SEO meta tags and Open Graph
- JSON-LD structured data
- Google Tag Manager integration
- Performance optimizations (preload, DNS prefetch)
- Critical CSS inlining

**includes/config.php**: Site configuration with helper functions:
- `getPageTitle()` - Standardized title formatting
- `getPageDescription()` - Meta description handling
- `getCanonicalUrl()` - Canonical URL generation

**includes/schemas.php**: JSON-LD structured data for:
- Organization/Nonprofit schema
- WebSite schema with SearchAction
- Article schema for content pages
- FAQPage schema

### Page Template Pattern
Each PHP page follows this structure:
```php
<?php
$page_title = "Page Title";
$page_description = "Page description for SEO";
$canonical_path = "/page-url";
require_once 'includes/head.php';
?>
<body>
    <!-- GTM noscript -->
    <main>
        <h1>Single H1 per page</h1>
        <!-- Content with semantic HTML -->
    </main>
    <?php require_once 'includes/footer.php'; ?>
</body>
</html>
```

### Database Integration
- Uses environment variables for database configuration (from .env file)
- Prepared statements for SQL security
- Two-table system: `pendientes_confirmacion` → `registros_confirmados`
- PHPMailer integration for email confirmations
- **IMPORTANT**: Database credentials are currently hardcoded in procesar.php (line 4-8). When working with this file, migrate to use environment variables from includes/config.php pattern

### SEO Implementation
The site implements comprehensive SEO following the strategy in `BACKLOG_SEO_PDC.md`:
- Structured data (Organization, WebSite, Article, FAQPage schemas)
- Performance optimization (Core Web Vitals focus)
- Semantic HTML with proper heading hierarchy
- Internal linking strategy between content clusters
- Meta tags and Open Graph optimization

### Performance Optimizations
- .htaccess with Gzip/Brotli compression and caching headers
- Image optimization with lazy loading
- Font optimization with preload and display: swap
- Critical CSS inlining
- Resource hints (DNS prefetch, preload)

## Content Management

### Content Architecture
The site uses a hub-and-spoke content model:
- **Hub pages**: Comprehensive guides (e.g., `cubanos-en-rd-guia.php`)
- **Cluster pages**: Specific topics linking back to hubs
- **Support pages**: FAQ, about us, transparency

### SEO Content Guidelines
- One H1 per page with target keywords
- Hierarchical heading structure (H1 → H2 → H3)
- Internal links using descriptive anchor text
- CTAs at the end of content pages
- 150-160 character meta descriptions
- Semantic HTML5 elements (main, article, section, aside)

### Forms and User Registration
- Registration form with email confirmation workflow
- Form validation and sanitization
- CSRF protection considerations
- Database storage with proper indexing

## Security Considerations

- Environment variables for sensitive data (.env file, NOT .env.example)
- Protected files via .htaccess (composer.json, .env)
- Input validation and sanitization
- Prepared SQL statements
- Security headers in .htaccess
- **CRITICAL**: Never commit real database credentials or API keys. Use env.example as template only

## Analytics and Tracking

- Google Tag Manager (GTM-NBVVS6PG)
- Google Analytics 4 integration
- Custom events for form submissions and CTA clicks
- Google Search Console integration

## Deployment

- Production environment uses optimized autoloader
- Apache/cPanel hosting configuration
- Environment-specific configurations via .env
- Static file optimization through .htaccess

## Development Notes

- Follow existing code patterns and conventions
- Use semantic HTML5 elements
- Maintain SEO optimization in all new content
- Test form functionality and email delivery
- Validate structured data with Google's Rich Results Test
- Monitor Core Web Vitals performance
- Follow accessibility best practices with alt tags and semantic markup

## SEO Implementation Status & Pending Tasks

### ✅ Completed (75-80% Implementation)
- Sitemap.xml and robots.txt optimized
- Canonical URLs implemented across all pages
- JSON-LD structured data (Organization, WebSite, Article, FAQPage)
- GTM integration with event tracking
- Centralized head template with SEO optimization
- Hub-and-spoke content architecture started
- Performance optimization (.htaccess, font optimization)

### 🔄 Pending Critical Tasks (To reach 100%)

#### HIGH PRIORITY (Immediate)
1. **GA4 Configuration**: Replace placeholder GA4 ID in includes/config.php (currently 'G-XXXXXXXXXX')
2. **Image Optimization**:
   - Implement lazy loading for all images
   - Add descriptive alt tags with keywords
   - Convert main images to WebP format
3. **Testimonials Page**: Create testimonios.php with Schema Review implementation
4. **Performance**: Complete Core Web Vitals optimization

#### MEDIUM PRIORITY (Next 2 weeks)
1. **Content Clusters**: Complete remaining hub content according to BACKLOG_SEO_PDC.md
2. **Internal Linking**: Implement strategic internal linking between hub and clusters
3. **Image Alt Tags**: Audit and optimize all image alt attributes
4. **Schema Enhancement**: Add BreadcrumbList schema for better navigation

#### LOW PRIORITY (Ongoing)
1. **Authority Building**: Execute Phase 5 (backlinks and partnerships)
2. **Content Calendar**: Implement editorial calendar from backlog
3. **Performance Monitoring**: Set up ongoing Core Web Vitals tracking

### 🎯 Target Metrics (6 months)
- 1,000-3,000 organic clicks/month
- 15-30 keywords in top-10 positions
- CTR >4% on main pages
- Core Web Vitals: LCP <2.5s, CLS <0.1, INP <200ms

### 📝 Implementation Checklist
- [ ] Configure real GA4 ID
- [ ] Implement image lazy loading
- [ ] Create testimonios.php
- [ ] Optimize all image alt tags
- [ ] Convert images to WebP
- [ ] Complete content clusters
- [ ] Internal linking strategy
- [ ] Performance optimization final pass