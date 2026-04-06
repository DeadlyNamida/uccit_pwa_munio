@extends('layout')

@section('content')
<div class="hero">
    <div class="copy">
        <span class="eyebrow">Faculty</span>
        <h1>Faculty Directory</h1>
        <p>View faculty contact details for the IT department.</p>

        <div class="feature-list">
            <div class="feature">
                <span class="dot"></span>
                <div>
                    <strong>Direct Contact Access</strong>
                    <p>Use the phone and email links below to reach the listed faculty member quickly.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="card">
        <h2>Dr Brown</h2>
        <p>Phone: <a href="tel:8761234567">876-123-4567</a></p>
        <p>Email: <a href="mailto:brown@ucc.edu.jm">brown@ucc.edu.jm</a></p>

        <div class="button-row" style="margin-top:28px;">
            <a class="button" href="{{ url('/home') }}">Back Home</a>
            <a class="button" href="{{ url('/courses') }}">View Courses</a>
        </div>
    </div>
</div>
@endsection
