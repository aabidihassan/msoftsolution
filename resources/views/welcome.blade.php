@extends('layouts.master')

@section('title', 'Home')


@section('content')
    @include('sections.home')
    @include('sections.portfolio')
    @include('sections.subscribe')
    @include('sections.whyus')
    @include('sections.recent-project')
    @include('sections.footer')
@stop