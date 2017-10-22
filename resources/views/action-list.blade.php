@extends('layouts/master')

@section('title')
    List all actions
@endsection
@section('content')
    @include('layouts/header')
    <div>
        <p>All actions</p>
        <ul>
            @foreach($actions as $action)
                <li>{{ $action->name }}</li>
            @endforeach
        </ul>
    </div>
@endsection