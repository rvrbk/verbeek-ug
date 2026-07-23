# Verbeek.ug - Portfolio Website

**Professional software development services for Ugandan businesses.**

A modern portfolio website built with Laravel and Vue.js, designed to showcase custom web solutions for farmers, real estate businesses, and small enterprises in Uganda.

---

## Overview

This project is a Single Page Application (SPA) combining Laravel's powerful backend with Vue.js's reactive frontend. It serves as a professional hub to:

- Display service offerings with clear value propositions
- Showcase case studies and completed projects
- Provide contact information and lead capture forms
- Share insights through blog articles

**Key Features:** Responsive design, SPA navigation, form validation, case study showcases, testimonials section

---

## Technology Stack

| Category | Technology | Version |
|----------|------------|---------|
| Backend Framework | Laravel | 11.x |
| Frontend Framework | Vue.js | 3.x |
| Router | Vue Router | 4.x |
| Styling | Tailwind CSS | 4.x |
| Build Tool | Vite | 8.x |
| Package Manager | npm | 20+ |
| PHP | PHP | 8.2+ |

---

## Project Structure

```
verbeek-ug/
├── app/                          # Laravel application
├── config/                      # Laravel configuration
├── database/                    # Database migrations & seeders
├── public/                      # Static files & entry point
├── resources/
│   ├── css/
│   │   └── app.css              # Tailwind styles
│   ├── js/
│   │   ├── app.js               # Vue initialization
│   │   ├── App.vue              # Root component
│   │   ├── router/
│   │   │   └── index.js         # Route definitions
│   │   ├── layouts/
│   │   │   └── AppLayout.vue    # Shared layout
│   │   └── pages/               # Page components
│   │       ├── Home.vue
│   │       ├── About/Index.vue
│   │       ├── Services/Index.vue
│   │       ├── Portfolio/
│   │       │   ├── Index.vue
│   │       │   └── Item.vue
│   │       ├── Contact/Index.vue
│   │       └── Blog/
│   │           ├── Index.vue
│   │           └── Post.vue
│   └── views/
│       └── welcome.blade.php    # Blade template
├── routes/
│   └── web.php                  # SPA catch-all route
├── vite.config.js
├── package.json
└── composer.json
```

---

## Requirements

- PHP 8.2+
- Composer 2.5+
- Node.js 20+
- npm or yarn

---

## Installation

```bash
# Clone the repository
git clone https://github.com/rvrbk/verbeek-ug.git
cd verbeek-ug

# Install PHP dependencies
composer install

# Install Node dependencies
npm install

# Configure environment
cp .env.example .env
php artisan key:generate
```

---

## Development

### Start Development Servers

**Terminal 1:**
```bash
php artisan serve
```

**Terminal 2:**
```bash
npm run dev
```

Access the application at `http://localhost:8000`

### Single Command
```bash
npx concurrently "php artisan serve" "npm run dev"
```

---

## Build for Production

```bash
npm run build
```

Compiled assets are output to `public/build/` with:
- Minified CSS (Tailwind purged)
- Tree-shaken JavaScript
- Optimized assets
- Cache-busted filenames

---

## Deployment

### Hetzner Server Setup

#### 1. Nginx Configuration

```nginx
server {
    listen 80;
    server_name verbeek.ug www.verbeek.ug;
    root /var/www/verbeek.ug/public;
    index index.php index.html;

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    location ~ \.php$ {
        include snippets/fastcgi-php.conf;
        fastcgi_pass unix:/var/run/php/php8.2-fpm.sock;
        fastcgi_param SCRIPT_FILENAME $realpath_root$fastcgi_script_name;
    }

    location ~ /\. {
        deny all;
    }
}
```

#### 2. Permissions

```bash
chown -R www-data:www-data /var/www/verbeek.ug/
chmod -R 755 /var/www/verbeek.ug/storage
chmod -R 755 /var/www/verbeek-ug/bootstrap/cache
```

#### 3. SSL Certificate (Let's Encrypt)

```bash
sudo apt install certbot python3-certbot-nginx
sudo certbot --nginx -d verbeek.ug -d www.verbeek.ug
sudo certbot renew --dry-run
```

### Deployment Methods

**Option A: Manual (rsync)**
```bash
npm run build
rsync -avz --delete ./ user@server-ip:/var/www/verbeek.ug/
```

**Option B: Git Hook**
```bash
# Server setup
mkdir -p /var/www/verbeek.ug-repo.git
cd /var/www/verbeek.ug-repo.git
git init --bare

# Create hook at /var/www/verbeek.ug-repo.git/hooks/post-receive
#!/bin/bash
TARGET="/var/www/verbeek.ug"
GIT_WORK_TREE="$TARGET" git checkout -f
cd "$TARGET"
composer install --no-dev --optimize-autoloader
npm install
npm run build
chown -R www-data:www-data .
chmod -R 755 storage bootstrap/cache

# Deploy
git remote add hetzner user@server-ip:/var/www/verbeek.ug-repo.git
git push hetzner main
```

---

## Environment Configuration

### Required

```ini
APP_NAME="Rik Verbeek - Software Developer"
APP_ENV=production
APP_KEY=base64:...your-key...
APP_DEBUG=false
APP_URL=https://verbeek.ug
```

### Mail (Optional - for Contact Form)

```ini
MAIL_MAILER=smtp
MAIL_HOST=your-smtp-server.com
MAIL_PORT=587
MAIL_USERNAME=noreply@verbeek.ug
MAIL_PASSWORD=your-password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=rik@verbeek.ug
MAIL_FROM_NAME="Rik Verbeek"
```

---

## Available Pages

| Path | Component | Purpose |
|------|-----------|---------|
| `/` | Home | Hero, services preview, portfolio highlights, testimonials |
| `/services` | Services | Detailed service descriptions and outcomes |
| `/portfolio` | Portfolio | Case studies with Problem/Solution/Result structure |
| `/portfolio/:id` | Portfolio Item | Individual project deep dive |
| `/about` | About | Professional bio, expertise, process |
| `/contact` | Contact | Contact form, FAQ, social links |
| `/blog` | Blog | Article listings |
| `/blog/:slug` | Blog Post | Individual article |

---

## Customization Guide

### Content Updates

Edit Vue components in `resources/js/pages/`:
- Home: `Home.vue`
- Services: `Services/Index.vue`
- Portfolio: `Portfolio/Index.vue` and `Item.vue`
- About: `About/Index.vue`
- Contact: `Contact/Index.vue`
- Blog: `Blog/Index.vue` and `Post.vue`

### Add New Page

1. Create component in `resources/js/pages/`
2. Add route in `resources/js/router/index.js`
3. Add navigation link in `AppLayout.vue`

### Styling

Modify Tailwind classes directly in components or update `resources/css/app.css` for global styles.

---

## Troubleshooting

| Issue | Solution |
|-------|----------|
| HMR not working | Verify `APP_URL` in .env matches dev URL; ensure Vite runs on 5173 |
| Build fails | Delete `node_modules/` and `package-lock.json`, reinstall |
| Blank page | Check `public/build/` exists; verify `APP_URL` |
| 500 Error | Check `storage/logs/laravel.log`; verify permissions |

---

## Security

- Never commit `.env` or `APP_KEY`
- Set `APP_DEBUG=false` in production
- Use HTTPS with valid SSL certificate
- Keep dependencies updated

---

## License

Laravel framework: [MIT License](https://opensource.org/licenses/MIT)

Project frontend: Proprietary - free for personal portfolio use with attribution

---

## Contact

- **Email:** rik@verbeek.ug
- **Website:** https://verbeek.ug
- **LinkedIn:** https://linkedin.com/in/rikverbeek
- **GitHub:** https://github.com/rvrbk
