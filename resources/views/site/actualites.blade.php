<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Actualités — ONFP</title>
    <meta name="description"
        content="Toute l'actualité de l'Office National de Formation Professionnelle : événements, formations, études et partenariats.">
    <meta name="theme-color" content="#00853F">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="ONFP — Office National de Formation Professionnelle">
    <meta property="og:title" content="Actualités — ONFP">
    <meta property="og:description"
        content="Toute l'actualité de l'Office National de Formation Professionnelle : événements, formations, études et partenariats.">
    <meta property="og:image" content="https://www.onfp.sn/assets/img/logo-onfp.png">
    <meta property="og:locale" content="fr_SN">
    <link rel="canonical" href="https://www.onfp.sn/actualites.html">
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

    @include('partials.navbar', ['active' => 'actualites'])

    <main id="contenu">
        <div class="page-hero">
            <div class="container">
                <nav class="breadcrumb" aria-label="Fil d'Ariane">
                    <ol>
                        <li><a href="{{ route('home') }}">Accueil</a></li>
                        <li aria-current="page">Actualités</li>
                    </ol>
                </nav>
                <h1>Actualités</h1>
                <p>Événements, programmes, études et partenariats de l'Office.</p>
            </div>
        </div>
        <section class="section" data-filter-scope>
            <div class="container">
                <div
                    style="display:flex;justify-content:space-between;gap:16px;flex-wrap:wrap;align-items:center;margin-bottom:10px">
                    <div class="chips" role="group" aria-label="Catégories" style="margin:0">
                        <button type="button" class="chip-btn" data-chip="cat:tous" aria-pressed="true">Toutes</button>
                        <button type="button" class="chip-btn" data-chip="cat:evenement"
                            aria-pressed="false">Événements</button>
                        <button type="button" class="chip-btn" data-chip="cat:institution"
                            aria-pressed="false">Institution</button>
                        <button type="button" class="chip-btn" data-chip="cat:formation"
                            aria-pressed="false">Formation</button>
                        <button type="button" class="chip-btn" data-chip="cat:etude" aria-pressed="false">Études</button>
                        <button type="button" class="chip-btn" data-chip="cat:partenariat"
                            aria-pressed="false">Partenariats</button>
                        <button type="button" class="chip-btn" data-chip="cat:numerique"
                            aria-pressed="false">Numérique</button>
                    </div>
                    <div class="field" style="min-width:260px"><label class="sr-only" for="a-q">Rechercher</label>
                        <input id="a-q" type="search" data-filter="q" placeholder="Rechercher une actualité…">
                    </div>
                </div>
                <p class="results-count" data-results-count aria-live="polite"></p>
                <div class="grid grid-3" data-filter-list>
                    <a class="news-card" href="article.html" data-item data-cat="evenement">
                        <div class="thumb t-orange" role="img" aria-label="Illustration — Événement"><span
                                class="tag">Événement</span></div>
                        <div class="news-body"><time class="date">29 septembre 2026</time>
                            <h3>Forum national des compétences et de l'emploi : rendez-vous au CICES à la mi-novembre</h3>
                            <p>L'ONFP réunira apprenants, entreprises, opérateurs et partenaires pour plusieurs jours
                                d'échanges, de démonstrations et de recrutements.</p>
                        </div>
                    </a>
                    <a class="news-card" href="article.html" data-item data-cat="institution">
                        <div class="thumb t-green" role="img" aria-label="Illustration — Institution"><span
                                class="tag">Institution</span></div>
                        <div class="news-body"><time class="date">22 septembre 2026</time>
                            <h3>Le Conseil d'administration adopte la nouvelle identité visuelle de l'ONFP</h3>
                            <p>Le nouveau logo, aux couleurs du drapeau national, a été validé à l'unanimité. Son
                                déploiement sur l'ensemble des supports est engagé.</p>
                        </div>
                    </a>
                    <a class="news-card" href="article.html" data-item data-cat="etude">
                        <div class="thumb t-grey" role="img" aria-label="Illustration — Étude"><span
                                class="tag">Étude</span></div>
                        <div class="news-body"><time class="date">24 novembre 2025</time>
                            <h3>Métiers, compétences et emplois dans les pôles : l'ONFP partage les résultats de sa
                                mission de prospection</h3>
                            <p>Atelier de restitution de l'étude nationale sur les emplois durables pour les jeunes et
                                les femmes à l'horizon 2035.</p>
                        </div>
                    </a>
                    <a class="news-card" href="article.html" data-item data-cat="formation">
                        <div class="thumb t-red" role="img" aria-label="Illustration — Formation"><span
                                class="tag">Formation</span></div>
                        <div class="news-body"><time class="date">18 février 2026</time>
                            <h3>Programme 2026 : ouverture des filières coupe-couture et stylisme-modélisme</h3>
                            <p>De nouvelles filières qualifiantes ouvertes aux candidats sur l'ensemble du territoire.</p>
                        </div>
                    </a>
                    <a class="news-card" href="article.html" data-item data-cat="partenariat">
                        <div class="thumb t-yellow" role="img" aria-label="Illustration — Partenariat"><span
                                class="tag">Partenariat</span></div>
                        <div class="news-body"><time class="date">13 juillet 2025</time>
                            <h3>La formation professionnelle, réponse au défi de l'emploi au Sénégal</h3>
                            <p>Retour sur les engagements de l'Office aux côtés des pouvoirs publics et des partenaires.</p>
                        </div>
                    </a>
                    <a class="news-card" href="article.html" data-item data-cat="numerique">
                        <div class="thumb t-green" role="img" aria-label="Illustration — Numérique"><span
                                class="tag">Numérique</span></div>
                        <div class="news-body"><time class="date">8 septembre 2026</time>
                            <h3>SIGOF : une plateforme modernisée pour la gestion des opérations de formation</h3>
                            <p>La refonte de la plateforme simplifie le suivi des sessions, des apprenants et des
                                opérateurs.</p>
                        </div>
                    </a>
                </div>
                <div class="empty-state">Aucune actualité dans cette catégorie.</div>
                <nav aria-label="Pagination">
                    <ul class="pagination">
                        <li><a href="#" aria-current="page">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#" aria-label="Page suivante">→</a></li>
                    </ul>
                </nav>
            </div>
        </section>
        <section class="section alt">
            <div class="container grid grid-2" style="align-items:center">
                <div><span class="eyebrow">Presse</span>
                    <h2>Espace presse</h2>
                    <p class="muted">Communiqués, dossiers de presse, logos officiels et contacts du service
                        communication.</p>
                </div>
                <div style="display:flex;gap:12px;flex-wrap:wrap"><a class="btn btn-green"
                        href="{{ url('documentation') }}">Communiqués & dossiers</a><a class="btn btn-outline"
                        href="{{ url('contact') }}?objet=presse">Contact presse</a></div>
            </div>
        </section>
    </main>

    @include('partials.footer')

</body>

</html>
