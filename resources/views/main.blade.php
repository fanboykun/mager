<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width,initial-scale=1" />
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <title>Mager</title>
        <link rel="stylesheet" href="{{ asset('css/landing.css') }}" />
    </head>
    <body class="t">
        <div class="rn">
            <header class="nb">
                <div class="tcontainern">
                    <div class="n_">
                        <div class="nk">
                            <h1 class="sz">
                                <a href="index.html"
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
                                <ul class="st h re">
                                    <li>
                                        <a href="additional.html"
                                            >Secondary page</a
                                        >
                                    </li>
                                </ul>
                                <ul class="st re">
                                    <li>
                                        <a
                                            class="
                                                tbuttonn
                                                fbuttonl
                                                gbuttony
                                                sbuttono
                                            "
                                            href="signup.html"
                                            >Sign up</a
                                        >
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </header>
            <main class="nw">
                <section class="r_ nx rillustration-section-i">
                    {{-- <div class="tcontainern">
                        <div class="pricing-inner rd">
                            <div class="rv s_ reveal-from-bottom">
                                <div class="scontainero">
                                    <h1 class="sz">
                                        Engage Your Visitors with a beautiful
                                        template
                                    </h1>
                                </div>
                            </div>
                            <div class="rz s_ reveal-from-top">
                                <label class="k"
                                    ><input type="checkbox" checked="" />
                                    <span class="ta"></span>
                                    <span>Billed Monthly</span>
                                    <span>Billed Annually</span></label
                                >
                            </div>
                            <div class="tiles-wrap">
                                <div
                                    class="ng reveal-from-right"
                                    data-reveal-delay="400"
                                >
                                    <div class="ny">
                                        <div class="rj">
                                            <div class="ib aa ue">
                                                <div
                                                    class="
                                                        pricing-item-price
                                                        ou
                                                    "
                                                    data-price-output='{"0": ["$", "34", "/m"],"1": ["$", "27", "/m"]}'
                                                >
                                                    <span class="iw o"></span
                                                    ><span
                                                        class="
                                                            pricing-item-price-amount
                                                            i
                                                        "
                                                    ></span
                                                    ><span
                                                        class="
                                                            pricing-item-price-after
                                                            l
                                                        "
                                                    ></span>
                                                </div>
                                                <div class="c sc">
                                                    Lorem ipsum is a common text
                                                </div>
                                            </div>
                                            <div
                                                class="
                                                    pricing-item-features
                                                    mb-40
                                                "
                                            >
                                                <div
                                                    class="
                                                        pricing-item-features-title
                                                        f
                                                        c
                                                        sf
                                                        ue
                                                    "
                                                >
                                                    What’s included
                                                </div>
                                                <ul class="rq st c us">
                                                    <li class="ix">
                                                        Excepteur sint occaecat
                                                        velit
                                                    </li>
                                                    <li class="ix">
                                                        Excepteur sint occaecat
                                                        velit
                                                    </li>
                                                    <li class="ix">
                                                        Excepteur sint occaecat
                                                        velit
                                                    </li>
                                                    <li>
                                                        Excepteur sint occaecat
                                                        velit
                                                    </li>
                                                    <li>
                                                        Excepteur sint occaecat
                                                        velit
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="pricing-item-cta oh">
                                            <a
                                                class="
                                                    tbuttonn
                                                    fbuttonl
                                                    pbuttond
                                                "
                                                href="#"
                                                >Start free trial</a
                                            >
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="ng reveal-from-bottom"
                                    data-reveal-delay="200"
                                >
                                    <div class="ny">
                                        <div class="rj">
                                            <div class="ib aa ue">
                                                <div
                                                    class="
                                                        pricing-item-price
                                                        ou
                                                    "
                                                    data-price-output='{"0": ["$", "54", "/m"],"1": ["$", "47", "/m"]}'
                                                >
                                                    <span class="iw o"></span
                                                    ><span
                                                        class="
                                                            pricing-item-price-amount
                                                            i
                                                        "
                                                    ></span
                                                    ><span
                                                        class="
                                                            pricing-item-price-after
                                                            l
                                                        "
                                                    ></span>
                                                </div>
                                                <div class="c sc">
                                                    Lorem ipsum is a common text
                                                </div>
                                            </div>
                                            <div
                                                class="
                                                    pricing-item-features
                                                    mb-40
                                                "
                                            >
                                                <div
                                                    class="
                                                        pricing-item-features-title
                                                        f
                                                        c
                                                        sf
                                                        ue
                                                    "
                                                >
                                                    What’s included
                                                </div>
                                                <ul class="rq st c us">
                                                    <li class="ix">
                                                        Excepteur sint occaecat
                                                        velit
                                                    </li>
                                                    <li class="ix">
                                                        Excepteur sint occaecat
                                                        velit
                                                    </li>
                                                    <li class="ix">
                                                        Excepteur sint occaecat
                                                        velit
                                                    </li>
                                                    <li class="ix">
                                                        Excepteur sint occaecat
                                                        velit
                                                    </li>
                                                    <li>
                                                        Excepteur sint occaecat
                                                        velit
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="pricing-item-cta oh">
                                            <a
                                                class="
                                                    tbuttonn
                                                    fbuttonl
                                                    pbuttond
                                                "
                                                href="#"
                                                >Start free trial</a
                                            >
                                        </div>
                                    </div>
                                </div>
                                <div class="ng reveal-from-left" data-reveal-delay="400">
                                    <div class="ny">
                                        <div class="rj">
                                            <div class="ib aa ue">
                                                <div
                                                    class="
                                                        pricing-item-price
                                                        ou
                                                    "
                                                    data-price-output='{"0": ["$", "74", "/m"],"1": ["$", "67", "/m"]}'
                                                >
                                                    <span class="iw o"></span
                                                    ><span
                                                        class="
                                                            pricing-item-price-amount
                                                            i
                                                        "
                                                    ></span
                                                    ><span
                                                        class="
                                                            pricing-item-price-after
                                                            l
                                                        "
                                                    ></span>
                                                </div>
                                                <div class="c sc">
                                                    Lorem ipsum is a common text
                                                </div>
                                            </div>
                                            <div
                                                class="
                                                    pricing-item-features
                                                    mb-40
                                                "
                                            >
                                                <div
                                                    class="
                                                        pricing-item-features-title
                                                        f
                                                        c
                                                        sf
                                                        ue
                                                    "
                                                >
                                                    What’s included
                                                </div>
                                                <ul class="rq st c us">
                                                    <li class="ix">
                                                        Excepteur sint occaecat
                                                        velit
                                                    </li>
                                                    <li class="ix">
                                                        Excepteur sint occaecat
                                                        velit
                                                    </li>
                                                    <li class="ix">
                                                        Excepteur sint occaecat
                                                        velit
                                                    </li>
                                                    <li class="ix">
                                                        Excepteur sint occaecat
                                                        velit
                                                    </li>
                                                    <li class="ix">
                                                        Excepteur sint occaecat
                                                        velit
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="pricing-item-cta oh">
                                            <a
                                                class="
                                                    tbuttonn
                                                    fbuttonl
                                                    pbuttond
                                                "
                                                href="#"
                                                >Start free trial</a
                                            >
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </section>
                <section class="is nx s_">
                    <div class="tcontainern">
                        <div class="team-inner rd i_">
                            <div class="rv s_ reveal-from-bottom">
                                <div class="scontainero">
                                    <h2 class="oe ok">
                                        Meet the team - Lorem ipsum is
                                        placeholder text.
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
                                <div class="ng reveal-from-bottom">
                                    <div class="ny">
                                        <div class="team-item-header">
                                            <div class="team-item-image ue">
                                                <img
                                                    src="landing/team-member-01.jpg"
                                                    alt="Team member 01"
                                                    width="180"
                                                    height="180"
                                                />
                                            </div>
                                        </div>
                                        <div class="team-item-content">
                                            <h5 class="team-item-name oe ou">
                                                Markus Hasinika
                                            </h5>
                                            <div
                                                class="
                                                    team-item-role
                                                    h
                                                    so
                                                    sg
                                                    sh
                                                    oh
                                                "
                                            >
                                                Founder &amp; CEO
                                            </div>
                                            <p class="sz l">
                                                Magnis dis parturient montes
                                                nascetur. Quam quisque id diam
                                                vel quam ultricies leo integer.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="ng reveal-from-bottom"
                                    data-reveal-delay="200"
                                >
                                    <div class="ny">
                                        <div class="team-item-header">
                                            <div class="team-item-image ue">
                                                <img
                                                    src="landing/team-member-02.jpg"
                                                    alt="Team member 02"
                                                    width="180"
                                                    height="180"
                                                />
                                            </div>
                                        </div>
                                        <div class="team-item-content">
                                            <h5 class="team-item-name oe ou">
                                                Diana Stafford
                                            </h5>
                                            <div
                                                class="
                                                    team-item-role
                                                    h
                                                    so
                                                    sg
                                                    sh
                                                    oh
                                                "
                                            >
                                                Founder &amp; CEO
                                            </div>
                                            <p class="sz l">
                                                Magnis dis parturient montes
                                                nascetur. Quam quisque id diam
                                                vel quam ultricies leo integer.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="ng reveal-from-bottom"
                                    data-reveal-delay="400"
                                >
                                    <div class="ny">
                                        <div class="team-item-header">
                                            <div class="team-item-image ue">
                                                <img
                                                    src="landing/team-member-03.jpg"
                                                    alt="Team member 03"
                                                    width="180"
                                                    height="180"
                                                />
                                            </div>
                                        </div>
                                        <div class="team-item-content">
                                            <h5 class="team-item-name oe ou">
                                                Patricia Collins
                                            </h5>
                                            <div
                                                class="
                                                    team-item-role
                                                    h
                                                    so
                                                    sg
                                                    sh
                                                    oh
                                                "
                                            >
                                                Founder &amp; CEO
                                            </div>
                                            <p class="sz l">
                                                Magnis dis parturient montes
                                                nascetur. Quam quisque id diam
                                                vel quam ultricies leo integer.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="ng reveal-from-bottom">
                                    <div class="ny">
                                        <div class="team-item-header">
                                            <div class="team-item-image ue">
                                                <img
                                                    src="landing/team-member-04.jpg"
                                                    alt="Team member 04"
                                                    width="180"
                                                    height="180"
                                                />
                                            </div>
                                        </div>
                                        <div class="team-item-content">
                                            <h5 class="team-item-name oe ou">
                                                Anton Klenkov
                                            </h5>
                                            <div
                                                class="
                                                    team-item-role
                                                    h
                                                    so
                                                    sg
                                                    sh
                                                    oh
                                                "
                                            >
                                                Founder &amp; CEO
                                            </div>
                                            <p class="sz l">
                                                Magnis dis parturient montes
                                                nascetur. Quam quisque id diam
                                                vel quam ultricies leo integer.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="ng reveal-from-bottom"
                                    data-reveal-delay="200"
                                >
                                    <div class="ny">
                                        <div class="team-item-header">
                                            <div class="team-item-image ue">
                                                <img
                                                    src="landing/team-member-05.jpg"
                                                    alt="Team member 05"
                                                    width="180"
                                                    height="180"
                                                />
                                            </div>
                                        </div>
                                        <div class="team-item-content">
                                            <h5 class="team-item-name oe ou">
                                                Nick Kornilov
                                            </h5>
                                            <div
                                                class="
                                                    team-item-role
                                                    h
                                                    so
                                                    sg
                                                    sh
                                                    oh
                                                "
                                            >
                                                Founder &amp; CEO
                                            </div>
                                            <p class="sz l">
                                                Magnis dis parturient montes
                                                nascetur. Quam quisque id diam
                                                vel quam ultricies leo integer.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="ng reveal-from-bottom"
                                    data-reveal-delay="400"
                                >
                                    <div class="ny">
                                        <div class="team-item-header">
                                            <div class="team-item-image ue">
                                                <img
                                                    src="landing/team-member-06.jpg"
                                                    alt="Team member 01"
                                                    width="180"
                                                    height="180"
                                                />
                                            </div>
                                        </div>
                                        <div class="team-item-content">
                                            <h5 class="team-item-name oe ou">
                                                Andrea Engler
                                            </h5>
                                            <div
                                                class="
                                                    team-item-role
                                                    h
                                                    so
                                                    sg
                                                    sh
                                                    oh
                                                "
                                            >
                                                Founder &amp; CEO
                                            </div>
                                            <p class="sz l">
                                                Magnis dis parturient montes
                                                nascetur. Quam quisque id diam
                                                vel quam ultricies leo integer.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
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
                <section class="nx">
                    <div class="tcontainern">
                        <div class="rd i_">
                            <div class="scontainero">
                                <h2 class="oe">
                                    Lorem ipsum is placeholder text commonly
                                    used in the graphic.
                                </h2>
                                <p>
                                    Lorem ipsum dolor sit amet,
                                    <a href="#">consectetur adipiscing elit</a>,
                                    sed do eiusmod tempor incididunt ut labore
                                    et dolore magna aliqua. Ut enim ad minim
                                    veniam, quis nostrud exercitation ullamco
                                    laboris nisi ut aliquip ex ea commodo
                                    consequat.
                                </p>
                                <p>
                                    Duis aute irure dolor in reprehenderit in
                                    voluptate velit esse cillum dolore eu fugiat
                                    nulla pariatur. Excepteur sint occaecat
                                    cupidatat non proident, sunt in culpa qui
                                    officia deserunt mollit anim id est laborum.
                                </p>
                                <figure>
                                    <img
                                        class="sb"
                                        src="landing/image-placeholder.svg"
                                        alt="Image placeholder"
                                        width="712"
                                        height="400"
                                    />
                                    <figcaption class="sc">
                                        A super-nice image
                                        <span role="img" aria-label="smile"
                                            >😀</span
                                        >
                                    </figcaption>
                                </figure>
                                <h4>Flexibility</h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur
                                    adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua.
                                    Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip
                                    ex ea commodo consequat sint occaecat
                                    cupidatat non proident, sunt in culpa qui
                                    officia deserunt mollit anim id est laborum.
                                </p>
                                <ul>
                                    <li>
                                        Lorem ipsum dolor sit amet, consectetur.
                                    </li>
                                    <li>
                                        Lorem ipsum dolor sit amet, consectetur.
                                    </li>
                                    <li>
                                        Lorem ipsum dolor sit amet, consectetur.
                                    </li>
                                </ul>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur
                                    adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua.
                                    Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris.
                                </p>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="nx">
                    <div class="tcontainern">
                        <div class="rd i_">
                            <div class="scontainero">
                                <div class="rv s_">
                                    <h2 class="sz">
                                        Modal - Lorem ipsum is placeholder text
                                        commonly used.
                                    </h2>
                                </div>
                                <div class="s_">
                                    <a
                                        class="tbuttonn fbuttonl modal-trigger"
                                        aria-controls="modal-01"
                                        href="#"
                                        >Open modal</a
                                    >
                                </div>
                                <div id="modal-01" class="tx">
                                    <div class="t_">
                                        <button
                                            class="tq modal-close-trigger"
                                            aria-label="close"
                                        ></button>
                                        <div class="tj">
                                            <div class="s_">
                                                <h3 class="ow oh">
                                                    Join our newsletter
                                                </h3>
                                                <p class="l">
                                                    Lorem ipsum dolor sit amet,
                                                    consectetur adipiscing elit,
                                                    sed do eiusmod.
                                                </p>
                                            </div>
                                            <form
                                                style="
                                                    max-width: 320px;
                                                    margin: 0 auto;
                                                "
                                            >
                                                <div class="og">
                                                    <input
                                                        class="j"
                                                        type="email"
                                                        id="modal-input"
                                                        placeholder="Your best email"
                                                    />
                                                </div>
                                                <button
                                                    class="
                                                        tbuttonn
                                                        fbuttonl
                                                        pbuttond
                                                    "
                                                >
                                                    Subscribe
                                                </button>
                                            </form>
                                            <div class="s_ oq">
                                                <a
                                                    class="
                                                        h
                                                        so
                                                        sg
                                                        modal-close-trigger
                                                    "
                                                    aria-label="close"
                                                    href="#0"
                                                    >No thanks!</a
                                                >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="nx s_">
                    <div class="tcontainern">
                        <div class="rd i_">
                            <div class="scontainero">
                                <div class="rv">
                                    <h2 class="sz">
                                        Buttons - Lorem ipsum is placeholder
                                        text commonly used.
                                    </h2>
                                </div>
                                <div class="vbuttonm">
                                    <a
                                        class="tbuttonn fbuttonl gbuttony"
                                        href="#"
                                        >Get started now</a
                                    >
                                    <a
                                        class="tbuttonn cbuttonh gbuttony"
                                        href="#"
                                        >Get started now</a
                                    >
                                </div>
                                <div class="vbuttonm">
                                    <a
                                        class="tbuttonn ubuttona gbuttony"
                                        href="#"
                                        >Get started now</a
                                    >
                                    <a class="tbuttonn gbuttony" href="#"
                                        >Get started now</a
                                    >
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="nx">
                    <div class="tcontainern">
                        <div class="rd i_">
                            <div class="scontainero">
                                <div class="rv s_">
                                    <h2 class="sz">
                                        Input forms - Lorem ipsum is placeholder
                                        text commonly used.
                                    </h2>
                                </div>
                                <form style="max-width: 420px; margin: 0 auto">
                                    <div class="ue">
                                        <label class="x se" for="input-01"
                                            >This is a label</label
                                        >
                                        <div class="tc">
                                            <input
                                                class="j"
                                                type="email"
                                                id="input-01"
                                                placeholder="Your best email"
                                            />
                                            <button class="tbuttonn fbuttonl">
                                                Early access
                                            </button>
                                        </div>
                                    </div>
                                    <div class="ue">
                                        <label class="x se" for="input-02"
                                            >This is a label</label
                                        >
                                        <div class="tc">
                                            <input
                                                class="j"
                                                type="email"
                                                id="input-02"
                                                placeholder="Your best email"
                                                value="hello@cruip.com"
                                            />
                                            <button class="tbuttonn fbuttonl w">
                                                Early access
                                            </button>
                                        </div>
                                    </div>
                                    <div class="ue">
                                        <label class="x se" for="input-03"
                                            >This is a label</label
                                        >
                                        <div class="tc">
                                            <input
                                                class="j tt"
                                                type="email"
                                                id="input-03"
                                                placeholder="Your best email"
                                            />
                                            <button class="tbuttonn fbuttonl">
                                                Early access
                                            </button>
                                        </div>
                                        <div class="tl sd">
                                            Something is wrong.
                                        </div>
                                    </div>
                                    <div class="ue">
                                        <label class="x se" for="input-04"
                                            >This is a label</label
                                        >
                                        <div class="tc">
                                            <input
                                                class="j tr"
                                                type="email"
                                                id="input-04"
                                                placeholder="Your best email"
                                            />
                                            <button class="tbuttonn fbuttonl">
                                                Early access
                                            </button>
                                        </div>
                                        <div class="tl sm">You’ve done it.</div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="nx">
                    <div class="tcontainern">
                        <div class="rd i_">
                            <div class="scontainero">
                                <div class="rv s_">
                                    <h2 class="sz">
                                        FAQ - Lorem ipsum is placeholder text
                                        commonly used.
                                    </h2>
                                </div>
                                <ul class="tm st on">
                                    <li class="tb">
                                        <div class="tg l">
                                            <span class="f sz"
                                                >Nisi porta lorem mollis aliquam
                                                ut.</span
                                            >
                                            <div class="tw"></div>
                                        </div>
                                        <div class="ty c">
                                            <p>
                                                Lorem ipsum is placeholder text
                                                commonly used in the graphic,
                                                print, and publishing industries
                                                for previewing layouts and
                                                visual mockups.
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tg l">
                                            <span class="f sz"
                                                >Nisi porta lorem mollis aliquam
                                                ut.</span
                                            >
                                            <div class="tw"></div>
                                        </div>
                                        <div class="ty c">
                                            <p>
                                                Lorem ipsum is placeholder text
                                                commonly used in the graphic,
                                                print, and publishing industries
                                                for previewing layouts and
                                                visual mockups.
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tg l">
                                            <span class="f sz"
                                                >Nisi porta lorem mollis aliquam
                                                ut.</span
                                            >
                                            <div class="tw"></div>
                                        </div>
                                        <div class="ty c">
                                            <p>
                                                Lorem ipsum is placeholder text
                                                commonly used in the graphic,
                                                print, and publishing industries
                                                for previewing layouts and
                                                visual mockups.
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tg l">
                                            <span class="f sz"
                                                >Nisi porta lorem mollis aliquam
                                                ut.</span
                                            >
                                            <div class="tw"></div>
                                        </div>
                                        <div class="ty c">
                                            <p>
                                                Lorem ipsum is placeholder text
                                                commonly used in the graphic,
                                                print, and publishing industries
                                                for previewing layouts and
                                                visual mockups.
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tg l">
                                            <span class="f sz"
                                                >Nisi porta lorem mollis aliquam
                                                ut.</span
                                            >
                                            <div class="tw"></div>
                                        </div>
                                        <div class="ty c">
                                            <p>
                                                Lorem ipsum is placeholder text
                                                commonly used in the graphic,
                                                print, and publishing industries
                                                for previewing layouts and
                                                visual mockups.
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>
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
                                        type="text"
                                        placeholder="Username"
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
            <footer class="rr">
                <div class="tcontainern">
                    <div class="ri i_">
                        <div class="rs h">
                            <div class="ru">
                                <div class="ra">
                                    <div class="nk ok">
                                        <a href="index.html"
                                            ><img
                                                src="landing/logo.svg"
                                                alt="Neon"
                                                width="32"
                                                height="32"
                                        /></a>
                                    </div>
                                    <div class="footer-copyright">
                                        © 2020 Neon, all rights reserved
                                    </div>
                                </div>
                                <div class="ra">
                                    <div class="rf">Company</div>
                                    <ul class="st on">
                                        <li><a href="#">Dummy text used</a></li>
                                        <li>
                                            <a href="#">The purpose of lorem</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                >Filler text can be very
                                                useful</a
                                            >
                                        </li>
                                        <li><a href="#">Be on design</a></li>
                                    </ul>
                                </div>
                                <div class="ra">
                                    <div class="rf">Uses cases</div>
                                    <ul class="st on">
                                        <li>
                                            <a href="#"
                                                >Consectetur adipiscing</a
                                            >
                                        </li>
                                        <li>
                                            <a href="#">Lorem Ipsum is place</a>
                                        </li>
                                        <li><a href="#">Excepteur sint</a></li>
                                        <li>
                                            <a href="#">Occaecat cupidatat</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="ra">
                                    <div class="rf">Docs</div>
                                    <ul class="st on">
                                        <li>
                                            <a href="#">The purpose of lorem</a>
                                        </li>
                                        <li><a href="#">Dummy text used</a></li>
                                        <li><a href="#">Excepteur sint</a></li>
                                        <li>
                                            <a href="#">Occaecat cupidatat</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="ro rh az h">
                            <nav class="rc">
                                <ul class="st on">
                                    <li><a href="#">Contact</a></li>
                                    <li><a href="#">About us</a></li>
                                    <li><a href="#">FAQ's</a></li>
                                    <li><a href="#">Support</a></li>
                                </ul>
                            </nav>
                            <div class="rl">
                                <ul class="st">
                                    <li>
                                        <a href="#"
                                            ><svg
                                                width="16"
                                                height="16"
                                                viewBox="0 0 16 16"
                                                xmlns="http://www.w3.org/2000/svg"
                                            >
                                                <title>LinkedIn</title>
                                                <path
                                                    d="M15.3 0H.7C.3 0 0 .3 0 .7v14.7c0 .3.3.6.7.6h14.7c.4 0 .7-.3.7-.7V.7c-.1-.4-.4-.7-.8-.7zM4.7 13.6H2.4V6h2.4v7.6h-.1zM3.6 5c-.8 0-1.4-.7-1.4-1.4 0-.8.6-1.4 1.4-1.4.8 0 1.4.6 1.4 1.4-.1.7-.7 1.4-1.4 1.4zm10 8.6h-2.4V9.9c0-.9 0-2-1.2-2s-1.4 1-1.4 2v3.8H6.2V6h2.3v1c.3-.6 1.1-1.2 2.2-1.2 2.4 0 2.8 1.6 2.8 3.6v4.2h.1z"
                                                ></path></svg
                                        ></a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            ><svg
                                                width="16"
                                                height="16"
                                                viewBox="0 0 16 16"
                                                xmlns="http://www.w3.org/2000/svg"
                                            >
                                                <title>Pinterest</title>
                                                <path
                                                    d="M8 0C3.6 0 0 3.6 0 8c0 3.4 2.1 6.3 5.1 7.4-.1-.6-.1-1.6 0-2.3.1-.6.9-4 .9-4s-.2-.4-.2-1.1c0-1.1.7-2 1.5-2 .7 0 1 .5 1 1.1 0 .7-.4 1.7-.7 2.7-.2.8.4 1.4 1.2 1.4 1.4 0 2.5-1.5 2.5-3.7 0-1.9-1.4-3.3-3.3-3.3-2.3 0-3.6 1.7-3.6 3.5 0 .7.3 1.4.6 1.8v.4c-.1.3-.2.8-.2.9 0 .1-.1.2-.3.1-1-.5-1.6-1.9-1.6-3.1C2.9 5.3 4.7 3 8.2 3c2.8 0 4.9 2 4.9 4.6 0 2.8-1.7 5-4.2 5-.8 0-1.6-.4-1.8-.9 0 0-.4 1.5-.5 1.9-.2.7-.7 1.6-1 2.1.8.2 1.6.3 2.4.3 4.4 0 8-3.6 8-8s-3.6-8-8-8z"
                                                ></path></svg
                                        ></a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            ><svg
                                                width="16"
                                                height="16"
                                                viewBox="0 0 16 16"
                                                xmlns="http://www.w3.org/2000/svg"
                                            >
                                                <title>GitHub</title>
                                                <path
                                                    d="M7.95 0C3.578 0 0 3.578 0 7.95c0 3.479 2.286 6.46 5.466 7.553.397.1.497-.199.497-.397v-1.392c-2.187.497-2.683-.994-2.683-.994-.398-.894-.895-1.192-.895-1.192-.696-.497.1-.497.1-.497.795.1 1.192.795 1.192.795.696 1.292 1.888.894 2.286.696.1-.497.298-.895.497-1.093-1.79-.2-3.578-.895-3.578-3.976 0-.894.298-1.59.795-2.087-.1-.198-.397-.993.1-2.086 0 0 .695-.2 2.186.795a6.408 6.408 0 0 1 1.987-.299c.696 0 1.392.1 1.988.299 1.49-.994 2.186-.795 2.186-.795.398 1.093.199 1.888.1 2.086.496.597.795 1.292.795 2.087 0 3.081-1.889 3.677-3.677 3.876.298.398.596.895.596 1.59v2.187c0 .198.1.496.596.397C13.714 14.41 16 11.43 16 7.95 15.9 3.578 12.323 0 7.95 0z"
                                                ></path></svg
                                        ></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <script src="{{ asset('js/landing.js') }}"></script>
        <script
            async=""
            src="https://www.googletagmanager.com/gtag/js?id=UA-125021779-1"
        ></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag() {
                dataLayer.push(arguments);
            }
            gtag("js", new Date());
            gtag("config", "UA-125021779-1", { anonymize_ip: true });
        </script>
        <script>
            const pagesList = [
                {
                    name: "Home",
                    url: "https://preview.cruip.com/neon/index.html",
                    active: false,
                },
                {
                    name: "Secondary",
                    url: "https://preview.cruip.com/neon/additional.html",
                    active: true,
                },
                {
                    name: "Sign up",
                    url: "https://preview.cruip.com/neon/signup.html",
                    active: false,
                },
                {
                    name: "Sign in",
                    url: "https://preview.cruip.com/neon/login.html",
                    active: false,
                },
            ];
            if (window != top) {
                window.parent.postMessage(pagesList, "https://cruip.com");
            }
        </script>
    </body>
</html>
