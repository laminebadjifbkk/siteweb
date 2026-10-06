<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pré-inscription en ligne — ONFP</title>
    <meta name="description"
        content="Pré-inscrivez-vous en ligne à une formation de l'Office National de Formation Professionnelle.">
    <meta name="theme-color" content="#00853F">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="ONFP — Office National de Formation Professionnelle">
    <meta property="og:title" content="Pré-inscription en ligne — ONFP">
    <meta property="og:description"
        content="Pré-inscrivez-vous en ligne à une formation de l'Office National de Formation Professionnelle.">
    <meta property="og:image" content="https://www.onfp.sn/assets/img/logo-onfp.png">
    <meta property="og:locale" content="fr_SN">
    <link rel="canonical" href="https://www.onfp.sn/{{ url('inscription') }}">
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
    <nav class="main" aria-label="Navigation principale"><ul><li><a href="index.html">Accueil</a></li><li class="has-sub"><a href="{{ url('/a-propos') }}">L'Office</a><ul class="submenu"><li><a href="{{ url('/a-propos') }}">Présentation & gouvernance</a></li><li><a href="{{ url('/a-propos') }}#mot-dg">Mot de la Directrice générale</a></li><li><a href="{{ url('missions') }}">Nos missions</a></li><li><a href="{{ route('poles-regionaux') }}">Pôles régionaux</a></li><li><a href="{{ url('documentation') }}">Documentation</a></li></ul></li><li class="has-sub"><a href="{{ url('formations') }}" aria-current="page">Formations</a><ul class="submenu"><li><a href="{{ url('formations') }}">Catalogue des formations</a></li><li><a href="{{ url('certification') }}">Certification & VAE</a></li><li><a href="{{ url('entreprises') }}">Entreprises & employeurs</a></li><li><a href="{{ url('inscription') }}">Pré-inscription en ligne</a></li></ul></li><li><a href="operateurs.html">Opérateurs</a></li><li><a href="actualites.html">Actualités</a></li><li><a href="{{ url('marches-publics') }}">Marchés publics</a></li><li><a href="{{ url('contact') }}">Contact</a></li></ul></nav>
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
    <ul><li><a href="index.html">Accueil</a></li><li><a href="{{ url('/a-propos') }}">L'Office</a><ul><li><a href="{{ url('/a-propos') }}#mot-dg">Mot de la Directrice générale</a></li><li><a href="{{ url('missions') }}">Nos missions</a></li><li><a href="{{ route('poles-regionaux') }}">Pôles régionaux</a></li><li><a href="{{ url('documentation') }}">Documentation</a></li></ul></li><li><a href="{{ url('formations') }}">Formations</a><ul><li><a href="{{ url('certification') }}">Certification & VAE</a></li><li><a href="{{ url('entreprises') }}">Entreprises & employeurs</a></li><li><a href="{{ url('inscription') }}">Pré-inscription en ligne</a></li></ul></li><li><a href="operateurs.html">Opérateurs</a></li><li><a href="actualites.html">Actualités</a></li><li><a href="{{ url('marches-publics') }}">Marchés publics</a></li><li><a href="{{ url('contact') }}">Contact</a></li></ul>
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

    @include('partials.navbar', ['active' => 'inscription'])

    <main id="contenu">
        <div class="page-hero">
            <div class="container">
                <nav class="breadcrumb" aria-label="Fil d'Ariane">
                    <ol>
                        <li><a href="index.html">Accueil</a></li>
                        <li><a href="{{ url('formations') }}">Formations</a></li>
                        <li aria-current="page">Pré-inscription</li>
                    </ol>
                </nav>
                <h1>Pré-inscription en ligne</h1>
                <p>Quelques minutes suffisent pour déposer votre candidature. Les champs marqués d'un astérisque (*)
                    sont obligatoires.</p>
            </div>
        </div>
        <section class="section">
            <div class="container layout-main-side">
                <div>
                    <form class="form" data-validate data-demo action="#" method="post"
                        enctype="multipart/form-data">
                        <fieldset class="form">
                            <legend>1. Formation souhaitée</legend>
                            <div class="field"><label for="i-form">Formation <span
                                        class="req">*</span></label><select id="i-form" name="formation" required
                                    data-prefill="formation">
                                    <option value="">Choisir une formation…</option>
                                    <option value="coupe-couture">Coupe-couture et stylisme-modélisme</option>
                                    <option value="electricite-batiment">Électricité du bâtiment</option>
                                    <option value="solaire-pv">Installation et maintenance de systèmes solaires
                                        photovoltaïques</option>
                                    <option value="maconnerie">Maçonnerie et carrelage</option>
                                    <option value="transformation-cereales">Transformation des céréales locales</option>
                                    <option value="maraichage">Maraîchage et irrigation goutte-à-goutte</option>
                                    <option value="developpement-web">Développement web et mobile</option>
                                    <option value="maintenance-info">Maintenance informatique et réseaux</option>
                                    <option value="mecanique-auto">Mécanique automobile</option>
                                    <option value="froid-clim">Froid et climatisation</option>
                                    <option value="hotellerie">Service en restauration et hôtellerie</option>
                                    <option value="gestion-pme">Gestion de petite entreprise</option>
                                    <option value="transformation-halieutique">Transformation des produits halieutiques
                                    </option>
                                    <option value="soudure">Soudure et construction métallique</option>
                                    <option value="secourisme-hse">Hygiène, sécurité et environnement au travail
                                    </option>
                                </select><span class="error-msg">Choisissez une formation.</span></div>
                            <div class="field"><label for="i-pole">Pôle régional souhaité <span
                                        class="req">*</span></label><select id="i-pole" required>
                                    <option value="">Choisir un pôle…</option>
                                    <option value="nord">Pôle Nord</option>
                                    <option value="nord-est">Pôle Nord-Est</option>
                                    <option value="est">Pôle Est</option>
                                    <option value="sud">Pôle Sud</option>
                                    <option value="centre">Pôle Centre</option>
                                    <option value="thies">Pôle Thiès</option>
                                    <option value="diourbel-louga">Pôle Diourbel-Louga</option>
                                </select><span class="error-msg">Choisissez un pôle.</span></div>
                        </fieldset>
                        <fieldset class="form">
                            <legend>2. Identité</legend>
                            <div class="form-row">
                                <div class="field"><label for="i-prenom">Prénom(s) <span
                                            class="req">*</span></label><input id="i-prenom" required type="text"
                                        autocomplete="given-name"><span class="error-msg">Champ obligatoire.</span>
                                </div>
                                <div class="field"><label for="i-nom">Nom <span
                                            class="req">*</span></label><input id="i-nom" required
                                        type="text" autocomplete="family-name"><span class="error-msg">Champ
                                        obligatoire.</span></div>
                            </div>
                            <div class="form-row">
                                <div class="field"><label for="i-sexe">Sexe <span
                                            class="req">*</span></label><select id="i-sexe" required>
                                        <option value="">Choisir…</option>
                                        <option>Femme</option>
                                        <option>Homme</option>
                                    </select><span class="error-msg">Champ obligatoire.</span></div>
                                <div class="field"><label for="i-ddn">Date de naissance <span
                                            class="req">*</span></label><input id="i-ddn" required
                                        type="date"><span class="error-msg">Champ obligatoire.</span></div>
                            </div>
                            <div class="form-row">
                                <div class="field"><label for="i-tel">Téléphone <span
                                            class="req">*</span></label><input id="i-tel" required
                                        type="tel" autocomplete="tel" pattern="[+0-9 ]{9,17}"
                                        placeholder="77 000 00 00"><span class="error-msg">Numéro invalide.</span>
                                </div>
                                <div class="field"><label for="i-mail">E-mail</label><input id="i-mail"
                                        type="email" autocomplete="email"><span class="error-msg">Adresse e-mail
                                        invalide.</span></div>
                            </div>
                            <div class="form-row">
                                <div class="field"><label for="i-reg">Région de résidence <span
                                            class="req">*</span></label><select id="i-reg" required>
                                        <option value="">Choisir…</option>
                                        <option>Dakar</option>
                                        <option>Diourbel</option>
                                        <option>Fatick</option>
                                        <option>Kaffrine</option>
                                        <option>Kaolack</option>
                                        <option>Kédougou</option>
                                        <option>Kolda</option>
                                        <option>Louga</option>
                                        <option>Matam</option>
                                        <option>Saint-Louis</option>
                                        <option>Sédhiou</option>
                                        <option>Tambacounda</option>
                                        <option>Thiès</option>
                                        <option>Ziguinchor</option>
                                    </select><span class="error-msg">Champ obligatoire.</span></div>
                                <div class="field"><label for="i-com">Commune</label><input id="i-com"
                                        type="text"></div>
                            </div>
                        </fieldset>
                        <fieldset class="form">
                            <legend>3. Parcours</legend>
                            <div class="form-row">
                                <div class="field"><label for="i-niv">Niveau d'études <span
                                            class="req">*</span></label><select id="i-niv" required>
                                        <option value="">Choisir…</option>
                                        <option>Non scolarisé / alphabétisé</option>
                                        <option>Élémentaire</option>
                                        <option>Moyen (BFEM)</option>
                                        <option>Secondaire (Bac)</option>
                                        <option>Supérieur</option>
                                    </select><span class="error-msg">Champ obligatoire.</span></div>
                                <div class="field"><label for="i-sit">Situation actuelle <span
                                            class="req">*</span></label><select id="i-sit" required>
                                        <option value="">Choisir…</option>
                                        <option>Demandeur d'emploi</option>
                                        <option>Salarié</option>
                                        <option>Travailleur indépendant</option>
                                        <option>Élève / étudiant</option>
                                        <option>Autre</option>
                                    </select><span class="error-msg">Champ obligatoire.</span></div>
                            </div>
                            <div class="field"><label for="i-mot">Motivation</label>
                                <textarea id="i-mot" placeholder="En quelques lignes, votre projet professionnel…"></textarea>
                            </div>
                            <div class="field"><label for="i-cni">Pièce d'identité (PDF ou image, 2 Mo
                                    max.)</label><input id="i-cni" type="file"
                                    accept=".pdf,.jpg,.jpeg,.png"><span class="hint">Facultatif à ce stade, exigé
                                    lors de la sélection.</span></div>
                        </fieldset>
                        <div class="field"><label class="check"><input type="checkbox" required> J'accepte que mes
                                données soient traitées par l'ONFP pour la gestion de ma candidature, conformément à la
                                <a href="{{ url('mentions-legales') }}#donnees">politique de protection des données</a>. <span
                                    class="req">*</span></label><span class="error-msg">Votre accord est
                                nécessaire.</span></div>
                        <button class="btn btn-orange" type="submit" style="justify-self:start">Envoyer ma
                            pré-inscription</button>
                    </form>
                    <div class="alert success" hidden style="margin-top:18px"><strong>Pré-inscription
                            enregistrée.</strong> Vous recevrez un accusé de réception par SMS / e-mail. Le pôle
                        régional vous contactera pour la suite de la sélection.</div>
                </div>
                <aside>
                    <div class="aside-box">
                        <h3>Bon à savoir</h3>
                        <ul>
                            <li>La pré-inscription ne vaut pas admission.</li>
                            <li>Les candidats sont convoqués par le pôle régional.</li>
                            <li>Vous pouvez aussi vous inscrire directement dans un pôle.</li>
                        </ul>
                    </div>
                    <div class="aside-box">
                        <h3>Besoin d'aide ?</h3>
                        <ul>
                            <li><svg viewBox="0 0 24 24" width="15" height="15" fill="none"
                                    stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
                                    stroke-linejoin="round" aria-hidden="true">
                                    <path
                                        d="M5 3h4l2 5-2.5 1.5a11 11 0 0 0 6 6L16 13l5 2v4a2 2 0 0 1-2 2A16 16 0 0 1 3 5a2 2 0 0 1 2-2Z" />
                                </svg> <a href="tel:+221338279251">+221 33 827 92 51</a></li>
                            <li><svg viewBox="0 0 24 24" width="15" height="15" fill="none"
                                    stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
                                    stroke-linejoin="round" aria-hidden="true">
                                    <rect x="3" y="5" width="18" height="14" rx="2" />
                                    <path d="m3 7 9 6 9-6" />
                                </svg> <a href="mailto:onfp@onfp.sn">onfp@onfp.sn</a></li>
                            <li><svg viewBox="0 0 24 24" width="15" height="15" fill="none"
                                    stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
                                    stroke-linejoin="round" aria-hidden="true">
                                    <path d="M12 21s-7-6.2-7-11.5a7 7 0 0 1 14 0C19 14.8 12 21 12 21Z" />
                                    <circle cx="12" cy="9.5" r="2.5" />
                                </svg> <a href="{{ route('poles-regionaux') }}">Trouver mon pôle</a></li>
                        </ul>
                    </div>
                </aside>
            </div>
        </section>
        <script>
            // Présélection de la formation depuis l'URL (?formation=slug)
            (function() {
                var p = new URLSearchParams(location.search).get('formation');
                if (p) {
                    var s = document.getElementById('i-form');
                    if (s) s.value = p;
                }
            })();
        </script>
    </main>

    {{-- <footer class="site">
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
                <h4>L'Office</h4>
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
