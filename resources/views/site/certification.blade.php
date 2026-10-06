<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Certification & VAE — ONFP</title>
    <meta name="description"
        content="Titres professionnels, validation des acquis de l'expérience et vérification en ligne des titres délivrés par l'ONFP.">
    <meta name="theme-color" content="#00853F">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="ONFP — Office National de Formation Professionnelle">
    <meta property="og:title" content="Certification & VAE — ONFP">
    <meta property="og:description"
        content="Titres professionnels, validation des acquis de l'expérience et vérification en ligne des titres délivrés par l'ONFP.">
    <meta property="og:image" content="https://www.onfp.sn/assets/img/logo-onfp.png">
    <meta property="og:locale" content="fr_SN">
    <link rel="canonical" href="https://www.onfp.sn/{{ url('certification') }}">
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
    <nav class="main" aria-label="Navigation principale"><ul><li><a href="index.html">Accueil</a></li><li class="has-sub"><a href="{{ url('/a-propos') }}">L'ONFP</a><ul class="submenu"><li><a href="{{ url('/a-propos') }}">Présentation & gouvernance</a></li><li><a href="{{ url('/a-propos') }}#mot-dg">Mot de la Directrice générale</a></li><li><a href="{{ url('missions') }}">Nos missions</a></li><li><a href="{{ route('poles-regionaux') }}">Pôles régionaux</a></li><li><a href="{{ url('documentation') }}">Documentation</a></li></ul></li><li class="has-sub"><a href="{{ url('formations') }}" aria-current="page">Formations</a><ul class="submenu"><li><a href="{{ url('formations') }}">Catalogue des formations</a></li><li><a href="{{ url('certification') }}">Certification & VAE</a></li><li><a href="{{ url('entreprises') }}">Entreprises & employeurs</a></li><li><a href="{{ url('inscription') }}">Pré-inscription en ligne</a></li></ul></li><li><a href="operateurs.html">Opérateurs</a></li><li><a href="actualites.html">Actualités</a></li><li><a href="{{ url('marches-publics') }}">Marchés publics</a></li><li><a href="{{ url('contact') }}">Contact</a></li></ul></nav>
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

    @include('partials.navbar', ['active' => 'certification'])

    <main id="contenu">
        <div class="page-hero">
            <div class="container">
                <nav class="breadcrumb" aria-label="Fil d'Ariane">
                    <ol>
                        <li><a href="index.html">Accueil</a></li>
                        <li><a href="{{ url('formations') }}">Formations</a></li>
                        <li aria-current="page">Certification & VAE</li>
                    </ol>
                </nav>
                <h1>Certification & VAE</h1>
                <p>Évaluer, reconnaître et sécuriser les compétences professionnelles.</p>
            </div>
        </div>
        <section class="section">
            <div class="container">
                <div class="tabs">
                    <div role="tablist" aria-label="Certification">
                        <button role="tab" id="t1" aria-controls="titres">Titres professionnels</button>
                        <button role="tab" id="t2" aria-controls="vae">Validation des acquis (VAE)</button>
                        <button role="tab" id="t3" aria-controls="verifier">Vérifier un titre</button>
                    </div>
                    <div role="tabpanel" id="titres" aria-labelledby="t1">
                        <div class="grid grid-2" style="align-items:start">
                            <div class="prose">
                                <h2 style="margin-top:0">Des titres reconnus par les employeurs</h2>
                                <p>L'ONFP organise l'évaluation des compétences et délivre des titres et attestations
                                    professionnels. Les épreuves s'appuient sur des référentiels élaborés avec les
                                    professionnels de chaque secteur.</p>
                                <ul>
                                    <li>Évaluations pratiques en situation réelle ou reconstituée</li>
                                    <li>Jurys composés de professionnels et de formateurs</li>
                                    <li>Titres sécurisés et vérifiables en ligne</li>
                                </ul>
                                <p><em class="todo">[Liste officielle des titres délivrés par l'ONFP]</em></p>
                            </div>
                            <div class="card accent-green">
                                <h3>Calendrier des évaluations</h3>
                                <div class="table-wrap" style="margin-top:8px">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>Filière</th>
                                                <th>Pôle</th>
                                                <th>Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><em class="todo">[Filière]</em></td>
                                                <td><em class="todo">[Pôle]</em></td>
                                                <td><em class="todo">[jj/mm/aaaa]</em></td>
                                            </tr>
                                            <tr>
                                                <td><em class="todo">[Filière]</em></td>
                                                <td><em class="todo">[Pôle]</em></td>
                                                <td><em class="todo">[jj/mm/aaaa]</em></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" id="vae" aria-labelledby="t2" hidden>
                        <div class="prose">
                            <h2 style="margin-top:0">Faire reconnaître votre expérience</h2>
                            <p>Vous exercez un métier depuis plusieurs années sans diplôme ? La validation des acquis de
                                l'expérience permet d'obtenir tout ou partie d'un titre professionnel sur la base de
                                votre expérience. <em class="todo">[Conditions d'éligibilité exactes : durée
                                    d'expérience minimale, frais éventuels]</em></p>
                        </div>
                        <ol class="steps" style="margin-top:24px">
                            <li>
                                <h3>Recevabilité</h3>
                                <p>Dépôt d'un dossier décrivant votre parcours et vos activités.</p>
                            </li>
                            <li>
                                <h3>Accompagnement</h3>
                                <p>Un conseiller vous aide à préparer votre dossier de preuves.</p>
                            </li>
                            <li>
                                <h3>Évaluation</h3>
                                <p>Mise en situation professionnelle et entretien avec le jury.</p>
                            </li>
                            <li>
                                <h3>Décision</h3>
                                <p>Validation totale ou partielle, avec parcours complémentaire si besoin.</p>
                            </li>
                        </ol>
                        <p style="margin-top:24px"><a class="btn btn-green" href="{{ url('contact') }}?objet=vae">Demander un
                                rendez-vous VAE</a></p>
                    </div>
                    <div role="tabpanel" id="verifier" aria-labelledby="t3" hidden>
                        <div class="grid grid-2" style="align-items:start">
                            <div class="prose">
                                <h2 style="margin-top:0">Vérifier l'authenticité d'un titre</h2>
                                <p>Employeurs, administrations et établissements : contrôlez en ligne qu'une attestation
                                    ou un titre a bien été délivré par l'ONFP.</p>
                                <p class="form-note">Service à raccorder à la base des titres délivrés (API SIGOF ou
                                    base dédiée).</p>
                            </div>
                            <div class="card">
                                <form class="form" data-validate data-demo>
                                    <div class="field"><label for="v-num">Numéro du titre <span
                                                class="req">*</span></label><input id="v-num" type="text"
                                            required placeholder="ex. ONFP-2026-000123"><span
                                            class="error-msg">Saisissez le numéro figurant sur le titre.</span></div>
                                    <div class="field"><label for="v-nom">Nom du titulaire <span
                                                class="req">*</span></label><input id="v-nom" type="text"
                                            required><span class="error-msg">Champ obligatoire.</span></div>
                                    <div class="field"><label for="v-date">Date de naissance du
                                            titulaire</label><input id="v-date" type="date"></div>
                                    <button class="btn btn-green" type="submit"><svg viewBox="0 0 24 24"
                                            width="16" height="16" fill="none" stroke="currentColor"
                                            stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"
                                            aria-hidden="true">
                                            <path d="M12 3 4 6v6c0 5 3.5 8 8 9 4.5-1 8-4 8-9V6Z" />
                                            <path d="m9 12 2 2 4-4" />
                                        </svg> Vérifier</button>
                                </form>
                                <div class="alert success" hidden style="margin-top:14px">Démonstration : le résultat
                                    de la vérification s'affichera ici une fois le service raccordé.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

   {{--  <footer class="site">
        <div class="footer-flag" aria-hidden="true"><i style="background:#00853F"></i><i
                style="background:#FDB913"></i><i style="background:#E4032E"></i></div>
        <div class="container footer-inner">
            <div class="footer-brand">
                <img src="assets/img/logo-onfp-240.webp" alt="Logo ONFP" width="81" height="84">
                <p>Établissement public créé par la loi n°86-44 du 11 août 1986, l'Office National de Formation
                    Professionnelle est la référence de la formation professionnelle au Sénégal.</p>
                <div class="socials"><a href="#" aria-label="Facebook"
                        title="Facebook — lien à renseigner"><svg viewBox="0 0 24 24" aria-hidden="true">
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
