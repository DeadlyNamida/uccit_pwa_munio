

@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register | Munio</title>
    <style>
        :root{
            --line:rgba(214,183,120,.22);
            --gold:#d7b778;
            --gold-strong:#f1d59a;
            --text:#f4efe3;
            --muted:#b9b1a1;
            --shadow:0 22px 55px rgba(0,0,0,.38);
            --danger:#ffb4b4;
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
        .shell{
            display:grid;grid-template-columns:1fr 1fr;overflow:hidden;border:1px solid var(--line);border-radius:30px;
            background:linear-gradient(180deg,rgba(23,25,34,.98),rgba(14,15,21,.98));box-shadow:var(--shadow);
        }
        .copy,.form-wrap{padding:40px}
        .copy{border-right:1px solid var(--line);background:radial-gradient(circle at top left, rgba(215,183,120,.10), transparent 30%)}
        .eyebrow{
            display:inline-flex;align-items:center;gap:10px;margin-bottom:16px;color:var(--gold);text-transform:uppercase;
            letter-spacing:.18em;font-size:.76rem;font-weight:700;
        }
        .eyebrow::before{content:"";width:34px;height:1px;background:rgba(215,183,120,.55)}
        h1{margin:0 0 14px;font-size:clamp(2.1rem,4vw,3.4rem);line-height:1.02;letter-spacing:-.04em;color:var(--gold-strong)}
        p{color:var(--muted);line-height:1.8}
        .points{display:grid;gap:14px;margin-top:26px}
        .point{padding:16px 18px;border-radius:18px;background:rgba(255,255,255,.03);border:1px solid rgba(214,183,120,.14)}
        .point strong{display:block;color:var(--text);margin-bottom:6px}
        .card{border:1px solid rgba(214,183,120,.16);border-radius:24px;background:rgba(255,255,255,.03);padding:28px}
        .form-title{margin:0 0 8px;color:var(--gold-strong);font-size:1.6rem}
        .hint{margin:0 0 22px;color:var(--muted)}
        label{display:block;margin:0 0 8px;color:var(--text);font-weight:600}
        input[type="text"],input[type="email"],input[type="password"]{
            width:100%;padding:14px 16px;border-radius:14px;border:1px solid rgba(214,183,120,.18);
            background:rgba(7,8,12,.55);color:var(--text);outline:none;margin-bottom:16px;
        }
        input:focus{border-color:rgba(241,213,154,.6);box-shadow:0 0 0 3px rgba(241,213,154,.08)}
        .btn{
            width:100%;padding:14px 18px;border:none;border-radius:16px;background:linear-gradient(135deg,var(--gold-strong),var(--gold));
            color:#0b0b0f;font-weight:800;cursor:pointer;margin-top:6px;
        }
        .error{margin:-8px 0 12px;color:var(--danger);font-size:.95rem}
        @media (max-width:900px){.shell{grid-template-columns:1fr}.copy{border-right:none;border-bottom:1px solid var(--line)}}
        @media (max-width:640px){body{padding:16px}.copy,.form-wrap{padding:24px 18px}}
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
        <div class="auth-links">
            <a class="pill" href="{{ route('login') }}">Log in</a>
            <a class="pill" href="{{ route('register') }}">Register</a>
        </div>
    </header>

    <main class="shell">
        <section class="copy">
            <div class="eyebrow">Create Account</div>
            <h1>Register for access</h1>
            <p>Make an account to move through the UCC IT Department App and keep your student access in one place.</p>
            <div class="points">
                <div class="point"><strong>Simple setup</strong>Add your basic details and start using the app.</div>
                <div class="point"><strong>Student-first design</strong>The app makes it easy for new and past students to register.</div>
                <div class="point"><strong>Fast access</strong>Once registered, you can head straight to the dashboard.</div>
            </div>
        </section>

        <section class="form-wrap">
            <div class="card">
                <h2 class="form-title">Create your account</h2>
                <p class="hint">Fill in the form below to continue.</p>

                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <label for="name">Name</label>
                    <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name">
                    @error('name')
                        <div class="error">{{ $message }}</div>
                    @enderror

                    <label for="email">Email</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="username">
                    @error('email')
                        <div class="error">{{ $message }}</div>
                    @enderror

                    <label for="password">Password</label>
                    <input id="password" type="password" name="password" required autocomplete="new-password">
                    @error('password')
                        <div class="error">{{ $message }}</div>
                    @enderror

                    <label for="password_confirmation">Confirm Password</label>
                    <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password">

                    <button class="btn" type="submit">Register</button>
                </form>
            </div>
        </section>
    </main>
</div>
</body>
</html>
