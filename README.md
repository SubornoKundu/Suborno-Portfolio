# Suborno Kundu — Laravel Portfolio

Apple-inspired minimalist portfolio website built with Laravel.

---

## 📁 File Structure

```
portfolio-laravel/
├── app/
│   └── Http/
│       └── Controllers/
│           └── PortfolioController.php   ← সব data এখানে edit করো
│
├── resources/
│   └── views/
│       ├── layouts/
│       │   └── app.blade.php            ← HTML head + nav + footer wrapper
│       ├── sections/
│       │   ├── nav.blade.php            ← Navigation bar
│       │   └── footer.blade.php         ← Footer
│       └── portfolio.blade.php          ← Main page (Hero/Skills/Projects/About/Contact)
│
├── public/
│   ├── css/
│   │   └── portfolio.css               ← সব styles
│   ├── js/
│   │   └── portfolio.js                ← Cursor + scroll animations
│   └── images/
│       └── profile.jpg                 ← তোমার ছবি এখানে রাখো
│
└── routes/
    └── web.php                         ← Routes
```

---

## 🚀 Setup Instructions

### Step 1 — Existing Laravel project এ add করো

1. Files গুলো তোমার existing Laravel project এ copy করো:

```bash
# Controllers
cp app/Http/Controllers/PortfolioController.php  YOUR_PROJECT/app/Http/Controllers/

# Views
cp -r resources/views/layouts  YOUR_PROJECT/resources/views/
cp -r resources/views/sections YOUR_PROJECT/resources/views/
cp resources/views/portfolio.blade.php  YOUR_PROJECT/resources/views/

# Assets
cp public/css/portfolio.css  YOUR_PROJECT/public/css/
cp public/js/portfolio.js    YOUR_PROJECT/public/js/
cp public/images/profile.jpg YOUR_PROJECT/public/images/

# Routes — এই line টা YOUR_PROJECT/routes/web.php তে add করো:
# Route::get('/', [PortfolioController::class, 'index'])->name('home');
# Route::post('/contact', [PortfolioController::class, 'contact'])->name('contact.send');
```

### Step 2 — New Laravel project হলে

```bash
composer create-project laravel/laravel portfolio
cd portfolio

# উপরের files গুলো copy করো
# তারপর:
php artisan serve
```

### Step 3 — Profile photo পরিবর্তন করো

```bash
# তোমার ছবি এখানে রাখো:
public/images/profile.jpg
```

---

## ✏️ Content পরিবর্তন করো

`app/Http/Controllers/PortfolioController.php` এ `$data` array এ সব তথ্য আছে।

```php
private array $data = [
    'name'    => 'Suborno Kundu',       // তোমার নাম
    'role'    => 'Full Stack Developer', // তোমার title
    'email'   => 'your@email.com',      // email
    'github'  => 'https://github.com/...', 
    
    'skills'   => [...],  // skills array
    'projects' => [...],  // projects array
    'stats'    => [...],  // stats
];
```

---

## 🎨 Design Features

- Apple-inspired minimalist aesthetic
- Off-white warm background (#f9f8f6)
- DM Serif Display + DM Sans typography
- Terracotta accent color (#c8410a)
- Custom smooth-following cursor
- Scroll-triggered reveal animations
- Photo hover zoom effect
- Fully responsive (mobile-friendly)
- Contact form with validation

---

## 📧 Contact Form Email Setup (Optional)

`PortfolioController.php` এ `contact()` method এ Mail uncomment করো:

```php
// config/mail.php এ SMTP setup করো
// .env file এ:
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=your@gmail.com
MAIL_PASSWORD=your_app_password
MAIL_ENCRYPTION=tls
```
