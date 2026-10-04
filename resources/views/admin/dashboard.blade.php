@extends('layout.admin')

@section('title', 'Administration — Tableau de bord')
@section('heading', 'Tableau de bord')

@section('content')
    <section class="kpis" aria-label="Indicateurs clés">
        <div class="card kpi">
            <div class="l">Articles publiés</div>
            <div class="v" data-n="248">0</div>
            <div class="d"><span class="pill up">+12</span> ce mois-ci</div>
        </div>
        <div class="card kpi">
            <div class="l">Visites ce mois</div>
            <div class="v" data-n="18420">0</div>
            <div class="d"><span class="pill up">+9,3 %</span> vs mois dernier</div>
        </div>
        <div class="card kpi">
            <div class="l">En attente de relecture</div>
            <div class="v" data-n="6">0</div>
            <div class="d"><span class="pill wt">À valider</span> 2 depuis plus de 3 jours</div>
        </div>
        <div class="card kpi">
            <div class="l">Messages de contact</div>
            <div class="v" data-n="14">0</div>
            <div class="d"><span class="pill nf">5 non lus</span></div>
        </div>
    </section>

    <section class="grid">
        <div class="stack">
            <div class="card">
                <div class="ch">
                    <h2>Fréquentation du site</h2>
                    <div class="seg" role="group" aria-label="Période"><button data-p="7" class="on">7
                            jours</button><button data-p="30">30 jours</button><button data-p="12">12 mois</button>
                    </div>
                </div>
                <svg id="chart" role="img" aria-label="Courbe des visites et des visiteurs uniques"></svg>
                <div class="legend"><span><i style="background:var(--c2)"></i>Visites</span><span><i
                            style="background:var(--accent)"></i>Visiteurs uniques</span></div>
            </div>

            <div class="card">
                <div class="ch">
                    <h2>Articles</h2><a href="articles.html">Gérer tous les articles</a>
                </div>
                <div class="tools">
                    <div class="seg" id="flt" role="group" aria-label="Filtrer par statut">
                        <button data-s="all" class="on">Tous</button><button data-s="pub">Publiés</button><button
                            data-s="rev">En relecture</button><button data-s="sch">Planifiés</button><button
                            data-s="dra">Brouillons</button>
                    </div>
                    <input id="q" type="search" placeholder="Rechercher un article ou un auteur…"
                        aria-label="Rechercher un article">
                </div>
                <div class="tw">
                    <table>
                        <thead>
                            <tr>
                                <th>Titre</th>
                                <th>Auteur</th>
                                <th>Statut</th>
                                <th>Date</th>
                                <th>Lectures</th>
                            </tr>
                        </thead>
                        <tbody id="rows"></tbody>
                    </table>
                </div>
                <p class="empty" id="none" hidden>Aucun article ne correspond à ces critères.</p>
            </div>
        </div>

        <div class="stack">
            <div class="card">
                <div class="ch">
                    <h2>Articles par rubrique</h2>
                </div>
                <div class="donut"><svg viewBox="0 0 42 42" id="donut" role="img"
                        aria-label="Répartition des articles par rubrique"></svg>
                    <ul id="dl"></ul>
                </div>
            </div>
            <div class="card">
                <div class="ch">
                    <h2>Les plus lus ce mois</h2>
                </div>
                <div class="bars" id="top"></div>
            </div>
            <div class="card">
                <div class="ch">
                    <h2>Prochaines publications</h2>
                </div>
                <ul class="list" id="plan"></ul>
            </div>
            <div class="card">
                <div class="ch">
                    <h2>Activité de l'équipe</h2>
                </div>
                <ul class="list" id="act"></ul>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        /* Données de démonstration.
       Laravel : const articles = @@json($articles); (idem pour les autres tableaux) */
        const articles = [{
                t: 'Rapport annuel d\'activité 2025',
                r: 'Rapports',
                a: 'Awa Diallo',
                s: 'pub',
                d: '22 sept.',
                v: 1840
            },
            {
                t: 'Ouverture des inscriptions pour la rentrée 2026',
                r: 'Communiqués',
                a: 'Moussa Ndiaye',
                s: 'pub',
                d: '20 sept.',
                v: 1520
            },
            {
                t: 'Conférence internationale : le programme complet',
                r: 'Événements',
                a: 'Fatou Sow',
                s: 'rev',
                d: '—',
                v: 0
            },
            {
                t: 'Signature d\'une convention de partenariat',
                r: 'Actualités',
                a: 'Ibrahima Fall',
                s: 'rev',
                d: '—',
                v: 0
            },
            {
                t: 'Journée portes ouvertes du 10 octobre',
                r: 'Événements',
                a: 'Khady Ba',
                s: 'sch',
                d: '1 oct.',
                v: 0
            },
            {
                t: 'Message du directeur : bilan de l\'année',
                r: 'Actualités',
                a: 'Awa Diallo',
                s: 'dra',
                d: '—',
                v: 0
            },
            {
                t: 'Publication du calendrier des examens',
                r: 'Communiqués',
                a: 'Cheikh Sarr',
                s: 'pub',
                d: '15 sept.',
                v: 970
            }
        ];
        const sl = {
            pub: 'Publié',
            rev: 'En relecture',
            sch: 'Planifié',
            dra: 'Brouillon'
        };
        const cats = [
            ['Actualités', 36, '--c2'],
            ['Communiqués', 26, '--accent'],
            ['Événements', 20, '--c3'],
            ['Rapports', 18, '--c4']
        ];
        const topRead = [
            ['Rapport annuel d\'activité 2025', 1840],
            ['Ouverture des inscriptions 2026', 1520],
            ['Calendrier des examens', 970],
            ['Bourses et aides financières', 760]
        ];
        const plan = [
            ['1', 'oct.', 'Journée portes ouvertes du 10 octobre', 'Khady Ba · 09:00'],
            ['5', 'oct.', 'Résultats du concours d\'entrée', 'Moussa Ndiaye · 08:30'],
            ['12', 'oct.', 'Discours d\'ouverture de la conférence', 'Fatou Sow · 10:00']
        ];
        const acts = [
            ['AD', 'Awa Diallo a publié « Rapport annuel d\'activité 2025 »', 'il y a 1 h'],
            ['FS', 'Fatou Sow a soumis un article à la relecture', 'il y a 3 h'],
            ['MN', 'Moussa Ndiaye a ajouté 4 documents PDF', 'hier'],
            ['IF', 'Ibrahima Fall a modifié la page « Nos missions »', 'hier']
        ];
        const series = {
            7: {
                l: ['Lun', 'Mar', 'Mer', 'Jeu', 'Ven', 'Sam', 'Dim'],
                v: [520, 610, 580, 720, 690, 410, 380],
                u: [340, 410, 390, 480, 455, 290, 260]
            },
            30: {
                l: Array.from({
                    length: 10
                }, (_, i) => 'J' + (i * 3 + 1)),
                v: [480, 530, 510, 600, 640, 590, 700, 680, 730, 760],
                u: [320, 350, 340, 400, 430, 390, 470, 450, 490, 510]
            },
            12: {
                l: ['Oct', 'Nov', 'Déc', 'Jan', 'Fév', 'Mar', 'Avr', 'Mai', 'Juin', 'Juil', 'Août', 'Sep'],
                v: [11200, 12100, 9800, 13400, 14200, 15100, 15800, 14900, 13200, 12800, 14600, 18420],
                u: [7400, 8000, 6500, 8900, 9500, 10100, 10600, 10000, 8800, 8500, 9700, 12300]
            }
        };

        /* Compteurs */
        document.querySelectorAll('[data-n]').forEach(el => {
            const n = +el.dataset.n,
                t0 = performance.now();
            (function f(t) {
                const p = Math.min((t - t0) / 800, 1);
                el.textContent = fmt(Math.round(n * (1 - Math.pow(1 - p, 3))));
                if (p < 1) requestAnimationFrame(f)
            })(t0)
        });

        /* Courbe */
        function draw(p) {
            const d = series[p],
                W = 640,
                H = 250,
                L = 44,
                B = 26,
                T = 10,
                R = 10,
                iw = W - L - R,
                ih = H - T - B,
                m = Math.max(...d.v) * 1.1,
                n = d.l.length;
            const X = i => L + iw * i / (n - 1),
                pts = a => a.map((y, i) => [X(i), T + ih * (1 - y / m)]),
                path = a => a.map((q, i) => (i ? 'L' : 'M') + q[0].toFixed(1) + ',' + q[1].toFixed(1)).join('');
            const pv = pts(d.v),
                pu = pts(d.u);
            let g = '';
            for (let i = 0; i <= 4; i++) {
                const y = T + ih * i / 4;
                g += `<line x1="${L}" x2="${W-R}" y1="${y}" y2="${y}" stroke="var(--line)"/><text x="${L-6}" y="${y+4}" text-anchor="end">${fmt(Math.round(m*(1-i/4)))}</text>`
            }
            d.l.forEach((t, i) => g += `<text x="${X(i)}" y="${H-6}" text-anchor="middle">${t}</text>`);
            $('#chart').setAttribute('viewBox', `0 0 ${W} ${H}`);
            $('#chart').innerHTML = g +
                `<path d="${path(pv)}L${X(n-1)},${T+ih}L${L},${T+ih}Z" fill="var(--c2)" opacity=".12"/><path d="${path(pv)}" fill="none" stroke="var(--c2)" stroke-width="2.5" stroke-linejoin="round"/><path d="${path(pu)}" fill="none" stroke="var(--accent)" stroke-width="2.5" stroke-linejoin="round"/>` +
                pv.map((q, i) =>
                    `<circle cx="${q[0]}" cy="${q[1]}" r="4" fill="var(--surface)" stroke="var(--c2)" stroke-width="2"><title>${d.l[i]} : ${fmt(d.v[i])} visites, ${fmt(d.u[i])} visiteurs uniques</title></circle>`
                    ).join('')
        }
        document.querySelectorAll('.seg[aria-label=Période] button').forEach(b => b.onclick = () => {
            document.querySelectorAll('.seg[aria-label=Période] button').forEach(x => x.classList.remove('on'));
            b.classList.add('on');
            draw(b.dataset.p)
        });
        draw(7);

        /* Donut */
        (function() {
            let off = 25,
                h = '';
            cats.forEach(([n, v, c]) => {
                h +=
                `<circle cx="21" cy="21" r="15.9155" fill="none" stroke="var(${c})" stroke-width="6" stroke-dasharray="${v} ${100-v}" stroke-dashoffset="${off}"/>`;
                off -= v
            });
            $('#donut').innerHTML = h +
                '<text x="21" y="22.6" text-anchor="middle" font-size="6.5" font-weight="700" fill="var(--ink)">248</text>';
            $('#dl').innerHTML = cats.map(([n, v, c]) =>
                `<li><i style="background:var(${c})"></i>${n}<b>${v} %</b></li>`).join('')
        })();

        /* Tableau : filtre + recherche */
        let st = 'all';

        function rows() {
            const q = $('#q').value.toLowerCase();
            const r = articles.filter(o => (st === 'all' || o.s === st) && (o.t + o.a + o.r).toLowerCase().includes(q));
            $('#rows').innerHTML = r.map(o =>
                `<tr><td><a class="t" href="article-create.html">${o.t}</a><small>${o.r}</small></td><td>${o.a}</td><td><span class="tag s-${o.s}">${sl[o.s]}</span></td><td>${o.d}</td><td>${o.v?fmt(o.v):'—'}</td></tr>`
                ).join('');
            $('#none').hidden = r.length > 0
        }
        document.querySelectorAll('#flt button').forEach(b => b.onclick = () => {
            document.querySelectorAll('#flt button').forEach(x => x.classList.remove('on'));
            b.classList.add('on');
            st = b.dataset.s;
            rows()
        });
        $('#q').oninput = rows;
        rows();

        /* Listes */
        $('#top').innerHTML = topRead.map(([n, v]) =>
            `<div class="bar"><div class="t"><span>${n}</span><b>${fmt(v)}</b></div><div class="tr"><div style="width:${v/topRead[0][1]*100}%"></div></div></div>`
            ).join('');
        $('#plan').innerHTML = plan.map(([j, m, t, i]) =>
            `<li><div class="day"><b>${j}</b><span>${m}</span></div><div>${t}<small>${i}</small></div></li>`).join('');
        $('#act').innerHTML = acts.map(([i, t, w]) =>
            `<li><div class="av">${i}</div><div>${t}<small>${w}</small></div></li>`).join('');
    </script>
@endpush
