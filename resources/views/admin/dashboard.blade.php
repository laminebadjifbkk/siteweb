@extends('layout.admin')

@section('title', 'Tableau de bord')
@section('header-title', 'Tableau de bord')
@section('header-subtitle', now()->locale('fr')->translatedFormat('l j F Y'))

@section('content')
    @php
        $statusLabels = [
            'draft' => 'Brouillon',
            'review' => 'En relecture',
            'scheduled' => 'Planifié',
            'published' => 'Publié',
            'archived' => 'Archivé',
        ];
        $totalArticles = max($counts['total'], 1);
    @endphp

    <section class="kpis" aria-label="Indicateurs clés">
        <div class="card kpi">
            <div class="l">Articles publiés</div>
            <div class="v">{{ $counts['published'] }}</div>
            <div class="d">sur {{ $counts['total'] }} au total</div>
        </div>
        <div class="card kpi">
            <div class="l">Articles au total</div>
            <div class="v">{{ $counts['total'] }}</div>
            <div class="d">toutes rubriques confondues</div>
        </div>
        <div class="card kpi">
            <div class="l">En attente de relecture</div>
            <div class="v">{{ $counts['review'] }}</div>
            <div class="d">{{ $counts['review'] > 0 ? 'À traiter' : 'Rien en attente' }}</div>
        </div>
        <div class="card kpi">
            <div class="l">Rubriques actives</div>
            <div class="v">{{ $counts['domaines'] }}</div>
            <div class="d">Actualités, Communiqués…</div>
        </div>
    </section>

    <section class="grid">
        <div class="stack">
            <div class="card">
                <div class="ch">
                    <h2>Articles</h2>
                </div>
                <div class="tools">
                    <div class="seg" id="flt" role="group" aria-label="Filtrer par statut">
                        <button data-s="all" class="on" type="button">Tous</button>
                        @foreach ($statusLabels as $key => $label)
                            <button data-s="{{ $key }}" type="button">{{ $label }}</button>
                        @endforeach
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
                                <th>Rubrique</th>
                                <th>Statut</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody id="rows">
                            @forelse ($articles as $article)
                                <tr data-status="{{ $article->status }}">
                                    <td><span class="t">{{ $article->title }}</span></td>
                                    <td>{{ $article->user->name ?? '—' }}</td>
                                    <td>{{ $article->domaine->name ?? '—' }}</td>
                                    <td><span
                                            class="tag s-{{ $article->status }}">{{ $statusLabels[$article->status] ?? $article->status }}</span>
                                    </td>
                                    <td><small>{{ $article->published_at?->format('d/m/Y') ?? $article->created_at->format('d/m/Y') }}</small>
                                    </td>
                                </tr>
                            @empty
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <p class="empty" id="none" @if ($articles->count()) hidden @endif>
                    @if ($articles->isEmpty())
                        Aucun article pour l'instant.
                    @else
                        Aucun article ne correspond à ces critères.
                    @endif
                </p>
            </div>
        </div>

        <div class="stack">
            <div class="card">
                <div class="ch">
                    <h2>Articles par rubrique</h2>
                </div>
                @if ($domaines->isEmpty())
                    <p class="soon">Aucune rubrique créée pour l'instant.</p>
                @else
                    <div class="donut"><svg viewBox="0 0 42 42" id="donut" role="img"
                            aria-label="Répartition des articles par rubrique"></svg>
                        <ul id="dl"></ul>
                    </div>
                @endif
            </div>
            <div class="card">
                <div class="ch">
                    <h2>Fréquentation du site</h2>
                </div>
                <p class="soon">Bientôt disponible — nécessite la mise en place des statistiques de visite.</p>
            </div>
            <div class="card">
                <div class="ch">
                    <h2>Activité de l'équipe</h2>
                </div>
                <p class="soon">Bientôt disponible — nécessite un historique des actions.</p>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script>
        @php
            $donutData = $domaines->map(fn($d) => ['name' => $d->name, 'count' => $d->articles_count])->values();
        @endphp
        const domaines = @json($donutData);
        const totalArticles = {{ $totalArticles }};
        const palette = ['--c1', '--c2', '--c3', '--c4'];
        const $ = s => document.querySelector(s);

        if (domaines.length) {
            let off = 25,
                h = '';
            domaines.forEach((d, i) => {
                const pct = Math.round((d.count / totalArticles) * 100);
                const color = palette[i % palette.length];
                h +=
                `<circle cx="21" cy="21" r="15.9155" fill="none" stroke="var(${color})" stroke-width="6" stroke-dasharray="${pct} ${100-pct}" stroke-dashoffset="${off}"/>`;
                off -= pct;
            });
            $('#donut').innerHTML = h +
                `<text x="21" y="22.6" text-anchor="middle" font-size="6.5" font-weight="700" fill="var(--ink)">${totalArticles}</text>`;
            $('#dl').innerHTML = domaines.map((d, i) =>
                    `<li><i style="background:var(${palette[i % palette.length]})"></i>${d.name}<b>${d.count}</b></li>`)
                .join('');
        }

        let currentStatus = 'all';

        function applyFilter() {
            const q = $('#q').value.toLowerCase();
            let visible = 0;
            document.querySelectorAll('#rows tr').forEach(tr => {
                const matchesStatus = currentStatus === 'all' || tr.dataset.status === currentStatus;
                const matchesSearch = tr.textContent.toLowerCase().includes(q);
                const show = matchesStatus && matchesSearch;
                tr.hidden = !show;
                if (show) visible++;
            });
            const none = $('#none');
            if (none) none.hidden = visible > 0;
        }
        document.querySelectorAll('#flt button').forEach(b => b.onclick = () => {
            document.querySelectorAll('#flt button').forEach(x => x.classList.remove('on'));
            b.classList.add('on');
            currentStatus = b.dataset.s;
            applyFilter();
        });
        if ($('#q')) $('#q').oninput = applyFilter;
    </script>
@endsection
