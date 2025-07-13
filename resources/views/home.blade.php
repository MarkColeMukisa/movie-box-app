@extends('layouts.app')

@section('title','Home')

@section('content')
<div class="container">
    <h2>Welcome to the Movie App</h2>
    
    {{-- Example of the responsive grid --}}
    <x-responsive-grid 
        title="Movie Categories" 
        subtitle="Responsive Grid Layout" 
        :items="['Action', 'Comedy', 'Drama', 'Horror', 'Sci-Fi', 'Romance', 'Thriller', 'Documentary', 'Animation', 'Adventure', 'Mystery']"
    />
</div>
@endsection