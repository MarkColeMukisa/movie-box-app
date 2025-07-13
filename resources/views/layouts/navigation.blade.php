<header>
    <div>Logo</div>
    <nav>
        <a href="/" class="{{ request()->is('/') ? 'active' : 'inactive' }}">Home</a>
        <a href="/movies" class="{{ request()->is('movies*') ? 'active' : 'inactive' }}">Movies</a>
        <a href="/about" class="{{ request()->is('about') ? 'active' : 'inactive' }}">About</a>
        <a href="/contact" class="{{ request()->is('contact') ? 'active' : 'inactive' }}">Contact</a>
    </nav>
    
    <a href="/movies/create" style="text-decoration: none;">
        <button style="padding: 0.5rem 1.5rem; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; border: none; border-radius: 0.5rem; font-weight: 600; cursor: pointer; transition: all 0.3s ease;">Create Movie</button>
    </a>
</header>