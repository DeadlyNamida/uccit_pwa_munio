<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UCC IT App</title>

    <style>
        :root{
            --bg:#0b0b0f;
            --panel:#12131a;
            --line:rgba(214, 183, 120, 0.22);
            --gold:#d7b778;
            --gold-strong:#f1d59a;
            --text:#f4efe3;
            --muted:#b9b1a1;
            --shadow:0 22px 55px rgba(0,0,0,0.38);
        }

        *{box-sizing:border-box}
        body{
            margin:0;
            min-height:100vh;
            font-family: "Segoe UI", Arial, sans-serif;
            color:var(--text);
            background:
                radial-gradient(circle at top, rgba(215,183,120,0.10), transparent 28%),
                linear-gradient(180deg, #08090d 0%, #0b0b0f 100%);
            padding:24px;
        }

        a{color:inherit;text-decoration:none}

        .frame{
            width:min(1120px, 100%);
            margin:0 auto;
        }

        .topbar{
            display:flex;
            justify-content:space-between;
            align-items:center;
            gap:16px;
            flex-wrap:wrap;
            margin-bottom:22px;
            padding:16px 18px;
            border:1px solid var(--line);
            border-radius:22px;
            background:rgba(18,19,26,0.88);
            box-shadow:var(--shadow);
        }

        .brand{
            color:var(--gold-strong);
            font-weight:700;
            letter-spacing:.08em;
            text-transform:uppercase;
            font-size:.92rem;
        }

        .nav-links,
        .auth-links{
            display:flex;
            gap:10px;
            flex-wrap:wrap;
            align-items:center;
        }

        .pill{
            padding:10px 16px;
            border:1px solid rgba(214,183,120,0.18);
            border-radius:999px;
            background:rgba(255,255,255,0.02);
            transition:all .2s ease;
            font-weight:600;
        }

        .pill:hover{
            background:rgba(215,183,120,0.08);
            color:var(--gold-strong);
        }

        .hero{
            display:grid;
            grid-template-columns:1.15fr .85fr;
            overflow:hidden;
            border:1px solid var(--line);
            border-radius:30px;
            background:linear-gradient(180deg, rgba(23,25,34,0.98), rgba(14,15,21,0.98));
            box-shadow:var(--shadow);
        }

        .copy{
            padding:44px;
            position:relative;
        }

        .copy::before{
            content:"";
            position:absolute;
            inset:0;
            background:linear-gradient(135deg, rgba(215,183,120,0.08), transparent 35%, transparent 65%, rgba(215,183,120,0.04));
            pointer-events:none;
        }

        .eyebrow{
            display:inline-flex;
            align-items:center;
            gap:10px;
            margin-bottom:16px;
            color:var(--gold);
            text-transform:uppercase;
            letter-spacing:.18em;
            font-size:.76rem;
            font-weight:700;
        }

        .eyebrow::before{
            content:"";
            width:34px;
            height:1px;
            background:rgba(215,183,120,0.55);
        }

        h1{
            margin:0 0 14px;
            font-size:clamp(2.2rem, 4vw, 3.8rem);
            line-height:1.02;
            letter-spacing:-0.04em;
            color:var(--gold-strong);
        }

        .intro{
            margin:0 0 28px;
            color:var(--muted);
            line-height:1.85;
            max-width:720px;
        }

        .feature-list{
            display:grid;
            gap:14px;
        }

        .feature{
            display:flex;
            gap:14px;
            align-items:flex-start;
            padding:18px;
            border-radius:18px;
            background:rgba(255,255,255,0.03);
            border:1px solid rgba(214,183,120,0.14);
        }

        .dot{
            width:14px;
            height:14px;
            margin-top:4px;
            flex:0 0 14px;
            border-radius:50%;
            background:radial-gradient(circle at center, var(--gold-strong) 0 36%, rgba(215,183,120,0.45) 37% 100%);
            box-shadow:0 0 0 4px rgba(215,183,120,0.08);
        }

        .feature strong{
            display:block;
            margin-bottom:4px;
            color:var(--text);
        }

        .feature p{
            margin:0;
            color:var(--muted);
            line-height:1.7;
        }

        .feature a{
            color:var(--gold-strong);
            border-bottom:1px solid rgba(241,213,154,0.34);
        }

        .feature a:hover{
            border-color:rgba(241,213,154,0.82);
        }

        .art{
            border-left:1px solid var(--line);
            display:flex;
            align-items:center;
            justify-content:center;
            padding:30px;
            background:
                radial-gradient(circle at 30% 20%, rgba(241,213,154,0.24), transparent 28%),
                radial-gradient(circle at 80% 18%, rgba(215,183,120,0.18), transparent 22%),
                linear-gradient(180deg, #141722 0%, #0c0d12 100%);
        }

        .panel{
            width:min(360px, 100%);
            border-radius:28px;
            border:1px solid rgba(214,183,120,0.16);
            background:
                linear-gradient(160deg, rgba(241,213,154,0.18), transparent 28%),
                linear-gradient(180deg, rgba(255,255,255,0.06), rgba(255,255,255,0.02));
            box-shadow: inset 0 0 0 1px rgba(255,255,255,0.03), 0 18px 40px rgba(0,0,0,0.30);
            padding:28px;
        }

        .panel h2{
            margin:0 0 14px;
            color:var(--gold-strong);
            font-size:1.45rem;
        }

        .panel ul{
            list-style:none;
            margin:0;
            padding:0;
            display:grid;
            gap:12px;
        }

        .panel li{
            padding:14px 16px;
            border-radius:16px;
            background:rgba(255,255,255,0.03);
            border:1px solid rgba(214,183,120,0.12);
            color:var(--muted);
        }

        .panel li strong{
            color:var(--text);
            display:block;
            margin-bottom:4px;
        }

        @media (max-width: 920px){
            .hero{grid-template-columns:1fr}
            .art{border-left:none;border-top:1px solid var(--line)}
        }

        @media (max-width: 640px){
            body{padding:16px}
            .topbar{padding:14px}
            .copy{padding:26px 18px}
        }
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
        </header>
        <main class="hero">
            <section class="copy">
                <div class="eyebrow">University of the Commonwealth Caribbean</div>
                <h1>UCC IT Department App</h1>
                <p class="intro">
                    Welcome to the IT Department Progressive Web App. This space gives users quick access to key department pages, course details, admissions information, faculty contact details, and social updates in one clean place.
                </p>

                <div class="feature-list">
                    <div class="feature">
                        <span class="dot"></span>
                        <div>
                            <strong>Faculty Directory</strong>
                            <p>View staff contact details on the <a href="/directory">Directory</a> page.</p>
                        </div>
                    </div>

                    <div class="feature">
                        <span class="dot"></span>
                        <div>
                            <strong>Course Information</strong>
                            <p>Browse IT offerings from the <a href="/courses">Courses</a> page.</p>
                        </div>
                    </div>

                    <div class="feature">
                        <span class="dot"></span>
                        <div>
                            <strong>Admissions and Student Access</strong>
                            <p>Review entry requirements on <a href="/admissions">Admissions</a> or sign in to continue through the app.</p>
                        </div>
                    </div>
                </div>
            </section>

            <aside class="art">
                <div class="panel">
                    <h2>Quick Access</h2>
                    <ul>
                        <li><strong>Home</strong>Main welcome page for the department app.</li>
                        <li><strong>Directory</strong>Faculty phone and email details.</li>
                        <li><strong>Courses</strong>Program course listing for IT students.</li>
                        <li><strong>Admissions</strong>Requirements and application access.</li>
                        <li><strong>Social</strong>Social media connection point for UCC.</li>
                    </ul>
                </div>
            </aside>
        </main>
    </div>
</body>
</html>
