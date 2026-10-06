<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Catalogue des formations — ONFP</title>
    <meta name="description"
        content="Trouvez une formation qualifiante, certifiante, en apprentissage ou continue dans les pôles régionaux de l'ONFP.">
    <meta name="theme-color" content="#00853F">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="ONFP — Office National de Formation Professionnelle">
    <meta property="og:title" content="Catalogue des formations — ONFP">
    <meta property="og:description"
        content="Trouvez une formation qualifiante, certifiante, en apprentissage ou continue dans les pôles régionaux de l'ONFP.">
    <meta property="og:image" content="https://www.onfp.sn/assets/img/logo-onfp.png">
    <meta property="og:locale" content="fr_SN">
    <link rel="canonical" href="https://www.onfp.sn/{{ url('formations') }}">
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

    @include('partials.navbar', ['active' => 'formations'])

    <main id="contenu">
        <div class="page-hero">
            <div class="container">
                <nav class="breadcrumb" aria-label="Fil d'Ariane">
                    <ol>
                        <li><a href="index.html">Accueil</a></li>
                        <li aria-current="page">Formations</li>
                    </ol>
                </nav>
                <h1>Catalogue des formations</h1>
                <p>Qualifiez-vous dans un métier porteur, près de chez vous. Filtrez par domaine, pôle régional et type
                    de formation.</p>
            </div>
        </div>
        <section class="section" data-filter-scope>
            <div class="container">
                <div class="alert info" style="margin-bottom:24px"><strong>Données d'illustration.</strong> Les fiches
                    ci-dessous montrent la structure attendue ; le catalogue réel sera alimenté depuis la base des
                    formations (voir guide développeur).</div>
                <div class="filters">
                    <div class="field"><label for="f-q">Mot-clé</label><input id="f-q" type="search"
                            data-filter="q" placeholder="Intitulé, métier…"></div>
                    <div class="field"><label for="f-dom">Domaine</label><select id="f-dom"
                            data-filter="domaine">
                            <option value="">Tous les domaines</option>
                            <option value="btp">BTP & génie civil</option>
                            <option value="agri">Agriculture & agro-alimentaire</option>
                            <option value="numerique">Numérique & informatique</option>
                            <option value="mode">Habillement & mode</option>
                            <option value="energie">Électricité & énergie</option>
                            <option value="meca">Mécanique & maintenance</option>
                            <option value="tourisme">Hôtellerie & tourisme</option>
                            <option value="gestion">Gestion & entrepreneuriat</option>
                            <option value="peche">Pêche & métiers de la mer</option>
                        </select></div>
                    <div class="field"><label for="f-pole">Pôle régional</label><select id="f-pole"
                            data-filter="pole">
                            <option value="">Tous les pôles</option>
                            <option value="nord">Pôle Nord</option>
                            <option value="nord-est">Pôle Nord-Est</option>
                            <option value="est">Pôle Est</option>
                            <option value="sud">Pôle Sud</option>
                            <option value="centre">Pôle Centre</option>
                            <option value="thies">Pôle Thiès</option>
                            <option value="diourbel-louga">Pôle Diourbel-Louga</option>
                            <option value="national">Tous pôles (national)</option>
                        </select></div>
                    <button type="button" class="btn btn-outline" data-reset>Réinitialiser</button>
                </div>
                <div class="chips" role="group" aria-label="Type de formation"><button type="button"
                        class="chip-btn" data-chip="type:tous" aria-pressed="true">Toutes</button><button type="button"
                        class="chip-btn" data-chip="type:qualifiante" aria-pressed="false">Qualifiante</button><button
                        type="button" class="chip-btn" data-chip="type:certifiante"
                        aria-pressed="false">Certifiante</button><button type="button" class="chip-btn"
                        data-chip="type:continue" aria-pressed="false">Formation continue</button><button
                        type="button" class="chip-btn" data-chip="type:apprentissage"
                        aria-pressed="false">Apprentissage</button></div>
                <p class="results-count" data-results-count aria-live="polite"></p>
                <div class="grid grid-3" data-filter-list>
                    <article class="course" data-item data-domaine="mode" data-type="qualifiante"
                        data-pole="national">
                        <div class="meta"><span class="pill orange">Qualifiante</span><span
                                class="pill">Habillement & mode</span></div>
                        <h3>Coupe-couture et stylisme-modélisme</h3>
                        <p>Techniques de coupe, patronage, assemblage et création de modèles, jusqu'à la mise en marché.
                        </p>
                        <dl>
                            <dt>Durée</dt>
                            <dd>9 mois</dd>
                            <dt>Accès</dt>
                            <dd>Aucun diplôme requis</dd>
                            <dt>Lieu</dt>
                            <dd>Tous pôles</dd>
                            <dt>Session</dt>
                            <dd>Session 2026</dd>
                        </dl>
                        <div class="card-foot"><a class="btn btn-green btn-sm"
                                href="formation-detail.html?f=coupe-couture">Voir la fiche</a><a
                                class="btn btn-outline btn-sm"
                                href="{{ url('inscription') }}?formation=coupe-couture">S'inscrire</a></div>
                    </article>
                    <article class="course" data-item data-domaine="energie" data-type="certifiante"
                        data-pole="thies">
                        <div class="meta"><span class="pill green">Certifiante</span><span
                                class="pill">Électricité & énergie</span></div>
                        <h3>Électricité du bâtiment</h3>
                        <p>Installations électriques domestiques et tertiaires, normes de sécurité et lecture de plans.
                        </p>
                        <dl>
                            <dt>Durée</dt>
                            <dd>6 mois</dd>
                            <dt>Accès</dt>
                            <dd>Niveau BFEM</dd>
                            <dt>Lieu</dt>
                            <dd>Pôle Thiès</dd>
                            <dt>Session</dt>
                            <dd>Janvier 2027</dd>
                        </dl>
                        <div class="card-foot"><a class="btn btn-green btn-sm"
                                href="formation-detail.html?f=electricite-batiment">Voir la fiche</a><a
                                class="btn btn-outline btn-sm"
                                href="{{ url('inscription') }}?formation=electricite-batiment">S'inscrire</a></div>
                    </article>
                    <article class="course" data-item data-domaine="energie" data-type="certifiante"
                        data-pole="nord-est">
                        <div class="meta"><span class="pill green">Certifiante</span><span
                                class="pill">Électricité & énergie</span></div>
                        <h3>Installation et maintenance de systèmes solaires photovoltaïques</h3>
                        <p>Dimensionnement, pose et entretien de kits solaires pour usages domestiques et agricoles.</p>
                        <dl>
                            <dt>Durée</dt>
                            <dd>4 mois</dd>
                            <dt>Accès</dt>
                            <dd>Niveau BFEM</dd>
                            <dt>Lieu</dt>
                            <dd>Pôle Nord-Est</dd>
                            <dt>Session</dt>
                            <dd>Novembre 2026</dd>
                        </dl>
                        <div class="card-foot"><a class="btn btn-green btn-sm"
                                href="formation-detail.html?f=solaire-pv">Voir la fiche</a><a
                                class="btn btn-outline btn-sm"
                                href="{{ url('inscription') }}?formation=solaire-pv">S'inscrire</a></div>
                    </article>
                    <article class="course" data-item data-domaine="btp" data-type="qualifiante" data-pole="centre">
                        <div class="meta"><span class="pill orange">Qualifiante</span><span class="pill">BTP &
                                génie civil</span></div>
                        <h3>Maçonnerie et carrelage</h3>
                        <p>Implantation, fondations, élévation de murs, enduits et pose de carreaux.</p>
                        <dl>
                            <dt>Durée</dt>
                            <dd>6 mois</dd>
                            <dt>Accès</dt>
                            <dd>Aucun diplôme requis</dd>
                            <dt>Lieu</dt>
                            <dd>Pôle Centre</dd>
                            <dt>Session</dt>
                            <dd>Janvier 2027</dd>
                        </dl>
                        <div class="card-foot"><a class="btn btn-green btn-sm"
                                href="formation-detail.html?f=maconnerie">Voir la fiche</a><a
                                class="btn btn-outline btn-sm"
                                href="{{ url('inscription') }}?formation=maconnerie">S'inscrire</a></div>
                    </article>
                    <article class="course" data-item data-domaine="agri" data-type="qualifiante"
                        data-pole="diourbel-louga">
                        <div class="meta"><span class="pill orange">Qualifiante</span><span
                                class="pill">Agriculture & agro-alimentaire</span></div>
                        <h3>Transformation des céréales locales</h3>
                        <p>Transformation du mil, du maïs et du fonio, hygiène et conditionnement pour la vente.</p>
                        <dl>
                            <dt>Durée</dt>
                            <dd>3 mois</dd>
                            <dt>Accès</dt>
                            <dd>Aucun diplôme requis</dd>
                            <dt>Lieu</dt>
                            <dd>Pôle Diourbel-Louga</dd>
                            <dt>Session</dt>
                            <dd>Décembre 2026</dd>
                        </dl>
                        <div class="card-foot"><a class="btn btn-green btn-sm"
                                href="formation-detail.html?f=transformation-cereales">Voir la fiche</a><a
                                class="btn btn-outline btn-sm"
                                href="{{ url('inscription') }}?formation=transformation-cereales">S'inscrire</a></div>
                    </article>
                    <article class="course" data-item data-domaine="agri" data-type="apprentissage"
                        data-pole="nord">
                        <div class="meta"><span class="pill red">Apprentissage</span><span
                                class="pill">Agriculture & agro-alimentaire</span></div>
                        <h3>Maraîchage et irrigation goutte-à-goutte</h3>
                        <p>Production maraîchère, gestion de l'eau, itinéraires techniques et commercialisation.</p>
                        <dl>
                            <dt>Durée</dt>
                            <dd>5 mois</dd>
                            <dt>Accès</dt>
                            <dd>Aucun diplôme requis</dd>
                            <dt>Lieu</dt>
                            <dd>Pôle Nord</dd>
                            <dt>Session</dt>
                            <dd>Novembre 2026</dd>
                        </dl>
                        <div class="card-foot"><a class="btn btn-green btn-sm"
                                href="formation-detail.html?f=maraichage">Voir la fiche</a><a
                                class="btn btn-outline btn-sm"
                                href="{{ url('inscription') }}?formation=maraichage">S'inscrire</a></div>
                    </article>
                    <article class="course" data-item data-domaine="numerique" data-type="certifiante"
                        data-pole="national">
                        <div class="meta"><span class="pill green">Certifiante</span><span class="pill">Numérique
                                & informatique</span></div>
                        <h3>Développement web et mobile</h3>
                        <p>HTML/CSS, JavaScript, bases de données et publication d'applications.</p>
                        <dl>
                            <dt>Durée</dt>
                            <dd>8 mois</dd>
                            <dt>Accès</dt>
                            <dd>Niveau Bac</dd>
                            <dt>Lieu</dt>
                            <dd>Tous pôles</dd>
                            <dt>Session</dt>
                            <dd>Février 2027</dd>
                        </dl>
                        <div class="card-foot"><a class="btn btn-green btn-sm"
                                href="formation-detail.html?f=developpement-web">Voir la fiche</a><a
                                class="btn btn-outline btn-sm"
                                href="{{ url('inscription') }}?formation=developpement-web">S'inscrire</a></div>
                    </article>
                    <article class="course" data-item data-domaine="numerique" data-type="qualifiante"
                        data-pole="sud">
                        <div class="meta"><span class="pill orange">Qualifiante</span><span
                                class="pill">Numérique & informatique</span></div>
                        <h3>Maintenance informatique et réseaux</h3>
                        <p>Montage, dépannage de postes, câblage et configuration de réseaux locaux.</p>
                        <dl>
                            <dt>Durée</dt>
                            <dd>6 mois</dd>
                            <dt>Accès</dt>
                            <dd>Niveau BFEM</dd>
                            <dt>Lieu</dt>
                            <dd>Pôle Sud</dd>
                            <dt>Session</dt>
                            <dd>Janvier 2027</dd>
                        </dl>
                        <div class="card-foot"><a class="btn btn-green btn-sm"
                                href="formation-detail.html?f=maintenance-info">Voir la fiche</a><a
                                class="btn btn-outline btn-sm"
                                href="{{ url('inscription') }}?formation=maintenance-info">S'inscrire</a></div>
                    </article>
                    <article class="course" data-item data-domaine="meca" data-type="apprentissage" data-pole="est">
                        <div class="meta"><span class="pill red">Apprentissage</span><span class="pill">Mécanique
                                & maintenance</span></div>
                        <h3>Mécanique automobile</h3>
                        <p>Diagnostic, entretien et réparation des moteurs et systèmes de véhicules légers.</p>
                        <dl>
                            <dt>Durée</dt>
                            <dd>12 mois</dd>
                            <dt>Accès</dt>
                            <dd>Aucun diplôme requis</dd>
                            <dt>Lieu</dt>
                            <dd>Pôle Est</dd>
                            <dt>Session</dt>
                            <dd>Janvier 2027</dd>
                        </dl>
                        <div class="card-foot"><a class="btn btn-green btn-sm"
                                href="formation-detail.html?f=mecanique-auto">Voir la fiche</a><a
                                class="btn btn-outline btn-sm"
                                href="{{ url('inscription') }}?formation=mecanique-auto">S'inscrire</a></div>
                    </article>
                    <article class="course" data-item data-domaine="meca" data-type="certifiante" data-pole="thies">
                        <div class="meta"><span class="pill green">Certifiante</span><span class="pill">Mécanique
                                & maintenance</span></div>
                        <h3>Froid et climatisation</h3>
                        <p>Installation, mise en service et maintenance d'équipements frigorifiques et de climatisation.
                        </p>
                        <dl>
                            <dt>Durée</dt>
                            <dd>6 mois</dd>
                            <dt>Accès</dt>
                            <dd>Niveau BFEM</dd>
                            <dt>Lieu</dt>
                            <dd>Pôle Thiès</dd>
                            <dt>Session</dt>
                            <dd>Février 2027</dd>
                        </dl>
                        <div class="card-foot"><a class="btn btn-green btn-sm"
                                href="formation-detail.html?f=froid-clim">Voir la fiche</a><a
                                class="btn btn-outline btn-sm"
                                href="{{ url('inscription') }}?formation=froid-clim">S'inscrire</a></div>
                    </article>
                    <article class="course" data-item data-domaine="tourisme" data-type="qualifiante"
                        data-pole="sud">
                        <div class="meta"><span class="pill orange">Qualifiante</span><span
                                class="pill">Hôtellerie & tourisme</span></div>
                        <h3>Service en restauration et hôtellerie</h3>
                        <p>Accueil, service en salle, hébergement et hygiène en établissement touristique.</p>
                        <dl>
                            <dt>Durée</dt>
                            <dd>4 mois</dd>
                            <dt>Accès</dt>
                            <dd>Niveau BFEM</dd>
                            <dt>Lieu</dt>
                            <dd>Pôle Sud</dd>
                            <dt>Session</dt>
                            <dd>Novembre 2026</dd>
                        </dl>
                        <div class="card-foot"><a class="btn btn-green btn-sm"
                                href="formation-detail.html?f=hotellerie">Voir la fiche</a><a
                                class="btn btn-outline btn-sm"
                                href="{{ url('inscription') }}?formation=hotellerie">S'inscrire</a></div>
                    </article>
                    <article class="course" data-item data-domaine="gestion" data-type="continue"
                        data-pole="national">
                        <div class="meta"><span class="pill ">Formation continue</span><span
                                class="pill">Gestion & entrepreneuriat</span></div>
                        <h3>Gestion de petite entreprise</h3>
                        <p>Plan d'affaires, comptabilité simplifiée, fiscalité de base et accès au financement.</p>
                        <dl>
                            <dt>Durée</dt>
                            <dd>2 mois</dd>
                            <dt>Accès</dt>
                            <dd>Porteurs de projet</dd>
                            <dt>Lieu</dt>
                            <dd>Tous pôles</dd>
                            <dt>Session</dt>
                            <dd>Sessions mensuelles</dd>
                        </dl>
                        <div class="card-foot"><a class="btn btn-green btn-sm"
                                href="formation-detail.html?f=gestion-pme">Voir la fiche</a><a
                                class="btn btn-outline btn-sm"
                                href="{{ url('inscription') }}?formation=gestion-pme">S'inscrire</a></div>
                    </article>
                    <article class="course" data-item data-domaine="peche" data-type="qualifiante"
                        data-pole="thies">
                        <div class="meta"><span class="pill orange">Qualifiante</span><span class="pill">Pêche &
                                métiers de la mer</span></div>
                        <h3>Transformation des produits halieutiques</h3>
                        <p>Techniques de fumage, séchage et salage, normes d'hygiène et qualité.</p>
                        <dl>
                            <dt>Durée</dt>
                            <dd>3 mois</dd>
                            <dt>Accès</dt>
                            <dd>Aucun diplôme requis</dd>
                            <dt>Lieu</dt>
                            <dd>Pôle Thiès</dd>
                            <dt>Session</dt>
                            <dd>Décembre 2026</dd>
                        </dl>
                        <div class="card-foot"><a class="btn btn-green btn-sm"
                                href="formation-detail.html?f=transformation-halieutique">Voir la fiche</a><a
                                class="btn btn-outline btn-sm"
                                href="{{ url('inscription') }}?formation=transformation-halieutique">S'inscrire</a></div>
                    </article>
                    <article class="course" data-item data-domaine="meca" data-type="certifiante"
                        data-pole="centre">
                        <div class="meta"><span class="pill green">Certifiante</span><span class="pill">Mécanique
                                & maintenance</span></div>
                        <h3>Soudure et construction métallique</h3>
                        <p>Soudure à l'arc, lecture de plans et fabrication d'ouvrages métalliques.</p>
                        <dl>
                            <dt>Durée</dt>
                            <dd>6 mois</dd>
                            <dt>Accès</dt>
                            <dd>Aucun diplôme requis</dd>
                            <dt>Lieu</dt>
                            <dd>Pôle Centre</dd>
                            <dt>Session</dt>
                            <dd>Janvier 2027</dd>
                        </dl>
                        <div class="card-foot"><a class="btn btn-green btn-sm"
                                href="formation-detail.html?f=soudure">Voir la fiche</a><a
                                class="btn btn-outline btn-sm"
                                href="{{ url('inscription') }}?formation=soudure">S'inscrire</a></div>
                    </article>
                    <article class="course" data-item data-domaine="btp" data-type="continue" data-pole="national">
                        <div class="meta"><span class="pill ">Formation continue</span><span class="pill">BTP &
                                génie civil</span></div>
                        <h3>Hygiène, sécurité et environnement au travail</h3>
                        <p>Prévention des risques professionnels pour les salariés d'entreprises.</p>
                        <dl>
                            <dt>Durée</dt>
                            <dd>5 jours</dd>
                            <dt>Accès</dt>
                            <dd>Salariés</dd>
                            <dt>Lieu</dt>
                            <dd>Tous pôles</dd>
                            <dt>Session</dt>
                            <dd>À la demande</dd>
                        </dl>
                        <div class="card-foot"><a class="btn btn-green btn-sm"
                                href="formation-detail.html?f=secourisme-hse">Voir la fiche</a><a
                                class="btn btn-outline btn-sm"
                                href="{{ url('inscription') }}?formation=secourisme-hse">S'inscrire</a></div>
                    </article>
                </div>
                <div class="empty-state">Aucune formation ne correspond à vos critères. <button type="button"
                        class="btn btn-outline btn-sm" data-reset>Réinitialiser les filtres</button></div>
            </div>
        </section>

        <section class="section alt">
            <div class="container">
                <div class="section-head">
                    <div><span class="eyebrow">Mode d'emploi</span>
                        <h2>Comment accéder à une formation ?</h2>
                    </div>
                </div>
                <ol class="steps">
                    <li>
                        <h3>Choisir</h3>
                        <p>Consultez le catalogue et repérez la filière et le pôle qui vous conviennent.</p>
                    </li>
                    <li>
                        <h3>Se pré-inscrire</h3>
                        <p>Remplissez le formulaire en ligne ou présentez-vous au pôle régional le plus proche.</p>
                    </li>
                    <li>
                        <h3>Être sélectionné</h3>
                        <p>Le dossier est étudié ; un entretien ou un test de positionnement peut être organisé.</p>
                    </li>
                    <li>
                        <h3>Se former</h3>
                        <p>Suivez la formation chez un opérateur partenaire et obtenez votre titre ou attestation.</p>
                    </li>
                </ol>
            </div>
        </section>

        <section class="section">
            <div class="container">
                <div class="section-head">
                    <div><span class="eyebrow">Questions fréquentes</span>
                        <h2>Vos questions sur les formations</h2>
                    </div>
                </div>
                <div class="accordion">
                    <details>
                        <summary>Les formations de l'ONFP sont-elles payantes ?</summary>
                        <div class="acc-body"><em class="todo">[Préciser la politique de gratuité / participation
                                selon les programmes et financements]</em></div>
                    </details>
                    <details>
                        <summary>Quel niveau faut-il pour s'inscrire ?</summary>
                        <div class="acc-body">Le niveau requis dépend de la filière : il est indiqué sur chaque fiche.
                            De nombreuses formations qualifiantes sont accessibles sans diplôme.</div>
                    </details>
                    <details>
                        <summary>Quel document reçoit-on à la fin de la formation ?</summary>
                        <div class="acc-body">Selon la filière, une attestation de formation ou un titre professionnel
                            délivré après évaluation. Voir la page <a href="{{ url('certification') }}">Certification &
                                VAE</a>.</div>
                    </details>
                    <details>
                        <summary>Puis-je me former tout en travaillant ?</summary>
                        <div class="acc-body">Oui : la formation continue et l'apprentissage sont conçus pour les
                            actifs. Votre employeur peut également solliciter l'Office via l'espace <a
                                href="{{ url('entreprises') }}">Entreprises</a>.</div>
                    </details>
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
