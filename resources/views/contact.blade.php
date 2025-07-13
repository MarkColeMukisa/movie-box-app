@extends('layouts.app')

@section('title','Contact')

@section('content')
<div class="container">
    <h2>Contact Us</h2>
    
    <x-responsive-grid 
        title="Get In Touch" 
        subtitle="Multiple Ways to Reach Us" 
        :items="['Email', 'Phone', 'Live Chat', 'Social Media', 'Support Ticket', 'FAQ']"
    />
    
    <div style="margin-top: 2rem; text-align: center;">
        <p>We'd love to hear from you! Choose your preferred method of contact above.</p>
    </div>
</div>
@endsection