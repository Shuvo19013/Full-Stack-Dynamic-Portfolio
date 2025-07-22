@extends('layouts.app')

@section('title', 'Shuvo Portfolio')

@section('content')

    @include('sections.hero')
    <hr>
    @include('sections.about')
    <div class="section-divider"></div>
    @include('sections.projects')

    @include('sections.skills')
    @include('sections.contact')

    <footer class="footer">
        <p>© 2025. All rights reserved by Shuvo.</p>
    </footer>

@endsection
