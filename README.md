# Laravel Notes Application

[![Laravel](https://img.shields.io/badge/Laravel-10.x-FF2D20?style=flat&logo=laravel&logoColor=white)](https://laravel.com)
[![Tailwind CSS](https://img.shields.io/badge/Tailwind%20CSS-3.x-38B2AC?style=flat&logo=tailwind-css&logoColor=white)](https://tailwindcss.com)
[![PHP](https://img.shields.io/badge/PHP-8.1+-777BB4?style=flat&logo=php&logoColor=white)](https://php.net)
[![License](https://img.shields.io/badge/License-MIT-green.svg)](LICENSE)

A modern, secure, and user-friendly note-taking application built with Laravel framework, featuring elegant UI design with Tailwind CSS and robust authentication powered by Laravel Breeze.

<img width="1842" height="836" alt="Screenshot 2025-08-27 211844" src="https://github.com/user-attachments/assets/014ad194-e5a6-45d4-90e5-00e02c7019df" />
<img width="1678" height="857" alt="Screenshot 2025-08-27 213226" src="https://github.com/user-attachments/assets/818fa38e-b14c-4ba1-b61a-58df51c4cade" />


## 🚀 Features

- **User Authentication & Authorization**
  - Secure user registration and login
  - Password reset functionality
  - Email verification
  - Session management

- **Note Management**
  - Create, read, update, and delete notes
  - Rich text editing capabilities
  - Note categorization and tagging
  - Search and filter functionality

- **User Experience**
  - Responsive design for all devices
  - Clean and intuitive interface
  - Real-time updates
  - Dark/Light mode support

- **Security**
  - CSRF protection
  - XSS protection
  - SQL injection prevention
  - Secure password hashing

## 🛠️ Tech Stack

- **Backend**: Laravel 10.x
- **Frontend**: Blade Templates, Tailwind CSS 3.x
- **Authentication**: Laravel Breeze
- **Database**: MySQL/PostgreSQL/SQLite
- **Asset Compilation**: Vite
- **PHP Version**: 8.1+

## 📋 Prerequisites

Before you begin, ensure you have met the following requirements:

- PHP >= 8.1
- Composer
- Node.js >= 16.x
- NPM or Yarn
- MySQL, PostgreSQL, or SQLite database
- Git

## 🔧 Installation

### 1. Clone the Repository

```bash
git clone https://github.com/yourusername/laravel-notes-app.git
cd laravel-notes-app
```

### 2. Install PHP Dependencies

```bash
composer install
```

### 3. Install Node.js Dependencies

```bash
npm install
```

### 4. Environment Configuration

```bash
# Copy the environment file
cp .env.example .env

# Generate application key
php artisan key:generate
```

### 5. Database Setup

Configure your database connection in the `.env` file:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=notes_app
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

### 6. Run Database Migrations

```bash
php artisan migrate
```

### 7. Seed Database (Optional)

```bash
php artisan db:seed
```

### 8. Compile Assets

```bash
# For development
npm run dev

# For production
npm run build
```

### 9. Start the Development Server

```bash
php artisan serve
```

The application will be available at `http://localhost:8000`

## 🚀 Production Deployment

### Server Requirements

- PHP >= 8.1
- MySQL/PostgreSQL database
- SSL certificate (recommended)

### Deployment Steps

1. **Server Setup**
```bash
# Clone repository
git clone https://github.com/yourusername/laravel-notes-app.git

# Install dependencies
composer install --optimize-autoloader --no-dev
npm install && npm run build
```

2. **Environment Configuration**
```bash
# Set production environment
APP_ENV=production
APP_DEBUG=false
APP_URL=https://yourdomain.com
```

3. **Optimize for Production**
```bash
php artisan config:cache
php artisan route:cache
php artisan view:cache
php artisan optimize
```

4. **Set Permissions**
```bash
chmod -R 755 storage bootstrap/cache
```

## 📖 Usage

### User Registration
1. Navigate to `/register`
2. Fill in the registration form
3. Verify your email address
4. Start creating notes!

### Creating Notes
1. Log in to your account
2. Click "Create New Note"
3. Add title and content
4. Save your note

### Managing Notes
- **Edit**: Click the edit button on any note
- **Delete**: Use the delete button with confirmation
- **Create**: create a note 

## 🧪 Testing

Run the test suite:

```bash
# Run all tests
php artisan test

# Run specific test file
php artisan test tests/Feature/NotesTest.php

# Run with coverage
php artisan test --coverage
```

## 📁 Project Structure

```
laravel-notes-app/
├── app/
│   ├── Http/Controllers/
│   ├── Models/
│   ├── Providers/
│   └── ...
├── database/
│   ├── migrations/
│   ├── seeders/
│   └── factories/
├── resources/
│   ├── views/
│   ├── css/
│   └── js/
├── routes/
│   ├── web.php
│   └── api.php
├── tests/
│   ├── Feature/
│   └── Unit/
└── ...
```

## 🤝 Contributing

We welcome contributions to the Laravel Notes Application! Please follow these steps:

1. **Fork the repository**
2. **Create a feature branch**
   ```bash
   git checkout -b feature/amazing-feature
   ```
3. **Make your changes**
4. **Run tests**
   ```bash
   php artisan test
   ```
5. **Commit your changes**
   ```bash
   git commit -m 'Add some amazing feature'
   ```
6. **Push to the branch**
   ```bash
   git push origin feature/amazing-feature
   ```
7. **Open a Pull Request**

### Development Guidelines

- Follow PSR-12 coding standards
- Write tests for new features
- Update documentation as needed
- Ensure all tests pass before submitting PR

## 🔒 Security

If you discover any security vulnerabilities, please send an email to [security@yourapp.com](mailto:security@yourapp.com). All security vulnerabilities will be promptly addressed.

## 📄 License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## 🙏 Acknowledgments

- [Laravel Framework](https://laravel.com)
- [Laravel Breeze](https://github.com/laravel/breeze)
- [Tailwind CSS](https://tailwindcss.com)
- [Heroicons](https://heroicons.com)

## 📞 Support

- **Documentation**: [Project Wiki](https://github.com/yourusername/laravel-notes-app/wiki)
- **Issues**: [GitHub Issues](https://github.com/yourusername/laravel-notes-app/issues)
- **Discussions**: [GitHub Discussions](https://github.com/yourusername/laravel-notes-app/discussions)

## 🗺️ Roadmap

- [ ] API endpoints for mobile app
- [ ] Real-time collaborative editing
- [ ] File attachments support
- [ ] Export notes to PDF/Markdown
- [ ] Advanced search with filters
- [ ] Note sharing capabilities
- [ ] Mobile application
- [ ] Integration with cloud storage

---

<div align="center">

**[⬆ Back to Top](#laravel-notes-application)**

Made with ❤️ by [Your Name](https://github.com/yourusername)

</div>
