@extends('layouts.master')

@section('title', 'Home')


@section('content') 
    @include('sections.home')       <!--Brief definition get startted demander le devis   -->
    @include('sections.whyus') <!--a propos de nous    -->
    @include('sections.portfolio')  
    @include('sections.service')
    @include('sections.team')
    @include('sections.recent-project')
    @include('sections.sponsore')
    @include('sections.subscribe')
    @include('sections.contact')
    @include('sections.footer')
@stop


<!-- 
                Brief definition (Get startted, Demander devis)
                A propos de nous
                Services
                Les realisations
                Pourquoi nos clients adorent travailler avec nous ?
                FeedBack
                Partenariats
                Team
                Contact
                Demande de devis
                Newsletter
                Footer
     
 -->