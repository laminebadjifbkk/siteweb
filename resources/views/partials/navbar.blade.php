@php
    // $active identifie le lien de menu courant : accueil | apropos | formations | operateurs | actualites | marches | contact
    $active = $active ?? null;
@endphp

<a class="skip-link" href="#contenu">Aller au contenu</a>

<div class="badge-bar">
    <div class="container">
        <div class="flagdots"><i style="background:#00853F"></i><i style="background:#FDB913"></i><i
                style="background:#E4032E"></i>
            <span style="margin-left:6px">République du Sénégal<span class="ministry"> — Ministère de l'Emploi et de
                    la Formation professionnelle et technique</span></span>
        </div>
        <div class="links">
            <a class="hide-sm" href="mailto:onfp@onfp.sn">onfp@onfp.sn</a>
            <a class="hide-sm" href="tel:+221338279251">+221 33 827 92 51</a>
            <a href="https://sigof.onfp.sn" rel="noopener">Espace SIGOF</a>
            @guest
                <a href="{{ route('login') }}">Connexion</a>
                <a href="{{ route('register') }}">Inscription</a>
            @endguest
            @auth
                <a href="{{ route('dashboard') }}">Mon espace</a>
            @endauth
            <span class="lang"><a href="#" aria-current="true" lang="fr">FR</a> <a href="#"
                    lang="en" title="Version anglaise — à développer">EN</a></span>
        </div>
    </div>
</div>

<header class="site">
    <div class="container nav-wrap">
        <a class="brand" href="{{ route('home') }}" aria-label="ONFP — Accueil">
            <img src="{{ asset('assets/img/logo-onfp-240.webp') }}"
                alt="Logo ONFP — Office National de Formation Professionnelle" width="64" height="67">
        </a>
        <nav class="main" aria-label="Navigation principale">
            <ul>
                <li><a href="{{ route('home') }}"
                        @if ($active === 'accueil') aria-current="page" @endif>Accueil</a>
                </li>
                <li class="has-sub"><a href="{{ url('/a-propos') }}"
                        @if ($active === 'apropos') aria-current="page" @endif>L'Office</a>
                    <ul class="submenu">
                        <li><a href="{{ url('/a-propos') }}">Présentation & gouvernance</a></li>
                        <li><a href="{{ url('apropos') }}#mot-dg">Mot de la Directrice général</a></li>
                        <li><a href="{{ url('missions') }}">Nos missions</a></li>
                        <li><a href="{{ url('poles-regionaux') }}">Pôles régionaux</a></li>
                        <li><a href="{{ url('documentation') }}">Documentation</a></li>
                    </ul>
                </li>
                <li class="has-sub"><a href="formations.html"
                        @if ($active === 'formations') aria-current="page" @endif>Formations</a>
                    <ul class="submenu">
                        <li><a href="formations.html">Catalogue des formations</a></li>
                        <li><a href="certification.html">Certification & VAE</a></li>
                        <li><a href="entreprises.html">Entreprises & employeurs</a></li>
                        <li><a href="inscription.html">Pré-inscription en ligne</a></li>
                    </ul>
                </li>
                <li><a href="{{ url('operateurs') }}"
                        @if ($active === 'operateurs') aria-current="page" @endif>Opérateurs</a>
                </li>
                <li><a href="{{ url('actualites') }}"
                        @if ($active === 'actualites') aria-current="page" @endif>Actualités</a>
                </li>
                <li><a href="marches-publics.html" @if ($active === 'marches') aria-current="page" @endif>Marchés
                        publics</a></li>
                <li><a href="contact.html" @if ($active === 'contact') aria-current="page" @endif>Contact</a></li>
            </ul>
        </nav>
        <div class="nav-actions">
            <button class="icon-btn" type="button" data-open-search aria-label="Rechercher"><svg viewBox="0 0 24 24"
                    width="18" height="18" fill="none" stroke="currentColor" stroke-width="1.8"
                    stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <circle cx="11" cy="11" r="7" />
                    <path d="m20 20-3.5-3.5" />
                </svg></button>
            <a href="{{ url('/inscription') }}" class="nav-cta">S'inscrire à une formation</a>
            <button class="icon-btn burger" type="button" aria-label="Ouvrir le menu" aria-controls="drawer"
                aria-expanded="false"><svg viewBox="0 0 24 24" width="18" height="18" fill="none"
                    stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"
                    aria-hidden="true">
                    <path d="M4 7h16M4 12h16M4 17h16" />
                </svg></button>
        </div>
    </div>
</header>
<div class="flag-strip" aria-hidden="true"><i></i><i></i><i></i></div>

<div class="drawer" id="drawer" aria-hidden="true">
    <div class="backdrop" data-close-drawer></div>
    <div class="panel" role="dialog" aria-label="Menu">
        <div style="display:flex;justify-content:space-between;align-items:center">
            <img src="{{ asset('assets/img/logo-onfp-240.webp') }}" alt="ONFP" style="height:52px;width:auto">
            <button class="icon-btn" type="button" data-close-drawer aria-label="Fermer le menu"><svg
                    viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor"
                    stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <path d="M6 6l12 12M18 6 6 18" />
                </svg></button>
        </div>
        <ul>
            <li><a href="{{ route('home') }}">Accueil</a></li>
            <li><a href="{{ url('/a-propos') }}">L'Office</a>
                <ul>
                    <li><a href="a-propos.html#mot-dg">Mot de la Directrice générale</a></li>
                    <li><a href="{{ url('missions') }}">Nos missions</a></li>
                    <li><a href="{{ url('poles-regionaux') }}">Pôles régionaux</a></li>
                    <li><a href="{{ url('documentation') }}">Documentation</a></li>
                </ul>
            </li>
            <li><a href="formations.html">Formations</a>
                <ul>
                    <li><a href="certification.html">Certification & VAE</a></li>
                    <li><a href="entreprises.html">Entreprises & employeurs</a></li>
                    <li><a href="inscription.html">Pré-inscription en ligne</a></li>
                </ul>
            </li>
            <li><a href="{{ url('operateurs') }}">Opérateurs</a></li>
            <li><a href="{{ url('actualites') }}">Actualités</a></li>
            <li><a href="marches-publics.html">Marchés publics</a></li>
            <li><a href="contact.html">Contact</a></li>
        </ul>
        <a href="{{ url('/inscription') }}" class="btn btn-orange"
            style="width:100%;justify-content:center">S'inscrire
            à une formation</a>
    </div>
</div>

<div class="search-overlay" id="search-overlay" role="dialog" aria-label="Recherche">
    <button class="close" type="button" aria-label="Fermer la recherche">×</button>
    <form action="recherche.html" method="get" role="search">
        <label class="sr-only" for="q-global">Rechercher sur le site</label>
        <input id="q-global" type="search" name="q"
            placeholder="Rechercher une formation, un document, une actualité…">
        <button class="btn btn-solid" type="submit">Rechercher</button>
    </form>
</div>
