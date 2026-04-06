

@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard | Munio
    </title>
    <style>
        :root{
            --line:rgba(214,183,120,.22);
            --gold:#d7b778;
            --gold-strong:#f1d59a;
            --text:#f4efe3;
            --muted:#b9b1a1;
            --shadow:0 22px 55px rgba(0,0,0,.38);
        }
        *{box-sizing:border-box}
        body{
            margin:0;min-height:100vh;font-family:"Segoe UI",Arial,sans-serif;color:var(--text);
            background:radial-gradient(circle at top, rgba(215,183,120,.10), transparent 28%),linear-gradient(180deg,#08090d 0%,#0b0b0f 100%);
            padding:24px;
        }
        a{color:inherit;text-decoration:none}
        .frame{width:min(1120px,100%);margin:0 auto}
        .topbar{
            display:flex;justify-content:space-between;align-items:center;gap:16px;flex-wrap:wrap;margin-bottom:22px;
            padding:16px 18px;border:1px solid var(--line);border-radius:22px;background:rgba(18,19,26,.88);box-shadow:var(--shadow);
        }
        .brand{color:var(--gold-strong);font-weight:700;letter-spacing:.08em;text-transform:uppercase;font-size:.92rem}
        .nav-links,.auth-links{display:flex;gap:10px;flex-wrap:wrap;align-items:center}
        .pill{
            padding:10px 16px;border:1px solid rgba(214,183,120,.18);border-radius:999px;background:rgba(255,255,255,.02);
            transition:all .2s ease;font-weight:600;
        }
        .pill:hover{background:rgba(215,183,120,.08);color:var(--gold-strong)}
        .logout-btn{border:none;background:none;color:inherit;font:inherit;cursor:pointer;padding:10px 16px}
        .hero{display:grid;grid-template-columns:1.15fr .85fr;gap:20px}
        .main-card,.side-card{
            border:1px solid var(--line);border-radius:28px;background:linear-gradient(180deg,rgba(23,25,34,.98),rgba(14,15,21,.98));
            box-shadow:var(--shadow);padding:32px;
        }
        .eyebrow{
            display:inline-flex;align-items:center;gap:10px;margin-bottom:16px;color:var(--gold);text-transform:uppercase;
            letter-spacing:.18em;font-size:.76rem;font-weight:700;
        }
        .eyebrow::before{content:"";width:34px;height:1px;background:rgba(215,183,120,.55)}
        h1{margin:0 0 12px;font-size:clamp(2.1rem,4vw,3.4rem);line-height:1.02;letter-spacing:-.04em;color:var(--gold-strong)}
        h2{margin:0 0 14px;color:var(--gold-strong);font-size:1.5rem}
        p{color:var(--muted);line-height:1.8}
        .grid{display:grid;grid-template-columns:repeat(2,minmax(0,1fr));gap:14px;margin-top:24px}
        .tile{padding:18px;border-radius:18px;background:rgba(255,255,255,.03);border:1px solid rgba(214,183,120,.14)}
        .tile strong{display:block;margin-bottom:8px;color:var(--text)}
        .quick{display:grid;gap:12px;margin-top:18px}
        .quick a{display:block;padding:14px 16px;border-radius:16px;border:1px solid rgba(214,183,120,.14);background:rgba(255,255,255,.03)}
        .quick a:hover{background:rgba(215,183,120,.08);color:var(--gold-strong)}
        @media (max-width:900px){.hero{grid-template-columns:1fr}.grid{grid-template-columns:1fr}}
        @media (max-width:640px){body{padding:16px}.main-card,.side-card{padding:24px 18px}}
    </style>
</head>
<body>
       <div class="frame">
        <header class="topbar">
            <div class="brand">Munio</div>

                      <nav class="nav-links">
                <a class="pill" href="/home">Home</a>
                <a class="pill" href="/directory">Directory</a>
                <a class="pill" href="/courses">Courses</a>
                <a class="pill" href="/admissions">Admissions</a>
                <a class="pill" href="/social">Social</a>
                @if (Auth::check())
    <form method="POST" action="{{ route('logout') }}" style="display:inline;">
        @csrf
        <button class="pill logout-btn" type="submit">Log out</button>
    </form>
@else
    <a class="pill" href="{{ route('login') }}">Log in</a>
    <a class="pill" href="{{ route('register') }}">Register</a>
@endif
            </nav>

            @if (Route::has('login'))
                <div class="auth-links">
                    @auth
                        <a class="pill" href="{{ url('/dashboard') }}">Dashboard</a>
                    @else
                        <a class="pill" href="{{ route('login') }}">Log in</a>

                        @if (Route::has('register'))
                            <a class="pill" href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
    <main class="hero">
        <section class="main-card">
            <div class="eyebrow">Student Dashboard</div>
            <h1>Welcome back{{ Auth::check() ? ', ' . Auth::user()->name : '' }}</h1>
            <p>You are now inside the main dashboard for the UCC IT Department App. Use this space to move quickly and experience all aspects of the IT department.</p>

            <div class="grid">
                <div class="tile"><strong>Faculty Access</strong>Reach the directory page to view staff contact details.</div>
                <div class="tile"><strong>Courses</strong>Review the listed IT courses in the program area.</div>
                <div class="tile"><strong>Admissions</strong>Check requirements and application status.</div>
                <div class="tile"><strong>Social</strong>View the social media page for UCC updates.</div>
            </div>
        </section>

        <aside class="side-card">
            <h2>Quick Links</h2>
            <p>Use these links to move around the app.</p>
            <div class="quick">
                <a href="/home">Go to Home</a>
                <a href="/directory">Open Directory</a>
                <a href="/courses">Browse Courses</a>
                <a href="/admissions">View Admissions</a>
                <a href="/social">Open Social</a>
            </div>
        </aside>
    </main>
</div>
</body>
</html>
