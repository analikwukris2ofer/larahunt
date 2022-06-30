@extends ('layout')
@section('content')
    {{-- section works together with 'yield' to embed data into the layout. --}}

    <h2>{{ $listing['title'] }}</h2>
    <p>{{ $listing['description'] }}</p>
@endsection
