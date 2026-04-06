@extends('layout')

@section('content')
<div class="hero">
    <div class="copy">
        <span class="eyebrow">Entry</span>
        <h1>Admissions Requirements</h1>
        <p>Apply for basic admission to UCC and review the main entry requirement for new students.</p>

        <div class="feature-list">
            <div class="feature">
                <span class="dot"></span>
                <div>
                    <strong>Minimum Subject Requirement</strong>
                    <p>Select at least 5 CXC subjects, including Mathematics and English.</p>
                </div>
            </div>

            <div class="feature">
                <span class="dot"></span>
                <div>
                    <strong>Application Access</strong>
                    <p>Use the official UCC application page to begin your submission.</p>
                </div>
            </div>
        </div>

        <div class="button-row" style="margin-top:28px;">
            <a class="button" href="https://www.ucc.edu.jm/apply" target="_blank" rel="noopener noreferrer">Apply to UCC</a>
            <a class="button" href="{{ url('/home') }}">Back Home</a>
        </div>
    </div>
</div>
@endsection
