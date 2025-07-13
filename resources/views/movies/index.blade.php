@extends('layouts.app')

@section('title','Movies')

@section('content')
    <div class="container">
        <h2>Latest Movies</h2>

        {{-- Danger Message --}}
        @if(session('danger'))
            <div style="margin-bottom: 1rem; padding: 1rem; background: rgba(242, 0, 0, 0.1); border: 1px solid rgba(125, 0, 0, 0.3); border-radius: 0.5rem; color: #8b0000;">
                {{ session('danger') }}
            </div>
        @endif

        {{-- Success Message --}}
        @if(session('success'))
            <div style="margin-bottom: 1rem; padding: 1rem; background: rgba(34, 197, 94, 0.1); border: 1px solid rgba(34, 197, 94, 0.3); border-radius: 0.5rem; color: #166534;">
                {{ session('success') }}
            </div>
        @endif

        @if($movies->count() > 0)
            {{-- Responsive Grid with Movies from Database --}}
            <x-responsive-grid 
                title="Latest Movies"
                subtitle="Fresh Releases"
                :items="$movies->pluck('title')->toArray()"
            />
            
            {{-- Movie Links Section --}}
            <div style="margin-top: 2rem; padding: 1.5rem; background: rgba(255, 255, 255, 0.9); border-radius: 1rem; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);">
                <h3 style="color: #333; margin-bottom: 1rem; text-align: center;">Movie Details</h3>
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 1rem;">
                    @foreach($movies as $movie)
                        <div style="padding: 1rem; border: 1px solid rgba(0, 0, 0, 0.1); border-radius: 0.5rem; background: rgba(255, 255, 255, 0.7);">
                            <h4 style="margin-bottom: 0.5rem;">
                                <a href="/movies/{{ $movie->id }}" style="color: #667eea; text-decoration: none; font-weight: bold;">
                                    {{ $movie->title }}
                                </a>
                            </h4>
                            <p style="color: #666; font-size: 0.9rem; margin-bottom: 0.5rem;">
                                <strong>Director:</strong> {{ $movie->vj }}
                            </p>
                            <p style="color: #666; font-size: 0.9rem;">
                                <strong>Released:</strong> {{ $movie->release_date }}
                            </p>
                        </div>
                    @endforeach
                </div>
            </div>
        @else
            {{-- Fallback if no movies in database --}}
            <x-responsive-grid 
                title="Sample Movies"
                subtitle="No movies in database yet"
                :items="['The Shawshank Redemption', 'The Godfather', 'Pulp Fiction', 'Fight Club', 'Forrest Gump', 'Inception', 'The Matrix', 'Goodfellas', 'The Silence of the Lambs', 'Interstellar', 'The Dark Knight']"
            />
            
            <div style="margin-top: 2rem; text-align: center; padding: 1rem; background: rgba(255, 193, 7, 0.1); border-radius: 0.5rem;">
                <p><strong>Note:</strong> No movies found in database. Showing sample data instead.</p>
                <p>Add some movies to see them displayed here!</p>
            </div>
        @endif
    </div>
@endsection