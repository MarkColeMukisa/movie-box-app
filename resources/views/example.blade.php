@extends('layouts.app')

@section('title','Example Page')

@section('content')
<div class="container">
    <h2>Example Page - Responsive Grid Usage</h2>
    
    {{-- Example 1: Default grid with numbers --}}
    <x-responsive-grid />
    
    {{-- Example 2: Custom title and items --}}
    <x-responsive-grid 
        title="Popular Movies" 
        subtitle="Top Rated Films" 
        :items="['The Shawshank Redemption', 'The Godfather', 'Pulp Fiction', 'Fight Club', 'Forrest Gump', 'Inception', 'The Matrix', 'Goodfellas', 'The Silence of the Lambs', 'Interstellar', 'The Dark Knight']"
    />
    
    {{-- Example 3: Another custom grid --}}
    <x-responsive-grid 
        title="Genres" 
        subtitle="Movie Genres" 
        :items="['Action', 'Comedy', 'Drama', 'Horror', 'Sci-Fi', 'Romance']"
    />
</div>
@endsection 