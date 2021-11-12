@extends('layouts.master')

@section('title', 'Home')


@section('content')
    @include('sections.home')
    @include('sections.portfolio')
    @include('sections.footer')
@stop