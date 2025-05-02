
# Laravel Socialite Multi-Provider Authentication

This Laravel project demonstrates how to implement **multi-provider OAuth authentication** using [Laravel Socialite](https://laravel.com/docs/socialite). It allows users to log in using:

- 🔐 Google
- 🐱 GitHub
- 🎨 Dribbble

## 🔧 Features

- Register/Login using social accounts.
- Handle OAuth callback securely.
- Dynamically configured providers.


### 1. Clone the repository

```bash
git clone https://github.com/your-username/verification.git
cd verification
```

### 2. Install dependencies

```bash
composer install
npm install && npm run dev
```

### 3. Set up environment variables

Duplicate `.env.example` as `.env`, then configure your database and OAuth keys:

```dotenv
APP_NAME="Socialite Login"
APP_URL=http://localhost:8000

# Database
DB_DATABASE=your_db
DB_USERNAME=your_user
DB_PASSWORD=your_password

# Socialite - Google
GOOGLE_CLIENT_ID=xxxxxxxx
GOOGLE_CLIENT_SECRET=xxxxxxxx
GOOGLE_REDIRECT_URI=http://localhost:8000/auth/callback/google

# Socialite - GitHub
GITHUB_CLIENT_ID=xxxxxxxx
GITHUB_CLIENT_SECRET=xxxxxxxx
GITHUB_REDIRECT_URI=http://localhost:8000/auth/callback/github

# Socialite - Dribbble
DRIBBBLE_CLIENT_ID=xxxxxxxx
DRIBBBLE_CLIENT_SECRET=xxxxxxxx
DRIBBBLE_REDIRECT_URI=http://localhost:8000/auth/callback/dribbble
```

### 4. Run Laravel

```bash
php artisan migrate
php artisan serve
```


## 🧠 Notes

- Uses Laravel 10.x and PHP 8.2+
- Fully customizable with new providers
- Clean, scalable and secure

## 📃 License

MIT © Mohamed Abdelshakor
