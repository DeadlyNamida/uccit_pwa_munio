@extends('layout')

@section('content')
<div class="hero">
    <div class="copy">
        <span class="eyebrow">Programme</span>
        <h1>Courses</h1>
        <p>Browse the listed IT courses available in the app.</p>

        <div class="feature-list">
            <div class="feature">
                <span class="dot"></span>
                <div>
                    <strong>Core IT Modules</strong>
                    <p>View programming, database, networking, software engineering, operating systems, and web development subjects in one place.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="card">
        <h2>Course Listing</h2>
        <ul>
            <li>ITT101 Programming 1</li>
            <li>ITT102 Programming 2</li>
            <li>ITT200 Database Systems</li>
            <li>ITT201 Data Structures</li>
            <li>ITT202 Web Development</li>
            <li>ITT300 Software Engineering</li>
            <li>ITT301 Operating Systems</li>
            <li>ITT302 Computer Networks</li>
            <li>ITT306 Mobile App Development</li>
            <li>ITT307 Internet Authoring II</li>
        </ul>

        <div class="button-row" style="margin-top:28px;">
            <a class="button" href="{{ url('/home') }}">Back Home</a>
            <a class="button" href="{{ url('/admissions') }}">Admissions</a>
        </div>
    </div>
</div>
@endsection
