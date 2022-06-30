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


<h1>{{ $heading }}</h1>
@unless(count($listings) == 0)
    @foreach ($listings as $listing)
        <h2>{{ $listing['title'] }}</h2>
        <h2>{{ $listing['description'] }}</h2>
    @endforeach
@else
    <p>No listings found</p>
@endunless
