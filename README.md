# Rik Verbeek - Portfolio Website

> **Custom Web Solutions for Ugandan Businesses**
> 
> Laravel + Vue.js portfolio website showcasing software development services for Ugandan farmers, real estate businesses, and small enterprises.

---

## Preview

A professional portfolio website built with **Laravel 11** and **Vue 3** to help potential clients discover my services, view case studies, and get in touch. The site features:

- Responsive design with Tailwind CSS v4
- Single Page Application (SPA) architecture with Vue Router
- Case studies for warehouse management and real estate applications
- Contact form with validation
- Blog section for thought leadership content

---

## Tech Stack

| Layer | Technology |
|-------|------------|
| **Backend** | Laravel 11.x |
| **Frontend** | Vue 3, Vue Router 4 |
| **Styling** | Tailwind CSS v4 |
| **Build Tool** | Vite 8 |
| **Hosting** | Hetzner (recommended) |
| **Language** | PHP 8.2+ |
| **Database** | MySQL / SQLite (for future expansion) |

---

## Project Structure

```
verbeek-ug/
├── app/                    # Laravel application logic
├── config/                # Laravel configuration
├── database/              # Migrations, seeders, factories
├── public/                # Compiled assets, entry point
├── resources/
│   ├── css/
│   │   └── app.css        # Tailwind CSS with custom styles
│   ├── js/
│   │   ├── app.js         # Vue app initialization
│   │   ├── App.vue        # Root Vue component
│   │   ├── router/
│   │   │   └── index.js   # Vue Router configuration
│   │   ├── layouts/
│   │   │   └── AppLayout.vue  # Header, footer, navigation
│   │   └── pages/         # All page components
│   │       ├── Home.vue
│   │       ├── About/
│   │       │   └── Index.vue
│   │       ├── Services/
│   │       │   └── Index.vue
│   │       ├── Portfolio/
│   │       │   ├── Index.vue
│   │       │   └── Item.vue
│   │       ├── Contact/
│   │       │   └── Index.vue
│   │       └── Blog/
│   │           ├── Index.vue
│   │           └── Post.vue
│   └── views/
│       └── welcome.blade.php  # Blade template with Vite
├── routes/
│   └── web.php            # SPA catch-all route
├── vite.config.js         # Vite configuration
├── package.json           # Frontend dependencies
└── composer.json          # PHP dependencies
```

---

## Getting Started

### Prerequisites

- **PHP** 8.2 or higher
- **Composer** 2.5+ (for PHP dependencies)
- **Node.js** 20+ (for frontend dependencies)
- **npm** or **yarn** (for package management)

### Installation

1. **Clone the repository**
   ```bash
   git clone https://github.com/rvrbk/verbeek-ug.git
   cd verbeek-ug
   ```

2. **Install PHP dependencies**
   ```bash
   composer install
   ```

3. **Install Node dependencies**
   ```bash
   npm install
   ```

4. **Copy environment file**
   ```bash
   cp .env.example .env
   ```

5. **Generate application key**
   ```bash
   php artisan key:generate
   ```

6. **Configure environment** (optional)
   Edit `.env` to configure:
   ```ini
   APP_NAME="Rik Verbeek - Software Developer"
   APP_URL=http://verbeek.ug
   ```

---

## Development

### Running the Development Server

Use two terminal windows:

**Terminal 1 - Laravel Server**
```bash
php artisan serve
# Runs on http://localhost:8000
```

**Terminal 2 - Vite Dev Server**
```bash
npm run dev
# Hot module replacement on http://localhost:5173
```

Visit `http://localhost:8000` in your browser. The site will use Vite's HMR for fast frontend development.

### Alternative: Single Command

You can also run both servers simultaneously:
```bash
npx concurrently "php artisan serve" "npm run dev"
```

---

## Building for Production

### Local Build

```bash
npm run build
```

This compiles all assets with optimizations for production and outputs them to `public/build/`.

### Asset Optimization

The build process includes:
- CSS minification and purging (Tailwind)
- JavaScript bundling and tree-shaking
- Image optimization
- Cache-busting with content hashing

---

## Deployment to Hetzner

### Option 1: Manual Deployment via SSH

1. **Build assets locally**
   ```bash
   npm run build
   ```

2. **Upload to Hetzner server**
   ```bash
   rsync -avz --delete ./ user@your-hetzner-ip:/var/www/verbeek.ug/
   ```

3. **Set permissions**
   ```bash
   chown -R www-data:www-data /var/www/verbeek.ug/
   chmod -R 755 /var/www/verbeek.ug/storage
   chmod -R 755 /var/www/verbeek.ug/bootstrap/cache
   ```

4. **Configure web server (Nginx)**
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

5. **Restart services**
   ```bash
   sudo systemctl restart nginx
   sudo systemctl restart php8.2-fpm
   ```

### Option 2: Automated Deployment with Git

1. **Set up a bare repository on the server**
   ```bash
   mkdir -p /var/www/verbeek.ug-repo.git
   cd /var/www/verbeek.ug-repo.git
   git init --bare
   ```

2. **Create a post-receive hook**
   ```bash
   # In /var/www/verbeek.ug-repo.git/hooks/post-receive
   #!/bin/bash
   TARGET="/var/www/verbeek.ug"
   GIT_WORK_TREE="$TARGET" git checkout -f
   cd "$TARGET"
   composer install --no-dev --optimize-autoloader
   npm install
   npm run build
   chown -R www-data:www-data .
   chmod -R 755 storage bootstrap/cache
   ```

3. **Add remote and push**
   ```bash
   git remote add hetzner user@your-hetzner-ip:/var/www/verbeek.ug-repo.git
   git push hetzner main
   ```

### Option 3: Using Deployer (Recommended for Hetzner)

1. **Install Deployer**
   ```bash
   composer require --dev deployer/deployer
   vendor/bin/dep init
   ```

2. **Create `deploy.php`**
   ```php
   <?php
   namespace Deployer;
   
   require 'recipe/laravel.php';
   
   // Configuration
   set('repository', 'git@github.com:rvrbk/verbeek-ug.git');
   set('shared_files', ['.env']);
   set('shared_dirs', ['storage']);
   set('writable_dirs', ['storage', 'bootstrap/cache']);
   
   // Servers
   host('verbeek.ug')
       ->set('host', 'your-hetzner-ip')
       ->set('remote_user', 'user')
       ->set('deploy_path', '/var/www/verbeek.ug');
   
   // Hooks
   task('build:frontend', function () {
       run('cd {{release_path}} && npm install && npm run build');
   });
   
   after('deploy:vendor', 'build:frontend');
   ```

3. **Deploy**
   ```bash
   vendor/bin/dep deploy production
   ```

---

## SSL Certificate (HTTPS)

Use Let's Encrypt with Certbot:

```bash
# Install Certbot
sudo apt install certbot python3-certbot-nginx

# Obtain certificate
sudo certbot --nginx -d verbeek.ug -d www.verbeek.ug

# Auto-renewal
sudo certbot renew --dry-run
```

Update Nginx to listen on port 443 and redirect HTTP to HTTPS.

---

## Environment Configuration

### Required Settings

```ini
APP_NAME="Rik Verbeek - Software Developer"
APP_ENV=production
APP_KEY=base64:your-generated-key
APP_DEBUG=false
APP_URL=https://verbeek.ug

LOG_CHANNEL=stack
LOG_LEVEL=error
```

### Optional: Mail Configuration (for Contact Form)

To enable the contact form to send emails:

```ini
MAIL_MAILER=smtp
MAIL_HOST=mail.your-smtp-server.com
MAIL_PORT=587
MAIL_USERNAME=your-email@verbeek.ug
MAIL_PASSWORD=your-password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=rik@verbeek.ug
MAIL_FROM_NAME="Rik Verbeek"
```

---

## Pages Overview

| Route | Component | Description |
|-------|-----------|-------------|
| `/` | `Home.vue` | Hero, services preview, portfolio preview, testimonials |
| `/services` | `Services/Index.vue` | Detailed service offerings with outcomes |
| `/portfolio` | `Portfolio/Index.vue` | Case studies with Problem/Solution/Result |
| `/portfolio/:id` | `Portfolio/Item.vue` | Single project detail |
| `/about` | `About/Index.vue` | Bio, expertise, process |
| `/contact` | `Contact/Index.vue` | Contact form, FAQ, social links |
| `/blog` | `Blog/Index.vue` | Article listings |
| `/blog/:slug` | `Blog/Post.vue` | Single blog post |

---

## Customization

### Changing Content

Edit the respective Vue components in `resources/js/pages/` to update:
- **Home page**: Edit `Home.vue`
- **Services**: Edit `Services/Index.vue`
- **Portfolio**: Edit `Portfolio/Index.vue` and `Portfolio/Item.vue`
- **About**: Edit `About/Index.vue`
- **Contact**: Edit `Contact/Index.vue`
- **Blog**: Edit `Blog/Index.vue` and `Blog/Post.vue`

### Adding New Pages

1. Create a new Vue component in `resources/js/pages/`
2. Add a route in `resources/js/router/index.js`
3. Add navigation link in `resources/js/layouts/AppLayout.vue`

### Changing Styles

Edit `resources/css/app.css` for custom Tailwind styles, or modify classes directly in Vue templates.

---

## Performance Optimization

### Vite Configuration

The project uses:
- `laravel-vite-plugin` for Laravel integration
- `@tailwindcss/vite` for Tailwind CSS v4
- `@vitejs/plugin-vue` for Vue 3 support

### Cache Configuration

For production, add to `.env`:
```ini
CACHE_DRIVER=file
VIEW_COMPILED_PATH=/var/www/verbeek.ug/storage/framework/views
```

---

## Troubleshooting

### Common Issues

**Vite HMR not working:**
- Ensure `APP_URL` in `.env` matches your development URL
- Check Vite dev server is running on port 5173
- Clear browser cache

**Build fails:**
- Delete `node_modules/` and `package-lock.json`, then run `npm install`
- Delete `vendor/` and run `composer install`

**Blank page:**
- Check that `public/build/` contains compiled assets
- Verify `APP_URL` is correct in `.env`

**500 Error:**
- Check Laravel logs: `tail -f storage/logs/laravel.log`
- Verify storage permissions: `chmod -R 755 storage/ bootstrap/cache/`

---

## Security Best Practices

1. Keep `.env` out of version control (it's in `.gitignore`)
2. Never commit `APP_KEY` or database credentials
3. Set `APP_DEBUG=false` in production
4. Use HTTPS with a valid SSL certificate
5. Keep dependencies updated:
   ```bash
   composer update
   npm update
   ```

---

## Contributing

This is a personal portfolio project. Contributions are welcome for:
- Bug fixes
- Security improvements
- Performance optimizations
- Accessibility enhancements

Please open an issue or pull request on GitHub.

---

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

This project's frontend code and design are proprietary. Free to use for personal portfolio purposes with attribution.

---

## Contact

- **Email**: rik@verbeek.ug
- **Website**: https://verbeek.ug
- **LinkedIn**: [@rikverbeek](https://linkedin.com/in/rikverbeek)
- **GitHub**: [@rvrbk](https://github.com/rvrbk)

---

<p align="center">
Built with love using Laravel and Vue.js for Ugandan businesses
</p>
