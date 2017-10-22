@extends('layouts/master')

@section('title')
    Home Page
@endsection
@section('content')
    @include('layouts/header')
    <div>
        <p>These are all logged actions</p>
        <ul>
            @foreach($logged_actions as $logged_action)
                <li>
                    Logged ID : {{ $logged_action->id }} with action {{ $logged_action->nice_action->name }}
                    <ul>
                        @foreach($logged_action->nice_action->categories as $category)
                            <li>{{ $category->name }}</li>
                        @endforeach
                    </ul>
                </li>
            @endforeach
        </ul>
    </div>
@endsection