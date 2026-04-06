@extends('layout')

@section('content')
<div class="hero">
    <div class="copy">
        <span class="eyebrow">Community</span>
        <h1>Social Media</h1>
        <p>Visit UCC's Facebook presence from inside the app page below.</p>

        <div class="feature-list">
            <div class="feature">
                <span class="dot"></span>
                <div>
                    <strong>Direct Social Link</strong>
                    <p>If the embedded feed does not load in your browser, use the Facebook button below.</p>
                </div>
            </div>
        </div>

        <div class="button-row" style="margin-top:28px;">
            <a class="button" href="https://www.facebook.com/uccjamaica" target="_blank" rel="noopener noreferrer">Open Facebook Page</a>
            <a class="button" href="{{ url('/home') }}">Back Home</a>
        </div>
    </div>
</div>

<div class="container">
    <div class="card">
        <h2>Facebook</h2>
        <p class="meta">UCC social updates are shown below when the embed is supported by the browser.</p>
        <iframe
            src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fuccjamaica&tabs=timeline&width=500&height=600&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId"
            width="500"
            height="600"
            style="border:none;overflow:hidden"
            scrolling="no"
            frameborder="0"
            allowfullscreen="true"
            allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share">
        </iframe>
    </div>
</div>
@endsection
