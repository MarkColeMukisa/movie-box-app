@extends('layouts.app')

@section('title', $movie->title)

@section('content')
    <div class="container">
        <h2>Movie Details</h2>

        {{-- Success Message --}}
        @if(session('success'))
            <div style="margin-bottom: 1rem; padding: 1rem; background: rgba(34, 197, 94, 0.1); border: 1px solid rgba(34, 197, 94, 0.3); border-radius: 0.5rem; color: #166534;">
                {{ session('success') }}
            </div>
        @endif

        {{-- Movie Information Display --}}
        <div style="margin-bottom: 2rem; padding: 1.5rem; background: rgba(255, 255, 255, 0.9); border-radius: 1rem; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);">
            <h3 style="color: #333; margin-bottom: 1rem;">{{ $movie->title }}</h3>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 1rem; margin-bottom: 1rem;">
                <div>
                    <strong>Description:</strong>
                    <p>{{ $movie->desc }}</p>
                </div>
                <div>
                    <strong>Video Jockey:</strong>
                    <p>{{ $movie->vj }}</p>
                </div>
                <div>
                    <strong>Release Date:</strong>
                    <p>{{ $movie->release_date }}</p>
                </div>
            </div>
        </div>


        {{-- Navigation Links --}}
        <div style="margin-top: 2rem; display: flex; align-items: center; justify-content: space-between;">
            <a href="/movies/{{ $movie->id }}/edit" style="display: inline-block; padding: 0.75rem 1.5rem; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; text-decoration: none; border-radius: 0.5rem; margin: 0 0.5rem; transition: all 0.3s ease;">
                Edit
            </a>
            <a href="/movies" style="display: inline-block; padding: 0.75rem 1.5rem; background: rgba(0, 0, 0, 0.1); color: #333; text-decoration: none; border-radius: 0.5rem; margin: 0 0.5rem; transition: all 0.3s ease;">
                ← Back to Movies
            </a>
            <button 
            style="display: inline-block; padding: 0.75rem 1.5rem; background: linear-gradient(135deg, #a00000   0%, #ff0008 100%);         color: white; text-decoration: none; border-radius: 0.5rem; margin: 0 0.5rem; transition: all 0.3s ease;" 
            form="delete-form">
            Delete</button>

        </div>
    </div>

    {{-- Delete Form --}}
            <form method="POST" action="/movies/{{ $movie->id }}" class="hidden" id="delete-form">
                @csrf
                @method('DELETE')
                
            </form>
@endsection