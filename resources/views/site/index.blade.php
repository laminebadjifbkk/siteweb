<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ONFP - Office national de Formation professionnelle</title>
    <meta name="description"
        content="L'ONFP National de Formation Professionnelle du Sénégal : formations qualifiantes et certifiantes, certification, études, opérateurs et pôles régionaux.">
    <meta name="theme-color" content="#00853F">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="ONFP — Office National de Formation Professionnelle">
    <meta property="og:title" content="ONFP — Office National de Formation Professionnelle">
    <meta property="og:description"
        content="L'ONFP National de Formation Professionnelle du Sénégal : formations qualifiantes et certifiantes, certification, études, opérateurs et pôles régionaux.">
    <meta property="og:image" content="https://www.onfp.sn/assets/img/logo-onfp.png">
    <meta property="og:locale" content="fr_SN">
    <link rel="canonical" href="https://www.onfp.sn/">
    <link rel="icon" href="{{ asset('assets/img/favicon.ico') }}" sizes="any">
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon-32.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('assets/img/apple-touch-icon.png') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,500;9..144,600;9..144,700&family=Manrope:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>

    @include('partials.navbar', ['active' => 'accueil'])

    <main id="contenu">

        <section class="hero" aria-label="À la une">
            <div class="container hero-inner">
                <div class="hero-slides" role="region" aria-roledescription="carrousel" aria-label="Annonces">
                    <div class="hero-slide active">
                        <div class="hero-tag"><span class="dot"></span> La référence de la formation
                            professionnelle</div>
                        <h1>Former le Sénégal de demain.</h1>
                        <p class="lead">L'ONFP National de Formation Professionnelle qualifie les travailleurs et
                            les demandeurs d'emploi sur l'ensemble du territoire national, pour une insertion
                            professionnelle durable.</p>
                        <div class="hero-ctas"><a href="{{ url('formations') }}" class="btn btn-solid">Découvrir nos
                                formations</a><a href="{{ url('missions') }}" class="btn btn-outline">Nos missions</a></div>
                    </div>
                    <div class="hero-slide">
                        <div class="hero-tag"><span class="dot" style="background:var(--onfp-orange)"></span>
                            Événement · Mi-novembre 2026</div>
                        <h1>Forum national des compétences et de l'emploi au CICES.</h1>
                        <p class="lead">Apprenants, entreprises, opérateurs de formation et partenaires se retrouvent
                            à Dakar pour rapprocher la formation et l'emploi. <em class="todo">[dates exactes]</em>
                        </p>
                        <div class="hero-ctas"><a href="article.html" class="btn btn-solid">Programme du forum</a><a
                                href="{{ url('contact') }}" class="btn btn-outline">Devenir exposant</a></div>
                    </div>
                    <div class="hero-slide">
                        <div class="hero-tag"><span class="dot" style="background:var(--onfp-red)"></span>
                            Inscriptions ouvertes</div>
                        <h1>Sessions 2026-2027 : pré-inscrivez-vous en ligne.</h1>
                        <p class="lead">Choisissez votre filière, votre pôle régional et déposez votre candidature en
                            quelques minutes. Un conseiller vous recontacte.</p>
                        <div class="hero-ctas"><a href="{{ url('inscription') }}" class="btn btn-solid">Je me
                                pré-inscris</a><a href="{{ url('formations') }}" class="btn btn-outline">Voir le catalogue</a>
                        </div>
                    </div>
                    <div class="slide-dots" role="tablist" aria-label="Choisir une annonce"></div>
                </div>
                <div class="hero-art"><img src="{{ asset('assets/img/logo-onfp.webp') }}" alt="Logo officiel de l'ONFP"
                        width="320" height="333"></div>
            </div>
        </section>

        <div class="container stats">
            <div class="stats-grid">
                <div class="stat">
                    <div class="num">1986</div>
                    <div class="lbl">Création de l'ONFP par la loi n°86-44 du 11 août 1986</div>
                </div>
                <div class="stat">
                    <div class="num">5</div>
                    <div class="lbl">Domaines d'intervention : recherche, formation, certification, documentation,
                        maîtrise d'ouvrage</div>
                </div>
                <div class="stat">
                    <div class="num">7</div>
                    <div class="lbl">Pôles régionaux couvrant le territoire national</div>
                </div>
                <div class="stat">
                    <div class="num"><em class="todo">[chiffre]</em></div>
                    <div class="lbl">Personnes formées depuis la création — chiffre à fournir par la Direction</div>
                </div>
            </div>
        </div>

        <section class="section" id="missions">
            <div class="container">
                <div class="section-head">
                    <div><span class="eyebrow">L'ONFP</span>
                        <h2>Nos missions</h2>
                        <p>Un établissement public au service de la qualification professionnelle et de l'emploi.</p>
                    </div>
                    <a href="{{ url('missions') }}" class="link-more">Voir toutes les missions →</a>
                </div>
                <div class="missions-grid"><a class="mission-card" href="{{ url('missions') }}#etudes"><span
                            class="ico"><svg viewBox="0 0 24 24" width="22" height="22" fill="none"
                                stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
                                stroke-linejoin="round" aria-hidden="true">
                                <circle cx="11" cy="11" r="7" />
                                <path d="m20 20-3.5-3.5M8 11h6M11 8v6" />
                            </svg></span>
                        <h3>Étude & recherche</h3>
                        <p>Études sur l'emploi, les qualifications et l'adéquation formation-emploi pour orienter
                            l'offre nationale.</p>
                    </a><a class="mission-card" href="{{ url('missions') }}#formation"><span class="ico"><svg
                                viewBox="0 0 24 24" width="22" height="22" fill="none"
                                stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
                                stroke-linejoin="round" aria-hidden="true">
                                <path d="M22 10 12 5 2 10l10 5 10-5Z" />
                                <path d="M6 12v5c3 2 9 2 12 0v-5" />
                            </svg></span>
                        <h3>Formation & qualification</h3>
                        <p>Conception, financement et coordination d'actions de formation initiale et continue.</p>
                    </a><a class="mission-card" href="{{ url('missions') }}#certification"><span class="ico"><svg
                                viewBox="0 0 24 24" width="22" height="22" fill="none"
                                stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
                                stroke-linejoin="round" aria-hidden="true">
                                <rect x="4" y="3" width="16" height="13" rx="2" />
                                <path d="M8 7h8M8 11h5" />
                                <circle cx="15" cy="18" r="3" />
                                <path d="m13.5 20.5-1 2.5M16.5 20.5l1 2.5" />
                            </svg></span>
                        <h3>Évaluation & certification</h3>
                        <p>Évaluation des compétences et délivrance de titres professionnels reconnus.</p>
                    </a><a class="mission-card" href="{{ url('missions') }}#documentation"><span class="ico"><svg
                                viewBox="0 0 24 24" width="22" height="22" fill="none"
                                stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
                                stroke-linejoin="round" aria-hidden="true">
                                <path d="M4 19V5a2 2 0 0 1 2-2h13v16H6a2 2 0 0 0-2 2Zm0 0a2 2 0 0 0 2 2h13" />
                                <path d="M8 7h7" />
                            </svg></span>
                        <h3>Documentation & édition</h3>
                        <p>Production et diffusion de référentiels, supports pédagogiques et publications techniques.
                        </p>
                    </a><a class="mission-card" href="{{ url('missions') }}#construction"><span class="ico"><svg
                                viewBox="0 0 24 24" width="22" height="22" fill="none"
                                stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
                                stroke-linejoin="round" aria-hidden="true">
                                <path d="M3 21h18M5 21V8l7-5 7 5v13" />
                                <path d="M9 21v-6h6v6" />
                            </svg></span>
                        <h3>Construction & équipement</h3>
                        <p>Maîtrise d'ouvrage déléguée pour la réalisation et l'équipement de centres de formation.</p>
                    </a></div>
            </div>
        </section>

        <section class="section alt" data-filter-scope>
            <div class="container">
                <div class="section-head">
                    <div><span class="eyebrow">Se former</span>
                        <h2>Trouver une formation</h2>
                        <p>Filières qualifiantes, certifiantes, apprentissage et formation continue, près de chez vous.
                        </p>
                    </div>
                    <a href="{{ url('formations') }}" class="link-more">Tout le catalogue →</a>
                </div>
                <form class="filters" action="{{ url('formations') }}" method="get" style="background:var(--card)">
                    <div class="field"><label for="h-q">Mot-clé</label><input id="h-q" name="q"
                            type="search" placeholder="ex. électricité, couture…"></div>
                    <div class="field"><label for="h-dom">Domaine</label><select id="h-dom" name="domaine">
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
                    <div class="field"><label for="h-pole">Pôle régional</label><select id="h-pole"
                            name="pole">
                            <option value="">Tous les pôles</option>
                            <option value="nord">Pôle Nord</option>
                            <option value="nord-est">Pôle Nord-Est</option>
                            <option value="est">Pôle Est</option>
                            <option value="sud">Pôle Sud</option>
                            <option value="centre">Pôle Centre</option>
                            <option value="thies">Pôle Thiès</option>
                            <option value="diourbel-louga">Pôle Diourbel-Louga</option>
                        </select></div>
                    <button class="btn btn-green" type="submit"><svg viewBox="0 0 24 24" width="16"
                            height="16" fill="none" stroke="currentColor" stroke-width="1.8"
                            stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <circle cx="11" cy="11" r="7" />
                            <path d="m20 20-3.5-3.5" />
                        </svg> Rechercher</button>
                </form>
                <div class="grid grid-3">
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
                </div>
            </div>
        </section>

        <section class="section">
            <div class="container">
                <div class="section-head">
                    <div><span class="eyebrow">Services en ligne</span>
                        <h2>Vos démarches, simplifiées</h2>
                        <p>Accédez directement aux services numériques de l'Office.</p>
                    </div>
                </div>
                <div class="platforms">
                    <a class="platform" href="https://sigof.onfp.sn" rel="noopener"><span class="ico"><svg
                                viewBox="0 0 24 24" width="22" height="22" fill="none"
                                stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
                                stroke-linejoin="round" aria-hidden="true">
                                <rect x="3" y="4" width="18" height="12" rx="2" />
                                <path d="M8 20h8M12 16v4" />
                            </svg></span>
                        <div>
                            <h3>Plateforme SIGOF</h3>
                            <p>Système intégré de gestion des opérations de formation, pour les opérateurs et les
                                agents.</p>
                        </div>
                    </a>
                    <a class="platform" href="{{ url('inscription') }}"><span class="ico"><svg viewBox="0 0 24 24"
                                width="22" height="22" fill="none" stroke="currentColor"
                                stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"
                                aria-hidden="true">
                                <circle cx="9" cy="8" r="3.5" />
                                <path d="M2.5 20c.8-3.5 3.4-5 6.5-5s5.7 1.5 6.5 5" />
                                <circle cx="17" cy="9" r="2.5" />
                                <path d="M17 14c2.3 0 4 1.3 4.5 4" />
                            </svg></span>
                        <div>
                            <h3>Pré-inscription</h3>
                            <p>Déposez votre candidature à une session de formation en quelques minutes.</p>
                        </div>
                    </a>
                    <a class="platform" href="{{ url('certification') }}#verifier"><span class="ico"><svg
                                viewBox="0 0 24 24" width="22" height="22" fill="none"
                                stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
                                stroke-linejoin="round" aria-hidden="true">
                                <path d="M12 3 4 6v6c0 5 3.5 8 8 9 4.5-1 8-4 8-9V6Z" />
                                <path d="m9 12 2 2 4-4" />
                            </svg></span>
                        <div>
                            <h3>Vérifier un titre</h3>
                            <p>Contrôlez l'authenticité d'une attestation ou d'un titre délivré par l'ONFP.</p>
                        </div>
                    </a>
                </div>
            </div>
        </section>

        <section class="section alt" id="actualites">
            <div class="container">
                <div class="section-head">
                    <div><span class="eyebrow">Actualités</span>
                        <h2>Les dernières nouvelles</h2>
                        <p>L'actualité de l'Office, de ses pôles et de ses partenaires.</p>
                    </div>
                    <a href="{{ url('/actualites') }}" class="link-more">Toutes les actualités →</a>
                </div>
                <div class="news-grid"><a class="news-card feature" href="article.html" data-item
                        data-cat="evenement">
                        <div class="thumb t-orange" role="img" aria-label="Illustration — Événement"><span
                                class="tag">Événement</span></div>
                        <div class="news-body"><time class="date">29 septembre 2026</time>
                            <h3>Forum national des compétences et de l'emploi : rendez-vous au CICES à la mi-novembre
                            </h3>
                            <p>L'ONFP réunira apprenants, entreprises, opérateurs et partenaires pour plusieurs jours
                                d'échanges, de démonstrations et de recrutements.</p>
                        </div>
                    </a><a class="news-card" href="article.html" data-item data-cat="institution">
                        <div class="thumb t-green" role="img" aria-label="Illustration — Institution"><span
                                class="tag">Institution</span></div>
                        <div class="news-body"><time class="date">22 septembre 2026</time>
                            <h3>Le Conseil d'administration adopte la nouvelle identité visuelle de l'ONFP</h3>
                            <p>Le nouveau logo, aux couleurs du drapeau national, a été validé à l'unanimité. Son
                                déploiement sur l'ensemble des supports est engagé.</p>
                        </div>
                    </a><a class="news-card" href="article.html" data-item data-cat="etude">
                        <div class="thumb t-grey" role="img" aria-label="Illustration — Étude"><span
                                class="tag">Étude</span></div>
                        <div class="news-body"><time class="date">24 novembre 2025</time>
                            <h3>Métiers, compétences et emplois dans les pôles : l'ONFP partage les résultats de sa
                                mission de prospection</h3>
                            <p>Atelier de restitution de l'étude nationale sur les emplois durables pour les jeunes et
                                les femmes à l'horizon 2035.</p>
                        </div>
                    </a></div>
            </div>
        </section>

        <section class="section">
            <div class="container">
                <div class="section-head">
                    <div><span class="eyebrow">Proximité</span>
                        <h2>Un Office présent sur tout le territoire</h2>
                        <p>Sept pôles régionaux relaient l'action de l'ONFP au plus près des populations et des
                            entreprises.</p>
                    </div>
                    <a href="{{ route('poles-regionaux') }}" class="link-more">Carte des pôles →</a>
                </div>
                <div class="grid grid-4"><a class="card" href="{{ route('poles-regionaux') }}#nord"
                        style="text-decoration:none"><span class="ico"><svg viewBox="0 0 24 24" width="22"
                                height="22" fill="none" stroke="currentColor" stroke-width="1.8"
                                stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <path d="M12 21s-7-6.2-7-11.5a7 7 0 0 1 14 0C19 14.8 12 21 12 21Z" />
                                <circle cx="12" cy="9.5" r="2.5" />
                            </svg></span>
                        <h3 style="font-family:var(--font-body);font-size:15.5px;font-weight:800">Pôle Nord</h3>
                        <p>Saint-Louis</p>
                    </a><a class="card" href="{{ route('poles-regionaux') }}#nord-est" style="text-decoration:none"><span
                            class="ico"><svg viewBox="0 0 24 24" width="22" height="22" fill="none"
                                stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
                                stroke-linejoin="round" aria-hidden="true">
                                <path d="M12 21s-7-6.2-7-11.5a7 7 0 0 1 14 0C19 14.8 12 21 12 21Z" />
                                <circle cx="12" cy="9.5" r="2.5" />
                            </svg></span>
                        <h3 style="font-family:var(--font-body);font-size:15.5px;font-weight:800">Pôle Nord-Est</h3>
                        <p>Matam</p>
                    </a><a class="card" href="{{ route('poles-regionaux') }}#est" style="text-decoration:none"><span
                            class="ico"><svg viewBox="0 0 24 24" width="22" height="22" fill="none"
                                stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
                                stroke-linejoin="round" aria-hidden="true">
                                <path d="M12 21s-7-6.2-7-11.5a7 7 0 0 1 14 0C19 14.8 12 21 12 21Z" />
                                <circle cx="12" cy="9.5" r="2.5" />
                            </svg></span>
                        <h3 style="font-family:var(--font-body);font-size:15.5px;font-weight:800">Pôle Est</h3>
                        <p>Tambacounda · Kédougou</p>
                    </a><a class="card" href="{{ route('poles-regionaux') }}#sud" style="text-decoration:none"><span
                            class="ico"><svg viewBox="0 0 24 24" width="22" height="22" fill="none"
                                stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
                                stroke-linejoin="round" aria-hidden="true">
                                <path d="M12 21s-7-6.2-7-11.5a7 7 0 0 1 14 0C19 14.8 12 21 12 21Z" />
                                <circle cx="12" cy="9.5" r="2.5" />
                            </svg></span>
                        <h3 style="font-family:var(--font-body);font-size:15.5px;font-weight:800">Pôle Sud</h3>
                        <p>Ziguinchor · Sédhiou · Kolda</p>
                    </a><a class="card" href="{{ route('poles-regionaux') }}#centre" style="text-decoration:none"><span
                            class="ico"><svg viewBox="0 0 24 24" width="22" height="22" fill="none"
                                stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
                                stroke-linejoin="round" aria-hidden="true">
                                <path d="M12 21s-7-6.2-7-11.5a7 7 0 0 1 14 0C19 14.8 12 21 12 21Z" />
                                <circle cx="12" cy="9.5" r="2.5" />
                            </svg></span>
                        <h3 style="font-family:var(--font-body);font-size:15.5px;font-weight:800">Pôle Centre</h3>
                        <p>Kaolack · Fatick · Kaffrine</p>
                    </a><a class="card" href="{{ route('poles-regionaux') }}#thies" style="text-decoration:none"><span
                            class="ico"><svg viewBox="0 0 24 24" width="22" height="22" fill="none"
                                stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
                                stroke-linejoin="round" aria-hidden="true">
                                <path d="M12 21s-7-6.2-7-11.5a7 7 0 0 1 14 0C19 14.8 12 21 12 21Z" />
                                <circle cx="12" cy="9.5" r="2.5" />
                            </svg></span>
                        <h3 style="font-family:var(--font-body);font-size:15.5px;font-weight:800">Pôle Thiès</h3>
                        <p>Thiès</p>
                    </a><a class="card" href="{{ route('poles-regionaux') }}#diourbel-louga"
                        style="text-decoration:none"><span class="ico"><svg viewBox="0 0 24 24" width="22"
                                height="22" fill="none" stroke="currentColor" stroke-width="1.8"
                                stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <path d="M12 21s-7-6.2-7-11.5a7 7 0 0 1 14 0C19 14.8 12 21 12 21Z" />
                                <circle cx="12" cy="9.5" r="2.5" />
                            </svg></span>
                        <h3 style="font-family:var(--font-body);font-size:15.5px;font-weight:800">Pôle Diourbel-Louga
                        </h3>
                        <p>Diourbel · Louga</p>
                    </a><a class="card accent-green" href="{{ url('contact') }}" style="text-decoration:none"><span
                            class="ico"><svg viewBox="0 0 24 24" width="22" height="22" fill="none"
                                stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
                                stroke-linejoin="round" aria-hidden="true">
                                <path d="M3 21h18M5 21V8l7-5 7 5v13" />
                                <path d="M9 21v-6h6v6" />
                            </svg></span>
                        <h3 style="font-family:var(--font-body);font-size:15.5px;font-weight:800">Siège — Direction
                            générale</h3>
                        <p>Dakar</p>
                    </a></div>
            </div>
        </section>

        <section class="section" style="padding-top:0">
            <div class="container">
                <div class="cta-band">
                    <div>
                        <h2>Entreprise, collectivité, partenaire : formons ensemble vos équipes.</h2>
                        <p>Plans de formation sur mesure, formation continue des salariés, apprentissage.</p>
                    </div>
                    <div style="display:flex;gap:12px;flex-wrap:wrap"><a href="{{ url('entreprises') }}"
                            class="btn btn-solid">Solutions entreprises</a><a href="{{ url('contact') }}"
                            class="btn btn-outline">Nous contacter</a></div>
                </div>
            </div>
        </section>

        <div class="container">
            <div class="partners-row">
                <span class="label">Tutelle & partenaires</span>
                <span class="chip">Ministère de l'Emploi et de la Formation professionnelle et technique</span>
                <span class="chip">Ministère des Finances et du Budget</span>
                <span class="chip"><em class="todo">[logos partenaires techniques et financiers]</em></span>
            </div>
        </div>
        <div style="height:60px"></div>

    </main>

    @include('partials.footer')

</body>

</html>
