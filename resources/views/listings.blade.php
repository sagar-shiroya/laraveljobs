@extends('layout')

@section('content')
@unless(count($listings) === 0)
    @foreach($listings as $listing)
        <h2>{{$listing['title']}}</h2>
        <p>{{$listing['description']}}</p>
    @endforeach
@else
    <p>No listing found!</p>
@endunless

@endsection
