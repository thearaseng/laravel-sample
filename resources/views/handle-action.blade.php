@extends('layouts/master')

@section('title')
    Handle Action Page
@endsection
@section('content')
    @include('layouts/header')
    <div>
        <p>Hello {{ $name }}, with the action '{{ $action }}'</p>
    </div>
@endsection