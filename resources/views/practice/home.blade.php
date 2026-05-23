@php
    $isactive = true;

@endphp

@extends('practice.layout')

@section('title')
    Home Page
@endsection
@push('context')
    @context('description')
        Home page of my Laravel application
    @endcontext
@endpush
@section('header')
    <div @class(['p-4', 'text-blue-500' => $isactive])>
        <ul>
            <li style="background-color: aqua; color: blue">
                Home
            </li>
            <li>
                about
            </li>
        </ul>
    </div>
    @include('yes', ['status' => 'complete'])
@endsection
@section('content')
    <p>IT is Conten</p>
@endsection
