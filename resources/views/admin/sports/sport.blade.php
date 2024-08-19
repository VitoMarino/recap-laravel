@extends('layouts.app')

@section('content')
    <h1>Sports</h1>

    <ul>
        @foreach ( $sportList as $sport )
            <li>
                {{$sport->name}}
            </li>
        @endforeach
    </ul>
@endsection
