# UCC IT PWA

A Laravel-based project with a cleaner, more polished landing page design.

Created by Britania Dunkley and Jonovi Gayle.

## What was updated

This refresh focuses on the frontend presentation of the default landing page.

- Reworked `welcome.blade.php` into a more premium hero-style layout
- Added a softer visual system using cards, blur, spacing, and cleaner buttons
- Extended `app.css` with reusable utility classes for future pages
- Kept `app.js` and `bootstrap.js` simple so the app logic stays untouched

## Project structure used for the update

- `resources/views/welcome.blade.php` - main landing page
- `resources/css/app.css` - Tailwind import and custom component styles
- `resources/js/app.js` - loads frontend bootstrap file
- `resources/js/bootstrap.js` - axios setup for requests

## Requirements

- PHP 8.2 or higher
- Composer
- Node.js and npm
- MySQL or MariaDB

## Setup

1. Clone the repository.
2. Move into the project folder.
3. Install PHP dependencies:

```bash
composer install
```

4. Install frontend dependencies:

```bash
npm install
```

5. Create the environment file:

```bash
cp .env.example .env
```

6. Generate the Laravel app key:

```bash
php artisan key:generate
```

7. Update the database settings in `.env`.

Example:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=uccit_pwa
DB_USERNAME=root
DB_PASSWORD=
```

8. Run migrations:

```bash
php artisan migrate
```

9. Start the Vite dev server:

```bash
npm run dev
```

10. Start Laravel:

```bash
php artisan serve
```

Then open the app in your browser using the local address shown in Terminal.

## Notes for your Mac setup

If XAMPP is still using PHP 8.0.x, do not use XAMPP PHP for this project because Laravel 12 needs PHP 8.2 or newer.
Use your newer terminal PHP instead when running Composer and Artisan.

Example:

```bash
php /usr/local/bin/composer install
php artisan serve
```

## Editing the visuals later

Main places to edit:

- `resources/views/welcome.blade.php`
- `resources/css/app.css`

If you want to expand the same style across the app, move the repeated layout into a shared Blade layout and reuse the button/card classes from `app.css`.

## Credits

Built with Laravel, Tailwind CSS, Vite, and a custom landing page refresh.
