@extends('layouts.app')
 
@section('content')
    <h2>Locations</h2>
 
    @if ( !$locations->count() )
        You have no locations
    @else
        <ul>
            @foreach( $locations as $location)
                <li><a href="{{ route('locations.show', $location->id) }}">{{ $location->name }}</a></li>
            @endforeach
        </ul>
    @endif
@endsection
