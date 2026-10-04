<!DOCTYPE html>
<html lang="fr" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Administration — Tableau de bord')</title>
    <style>
        :root {
            --bg: #f2f4f6;
            --surface: #fff;
            --ink: #14212b;
            --muted: #6a7885;
            --line: #e2e7ec;
            --side: #10262c;
            --side-ink: #b9cbd0;
            --accent: #ff2d20;
            --accent-soft: #ffe9e7;
            --ok: #12805c;
            --ok-bg: #dff5ec;
            --warn: #9a5b00;
            --warn-bg: #fdf0d5;
            --bad: #b3261e;
            --bad-bg: #fde4e2;
            --info: #1f6f8b;
            --info-bg: #dceff5;
            --c1: #ff2d20;
            --c2: #1f6f8b;
            --c3: #e8a317;
            --c4: #7a8b99;
            --r: 10px
        }

        :root[data-theme=dark] {
            --bg: #0b1519;
            --surface: #12222a;
            --ink: #e8eff2;
            --muted: #8fa2ad;
            --line: #1f333d;
            --side: #081114;
            --accent-soft: #3a1714;
            --ok: #5fd3a8;
            --ok-bg: #12352b;
            --warn: #f0c064;
            --warn-bg: #3a2b0d;
            --bad: #ff8a82;
            --bad-bg: #3b1a18;
            --info: #7cc6e0;
            --info-bg: #12323d
        }

        * {
            box-sizing: border-box;
            margin: 0
        }

        body {
            font: 15px/1.5 system-ui, -apple-system, "Segoe UI", Roboto, sans-serif;
            background: var(--bg);
            color: var(--ink);
            display: grid;
            grid-template-columns: 240px 1fr;
            min-height: 100vh
        }

        a {
            color: inherit;
            text-decoration: none
        }

        button {
            font: inherit;
            color: inherit;
            cursor: pointer
        }

        :focus-visible {
            outline: 2px solid var(--accent);
            outline-offset: 2px
        }

        aside {
            background: var(--side);
            color: var(--side-ink);
            padding: 20px 14px;
            position: sticky;
            top: 0;
            height: 100vh;
            display: flex;
            flex-direction: column;
            gap: 18px;
            overflow-y: auto
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 10px;
            color: #fff;
            font-weight: 700;
            font-size: 17px;
            padding: 0 8px
        }

        .brand i {
            width: 30px;
            height: 30px;
            border-radius: 8px;
            background: var(--accent);
            display: grid;
            place-items: center;
            font-style: normal
        }

        nav {
            display: flex;
            flex-direction: column;
            gap: 2px
        }

        nav small {
            padding: 12px 10px 4px;
            font-size: 12px;
            color: #6f8a91
        }

        nav a {
            display: flex;
            align-items: center;
            padding: 9px 10px;
            border-radius: 8px
        }

        nav a:hover {
            background: rgba(255, 255, 255, .07)
        }

        nav a.on {
            background: rgba(255, 255, 255, .12);
            color: #fff;
            box-shadow: inset 3px 0 var(--accent)
        }

        nav .n {
            margin-left: auto;
            background: var(--accent);
            color: #fff;
            font-size: 12px;
            padding: 0 7px;
            border-radius: 9px
        }

        .me {
            margin-top: auto;
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 10px;
            border-top: 1px solid rgba(255, 255, 255, .1)
        }

        .av {
            width: 34px;
            height: 34px;
            border-radius: 50%;
            background: var(--c2);
            color: #fff;
            display: grid;
            place-items: center;
            font-weight: 600;
            font-size: 13px;
            flex: none
        }

        .me b {
            display: block;
            color: #fff;
            font-weight: 600;
            font-size: 14px
        }

        .me span {
            font-size: 12px
        }

        main {
            padding: 0 28px 40px;
            min-width: 0
        }

        header {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 16px 0;
            position: sticky;
            top: 0;
            background: var(--bg);
            z-index: 5;
            flex-wrap: wrap
        }

        header h1 {
            font-size: 22px;
            letter-spacing: -.01em;
            margin-right: auto
        }

        header h1 span {
            display: block;
            font-size: 13px;
            font-weight: 400;
            color: var(--muted);
            letter-spacing: 0
        }

        .ib {
            width: 40px;
            height: 40px;
            border-radius: 8px;
            border: 1px solid var(--line);
            background: var(--surface);
            display: grid;
            place-items: center;
            position: relative
        }

        .ib .dot {
            position: absolute;
            top: 8px;
            right: 9px;
            width: 8px;
            height: 8px;
            background: var(--accent);
            border-radius: 50%
        }

        #menu {
            display: none
        }

        .btn {
            height: 40px;
            padding: 0 16px;
            border-radius: 8px;
            border: 0;
            background: var(--accent);
            color: #fff;
            font-weight: 600;
            display: inline-flex;
            align-items: center
        }

        .btn:hover {
            filter: brightness(.92)
        }

        .kpis {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 16px
        }

        .card {
            background: var(--surface);
            border: 1px solid var(--line);
            border-radius: var(--r);
            padding: 18px
        }

        .kpi .l {
            color: var(--muted);
            font-size: 14px
        }

        .kpi .v {
            font-size: 30px;
            font-weight: 700;
            letter-spacing: -.02em;
            margin: 4px 0
        }

        .kpi .d {
            font-size: 13px;
            display: flex;
            align-items: center;
            gap: 6px;
            color: var(--muted);
            flex-wrap: wrap
        }

        .pill {
            font-weight: 600;
            padding: 1px 7px;
            border-radius: 6px
        }

        .up {
            background: var(--ok-bg);
            color: var(--ok)
        }

        .wt {
            background: var(--warn-bg);
            color: var(--warn)
        }

        .nf {
            background: var(--info-bg);
            color: var(--info)
        }

        .grid {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 16px;
            margin-top: 16px
        }

        .stack {
            display: grid;
            gap: 16px;
            align-content: start;
            min-width: 0
        }

        .ch {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 10px;
            margin-bottom: 14px;
            flex-wrap: wrap
        }

        .ch h2 {
            font-size: 16px
        }

        .ch a {
            color: var(--accent);
            font-weight: 600;
            font-size: 14px
        }

        .seg {
            display: flex;
            background: var(--bg);
            border-radius: 8px;
            padding: 3px;
            flex-wrap: wrap
        }

        .seg button {
            border: 0;
            background: none;
            padding: 4px 12px;
            border-radius: 6px;
            font-size: 13px;
            color: var(--muted)
        }

        .seg button.on {
            background: var(--surface);
            color: var(--ink);
            font-weight: 600;
            box-shadow: 0 1px 2px rgba(0, 0, 0, .12)
        }

        #chart {
            width: 100%;
            height: 250px;
            display: block
        }

        #chart text {
            fill: var(--muted);
            font-size: 11px
        }

        .legend {
            display: flex;
            gap: 16px;
            font-size: 13px;
            color: var(--muted);
            margin-top: 8px
        }

        .legend i {
            display: inline-block;
            width: 10px;
            height: 10px;
            border-radius: 3px;
            margin-right: 6px
        }

        .donut {
            display: flex;
            align-items: center;
            gap: 18px;
            flex-wrap: wrap
        }

        .donut svg {
            width: 140px;
            height: 140px;
            flex: none
        }

        .donut ul {
            list-style: none;
            padding: 0;
            flex: 1;
            min-width: 120px;
            display: grid;
            gap: 8px;
            font-size: 14px
        }

        .donut li {
            display: flex;
            align-items: center;
            gap: 8px
        }

        .donut li b {
            margin-left: auto
        }

        .donut li i {
            width: 10px;
            height: 10px;
            border-radius: 3px
        }

        .tools {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
            align-items: center;
            margin-bottom: 12px
        }

        .tools input {
            flex: 1;
            min-width: 160px;
            height: 36px;
            font: inherit;
            color: inherit;
            background: var(--bg);
            border: 1px solid var(--line);
            border-radius: 8px;
            padding: 0 12px
        }

        .tw {
            overflow-x: auto
        }

        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 14px;
            min-width: 620px
        }

        th {
            text-align: left;
            font-weight: 600;
            color: var(--muted);
            font-size: 13px;
            padding: 8px 10px;
            border-bottom: 1px solid var(--line)
        }

        td {
            padding: 11px 10px;
            border-bottom: 1px solid var(--line)
        }

        tr:last-child td {
            border-bottom: 0
        }

        tbody tr:hover {
            background: var(--bg)
        }

        td .t {
            font-weight: 600;
            display: block;
            max-width: 300px
        }

        td small {
            color: var(--muted)
        }

        .tag {
            padding: 2px 10px;
            border-radius: 12px;
            font-size: 12px;
            font-weight: 600;
            white-space: nowrap
        }

        .s-pub {
            background: var(--ok-bg);
            color: var(--ok)
        }

        .s-rev {
            background: var(--warn-bg);
            color: var(--warn)
        }

        .s-dra {
            background: var(--bg);
            color: var(--muted);
            border: 1px solid var(--line)
        }

        .s-sch {
            background: var(--info-bg);
            color: var(--info)
        }

        .empty {
            text-align: center;
            color: var(--muted);
            padding: 26px 0
        }

        .bars {
            display: grid;
            gap: 14px
        }

        .bar .t {
            display: flex;
            justify-content: space-between;
            font-size: 14px;
            margin-bottom: 5px
        }

        .bar .t span:first-child {
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
            padding-right: 10px
        }

        .bar .tr {
            height: 7px;
            background: var(--bg);
            border-radius: 4px;
            overflow: hidden
        }

        .bar .tr div {
            height: 100%;
            background: var(--c2);
            border-radius: 4px
        }

        .list {
            list-style: none;
            padding: 0;
            display: grid;
            gap: 14px
        }

        .list li {
            display: flex;
            gap: 12px;
            font-size: 14px;
            align-items: flex-start
        }

        .list small {
            display: block;
            color: var(--muted);
            font-size: 12px
        }

        .day {
            flex: none;
            width: 44px;
            text-align: center;
            background: var(--bg);
            border-radius: 8px;
            padding: 4px 0;
            line-height: 1.2
        }

        .day b {
            display: block;
            font-size: 17px
        }

        .day span {
            font-size: 11px;
            color: var(--muted)
        }

        .list .av {
            width: 32px;
            height: 32px;
            font-size: 12px
        }

        #toast {
            position: fixed;
            bottom: 22px;
            right: 22px;
            background: var(--ink);
            color: var(--bg);
            padding: 11px 16px;
            border-radius: 8px;
            opacity: 0;
            transform: translateY(8px);
            transition: .25s;
            pointer-events: none
        }

        #toast.show {
            opacity: 1;
            transform: none
        }

        @media(max-width:1100px) {
            .kpis {
                grid-template-columns: repeat(2, 1fr)
            }

            .grid {
                grid-template-columns: 1fr
            }
        }

        @media(max-width:820px) {
            body {
                grid-template-columns: 1fr
            }

            aside {
                position: fixed;
                inset: 0 auto 0 0;
                width: 250px;
                z-index: 20;
                transform: translateX(-100%);
                transition: transform .25s
            }

            aside.open {
                transform: none
            }

            #menu {
                display: grid
            }

            main {
                padding: 0 16px 32px
            }
        }

        @media(max-width:520px) {
            .kpis {
                grid-template-columns: 1fr
            }

            header .btn {
                padding: 0 12px
            }
        }

        @media(prefers-reduced-motion:reduce) {
            * {
                transition: none !important
            }
        }
    </style>
    @stack('styles')
</head>

<body>
    <aside id="side">
        <div class="brand"><i>◆</i> MonSite Admin</div>
        <nav aria-label="Navigation principale">
            <small>Publication</small>
            <a href="{{ route('dashboard') }}" class="{{ request()->routeIs('dashboard') ? 'on' : '' }}"
                @if (request()->routeIs('dashboard')) aria-current="page" @endif>Tableau de bord</a>
            <a href="{{ route('admin.articles.index') }}"
                class="{{ request()->routeIs('admin.articles.*') ? 'on' : '' }}"
                @if (request()->routeIs('admin.articles.*')) aria-current="page" @endif>Articles<span class="n"
                    id="navn">6</span></a>
            <a href="#">Rubriques</a>
            <a href="#">Mots-clés</a>
            <a href="#">Médias et documents</a>
            <small>Site</small>
            <a href="#">Pages institutionnelles</a>
            <a href="#">Équipe et contacts</a>
            <a href="#">Newsletter</a>
            <a href="#">Messages reçus<span class="n">5</span></a>
            <small>Administration</small>
            <a href="#">Utilisateurs et rôles</a>
            <a href="#">Paramètres</a>
        </nav>
        <div class="me">
            <div class="av">AD</div>
            <div><b>{{ Auth::user()->name }}</b><span>Rédacteur en chef</span></div>
        </div>
    </aside>

    <main>
        <header>
            <button class="ib" id="menu" aria-label="Ouvrir le menu">☰</button>
            <h1>@yield('heading', 'Tableau de bord')@hasSection('subtitle')
                    @yield('subtitle')@else<span id="date"></span>
                @endif
            </h1>
            <button class="ib" id="theme" aria-label="Changer de thème">◐</button>
            @hasSection('actions')
                @yield('actions')
            @else
                <button class="ib" aria-label="Notifications">🔔<span class="dot"></span></button>
                <a class="btn" href="{{ route('admin.articles.create') }}">Nouvel article</a>
            @endif
        </header>

        @yield('content')
    </main>
    <div id="toast" role="status" aria-live="polite"></div>

    <script>
        const $ = s => document.querySelector(s),
            fmt = n => n.toLocaleString('fr-FR');
        if ($('#date')) $('#date').textContent = new Date().toLocaleDateString('fr-FR', {
            weekday: 'long',
            day: 'numeric',
            month: 'long',
            year: 'numeric'
        });
        const toast = t => {
            const e = $('#toast');
            e.textContent = t;
            e.classList.add('show');
            clearTimeout(toast.t);
            toast.t = setTimeout(() => e.classList.remove('show'), 2400)
        };

        /* Thème + menu */
        const root = document.documentElement;
        try {
            const s = localStorage.getItem('theme');
            if (s) root.dataset.theme = s
        } catch (e) {}
        $('#theme').onclick = () => {
            const t = root.dataset.theme === 'dark' ? 'light' : 'dark';
            root.dataset.theme = t;
            try {
                localStorage.setItem('theme', t)
            } catch (e) {}
        };
        $('#menu').onclick = () => $('#side').classList.toggle('open');
        document.querySelectorAll('nav a').forEach(a => a.onclick = e => {
            if (a.getAttribute('href') === '#') e.preventDefault();
            $('#side').classList.remove('open')
        });
    </script>
    @stack('scripts')
</body>

</html>
