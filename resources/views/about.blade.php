@extends('layouts.app')

@section('title','About')

@section('content')
<div class="container">
    <h2>About Our Movie App</h2>
    
    <x-responsive-grid 
        title="Our Features" 
        subtitle="What Makes Us Special" 
        :items="['HD Quality', 'Multiple Languages', '24/7 Support', 'Offline Viewing', 'Custom Playlists', 'Family Friendly']"
    />
    
    <div style="margin-top: 2rem; text-align: center;">
        <p>We are passionate about bringing you the best movie experience with our responsive design and user-friendly interface.</p>
    </div>
</div>
@endsection