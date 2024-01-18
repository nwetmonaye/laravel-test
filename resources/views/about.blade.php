@extends('layouts.main')

@section('myContent')
    <h1 style="color:blue;">This is About Page</h1>
    <h2>{{ $message }}</h2>
    <h3>{{ $num1 }} + {{ $num2 }} = {{ $num1 + $num2 }}</h3>

    <hr>
@endsection
