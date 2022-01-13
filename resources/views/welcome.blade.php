@extends('layouts.master')

@section('title', 'Home')


@section('content') 
    @include('sections.home')       <!--Brief definition get startted demander le devis   -->
    @include('sections.whyus') <!--a propos de nous    -->
    @include('sections.service')<!--Services-->
    @include('sections.team')<!--Team -->
    @include('sections.recent-project')<!--Realisations -->
    @include('sections.contact')<!--Contact -->
    @include('sections.map')<!-- Map -->
    @include('sections.subscribe')<!--NewsLetter -->
    @include('sections.footer')<!--Footer -->
@stop


<!-- 
                --Definition (Get startted, Demander devis)
                --Services
                --Les realisations
                --FeedBack
                --Team
                --Contact
                --Newsletter
                --Footer
     
 -->