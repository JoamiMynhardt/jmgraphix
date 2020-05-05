@extends('portfolioMain')

@section('portfolioTitle', 'Portolfio Show')

@section('portfolioContent')

{{-- <h3>Show {{ $portfolio->name }}</h3> --}}

show 
<img src="{{ url('cover_images/' . $album->cover_image) }}" alt="" style="width: 100%; height: auto; max-width: 400px;">



@endsection