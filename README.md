<div align="center">

# Verbeek.ug

**Professional Software Development for Businesses**

[![Laravel](https://img.shields.io/badge/Laravel-11.x-FF2D20?logo=laravel&logoColor=white&style=flat-square)](https://laravel.com)
[![Vue.js](https://img.shields.io/badge/Vue.js-3.x-4FC08D?logo=vuedotjs&logoColor=white&style=flat-square)](https://vuejs.org)
[![Tailwind CSS](https://img.shields.io/badge/Tailwind_CSS-4.x-06B6D4?logo=tailwindcss&logoColor=white&style=flat-square)](https://tailwindcss.com)
[![License: MIT](https://img.shields.io/badge/License-MIT-blue.svg?style=flat-square)](https://opensource.org/licenses/MIT)

*A modern portfolio website built with Laravel & Vue.js to showcase custom web solutions for farmers, communities, and businesses.*

</div>

---

## Overview

Verbeek.ug is a **Single Page Application (SPA)** that combines Laravel's robust backend capabilities with Vue.js's dynamic frontend. This professional portfolio serves as a central hub to:

- Showcase tailored software solutions for businesses
- Present case studies with measurable outcomes
- Provide easy contact options for potential clients
- Share industry insights through blog content

---

## Technology Stack

| Layer | Technology | Version | Purpose |
|-------|------------|---------|---------|
| **Backend** | Laravel | 11.x | PHP Framework |
| **Frontend** | Vue.js | 3.x | Reactive UI |
| **Routing** | Vue Router | 4.x | SPA Navigation |
| **Styling** | Tailwind CSS | 4.x | Utility-first CSS |
| **Build** | Vite | 8.x | Fast Dev Server |
| **PHP** | PHP | 8.2+ | Runtime |

---

## Project Structure

```
verbeek-ug/
├── app/                          # Laravel application logic
├── config/                      # Configuration files
├── database/                    # Migrations & seeders
├── public/                      # Static assets & entry
├── resources/
│   ├── css/
│   │   └── app.css              # Tailwind CSS
│   ├── js/
│   │   ├── app.js               # Vue app entry
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
│   └── web.php                  # SPA catch-all
├── vite.config.js              # Vite configuration
├── package.json
└── composer.json
```

---

## Prerequisites

| Requirement | Version | Check |
|-------------|---------|-------|
| PHP | 8.2+ | `php -v` |
| Composer | 2.5+ | `composer --version` |
| Node.js | 20+ | `node -v` |
| npm/yarn | latest | `npm -v` |

---

## Installation

### 1. Clone Repository
```bash
git clone https://github.com/rvrbk/verbeek-ug.git
cd verbeek-ug
```

### 2. Install Dependencies
```bash
# PHP dependencies
composer install

# Node dependencies
npm install
```

### 3. Configure Environment
```bash
cp .env.example .env
php artisan key:generate
```

Optionally edit `.env`:
```ini
APP_NAME="Rik Verbeek - Software Developer"
APP_URL=http://localhost:8000
```

---

## Development

### Start Servers

**Terminal 1 - Backend:**
```bash
php artisan serve
# Laravel runs on http://localhost:8000
```

**Terminal 2 - Frontend:**
```bash
npm run dev
# Vite runs on http://localhost:5173
```

> **Access:** Open `http://localhost:8000` in your browser

### Quick Start
```bash
npx concurrently "php artisan serve" "npm run dev"
```

---

## Build for Production

```bash
npm run build
```

**Output:** `public/build/` containing:
- Minified & purged CSS (Tailwind)
- Tree-shaken JavaScript bundles
- Optimized static assets
- Cache-busted filenames

---

## Deployment

### Hetzner Cloud Setup

#### Server Requirements
- Ubuntu 22.04 LTS
- PHP 8.2 FPM
- Nginx
- MySQL / MariaDB (optional)

#### 1. Nginx Configuration

Create `/etc/nginx/sites-available/verbeek.ug`:

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
        access_log off;
        log_not_found off;
    }
}
```

Enable & test:
```bash
sudo ln -s /etc/nginx/sites-available/verbeek.ug /etc/nginx/sites-enabled/
sudo nginx -t
sudo systemctl reload nginx
```

#### 2. File Permissions

```bash
sudo chown -R www-data:www-data /var/www/verbeek.ug
sudo chmod -R 755 /var/www/verbeek.ug/storage
sudo chmod -R 755 /var/www/verbeek.ug/bootstrap/cache
```

#### 3. SSL Certificate

```bash
# Install Certbot
sudo apt install certbot python3-certbot-nginx

# Obtain certificate
sudo certbot --nginx -d verbeek.ug -d www.verbeek.ug

# Test renewal
sudo certbot renew --dry-run
```

---

## Deployment Methods

### Option A: Manual Deployment (rsync)

```bash
# Build assets locally
npm run build

# Sync to server
rsync -avz --delete ./ user@your-server:/var/www/verbeek.ug/

# Set permissions
ssh user@your-server "\
sudo chown -R www-data:www-data /var/www/verbeek.ug/ &&\
sudo chmod -R 755 /var/www/verbeek.ug/storage &&\
sudo chmod -R 755 /var/www/verbeek.ug/bootstrap/cache"
```

### Option B: Automated Git Deployment

**On Server:**
```bash
# Create bare repo
sudo mkdir -p /var/www/verbeek.ug-repo.git
cd /var/www/verbeek.ug-repo.git
sudo git init --bare

# Create post-receive hook
sudo nano /var/www/verbeek.ug-repo.git/hooks/post-receive
```

**Hook Content (`/var/www/verbeek.ug-repo.git/hooks/post-receive`):**
```bash
#!/bin/bash

TARGET="/var/www/verbeek.ug"
GIT_WORK_TREE="$TARGET" git checkout -f

cd "$TARGET" || exit

# Install dependencies
composer install --no-dev --optimize-autoloader
npm install

# Build assets
npm run build

# Set permissions
sudo chown -R www-data:www-data .
sudo chmod -R 755 storage bootstrap/cache

# Restart PHP (optional)
sudo systemctl restart php8.2-fpm
```

Make executable:
```bash
sudo chmod +x /var/www/verbeek.ug-repo.git/hooks/post-receive
```

**Deploy:**
```bash
git remote add hetzner user@your-server:/var/www/verbeek.ug-repo.git
git push hetzner main
```

---

## Environment Configuration

### Required Variables

```ini
APP_NAME="Rik Verbeek - Software Developer"
APP_ENV=production
APP_KEY=base64:...generated-by-artisan...
APP_DEBUG=false
APP_URL=https://verbeek.ug

LOG_CHANNEL=stack
LOG_LEVEL=error
```

### Mail Configuration (Optional)

For contact form functionality:

```ini
MAIL_MAILER=smtp
MAIL_HOST=mail.your-provider.com
MAIL_PORT=587
MAIL_USERNAME=noreply@verbeek.ug
MAIL_PASSWORD=your-smtp-password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=contact@verbeek.ug
MAIL_FROM_NAME="Verbeek"
```

---

## Available Pages

| Route | Component | Description |
|-------|-----------|-------------|
| `/` | `Home.vue` | Hero section, services overview, featured projects, testimonials |
| `/services` | `Services/Index.vue` | Detailed service offerings with client outcomes |
| `/portfolio` | `Portfolio/Index.vue` | Case studies (Problem → Solution → Result) |
| `/portfolio/:id` | `Portfolio/Item.vue` | Individual project showcase |
| `/about` | `About/Index.vue` | Professional biography, expertise, work process |
| `/contact` | `Contact/Index.vue` | Contact form, FAQ, social media links |
| `/blog` | `Blog/Index.vue` | Article listings and previews |
| `/blog/:slug` | `Blog/Post.vue` | Full blog post content |

---

## Customization

### Update Content

Edit Vue single-file components in `resources/js/pages/`:

```
resources/js/pages/
├── Home.vue              # Landing page
├── About/
│   └── Index.vue         # About page
├── Services/
│   └── Index.vue         # Services page
├── Portfolio/
│   ├── Index.vue         # Portfolio listing
│   └── Item.vue          # Single project
├── Contact/
│   └── Index.vue         # Contact page
└── Blog/
    ├── Index.vue         # Blog listing
    └── Post.vue          # Single post
```

### Add New Page

1. **Create component:**
   ```bash
   touch resources/js/pages/NewPage.vue
   ```

2. **Add route** in `resources/js/router/index.js`:
   ```javascript
   {
       path: '/new-page',
       name: 'NewPage',
       component: () => import('@/pages/NewPage.vue'),
       meta: { title: 'New Page | Rik Verbeek' }
   }
   ```

3. **Add navigation link** in `AppLayout.vue`

### Modify Styles

- **Component-level:** Add/change Tailwind classes directly in `.vue` files
- **Global styles:** Edit `resources/css/app.css`

---

## Troubleshooting

| Issue | Diagnosis | Solution |
|-------|-----------|----------|
| **HMR not working** | Dev changes not reflected | Verify `APP_URL` matches dev URL; check Vite on port 5173 |
| **Build fails** | Compilation errors | Delete `node_modules/` + `package-lock.json`, then `npm install` |
| **Blank page** | No content rendered | Check `public/build/` exists; verify `APP_URL` in `.env` |
| **500 Error** | Server error | Check `storage/logs/laravel.log`; verify storage permissions |

### Permission Fix
```bash
sudo chmod -R 755 storage/ bootstrap/cache/
sudo chown -R www-data:www-data storage/ bootstrap/cache/
```

---

## Security Checklist

- [ ] `.env` file is NOT committed to Git
- [ ] `APP_KEY` is never shared publicly
- [ ] `APP_DEBUG=false` in production
- [ ] HTTPS configured with valid SSL
- [ ] Regular dependency updates (`composer update`, `npm update`)
- [ ] Strong passwords for all services

---

## License

- **Laravel Framework:** [MIT License](https://opensource.org/licenses/MIT)
- **Project Code:** Proprietary - Free for personal portfolio use with attribution

---

<div align="center">

## Contact

Get in touch for custom software development:

📧 **Email:** [contact@verbeek.ug](mailto:contact@verbeek.ug)

🌐 **Website:** [https://verbeek.ug](https://verbeek.ug)

💼 **LinkedIn:** [https://linkedin.com/in/rikverbeek](https://linkedin.com/in/rikverbeek)

🐙 **GitHub:** [https://github.com/rvrbk](https://github.com/rvrbk)

</div>
