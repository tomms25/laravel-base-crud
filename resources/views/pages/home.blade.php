@extends('layouts.main-layout')

@section('content')

    <h1>SANTI</h1>

    <ul>
        @foreach ($santis as $santi)
            <li>{{ $santi -> name }} {{ $santi -> place_of_birth }} {{ $santi -> given_blessing }} {{ $santi -> miracles_number}}</li>
        @endforeach
    </ul>

@endsection