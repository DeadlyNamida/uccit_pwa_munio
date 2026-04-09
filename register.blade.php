@extends('layout')

@section('content')
<div class="hero">
    <section class="copy" style="padding: 44px; position: relative;">
        <div class="eyebrow">Create Account</div>
        <h1>Register for access</h1>
        <p class="intro">
            Make an account to move through the UCC IT Department App and keep your student access in one place.
        </p>

        <div class="feature-list">
            <div class="feature">
                <span class="dot"></span>
                <div>
                    <strong>Simple setup</strong>
                    <p>Add your basic details and start using the app.</p>
                </div>
            </div>

            <div class="feature">
                <span class="dot"></span>
                <div>
                    <strong>Student-first design</strong>
                    <p>The app makes it easy for new and past students to register.</p>
                </div>
            </div>

            <div class="feature">
                <span class="dot"></span>
                <div>
                    <strong>Fast access</strong>
                    <p>Once registered, you can head straight to the dashboard.</p>
                </div>
            </div>
        </div>
    </section>

    <aside class="art">
        <div class="panel" style="width:min(480px,100%);">
            <h2>Create your account</h2>
            <p style="margin:0 0 20px; color: var(--muted); line-height:1.8;">Fill in the form below to continue.</p>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <label for="name" style="display:block; margin:0 0 8px; color:var(--text); font-weight:600;">Name</label>
                <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name" style="width:100%; padding:14px 16px; border-radius:14px; border:1px solid rgba(214,183,120,.18); background:rgba(7,8,12,.55); color:var(--text); outline:none; margin-bottom:16px;">
                @error('name')
                    <div style="margin:-8px 0 12px; color:#ffb4b4; font-size:.95rem;">{{ $message }}</div>
                @enderror

                <label for="email" style="display:block; margin:0 0 8px; color:var(--text); font-weight:600;">Email</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="username" style="width:100%; padding:14px 16px; border-radius:14px; border:1px solid rgba(214,183,120,.18); background:rgba(7,8,12,.55); color:var(--text); outline:none; margin-bottom:16px;">
                @error('email')
                    <div style="margin:-8px 0 12px; color:#ffb4b4; font-size:.95rem;">{{ $message }}</div>
                @enderror

                <label for="password" style="display:block; margin:0 0 8px; color:var(--text); font-weight:600;">Password</label>
                <input id="password" type="password" name="password" required autocomplete="new-password" style="width:100%; padding:14px 16px; border-radius:14px; border:1px solid rgba(214,183,120,.18); background:rgba(7,8,12,.55); color:var(--text); outline:none; margin-bottom:16px;">
                @error('password')
                    <div style="margin:-8px 0 12px; color:#ffb4b4; font-size:.95rem;">{{ $message }}</div>
                @enderror

                <label for="password_confirmation" style="display:block; margin:0 0 8px; color:var(--text); font-weight:600;">Confirm Password</label>
                <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" style="width:100%; padding:14px 16px; border-radius:14px; border:1px solid rgba(214,183,120,.18); background:rgba(7,8,12,.55); color:var(--text); outline:none; margin-bottom:18px;">

                <button type="submit" class="pill" style="width:100%; text-align:center; cursor:pointer; font-size:1rem; background:linear-gradient(135deg,var(--gold-strong),var(--gold)); color:#0b0b0f; border:none; padding:14px 18px;">
                    Register
                </button>
            </form>
        </div>
    </aside>
</div>
@endsection
