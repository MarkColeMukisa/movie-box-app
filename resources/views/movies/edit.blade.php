@extends('layouts.app')

@section('title','Edit Movie')

@section('content')
    <div class="container">
        <h2>Edit Movie</h2>

        {{-- Edit Form --}}
        <div style="margin-bottom: 2rem; padding: 1.5rem; background: rgba(255, 255, 255, 0.9); border-radius: 1rem; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);">
            <form method="POST" action="/movies/{{ $movie->id }}">
                @csrf
                @method('PUT')
                
                <div style="margin-bottom: 1rem;">
                    <label style="display: block; margin-bottom: 0.5rem; font-weight: bold; color: #333;">Title:</label>
                    <input type="text" name="title" value="{{ $movie->title }}" style="width: 100%; padding: 0.75rem; border: 1px solid rgba(0, 0, 0, 0.2); border-radius: 0.5rem; font-size: 1rem;">
                </div>

                <div style="margin-bottom: 1rem;">
                    <label style="display: block; margin-bottom: 0.5rem; font-weight: bold; color: #333;">Description:</label>
                    <textarea name="desc" rows="4" style="width: 100%; padding: 0.75rem; border: 1px solid rgba(0, 0, 0, 0.2); border-radius: 0.5rem; font-size: 1rem;">{{ $movie->desc }}</textarea>
                </div>

                <div style="margin-bottom: 1rem;">
                    <label style="display: block; margin-bottom: 0.5rem; font-weight: bold; color: #333;">Video Jockey:</label>
                    <input type="text" name="vj" value="{{ $movie->vj }}" style="width: 100%; padding: 0.75rem; border: 1px solid rgba(0, 0, 0, 0.2); border-radius: 0.5rem; font-size: 1rem;">
                </div>

                <div style="margin-bottom: 1.5rem;">
                    <label style="display: block; margin-bottom: 0.5rem; font-weight: bold; color: #333;">Release Date:</label>
                    <input type="date" name="release_date" value="{{ $movie->release_date }}" style="width: 100%; padding: 0.75rem; border: 1px solid rgba(0, 0, 0, 0.2); border-radius: 0.5rem; font-size: 1rem;">
                </div>

                <div style="text-align: center;">
                    <button type="submit" style="padding: 0.75rem 2rem; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; border: none; border-radius: 0.5rem; font-weight: 600; cursor: pointer; margin-right: 1rem; transition: all 0.3s ease;">
                        Update Movie
                    </button>
                    <a href="/movies/{{ $movie->id }}" style="display: inline-block; padding: 0.75rem 2rem; background: rgba(0, 0, 0, 0.1); color: #333; text-decoration: none; border-radius: 0.5rem; transition: all 0.3s ease;">
                        Cancel
                    </a>
                </div>
            </form>
        </div>
    </div>
@endsection