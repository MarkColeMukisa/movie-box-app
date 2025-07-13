# 🎬 Laravel Movie App

A modern, responsive movie management application built with Laravel, featuring a beautiful responsive design and full CRUD operations.

## ✨ Features

### 🎨 **Responsive Design**
- **CSS Grid Layout**: Auto-fitting responsive grid system
- **No Media Queries**: Uses modern CSS Grid with `auto-fit` and `minmax()`
- **Fluid Typography**: Text scales with viewport using `clamp()`
- **Beautiful Background**: Grid pattern with gradient overlay
- **Mobile-First**: Optimized for all device sizes

### 🎭 **Movie Management**
- **Full CRUD Operations**: Create, Read, Update, Delete movies
- **Database Integration**: SQLite database with seeded sample data
- **Validation**: Server-side validation for all movie fields
- **Search & Filter**: Easy navigation through movie listings

### 🎯 **User Interface**
- **Modern Navigation**: Active state highlighting with request helpers
- **Responsive Header**: Logo, navigation, and action buttons
- **Beautiful Forms**: Styled forms with validation feedback
- **Success Messages**: User feedback for all operations

## 🚀 Quick Start

### Prerequisites
- PHP 8.1 or higher
- Composer
- Node.js & NPM
- Git

### Installation

1. **Clone the repository**
   ```bash
   git clone <repository-url>
   cd movie-app
   ```

2. **Install PHP dependencies**
   ```bash
   composer install
   ```

3. **Install Node.js dependencies**
   ```bash
   npm install
   ```

4. **Environment setup**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. **Database setup**
   ```bash
   php artisan migrate:fresh --seed
   ```

6. **Build assets**
   ```bash
   npm run build
   ```

7. **Start the development server**
   ```bash
   php artisan serve
   ```

8. **Visit the application**
   ```
   http://localhost:8000
   ```

## 📁 Project Structure

```
movie-app/
├── app/
│   ├── Http/Controllers/
│   │   └── MovieController.php      # Movie CRUD operations
│   └── Models/
│       └── Movie.php               # Movie model
├── database/
│   ├── migrations/
│   │   └── create_movies_table.php # Database schema
│   └── seeders/
│       └── DatabaseSeeder.php      # Sample movie data
├── resources/
│   ├── css/
│   │   └── app.css                # Responsive design styles
│   ├── views/
│   │   ├── components/
│   │   │   └── responsive-grid.blade.php
│   │   ├── layouts/
│   │   │   ├── app.blade.php      # Main layout
│   │   │   └── navigation.blade.php
│   │   └── movies/
│   │       ├── index.blade.php    # Movie listing
│   │       ├── show.blade.php     # Movie details
│   │       ├── create.blade.php   # Create movie
│   │       └── edit.blade.php     # Edit movie
│   └── js/
│       └── app.js
└── routes/
    └── web.php                    # Application routes
```

## 🎨 Design Features

### **Responsive Grid System**
```css
.content-boxes {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(min(100%, 200px), 1fr));
  gap: 1rem;
}
```

### **Fluid Typography**
```css
h1 {
  font-size: clamp(0.5rem, 2vw + 0.5rem, 1.75rem);
}
```

### **Active Navigation States**
```blade
<a href="/movies" class="{{ request()->is('movies*') ? 'active' : 'inactive' }}">
  Movies
</a>
```

## 📱 Pages & Routes

| Route | Method | Description |
|-------|--------|-------------|
| `/` | GET | Home page with responsive grid |
| `/movies` | GET | Movie listing with CRUD operations |
| `/movies/create` | GET | Create new movie form |
| `/movies/{movie}` | GET | Individual movie details |
| `/movies/{movie}/edit` | GET | Edit movie form |
| `/about` | GET | About page |
| `/contact` | GET | Contact page |
| `/example` | GET | Example page showcasing responsive grid |

## 🎬 Movie Management

### **Movie Model Fields**
- `title` - Movie title (string)
- `desc` - Movie description (text)
- `vj` - Video Jockey/Director (string)
- `release_date` - Release date (date)

### **CRUD Operations**
- **Create**: Add new movies with validation
- **Read**: View movie listings and individual details
- **Update**: Edit existing movies
- **Delete**: Remove movies with confirmation

## 🎨 Customization

### **Adding New Pages**
1. Create a new Blade view in `resources/views/`
2. Add route in `routes/web.php`
3. Add navigation link in `resources/views/layouts/navigation.blade.php`

### **Using the Responsive Grid**
```blade
<x-responsive-grid 
    title="Your Title" 
    subtitle="Your Subtitle" 
    :items="['Item 1', 'Item 2', 'Item 3']"
/>
```

### **Styling**
- Main styles: `resources/css/app.css`
- Responsive design with CSS Grid
- Gradient backgrounds and smooth animations
- Mobile-first approach

## 🛠️ Development

### **Asset Compilation**
```bash
# Development
npm run dev

# Production
npm run build
```

### **Database Operations**
```bash
# Run migrations
php artisan migrate

# Seed database
php artisan db:seed

# Reset database
php artisan migrate:fresh --seed
```

### **Testing**
```bash
# Run tests
php artisan test
```

## 🎯 Key Technologies

- **Backend**: Laravel 11.x
- **Frontend**: Blade templates, CSS Grid
- **Database**: SQLite (development)
- **Build Tool**: Vite
- **Styling**: Custom CSS with responsive design
- **JavaScript**: Alpine.js (if needed)

## 🚀 Deployment

### **Production Setup**
1. Set environment variables
2. Run `composer install --optimize-autoloader --no-dev`
3. Run `npm run build`
4. Set up database and run migrations
5. Configure web server (Apache/Nginx)

### **Environment Variables**
```env
APP_ENV=production
APP_DEBUG=false
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

## 🤝 Contributing

1. Fork the repository
2. Create a feature branch
3. Make your changes
4. Test thoroughly
5. Submit a pull request

## 📄 License

This project is open-sourced software licensed under MarkColeMukisa.

## 🙏 Acknowledgments

- **Laravel Team**: For the amazing framework
- **CSS Grid**: For responsive design without media queries
- **Vite**: For fast asset compilation

**Built with ❤️ MarkColeMukisa**
