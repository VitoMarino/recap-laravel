@extends('layouts.app')

@section('content')
    <h1>Country</h1>

    <ul>
        @foreach ( $countryList as $country )
            <li>
                {{$country->name}}
            </li>
        @endforeach
    </ul>
@endsection
