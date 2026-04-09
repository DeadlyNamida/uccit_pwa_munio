@extends('layout')

@section('content')
<div class="hero" style="display:grid; grid-template-columns:1.15fr .85fr; gap:20px;">
    <section class="main-card" style="border:1px solid var(--line); border-radius:28px; background:linear-gradient(180deg,rgba(23,25,34,.98),rgba(14,15,21,.98)); box-shadow:var(--shadow); padding:32px;">
        @if(session('success'))
            <div style="
                background: rgba(46, 125, 50, 0.12);
                color: #9be7a5;
                padding: 14px 18px;
                border-radius: 14px;
                margin-bottom: 18px;
                border: 1px solid rgba(155, 231, 165, 0.25);
                font-weight: 600;
            ">
                {{ session('success') }}
            </div>
        @endif

        <div class="eyebrow">Student Dashboard</div>
        <h1 style="margin:0 0 12px; font-size:clamp(2.1rem,4vw,3.4rem); line-height:1.02; letter-spacing:-.04em; color:var(--gold-strong);">
            Welcome back{{ Auth::check() ? ', ' . Auth::user()->name : '' }}
        </h1>
        <p style="color:var(--muted); line-height:1.8;">
            You are now inside the main dashboard for the UCC IT Department App. Use this space to move quickly and experience all aspects of the IT department.
        </p>

        <div style="display:grid; grid-template-columns:repeat(2,minmax(0,1fr)); gap:14px; margin-top:24px;">
            <div style="padding:18px; border-radius:18px; background:rgba(255,255,255,.03); border:1px solid rgba(214,183,120,.14);"><strong style="display:block; margin-bottom:8px; color:var(--text);">Faculty Access</strong><span style="color:var(--muted);">Reach the directory page to view staff contact details.</span></div>
            <div style="padding:18px; border-radius:18px; background:rgba(255,255,255,.03); border:1px solid rgba(214,183,120,.14);"><strong style="display:block; margin-bottom:8px; color:var(--text);">Courses</strong><span style="color:var(--muted);">Review the listed IT courses in the program area.</span></div>
            <div style="padding:18px; border-radius:18px; background:rgba(255,255,255,.03); border:1px solid rgba(214,183,120,.14);"><strong style="display:block; margin-bottom:8px; color:var(--text);">Admissions</strong><span style="color:var(--muted);">Check requirements and application status.</span></div>
            <div style="padding:18px; border-radius:18px; background:rgba(255,255,255,.03); border:1px solid rgba(214,183,120,.14);"><strong style="display:block; margin-bottom:8px; color:var(--text);">Social</strong><span style="color:var(--muted);">View the social media page for UCC updates.</span></div>
        </div>
    </section>

    <aside class="side-card" style="border:1px solid var(--line); border-radius:28px; background:linear-gradient(180deg,rgba(23,25,34,.98),rgba(14,15,21,.98)); box-shadow:var(--shadow); padding:32px;">
        <h2 style="margin:0 0 14px; color:var(--gold-strong); font-size:1.5rem;">Quick Links</h2>
        <p style="color:var(--muted); line-height:1.8;">Use these links to move around the app.</p>

        <div style="display:grid; gap:12px; margin-top:18px;">
            <a href="/home" style="display:block; padding:14px 16px; border-radius:16px; border:1px solid rgba(214,183,120,.14); background:rgba(255,255,255,.03);">Go to Home</a>
            <a href="/directory" style="display:block; padding:14px 16px; border-radius:16px; border:1px solid rgba(214,183,120,.14); background:rgba(255,255,255,.03);">Open Directory</a>
            <a href="/courses" style="display:block; padding:14px 16px; border-radius:16px; border:1px solid rgba(214,183,120,.14); background:rgba(255,255,255,.03);">Browse Courses</a>
            <a href="/admissions" style="display:block; padding:14px 16px; border-radius:16px; border:1px solid rgba(214,183,120,.14); background:rgba(255,255,255,.03);">View Admissions</a>
            <a href="/social" style="display:block; padding:14px 16px; border-radius:16px; border:1px solid rgba(214,183,120,.14); background:rgba(255,255,255,.03);">Open Social</a>
        </div>

        <form method="POST" action="{{ route('logout') }}" style="margin-top:18px;">
            @csrf
            <button type="submit" class="pill" style="width:100%; cursor:pointer; background:rgba(255,255,255,.02); color:var(--text);">
                Log out
            </button>
        </form>
    </aside>
</div>
@endsection
