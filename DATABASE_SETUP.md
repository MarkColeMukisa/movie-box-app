# 🗄️ Database Configuration Guide

## 📋 Current Setup

Your project is currently configured to use **SQLite** with the database file located at:
```
database/database.sqlite
```

## 🔧 Database Configuration

### **Current .env Configuration**
```env
DB_CONNECTION=sqlite
DB_DATABASE=database/database.sqlite
```

### **For movie-box Database**

You have two options:

#### **Option 1: Use Existing SQLite File (Recommended)**
Keep using the current `database.sqlite` file but rename it to `movie-box.sqlite`:

```bash
# Rename the existing database file
mv database/database.sqlite database/movie-box.sqlite
```

Then update your `.env` file:
```env
DB_CONNECTION=sqlite
DB_DATABASE=database/movie-box.sqlite
```

#### **Option 2: Create New movie-box Database**
```bash
# Create new SQLite database file
touch database/movie-box.sqlite
```

Then update your `.env` file:
```env
DB_CONNECTION=sqlite
DB_DATABASE=database/movie-box.sqlite
```

## 🔐 Leveraging Sensitive Information in .env

### **Best Practices for .env File Management**

#### **1. Environment-Specific Configuration**
```env
# Development Environment
APP_ENV=local
APP_DEBUG=true
DB_CONNECTION=sqlite
DB_DATABASE=database/movie-box.sqlite

# Production Environment (example)
# APP_ENV=production
# APP_DEBUG=false
# DB_CONNECTION=mysql
# DB_HOST=your-production-host
# DB_DATABASE=movie-box
# DB_USERNAME=your_username
# DB_PASSWORD=your_secure_password
```

#### **2. Using Environment Variables**
```env
# Database Configuration
DB_CONNECTION=${DB_DRIVER:-sqlite}
DB_DATABASE=${DB_NAME:-database/movie-box.sqlite}

# For MySQL (if switching later)
# DB_HOST=${DB_HOST:-127.0.0.1}
# DB_PORT=${DB_PORT:-3306}
# DB_USERNAME=${DB_USER:-root}
# DB_PASSWORD=${DB_PASS:-}
```

#### **3. Secure Configuration Examples**

**Development (.env)**
```env
APP_NAME="Movie App"
APP_ENV=local
APP_DEBUG=true
APP_URL=http://localhost:8000

# Database
DB_CONNECTION=sqlite
DB_DATABASE=database/movie-box.sqlite

# Mail (for development)
MAIL_MAILER=log
MAIL_HOST=localhost
MAIL_PORT=1025
MAIL_USERNAME=null
MAIL_PASSWORD=null
```

**Production (.env)**
```env
APP_NAME="Movie App"
APP_ENV=production
APP_DEBUG=false
APP_URL=https://your-domain.com

# Database (MySQL example)
DB_CONNECTION=mysql
DB_HOST=your-db-host.com
DB_PORT=3306
DB_DATABASE=movie-box
DB_USERNAME=your_db_user
DB_PASSWORD=your_secure_password

# Mail (production)
MAIL_MAILER=smtp
MAIL_HOST=your-mail-host.com
MAIL_PORT=587
MAIL_USERNAME=your-email@domain.com
MAIL_PASSWORD=your-email-password
MAIL_ENCRYPTION=tls
```

## 🚀 Database Setup Commands

### **1. Create and Configure Database**
```bash
# Create SQLite database file
touch database/movie-box.sqlite

# Run migrations
php artisan migrate:fresh

# Seed with sample data
php artisan db:seed
```

### **2. Verify Database Connection**
```bash
# Check database connection
php artisan tinker --execute="echo 'Database connected: ' . (DB::connection()->getPdo() ? 'Yes' : 'No');"

# Check if tables exist
php artisan tinker --execute="echo 'Movies table exists: ' . (Schema::hasTable('movies') ? 'Yes' : 'No');"
```

### **3. Database Operations**
```bash
# Reset database
php artisan migrate:fresh --seed

# Check movie count
php artisan tinker --execute="echo 'Movies count: ' . App\Models\Movie::count();"
```

## 🔒 Security Best Practices

### **1. .env File Security**
```bash
# Ensure .env is in .gitignore
echo ".env" >> .gitignore

# Set proper file permissions (Linux/Mac)
chmod 600 .env
```

### **2. Environment Variables**
```env
# Use strong, unique passwords
DB_PASSWORD=your_very_secure_password_here

# Use environment-specific configurations
CACHE_DRIVER=${CACHE_DRIVER:-file}
SESSION_DRIVER=${SESSION_DRIVER:-file}
QUEUE_CONNECTION=${QUEUE_CONNECTION:-sync}
```

### **3. Production Security**
```env
# Disable debug mode in production
APP_DEBUG=false

# Use HTTPS in production
APP_URL=https://your-domain.com

# Secure session configuration
SESSION_SECURE_COOKIE=true
SESSION_HTTP_ONLY=true
```

## 📊 Database Schema

### **Movies Table Structure**
```sql
CREATE TABLE movies (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    title VARCHAR(255) NOT NULL,
    desc TEXT NOT NULL,
    vj VARCHAR(255) NOT NULL,
    release_date DATE NOT NULL,
    created_at TIMESTAMP,
    updated_at TIMESTAMP
);
```

### **Sample Data**
The database is seeded with 11 popular movies including:
- The Shawshank Redemption
- The Godfather
- Pulp Fiction
- Fight Club
- Forrest Gump
- And more...

## 🔄 Switching Database Types

### **From SQLite to MySQL**
1. Update `.env` file:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=movie-box
DB_USERNAME=root
DB_PASSWORD=your_password
```

2. Create MySQL database:
```sql
CREATE DATABASE `movie-box`;
```

3. Run migrations:
```bash
php artisan migrate:fresh --seed
```

### **From SQLite to PostgreSQL**
1. Update `.env` file:
```env
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=movie-box
DB_USERNAME=postgres
DB_PASSWORD=your_password
```

## 🛠️ Troubleshooting

### **Common Issues**

1. **Database file not found**
```bash
# Create database file
touch database/movie-box.sqlite
```

2. **Permission denied**
```bash
# Set proper permissions
chmod 644 database/movie-box.sqlite
```

3. **Migration errors**
```bash
# Reset database
php artisan migrate:fresh --seed
```

4. **Environment variables not loading**
```bash
# Clear config cache
php artisan config:clear
php artisan cache:clear
```

## 📝 Summary

Your current setup is perfect for development:
- ✅ SQLite database configured
- ✅ Database file exists
- ✅ Migrations and seeders working
- ✅ 11 sample movies loaded

To use the `movie-box` database name, simply rename your existing `database.sqlite` file to `movie-box.sqlite` and update your `.env` file accordingly.

The `.env` file is the perfect place to store sensitive information like database credentials, API keys, and other configuration that varies between environments. 