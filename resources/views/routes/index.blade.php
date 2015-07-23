@extends('layouts.app')
 
@section('content')
    <h2>Routes</h2>
 
    @if ( !$routes->count() )
        You have no routes.
    @else
        <ul>
            @foreach( $routes as $route)
                <li><a href="{{ route('routes.show', $route->id) }}">{{ $route->name }}</a></li>
            @endforeach
        </ul>
    @endif
@endsection
