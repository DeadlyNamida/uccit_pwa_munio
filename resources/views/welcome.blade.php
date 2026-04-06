@extends('layout')

@section('content')
<div class="hero">
    <div class="copy">
        <span class="eyebrow">Welcome</span>
        <h1>Munio | UCC IT Registration App</h1>
        <p>Welcome to the IT Department's Progressive Web App, Munio.</p>

        <div class="feature-list">
            <div class="feature">
                <span class="dot"></span>
                <div>
                    <strong>Start Here</strong>
                    <p>Use the links below to move into the main parts of the app and explore the available sections.</p>
                </div>
            </div>
        </div>

        <div class="button-row" style="margin-top:28px;">
            <a class="button" href="{{ url('/home') }}">Return To Homepage</a>
            <a class="button" href="{{ url('/directory') }}">Open Directory</a>
            <a class="button" href="{{ url('/courses') }}">View Courses</a>
            <a class="button" href="{{ url('/admissions') }}">Admissions</a>
            <a class="button" href="{{ url('/social') }}">Social</a>
        </div>
    </div>
</div>

<div class="container">
    <div class="card">
        <h2>Explore Munio</h2>
        <p>Use the navigation above to browse all sections.</p>
    </div>
</div>
@endsection
