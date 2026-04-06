<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Munio | UCC IT Registration App</title>
    <style>
        :root{
            --bg:#0b0b0f;
            --panel:#12131a;
            --line:rgba(214,183,120,0.22);
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
            font-family:"Segoe UI", Arial, sans-serif;
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
        .auth-links,
        .button-row{
            display:flex;
            gap:10px;
            flex-wrap:wrap;
            align-items:center;
        }

        .pill,
        .button{
            display:inline-flex;
            align-items:center;
            justify-content:center;
            padding:10px 16px;
            border:1px solid rgba(214,183,120,0.18);
            border-radius:999px;
            background:rgba(255,255,255,0.02);
            transition:all .2s ease;
            font-weight:600;
        }

        .pill:hover,
        .button:hover{
            background:rgba(215,183,120,0.08);
            color:var(--gold-strong);
        }

        .hero,
        .section-card,
        .card{
            border:1px solid var(--line);
            border-radius:30px;
            background:linear-gradient(180deg, rgba(23,25,34,0.98), rgba(14,15,21,0.98));
            box-shadow:var(--shadow);
            overflow:hidden;
        }

        .hero{
            margin-bottom:22px;
        }

        .copy{
            padding:44px;
            position:relative;
        }

        .copy::before,
        .card::before,
        .section-card::before{
            content:"";
            position:absolute;
            inset:0;
            background:linear-gradient(135deg, rgba(215,183,120,0.08), transparent 35%, transparent 65%, rgba(215,183,120,0.04));
            pointer-events:none;
        }

        .card,
        .section-card{
            position:relative;
            padding:32px;
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

        h2{
            margin:0 0 14px;
            font-size:1.55rem;
            color:var(--gold-strong);
        }

        p,
        li,
        .meta{
            color:var(--muted);
            line-height:1.8;
        }

        ul{
            margin:0;
            padding-left:22px;
        }

        .container{
            display:grid;
            gap:22px;
        }

        .feature-list{
            display:grid;
            gap:14px;
            margin-top:26px;
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

        .feature strong,
        .card strong,
        .section-card strong{
            color:var(--text);
        }

        .feature p{
            margin:0;
        }

        .feature a,
        .card a:not(.button),
        .section-card a:not(.button){
            color:var(--gold-strong);
            border-bottom:1px solid rgba(241,213,154,0.34);
        }

        .feature a:hover,
        .card a:not(.button):hover,
        .section-card a:not(.button):hover{
            border-color:rgba(241,213,154,0.82);
        }

        iframe{
            width:100%;
            min-height:600px;
            border:none;
            border-radius:20px;
            background:#fff;
            margin-top:20px;
        }

        @media (max-width: 640px){
            body{padding:16px}
            .topbar{padding:14px}
            .copy,
            .card,
            .section-card{padding:26px 18px}
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
        @yield('content')
    </div>
</body>
</html>
