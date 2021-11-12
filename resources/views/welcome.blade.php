@extends('layouts.master')

@section('title', 'Home')


@section('content')
    @include('sections.home')
    @include('sections.portfolio')
    @include('sections.whyus')
    @include('sections.recent-project')
    @include('sections.subscribe')
    @include('sections.footer')
@stop


<!-- 
    home  =  slide :) 
     portfolio = Over 2200 Projects Completed
     subscribe  = subscribde
     whyus =  why us 
     recent project = les projects recent 
     
 -->