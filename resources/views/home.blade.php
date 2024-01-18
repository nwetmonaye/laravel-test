@extends('layouts.main')

@section('myContent')
    <h1 style="color: red;">This is Home Page</h1>
    {{-- {{ $name }} => xxs attact protect --}}
    {!! $name !!} => xxs attact not protect
    {{ $age }}
    <hr>

    <a href="{{ url('result/20/40') }}">URL</a> |
    <a href="{{ route('myCalculation', [50, 20]) }}">Route</a>
    <a href="{{ route('passwithRoute', 'NMA') }}">Para Pass</a>
    <br>

    <img src="{{ asset('image/nma.jpg') }}" width="300px">
@endsection
