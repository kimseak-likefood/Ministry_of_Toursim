@extends('layouts.app')

@section('title', 'RoundTours - Tours and Travel Landing Page')

@section('content')
    <div class="pagewrap">
        <div class="head-wrapper">
            @include('partials.header')
            @include('partials.search-engine')
        </div>
    </div>

    @include('sections.recommended')
    @include('sections.special-offers')
    @include('sections.destinations')
    @include('sections.experience')
    @include('sections.popular-routes')
    @include('sections.testimonials')
    @include('sections.blog')
    @include('sections.newsletter')
@endsection
