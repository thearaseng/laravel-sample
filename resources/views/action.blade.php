@extends('layouts/master')

@section('title')
    Action Page
@endsection
@section('content')
    @include('layouts/header')
    <form action="{{ route('postNiceAction') }}" method="post">
        <lable for="name">Name : </lable>
        <input type="text" name="username" id="name">
        <input type="submit" value="Do action">
        <input type="hidden" name="_token" value="{{ Session::token() }}">
    </form>
@endsection