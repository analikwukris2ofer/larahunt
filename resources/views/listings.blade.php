{{-- <h1><?php echo $heading; ?></h1>
<?php foreach($listings as $listing): ?>
<h2><?php echo $listing['title']; ?></h2>
<h2><?php echo $listing['description']; ?></h2>
<?php endforeach; ?> this is in comments --}}


{{-- @php
$test = 1;
@endphp;
{{ $test }} --}}


{{-- @if (count($listings) == 0)
    <p>No listings found</p>
@endif --}}


@extends ('layout')
@section('content')
    {{-- section works together with 'yield' to embed data into the layout. --}}
    @include('partials._hero')
    {{-- includes the _hero.blade.php file from the partials folder. --}}
    @include('partials._search')


    {{-- <h1>{{ $heading }}</h1> --}}
    <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
        @unless(count($listings) == 0)
            @foreach ($listings as $listing)
                <x-listing-card :listing="$listing" />
                {{-- This pulls in the listing-card component from the components folder into our app.
            the ':' in front of listing is important begins its binds the variable being passed in to the 
            prop. --}}
            @endforeach
        @else
            <p>No listings found</p>
        @endunless
    </div>
@endsection
