@props(['title' => 'Responsive Layout', 'subtitle' => 'Without Using Media Query', 'items' => []])

<div class="responsive-grid-container">
    <h1>{{ $title }}</h1>
    <h2>{{ $subtitle }}</h2>
    
    <section class="content-boxes">
        @if(empty($items))
            {{-- Default items if none provided --}}
            @for($i = 1; $i <= 11; $i++)
                <div class="content-box">{{ $i }}</div>
            @endfor
        @else
            {{-- Custom items if provided --}}
            @foreach($items as $item)
                <div class="content-box">{{ $item }}</div>
            @endforeach
        @endif
    </section>
</div> 