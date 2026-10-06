<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mentions légales — ONFP</title>
    <meta name="description"
        content="Mentions légales, protection des données personnelles, cookies et accessibilité du site de l'ONFP.">
    <meta name="theme-color" content="#00853F">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="ONFP — Office National de Formation Professionnelle">
    <meta property="og:title" content="Mentions légales — ONFP">
    <meta property="og:description"
        content="Mentions légales, protection des données personnelles, cookies et accessibilité du site de l'ONFP.">
    <meta property="og:image" content="https://www.onfp.sn/assets/img/logo-onfp.png">
    <meta property="og:locale" content="fr_SN">
    <link rel="canonical" href="https://www.onfp.sn/{{ url('mentions-legales') }}">
    <link rel="icon" href="assets/img/favicon.ico" sizes="any">
    <link rel="icon" type="image/png" href="assets/img/favicon-32.png">
    <link rel="apple-touch-icon" href="assets/img/apple-touch-icon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,500;9..144,600;9..144,700&family=Manrope:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    {{-- <a class="skip-link" href="#contenu">Aller au contenu</a>

<div class="badge-bar">
  <div class="container">
    <div class="flagdots"><i style="background:#00853F"></i><i style="background:#FDB913"></i><i style="background:#E4032E"></i>
      <span style="margin-left:6px">République du Sénégal<span class="ministry"> — Ministère de l'Emploi et de la Formation professionnelle et technique</span></span></div>
    <div class="links">
      <a class="hide-sm" href="mailto:onfp@onfp.sn">onfp@onfp.sn</a>
      <a class="hide-sm" href="tel:+221338279251">+221 33 827 92 51</a>
      <a href="https://sigof.onfp.sn" rel="noopener">Espace SIGOF</a>
      <span class="lang"><a href="#" aria-current="true" lang="fr">FR</a> <a href="#" lang="en" title="Version anglaise — à développer">EN</a></span>
    </div>
  </div>
</div>

<header class="site">
  <div class="container nav-wrap">
    <a class="brand" href="index.html" aria-label="ONFP — Accueil">
      <img src="assets/img/logo-onfp-240.webp" alt="Logo ONFP — Office National de Formation Professionnelle" width="64" height="67">
    </a>
    <nav class="main" aria-label="Navigation principale"><ul><li><a href="index.html">Accueil</a></li><li class="has-sub"><a href="{{ url('/a-propos') }}">L'ONFP</a><ul class="submenu"><li><a href="{{ url('/a-propos') }}">Présentation & gouvernance</a></li><li><a href="{{ url('/a-propos') }}#mot-dg">Mot de la Directrice générale</a></li><li><a href="{{ url('missions') }}">Nos missions</a></li><li><a href="{{ route('poles-regionaux') }}">Pôles régionaux</a></li><li><a href="{{ url('documentation') }}">Documentation</a></li></ul></li><li class="has-sub"><a href="{{ url('formations') }}">Formations</a><ul class="submenu"><li><a href="{{ url('formations') }}">Catalogue des formations</a></li><li><a href="{{ url('certification') }}">Certification & VAE</a></li><li><a href="{{ url('entreprises') }}">Entreprises & employeurs</a></li><li><a href="{{ url('inscription') }}">Pré-inscription en ligne</a></li></ul></li><li><a href="operateurs.html">Opérateurs</a></li><li><a href="actualites.html">Actualités</a></li><li><a href="{{ url('marches-publics') }}">Marchés publics</a></li><li><a href="{{ url('contact') }}">Contact</a></li></ul></nav>
    <div class="nav-actions">
      <button class="icon-btn" type="button" data-open-search aria-label="Rechercher"><svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="11" cy="11" r="7"/><path d="m20 20-3.5-3.5"/></svg></button>
      <a href="{{ url('inscription') }}" class="nav-cta">S'inscrire à une formation</a>
      <button class="icon-btn burger" type="button" aria-label="Ouvrir le menu" aria-controls="drawer" aria-expanded="false"><svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 7h16M4 12h16M4 17h16"/></svg></button>
    </div>
  </div>
</header>
<div class="flag-strip" aria-hidden="true"><i></i><i></i><i></i></div>

<div class="drawer" id="drawer" aria-hidden="true">
  <div class="backdrop" data-close-drawer></div>
  <div class="panel" role="dialog" aria-label="Menu">
    <div style="display:flex;justify-content:space-between;align-items:center">
      <img src="assets/img/logo-onfp-240.webp" alt="ONFP" style="height:52px;width:auto">
      <button class="icon-btn" type="button" data-close-drawer aria-label="Fermer le menu"><svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M6 6l12 12M18 6 6 18"/></svg></button>
    </div>
    <ul><li><a href="index.html">Accueil</a></li><li><a href="{{ url('/a-propos') }}">L'ONFP</a><ul><li><a href="{{ url('/a-propos') }}#mot-dg">Mot de la Directrice générale</a></li><li><a href="{{ url('missions') }}">Nos missions</a></li><li><a href="{{ route('poles-regionaux') }}">Pôles régionaux</a></li><li><a href="{{ url('documentation') }}">Documentation</a></li></ul></li><li><a href="{{ url('formations') }}">Formations</a><ul><li><a href="{{ url('certification') }}">Certification & VAE</a></li><li><a href="{{ url('entreprises') }}">Entreprises & employeurs</a></li><li><a href="{{ url('inscription') }}">Pré-inscription en ligne</a></li></ul></li><li><a href="operateurs.html">Opérateurs</a></li><li><a href="actualites.html">Actualités</a></li><li><a href="{{ url('marches-publics') }}">Marchés publics</a></li><li><a href="{{ url('contact') }}">Contact</a></li></ul>
    <a href="{{ url('inscription') }}" class="btn btn-orange" style="width:100%;justify-content:center">S'inscrire à une formation</a>
  </div>
</div>

<div class="search-overlay" id="search-overlay" role="dialog" aria-label="Recherche">
  <button class="close" type="button" aria-label="Fermer la recherche">×</button>
  <form action="recherche.html" method="get" role="search">
    <label class="sr-only" for="q-global">Rechercher sur le site</label>
    <input id="q-global" type="search" name="q" placeholder="Rechercher une formation, un document, une actualité…">
    <button class="btn btn-solid" type="submit">Rechercher</button>
  </form>
</div> --}}

    @include('partials.navbar', ['active' => 'mentions-legales'])

    <main id="contenu">
        <div class="page-hero">
            <div class="container">
                <nav class="breadcrumb" aria-label="Fil d'Ariane">
                    <ol>
                        <li><a href="index.html">Accueil</a></li>
                        <li aria-current="page">Mentions légales</li>
                    </ol>
                </nav>
                <h1>Mentions légales</h1>
            </div>
        </div>
        <section class="section">
            <div class="container layout-side">
                <nav class="side-nav" aria-label="Dans cette page"><a href="#editeur">Éditeur</a><a
                        href="#hebergement">Hébergement</a><a href="#propriete">Propriété intellectuelle</a><a
                        href="#donnees">Données personnelles</a><a href="#cookies">Cookies</a><a
                        href="#accessibilite">Accessibilité</a></nav>
                <div class="prose">
                    <h2 class="anchor" id="editeur" style="margin-top:0">Éditeur du site</h2>
                    <p>Office National de Formation Professionnelle (ONFP), établissement public créé par la loi n°86-44
                        du 11 août 1986.<br>Siège : <em class="todo">[adresse]</em>, Dakar, Sénégal — Tél. : +221 33
                        827 92 51 — onfp@onfp.sn<br>Directrice de la publication : Dr Mame Awa Ndoye, Directrice
                        générale.</p>
                    <h2 class="anchor" id="hebergement">Hébergement</h2>
                    <p><em class="todo">[Nom, adresse et contact de l'hébergeur]</em></p>
                    <h2 class="anchor" id="propriete">Propriété intellectuelle</h2>
                    <p>L'ensemble des contenus du site (textes, images, logo, charte graphique) est la propriété de
                        l'ONFP, sauf mention contraire. Toute reproduction du logo est soumise au respect de la charte
                        graphique officielle et à l'autorisation préalable de l'Office.</p>
                    <h2 class="anchor" id="donnees">Protection des données personnelles</h2>
                    <p>Les données collectées via les formulaires du site (pré-inscription, contact, demandes
                        entreprises) sont destinées exclusivement aux services de l'ONFP pour le traitement des
                        demandes. Elles sont traitées conformément à la loi n°2008-12 du 25 janvier 2008 sur la
                        protection des données à caractère personnel.</p>
                    <p>Vous disposez d'un droit d'accès, de rectification, d'opposition et de suppression de vos
                        données, à exercer auprès de : <em class="todo">[contact du responsable des données]</em>. <em
                            class="todo">[N° de déclaration / autorisation auprès de la CDP]</em></p>
                    <p>Durée de conservation : <em class="todo">[à définir par type de données]</em>.</p>
                    <h2 class="anchor" id="cookies">Cookies</h2>
                    <p>Le site utilise des cookies strictement nécessaires à son fonctionnement et, le cas échéant, un
                        outil de mesure d'audience configuré pour anonymiser les données. <em class="todo">[Préciser
                            l'outil retenu]</em></p>
                    <h2 class="anchor" id="accessibilite">Accessibilité</h2>
                    <p>Le site a été conçu pour respecter les bonnes pratiques d'accessibilité (WCAG 2.1 niveau AA) :
                        navigation au clavier, contrastes suffisants, textes alternatifs, structure sémantique. Pour
                        signaler une difficulté : <a href="{{ url('contact') }}">formulaire de contact</a>.</p>
                </div>
            </div>
        </section>
    </main>

    {{-- <footer class="site">
        <div class="footer-flag" aria-hidden="true"><i style="background:#00853F"></i><i
                style="background:#FDB913"></i><i style="background:#E4032E"></i></div>
        <div class="container footer-inner">
            <div class="footer-brand">
                <img src="assets/img/logo-onfp-240.webp" alt="Logo ONFP" width="81" height="84">
                <p>Établissement public créé par la loi n°86-44 du 11 août 1986, l'Office National de Formation
                    Professionnelle est la référence de la formation professionnelle au Sénégal.</p>
                <div class="socials"><a href="#" aria-label="Facebook" title="Facebook — lien à renseigner"><svg
                            viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M14 8h3V4h-3c-2.8 0-4 1.8-4 4.5V11H7v4h3v9h4v-9h3l1-4h-4V8.8c0-.5.3-.8 1-.8Z" />
                        </svg></a><a href="#" aria-label="LinkedIn" title="LinkedIn — lien à renseigner"><svg
                            viewBox="0 0 24 24" aria-hidden="true">
                            <path
                                d="M4 9h4v12H4zM6 3a2 2 0 1 1 0 4 2 2 0 0 1 0-4Zm4 6h3.8v1.7c.6-1 1.9-2 3.9-2 4 0 4.3 2.6 4.3 6V21h-4v-5.6c0-1.4 0-3.1-1.9-3.1s-2.2 1.5-2.2 3V21h-4Z" />
                        </svg></a><a href="#" aria-label="X" title="X — lien à renseigner"><svg
                            viewBox="0 0 24 24" aria-hidden="true">
                            <path
                                d="M17.5 3h3.3l-7.2 8.3L22 21h-6.6l-5.2-6.8L4.3 21H1l7.7-8.8L.8 3h6.8l4.7 6.2Zm-1.2 16h1.8L6.8 4.9H4.9Z" />
                        </svg></a><a href="#" aria-label="YouTube" title="YouTube — lien à renseigner"><svg
                            viewBox="0 0 24 24" aria-hidden="true">
                            <path
                                d="M23 7.2a3 3 0 0 0-2.1-2.1C19 4.6 12 4.6 12 4.6s-7 0-8.9.5A3 3 0 0 0 1 7.2 31 31 0 0 0 .5 12 31 31 0 0 0 1 16.8a3 3 0 0 0 2.1 2.1c1.9.5 8.9.5 8.9.5s7 0 8.9-.5a3 3 0 0 0 2.1-2.1 31 31 0 0 0 .5-4.8 31 31 0 0 0-.5-4.8ZM9.8 15.1V8.9l5.8 3.1Z" />
                        </svg></a></div>
            </div>
            <div class="fcol">
                <h4>L'ONFP</h4>
                <a href="{{ url('/a-propos') }}">Présentation</a>
                <a href="{{ url('missions') }}">Nos missions</a>
                <a href="{{ route('poles-regionaux') }}">Pôles régionaux</a>
                <a href="actualites.html">Actualités</a>
                <a href="{{ url('marches-publics') }}">Marchés publics</a>
            </div>
            <div class="fcol">
                <h4>Services</h4>
                <a href="{{ url('formations') }}">Catalogue des formations</a>
                <a href="{{ url('inscription') }}">Pré-inscription</a>
                <a href="{{ url('certification') }}">Certification & VAE</a>
                <a href="operateurs.html">Opérateurs de formation</a>
                <a href="https://sigof.onfp.sn" rel="noopener">Plateforme SIGOF</a>
                <a href="{{ url('documentation') }}">Documentation</a>
            </div>
            <div class="fcol">
                <h4>Contact</h4>
                <span><em class="todo">[Adresse du siège — après déménagement]</em><br>Dakar, Sénégal</span>
                <a href="tel:+221338279251">+221 33 827 92 51</a>
                <a href="mailto:onfp@onfp.sn">onfp@onfp.sn</a>
                <h4 style="margin-top:22px">Lettre d'information</h4>
                <form class="newsletter" action="#" method="post"
                    onsubmit="event.preventDefault();this.innerHTML='<span>Merci, inscription enregistrée.</span>'">
                    <label class="sr-only" for="nl-email">Adresse e-mail</label>
                    <input id="nl-email" type="email" required placeholder="Votre e-mail">
                    <button class="btn btn-solid btn-sm" type="submit">OK</button>
                </form>
            </div>
        </div>
        <div class="foot-bottom">
            <div class="container">
                <span>© <span data-year>2026</span> Office National de Formation Professionnelle — Tous droits
                    réservés</span>
                <span><a href="{{ url('mentions-legales') }}">Mentions légales</a><a
                        href="{{ url('mentions-legales') }}#donnees">Données personnelles</a><a href="{{ url('plan-du-site') }}">Plan
                        du site</a></span>
            </div>
        </div>
    </footer>

    <button class="to-top" type="button" aria-label="Retour en haut de page">↑</button>
    <div class="cookie" role="region" aria-label="Cookies">
        <p>Ce site utilise uniquement des cookies techniques nécessaires à son fonctionnement et des mesures d'audience
            anonymisées. <a href="{{ url('mentions-legales') }}#cookies">En savoir plus</a></p>
        <button class="btn btn-solid btn-sm" type="button" data-cookie-ok>J'ai compris</button>
    </div>
    <script src="assets/js/main.js" defer></script> --}}

    @include('partials.footer')
</body>

</html>
