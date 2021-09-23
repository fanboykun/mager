<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width,initial-scale=1" />
        <title>Neon Template</title>
        <link rel="stylesheet" href="{{ asset('css/landing.css') }}" />
    </head>
    <body class="t">
        <div class="rn">
            <header class="nb reveal-from-top">
                <div class="tcontainern">
                    <div class="n_">
                        <div class="nk">
                            <h1 class="sz">
                                <a href="/"
                                    ><img
                                        src="{{ asset('landing/logo.svg') }}"
                                        alt="Neon"
                                        width="32"
                                        height="32"
                                /></a>
                            </h1>
                        </div>
                        <button
                            id="th"
                            class="th"
                            aria-controls="primary-menu"
                            aria-expanded="false"
                        >
                            <span class="se">Menu</span>
                            <span class="tp"><span class="td"></span></span>
                        </button>
                        <nav id="nj" class="nj">
                            <div class="nq">
                                @auth
                                <ul class="st re">
                                    <li>
                                        <a
                                            class="
                                                tbuttonn
                                                fbuttonl
                                                gbuttony
                                                sbuttono
                                            "
                                            href="{{ route('dashboard') }}"
                                            >Dashboard</a
                                        >
                                    </li>
                                </ul>
                                    @else
                                    @if (Route::has('register'))
                                    <ul class="st re">
                                        <li>
                                            <a
                                                class="
                                                    tbuttonn
                                                    fbuttonl
                                                    gbuttony
                                                    sbuttono
                                                "
                                                href="{{ route('login') }}"
                                                >Login</a
                                            >
                                        </li>
                                    </ul>
                                    @endif
                                    <ul class="st h re">
                                        <li>
                                            <a href="{{ route('register') }}"
                                                >Register</a
                                            >
                                        </li>
                                    </ul>
                                @endauth
                            </div>
                        </nav>
                    </div>
                </div>
            </header>
            <main class="nw">
                <section class="rb nx tillustration-section-n">
                    <div class="tcontainern">
                        <div class="rm rd">
                            <div class="nf np">
                                <div class="split-item">
                                    <div class="rg nh az">
                                        <h1
                                            class="oe ok reveal-from-bottom"
                                            data-reveal-delay="150"
                                        >
                                            Landing template for startups
                                        </h1>
                                        <p
                                            class="oe us reveal-from-bottom"
                                            data-reveal-delay="300"
                                        >
                                            Our landing page template works on
                                            all devices, so you only have to set
                                            it up once, and get beautiful
                                            results forever.
                                        </p>
                                        <div
                                            class="reveal-from-bottom"
                                            data-reveal-delay="450"
                                        >
                                            <a
                                                class="
                                                    tbuttonn
                                                    fbuttonl
                                                    gbuttony
                                                "
                                                href="#"
                                                >Get started now</a
                                            >
                                        </div>
                                    </div>
                                    <style>
                                        @media (min-width: 641px) {
                                            .rb .nf .split-item {
                                                min-height: 492px;
                                            }
                                        }
                                    </style>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="if nx reveal-fade">
                    <div class="tcontainern">
                    </div>
                </section>
                {{-- <section class="nx s_">
                    <div class="tcontainern">
                        <div class="rd">
                            <div class="rv reveal-from-bottom">
                                <div class="scontainero">
                                    <h2 class="oe ok">
                                        Built exclusively for you
                                    </h2>
                                    <p class="sz">
                                        Duis aute irure dolor in reprehenderit
                                        in voluptate velit esse cillum dolore eu
                                        fugiat nulla pariatur excepteur sint —
                                        occaecat cupidatat non proident, sunt in
                                        culpa qui.
                                    </p>
                                </div>
                            </div>
                            <div class="reveal-from-bottom">
                                <a
                                    class="modal-trigger"
                                    aria-controls="modal-01"
                                    data-video="https://player.vimeo.com/video/174002812"
                                    href="#"
                                    ><img
                                        src="landing/video-placeholder.svg"
                                        alt="Video"
                                        width="712"
                                        height="400"
                                /></a>
                            </div>
                            <div id="modal-01" class="tx tk">
                                <div class="t_">
                                    <div class="sj">
                                        <iframe
                                            src="#"
                                            frameborder="0"
                                            webkitallowfullscreen=""
                                            mozallowfullscreen=""
                                            allowfullscreen=""
                                        ></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section> --}}
                <section class="rw nx">
                    <div class="tcontainern">
                        <div class="features-split-inner rd i_">
                            <div class="rv s_">
                                <div class="scontainero">
                                    <h2 class="oe ok">
                                        Features - Lorem ipsum is placeholder
                                        text.
                                    </h2>
                                    <p class="sz">
                                        Duis aute irure dolor in reprehenderit
                                        in voluptate velit esse cillum dolore eu
                                        fugiat nulla pariatur excepteur sint —
                                        occaecat cupidatat non proident, sunt in
                                        culpa qui.
                                    </p>
                                </div>
                            </div>
                            <div class="nf np">
                                <div class="split-item">
                                    <div
                                        class="nh az reveal-from-right"
                                        data-reveal-container=".split-item"
                                    >
                                        <h3 class="oe og">
                                            Data-driven insights
                                        </h3>
                                        <p class="sz">
                                            Lorem ipsum dolor sit amet,
                                            consectetur adipiscing elit, sed do
                                            eiusmod tempor incididunt ut labore
                                            et dolore magna aliqua — Ut enim ad
                                            minim veniam, quis nostrud
                                            exercitation ullamco laboris nisi ut
                                            aliquip ex ea commodo consequat.
                                        </p>
                                    </div>
                                    <div
                                        class="nl nc reveal-from-left"
                                        data-reveal-container=".split-item"
                                    >
                                        <img
                                            src="landing/features-split-image-01.svg"
                                            alt="Features split image 01"
                                            width="528"
                                            height="396"
                                        />
                                    </div>
                                </div>
                                <div class="split-item">
                                    <div
                                        class="nh az reveal-from-left"
                                        data-reveal-container=".split-item"
                                    >
                                        <h3 class="oe og">
                                            Data-driven insights
                                        </h3>
                                        <p class="sz">
                                            Lorem ipsum dolor sit amet,
                                            consectetur adipiscing elit, sed do
                                            eiusmod tempor incididunt ut labore
                                            et dolore magna aliqua — Ut enim ad
                                            minim veniam, quis nostrud
                                            exercitation ullamco laboris nisi ut
                                            aliquip ex ea commodo consequat.
                                        </p>
                                    </div>
                                    <div
                                        class="nl nc reveal-from-right"
                                        data-reveal-container=".split-item"
                                    >
                                        <img
                                            src="landing/features-split-image-02.svg"
                                            alt="Features split image 02"
                                            width="528"
                                            height="396"
                                        />
                                    </div>
                                </div>
                                <div class="split-item">
                                    <div
                                        class="nh az reveal-from-right"
                                        data-reveal-container=".split-item"
                                    >
                                        <h3 class="oe og">
                                            Data-driven insights
                                        </h3>
                                        <p class="sz">
                                            Lorem ipsum dolor sit amet,
                                            consectetur adipiscing elit, sed do
                                            eiusmod tempor incididunt ut labore
                                            et dolore magna aliqua — Ut enim ad
                                            minim veniam, quis nostrud
                                            exercitation ullamco laboris nisi ut
                                            aliquip ex ea commodo consequat.
                                        </p>
                                    </div>
                                    <div
                                        class="nl nc reveal-from-left"
                                        data-reveal-container=".split-item"
                                    >
                                        <img
                                            src="landing/features-split-image-01.svg"
                                            alt="Features split image 03"
                                            width="528"
                                            height="396"
                                        />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="rx nx s_">
                    <div class="tcontainern">
                        <div class="features-tiles-inner rd i_">
                            <div class="rv">
                                <div class="scontainero">
                                    <h2 class="oe ok">
                                        Build up the whole picture
                                    </h2>
                                    <p class="sz">
                                        Duis aute irure dolor in reprehenderit
                                        in voluptate velit esse cillum dolore eu
                                        fugiat nulla pariatur excepteur sint —
                                        occaecat cupidatat non proident, sunt in
                                        culpa qui.
                                    </p>
                                </div>
                            </div>
                            <div class="tiles-wrap">
                                <div class="ng reveal-from-right">
                                    <div class="ny">
                                        <div class="features-tiles-item-header">
                                            <div class="iy ok">
                                                <img
                                                    src="landing/feature-tile-icon-01.svg"
                                                    alt="Feature tile icon 01"
                                                    width="72"
                                                    height="72"
                                                />
                                            </div>
                                        </div>
                                        <div
                                            class="features-tiles-item-content"
                                        >
                                            <h4 class="oe oh">
                                                Generate Leads
                                            </h4>
                                            <p class="sz l">
                                                Duis aute irure dolor in
                                                reprehenderit in voluptate velit
                                                esse cillum dolore eu fugiat
                                                nulla pariatur. Excepteur sint
                                                occaecat cupidatat.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="ng reveal-from-left">
                                    <div class="ny">
                                        <div class="features-tiles-item-header">
                                            <div class="iy ok">
                                                <img
                                                    src="landing/feature-tile-icon-02.svg"
                                                    alt="Feature tile icon 02"
                                                    width="72"
                                                    height="72"
                                                />
                                            </div>
                                        </div>
                                        <div
                                            class="features-tiles-item-content"
                                        >
                                            <h4 class="oe oh">
                                                Generate Leads
                                            </h4>
                                            <p class="sz l">
                                                Duis aute irure dolor in
                                                reprehenderit in voluptate velit
                                                esse cillum dolore eu fugiat
                                                nulla pariatur. Excepteur sint
                                                occaecat cupidatat.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="ng reveal-from-right">
                                    <div class="ny">
                                        <div class="features-tiles-item-header">
                                            <div class="iy ok">
                                                <img
                                                    src="landing/feature-tile-icon-03.svg"
                                                    alt="Feature tile icon 03"
                                                    width="72"
                                                    height="72"
                                                />
                                            </div>
                                        </div>
                                        <div
                                            class="features-tiles-item-content"
                                        >
                                            <h4 class="oe oh">
                                                Generate Leads
                                            </h4>
                                            <p class="sz l">
                                                Duis aute irure dolor in
                                                reprehenderit in voluptate velit
                                                esse cillum dolore eu fugiat
                                                nulla pariatur. Excepteur sint
                                                occaecat cupidatat.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="ng reveal-from-left">
                                    <div class="ny">
                                        <div class="features-tiles-item-header">
                                            <div class="iy ok">
                                                <img
                                                    src="landing/feature-tile-icon-04.svg"
                                                    alt="Feature tile icon 04"
                                                    width="72"
                                                    height="72"
                                                />
                                            </div>
                                        </div>
                                        <div
                                            class="features-tiles-item-content"
                                        >
                                            <h4 class="oe oh">
                                                Generate Leads
                                            </h4>
                                            <p class="sz l">
                                                Duis aute irure dolor in
                                                reprehenderit in voluptate velit
                                                esse cillum dolore eu fugiat
                                                nulla pariatur. Excepteur sint
                                                occaecat cupidatat.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="ng reveal-from-right">
                                    <div class="ny">
                                        <div class="features-tiles-item-header">
                                            <div class="iy ok">
                                                <img
                                                    src="landing/feature-tile-icon-05.svg"
                                                    alt="Feature tile icon 05"
                                                    width="72"
                                                    height="72"
                                                />
                                            </div>
                                        </div>
                                        <div
                                            class="features-tiles-item-content"
                                        >
                                            <h4 class="oe oh">
                                                Generate Leads
                                            </h4>
                                            <p class="sz l">
                                                Duis aute irure dolor in
                                                reprehenderit in voluptate velit
                                                esse cillum dolore eu fugiat
                                                nulla pariatur. Excepteur sint
                                                occaecat cupidatat.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="ng reveal-from-left">
                                    <div class="ny">
                                        <div class="features-tiles-item-header">
                                            <div class="iy ok">
                                                <img
                                                    src="landing/feature-tile-icon-06.svg"
                                                    alt="Feature tile icon 06"
                                                    width="72"
                                                    height="72"
                                                />
                                            </div>
                                        </div>
                                        <div
                                            class="features-tiles-item-content"
                                        >
                                            <h4 class="oe oh">
                                                Generate Leads
                                            </h4>
                                            <p class="sz l">
                                                Duis aute irure dolor in
                                                reprehenderit in voluptate velit
                                                esse cillum dolore eu fugiat
                                                nulla pariatur. Excepteur sint
                                                occaecat cupidatat.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                {{-- <section class="in nx">
                    <div class="tcontainern">
                        <div class="testimonial-inner rd i_">
                            <div class="rv s_">
                                <div class="scontainero">
                                    <h2 class="oe ok">
                                        Don't take our word for it
                                    </h2>
                                    <p class="sz">
                                        Duis aute irure dolor in reprehenderit
                                        in voluptate velit esse cillum dolore eu
                                        fugiat nulla pariatur excepteur sint —
                                        occaecat cupidatat non proident, sunt in
                                        culpa qui.
                                    </p>
                                </div>
                            </div>
                            <div class="tiles-wrap">
                                <div
                                    class="ng reveal-from-right"
                                    data-reveal-delay="200"
                                >
                                    <div class="ny">
                                        <div class="ir">
                                            <p class="l on">
                                                — Duis aute irure dolor in
                                                reprehenderit in voluptate velit
                                                esse cillum dolore eu fugiat
                                                nulla pariatur. Excepteur sint
                                                occaecat cupidatat non proident,
                                                sunt in culpa qui officia
                                                deserunt mollit anim id est
                                                laborum cillum dolore eu fugiat.
                                            </p>
                                        </div>
                                        <div class="ik c ur on i_">
                                            <span
                                                class="testimonial-item-name sf"
                                                >Roman Level</span
                                            >
                                            <span class="sc">/ </span
                                            ><span class="ij"
                                                ><a href="#">AppName</a></span
                                            >
                                        </div>
                                    </div>
                                </div>
                                <div class="ng reveal-from-bottom">
                                    <div class="ny">
                                        <div class="ir">
                                            <p class="l on">
                                                — Duis aute irure dolor in
                                                reprehenderit in voluptate velit
                                                esse cillum dolore eu fugiat
                                                nulla pariatur. Excepteur sint
                                                occaecat cupidatat non proident,
                                                sunt in culpa qui officia
                                                deserunt mollit anim id est
                                                laborum cillum dolore eu fugiat.
                                            </p>
                                        </div>
                                        <div class="ik c ur on i_">
                                            <span
                                                class="testimonial-item-name sf"
                                                >Diana Rynzhuk</span
                                            >
                                            <span class="sc">/ </span
                                            ><span class="ij"
                                                ><a href="#">AppName</a></span
                                            >
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="ng reveal-from-left"
                                    data-reveal-delay="200"
                                >
                                    <div class="ny">
                                        <div class="ir">
                                            <p class="l on">
                                                — Duis aute irure dolor in
                                                reprehenderit in voluptate velit
                                                esse cillum dolore eu fugiat
                                                nulla pariatur. Excepteur sint
                                                occaecat cupidatat non proident,
                                                sunt in culpa qui officia
                                                deserunt mollit anim id est
                                                laborum cillum dolore eu fugiat.
                                            </p>
                                        </div>
                                        <div class="ik c ur on i_">
                                            <span
                                                class="testimonial-item-name sf"
                                                >Ben Stafford</span
                                            >
                                            <span class="sc">/ </span
                                            ><span class="ij"
                                                ><a href="#">AppName</a></span
                                            >
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section> --}}
                <section class="roadmap nx">
                    <div class="tcontainern">
                        <div class="roadmap-inner rd i_">
                            <div class="rv s_">
                                <div class="scontainero">
                                    <h2 class="oe ok">Product roadmap</h2>
                                    <p class="on">
                                        Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna
                                        aliqua.
                                    </p>
                                </div>
                            </div>
                            <div class="timeline">
                                <div class="ns">
                                    <div class="no">
                                        <div class="nu">
                                            <div class="na sg ou reveal-fade">
                                                November 2019
                                            </div>
                                            <div class="ig u sz greveal-y">
                                                Deployed a high-quality first
                                                release and conducted a market
                                                validation test
                                            </div>
                                        </div>
                                    </div>
                                    <div class="no">
                                        <div class="nu">
                                            <div class="na sg ou reveal-fade">
                                                December 2019
                                            </div>
                                            <div class="ig u sz greveal-y">
                                                Deployed a high-quality first
                                                release and conducted a market
                                                validation test
                                            </div>
                                        </div>
                                    </div>
                                    <div class="no">
                                        <div class="nu">
                                            <div class="na sg ou reveal-fade">
                                                January 2020
                                            </div>
                                            <div class="ig u sz greveal-y">
                                                Deployed a high-quality first
                                                release and conducted a market
                                                validation test
                                            </div>
                                        </div>
                                    </div>
                                    <div class="no">
                                        <div class="nu">
                                            <div class="na sg ou reveal-fade">
                                                February 2019
                                            </div>
                                            <div class="ig u sz greveal-y">
                                                Deployed a high-quality first
                                                release and conducted a market
                                                validation test
                                            </div>
                                        </div>
                                    </div>
                                    <div class="no">
                                        <div class="nu">
                                            <div class="na sg ou reveal-fade">
                                                March 2020
                                            </div>
                                            <div class="ig u sz greveal-y">
                                                Deployed a high-quality first
                                                release and conducted a market
                                                validation test
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="io nx az reveal-from-bottom">
                    <div class="tcontainern">
                        <div class="iq rd ia">
                            <div class="iu">
                                <h3 class="sz">
                                    For previewing layouts and visual?
                                </h3>
                            </div>
                            <div class="cta-action">
                                <div class="tu">
                                    <label for="newsletter" class="x se"
                                        >Subscribe</label
                                    >
                                    <input
                                        id="newsletter"
                                        class="j"
                                        type="email"
                                        placeholder="Your best email"
                                    />
                                    <svg
                                        width="16"
                                        height="12"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            d="M9 5H1c-.6 0-1 .4-1 1s.4 1 1 1h8v5l7-6-7-6v5z"
                                            fill="#376DF9"
                                            fill-rule="nonzero"
                                        ></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </main>
            <footer class="rr az">
                <div class="tcontainern">
                    <div class="ri">
                        <div class="rs rh h">
                            <div class="nk">
                                <a href="/"
                                    ><img
                                        src="{{ asset('landing/logo.svg') }}"
                                        alt="Neon"
                                        width="32"
                                        height="32"
                                /></a>
                            </div>
                            <div class="rl">
                                <ul class="st">
                                    <li>
                                        <a href="#">
                                            <svg
                                                width="16"
                                                height="16"
                                                viewBox="0 0 16 16"
                                                xmlns="http://www.w3.org/2000/svg"
                                            >
                                                <title>Facebook</title>
                                                <path
                                                    d="M6.023 16L6 9H3V6h3V4c0-2.7 1.672-4 4.08-4 1.153 0 2.144.086 2.433.124v2.821h-1.67c-1.31 0-1.563.623-1.563 1.536V6H13l-1 3H9.28v7H6.023z"
                                                ></path>
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <svg
                                                width="16"
                                                height="16"
                                                viewBox="0 0 16 16"
                                                xmlns="http://www.w3.org/2000/svg"
                                            >
                                                <title>Twitter</title>
                                                <path
                                                    d="M16 3c-.6.3-1.2.4-1.9.5.7-.4 1.2-1 1.4-1.8-.6.4-1.3.6-2.1.8-.6-.6-1.5-1-2.4-1-1.7 0-3.2 1.5-3.2 3.3 0 .3 0 .5.1.7-2.7-.1-5.2-1.4-6.8-3.4-.3.5-.4 1-.4 1.7 0 1.1.6 2.1 1.5 2.7-.5 0-1-.2-1.5-.4C.7 7.7 1.8 9 3.3 9.3c-.3.1-.6.1-.9.1-.2 0-.4 0-.6-.1.4 1.3 1.6 2.3 3.1 2.3-1.1.9-2.5 1.4-4.1 1.4H0c1.5.9 3.2 1.5 5 1.5 6 0 9.3-5 9.3-9.3v-.4C15 4.3 15.6 3.7 16 3z"
                                                ></path>
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            ><svg
                                                width="16"
                                                height="16"
                                                viewBox="0 0 16 16"
                                                xmlns="http://www.w3.org/2000/svg"
                                            >
                                                <title>Instagram</title>
                                                <g>
                                                    <circle
                                                        cx="12.145"
                                                        cy="3.892"
                                                        r="1"
                                                    ></circle>
                                                    <path
                                                        d="M8 12c-2.206 0-4-1.794-4-4s1.794-4 4-4 4 1.794 4 4-1.794 4-4 4zm0-6c-1.103 0-2 .897-2 2s.897 2 2 2 2-.897 2-2-.897-2-2-2z"
                                                    ></path>
                                                    <path
                                                        d="M12 16H4c-2.056 0-4-1.944-4-4V4c0-2.056 1.944-4 4-4h8c2.056 0 4 1.944 4 4v8c0 2.056-1.944 4-4 4zM4 2c-.935 0-2 1.065-2 2v8c0 .953 1.047 2 2 2h8c.935 0 2-1.065 2-2V4c0-.935-1.065-2-2-2H4z"
                                                    ></path>
                                                </g>
                                            </svg>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        {{-- <div class="ro rh h rp">
                            <nav class="rc">
                                <ul class="st">
                                    <li><a href="#">Contact</a></li>
                                    <li><a href="#">About us</a></li>
                                    <li><a href="#">FAQ's</a></li>
                                    <li><a href="#">Support</a></li>
                                </ul>
                            </nav>
                            <div class="footer-copyright">
                                © 2020 Neon, all rights reserved
                            </div>
                        </div> --}}
                    </div>
                </div>
            </footer>
        </div>
        <script src="{{ asset('js/landing.js') }}"></script>
    </body>
</html>
