# Laravel AdminKit Template

Sebuah template Laravel yang menggunakan AdminKit UI framework untuk membangun aplikasi admin dashboard yang modern dan responsif.

## 📋 Informasi Versi

- **Laravel Framework**: 12.x
- **PHP Version**: ^8.2
- **AdminKit**: Latest
- **Vite**: ^5.0
- **Axios**: ^1.6.4

## 🔧 Spesifikasi Minimum

### Server Requirements
- **PHP**: 8.2 atau lebih tinggi
- **Composer**: 2.x
- **Node.js**: 18.x atau lebih tinggi
- **NPM/Yarn**: Latest

### PHP Extensions
- BCMath PHP Extension
- Ctype PHP Extension
- cURL PHP Extension
- DOM PHP Extension
- Fileinfo PHP Extension
- JSON PHP Extension
- Mbstring PHP Extension
- OpenSSL PHP Extension
- PCRE PHP Extension
- PDO PHP Extension
- Tokenizer PHP Extension
- XML PHP Extension

### Database
- MySQL 5.7+
- PostgreSQL 10.0+
- SQLite 3.8.8+
- SQL Server 2017+

## 🚀 Instalasi Project

### 1. Clone Repository
```bash
git clone https://github.com/username/laravel-adminkit.git
cd laravel-adminkit
```

### 2. Install Dependencies PHP
```bash
composer install
```

### 3. Install Dependencies JavaScript
```bash
npm install
# atau
yarn install
```

### 4. Environment Configuration
```bash
# Copy file environment
cp .env.example .env

# Generate application key
php artisan key:generate
```

### 5. Database Configuration
Edit file `.env` dan sesuaikan konfigurasi database:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel_adminkit
DB_USERNAME=root
DB_PASSWORD=
```

### 6. Jalankan Migrasi Database
```bash
php artisan migrate
```

### 7. Build Assets (Development)
```bash
npm run dev
# atau
yarn dev
```

### 8. Build Assets (Production)
```bash
npm run build
# atau
yarn build
```

### 9. Jalankan Server Development
```bash
php artisan serve
```

Aplikasi akan tersedia di `http://localhost:8000`

## 📁 Struktur Project

```
laravel-adminkit/
├── app/
│   ├── Http/
│   │   └── Controllers/
│   ├── Models/
│   └── Providers/
├── config/
├── database/
│   ├── factories/
│   ├── migrations/
│   └── seeders/
├── public/
├── resources/
│   ├── css/
│   ├── js/
│   └── views/
│       ├── layouts/
│       │   └── adminkit/
│       └── pages/
├── routes/
│   └── web.php
├── storage/
├── tests/
├── .env.example
├── composer.json
├── package.json
├── phpunit.xml
├── vite.config.js
└── README.md
```

## 🎨 Fitur AdminKit

- **Dashboard Modern**: Interface dashboard yang clean dan modern
- **Responsive Design**: Tampilan yang optimal di desktop dan mobile
- **Sidebar Navigation**: Navigasi sidebar yang mudah digunakan
- **Profile Page**: Halaman profil user yang lengkap
- **AdminKit Components**: Menggunakan komponen AdminKit yang sudah siap pakai

## 🔧 Penggunaan

### Menambah Halaman Baru
1. Buat route baru di `routes/web.php`
2. Buat controller (jika diperlukan)
3. Buat view di `resources/views/pages/`
4. Update sidebar navigation di `resources/views/layouts/adminkit/partials/_sidebar.blade.php`

### Menambah Menu Sidebar
Edit file `resources/views/layouts/adminkit/partials/_sidebar.blade.php`:

```php
<li class="nav-item">
    <a class="nav-link" href="{{ route('your.route.name') }}">
        <i class="fas fa-icon"></i>
        <span>Menu Name</span>
    </a>
</li>
```

## 🛠️ Perintah Artisan Berguna

```bash
# Clear cache
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear

# Generate controller
php artisan make:controller ControllerName

# Generate model
php artisan make:model ModelName

# Generate migration
php artisan make:migration create_table_name

# Run migrations
php artisan migrate

# Rollback migrations
php artisan migrate:rollback
```

## 📦 Package yang Digunakan

- **Laravel Framework**: Framework PHP modern
- **Laravel Tinker**: REPL untuk Laravel
- **Laravel Pint**: Code style fixer
- **Laravel Sail**: Docker development environment
- **PHPUnit**: Testing framework
- **Spatie Laravel Ignition**: Error page yang lebih baik
- **Vite**: Build tool modern untuk frontend

## 🔒 Keamanan

- Pastikan file `.env` tidak di-commit ke repository
- Gunakan HTTPS di production
- Update dependencies secara berkala
- Gunakan strong password untuk database

## 🐛 Troubleshooting

### Error "Class not found"
```bash
composer dump-autoload
```

### Error "Permission denied"
```bash
chmod -R 755 storage
chmod -R 755 bootstrap/cache
```

### Error "Mixed Content" di HTTPS
Pastikan `APP_URL` di `.env` menggunakan HTTPS:
```env
APP_URL=https://yourdomain.com
```

## 📝 Changelog

### Version 1.0.0
- Initial release dengan Laravel 12
- AdminKit UI integration
- Dashboard dan Profile pages
- Responsive design

## 🤝 Contributing

1. Fork repository ini
2. Buat branch untuk fitur baru (`git checkout -b feature/amazing-feature`)
3. Commit perubahan (`git commit -m 'Add some amazing feature'`)
4. Push ke branch (`git push origin feature/amazing-feature`)
5. Buat Pull Request

## 📄 License

Project ini menggunakan [MIT License](LICENSE).

## 👥 Support

Jika Anda mengalami masalah atau memiliki pertanyaan:

- Buat issue di repository ini
- Dokumentasi Laravel: [https://laravel.com/docs](https://laravel.com/docs)
- Dokumentasi AdminKit: [https://adminkit.io](https://adminkit.io)

## 🙏 Acknowledgments

- [Laravel](https://laravel.com) - PHP Framework
- [AdminKit](https://adminkit.io) - Admin Template
- [Bootstrap](https://getbootstrap.com) - CSS Framework
- [Font Awesome](https://fontawesome.com) - Icons

---

**Happy Coding! 🚀**
