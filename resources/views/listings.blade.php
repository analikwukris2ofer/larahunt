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


    <h1>{{ $heading }}</h1>
    @unless(count($listings) == 0)
        @foreach ($listings as $listing)
            <h2>
                <a href="/listings/{{ $listing['id'] }}"> {{ $listing['title'] }}</a>
            </h2>
            <p>{{ $listing['description'] }}</p>
        @endforeach
    @else
        <p>No listings found</p>
    @endunless
@endsection
