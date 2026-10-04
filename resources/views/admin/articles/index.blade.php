@extends('layout.admin')

@section('title', 'Administration — Articles')
@section('heading', 'Articles')
@section('subtitle')<span id="sub"></span>@endsection

@section('actions')
    <a class="btn" href="{{ route('admin.articles.create') }}">Nouvel article</a>
@endsection

@push('styles')
    <style>
        .btn {
            gap: 6px
        }

        .tabs {
            display: flex;
            gap: 4px;
            border-bottom: 1px solid var(--line);
            margin: -6px -6px 14px;
            padding: 0 6px;
            overflow-x: auto
        }

        .tabs button {
            border: 0;
            background: none;
            padding: 10px 12px;
            color: var(--muted);
            white-space: nowrap;
            border-bottom: 2px solid transparent;
            margin-bottom: -1px
        }

        .tabs button.on {
            color: var(--ink);
            font-weight: 600;
            border-color: var(--accent)
        }

        .tabs b {
            font-weight: 600;
            background: var(--bg);
            border-radius: 9px;
            padding: 0 7px;
            font-size: 12px;
            margin-left: 4px
        }

        .tools input,
        .tools select {
            height: 38px;
            font: inherit;
            color: inherit;
            background: var(--bg);
            border: 1px solid var(--line);
            border-radius: 8px;
            padding: 0 12px
        }

        .tools input {
            flex: 1;
            min-width: 200px
        }

        .bulk {
            display: none;
            align-items: center;
            gap: 8px;
            flex-wrap: wrap;
            background: var(--accent-soft);
            border-radius: 8px;
            padding: 8px 12px;
            margin-bottom: 12px;
            font-size: 14px
        }

        .bulk.show {
            display: flex
        }

        .bulk b {
            margin-right: auto
        }

        .sm {
            height: 32px;
            padding: 0 12px;
            border-radius: 6px;
            border: 1px solid var(--line);
            background: var(--surface);
            font-size: 13px;
            font-weight: 600
        }

        .sm:hover {
            border-color: var(--muted)
        }

        .sm.d {
            color: var(--bad)
        }

        table {
            min-width: 760px
        }

        th {
            white-space: nowrap
        }

        td {
            vertical-align: middle
        }

        tbody tr.sel {
            background: var(--accent-soft)
        }

        td.c,
        th.c {
            width: 36px
        }

        input[type=checkbox] {
            width: 16px;
            height: 16px;
            accent-color: var(--accent);
            cursor: pointer
        }

        td .t {
            max-width: 340px
        }

        td .t:hover {
            color: var(--accent)
        }

        .s-arc {
            background: var(--line);
            color: var(--muted)
        }

        .act {
            display: flex;
            gap: 6px;
            justify-content: flex-end
        }

        .act a,
        .act button {
            padding: 4px 10px;
            border-radius: 6px;
            border: 1px solid var(--line);
            background: none;
            font-size: 13px
        }

        .act a:hover,
        .act button:hover {
            border-color: var(--muted)
        }

        .act .d:hover {
            color: var(--bad);
            border-color: var(--bad)
        }

        .empty {
            padding: 34px 0
        }

        .pg {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 10px;
            margin-top: 14px;
            font-size: 14px;
            color: var(--muted);
            flex-wrap: wrap
        }

        .pg div {
            display: flex;
            gap: 4px
        }

        .pg button {
            min-width: 34px;
            height: 34px;
            border-radius: 6px;
            border: 1px solid var(--line);
            background: var(--surface)
        }

        .pg button.on {
            background: var(--ink);
            color: var(--bg);
            border-color: var(--ink)
        }

        .pg button:disabled {
            opacity: .4;
            cursor: default
        }

        dialog {
            border: 1px solid var(--line);
            border-radius: 12px;
            background: var(--surface);
            color: var(--ink);
            padding: 22px;
            width: min(420px, 92vw)
        }

        dialog::backdrop {
            background: rgba(0, 0, 0, .5)
        }

        dialog p {
            color: var(--muted);
            margin: 8px 0 18px
        }

        dialog div {
            display: flex;
            gap: 8px;
            justify-content: flex-end
        }

        .btn.dg {
            background: var(--bad)
        }

        .btn.gh {
            background: var(--surface);
            color: var(--ink);
            border: 1px solid var(--line)
        }
    </style>
@endpush

@section('content')
    <div class="card">
        <div class="tabs" id="tabs" role="tablist" aria-label="Filtrer par statut"></div>
        <div class="tools">
            <input id="q" type="search" placeholder="Rechercher par titre ou auteur…"
                aria-label="Rechercher un article">
            <select id="cat" aria-label="Rubrique">
                <option value="">Toutes les rubriques</option>
            </select>
            <select id="sort" aria-label="Trier par">
                <option value="new">Plus récents</option>
                <option value="old">Plus anciens</option>
                <option value="views">Plus lus</option>
                <option value="title">Titre (A–Z)</option>
            </select>
        </div>
        <div class="bulk" id="bulk"><b id="bn"></b>
            <button class="sm" data-a="pub">Publier</button><button class="sm" data-a="rev">Envoyer en
                relecture</button>
            <button class="sm" data-a="arc">Archiver</button><button class="sm d" data-a="del">Supprimer</button>
        </div>
        <div class="tw">
            <table>
                <thead>
                    <tr>
                        <th class="c"><input type="checkbox" id="all" aria-label="Tout sélectionner">
                        </th>
                        <th>Titre</th>
                        <th>Auteur</th>
                        <th>Statut</th>
                        <th>Date</th>
                        <th>Lectures</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody id="rows"></tbody>
            </table>
        </div>
        <p class="empty" id="none" hidden>Aucun article ne correspond à ces critères. <a
                href="{{ route('admin.articles.create') }}" style="color:var(--accent);font-weight:600">Rédiger un
                article</a></p>
        <div class="pg" id="pg"></div>
    </div>

    <dialog id="dlg">
        <h2 style="font-size:17px">Supprimer définitivement ?</h2>
        <p id="dmsg"></p>
        <div><button class="btn gh" id="no" type="button">Annuler</button><button class="btn dg" id="yes"
                type="button">Supprimer</button></div>
    </dialog>
@endsection

@push('scripts')
    <script>
        const CREATE_URL = "{{ route('admin.articles.create') }}";

        /* Articles réels, préparés par ArticleController@index : id, t (titre), r (rubrique), a (auteur),
           s (pub/rev/sch/dra/arc), d (date AAAA-MM-JJ), v (lectures).
           Js::from échappe correctement le JSON pour qu'un titre ne puisse pas casser la page. */
        let articles = {{ \Illuminate\Support\Js::from($articles) }};

        const SL = {
                pub: 'Publié',
                rev: 'En relecture',
                sch: 'Planifié',
                dra: 'Brouillon',
                arc: 'Archivé'
            },
            PER = 8;
        let st = 'all',
            page = 1,
            sel = new Set(),
            pending = null;

        /* Échappe le texte venant de la base avant de l'injecter dans le HTML */
        const esc = s => String(s == null ? '' : s).replace(/[&<>"']/g, c => ({
            '&': '&amp;',
            '<': '&lt;',
            '>': '&gt;',
            '"': '&quot;',
            "'": '&#39;'
        } [c]));
        const day = d => d ? new Date(d + 'T00:00').toLocaleDateString('fr-FR', {
            day: 'numeric',
            month: 'short',
            year: 'numeric'
        }) : '—';

        [...new Set(articles.map(o => o.r))].sort().forEach(c => $('#cat').insertAdjacentHTML('beforeend',
            '<option>' + esc(c) + '</option>'));

        function filtered() {
            const q = $('#q').value.toLowerCase(),
                c = $('#cat').value,
                so = $('#sort').value;
            const r = articles.filter(o => (st === 'all' || o.s === st) && (!c || o.r === c) && (o.t + ' ' + o.a)
                .toLowerCase()
                .includes(q));
            const cmp = {
                new: (a, b) => (b.d || '').localeCompare(a.d || ''),
                old: (a, b) => (a.d || '9').localeCompare(b.d || '9'),
                views: (a, b) => b.v - a.v,
                title: (a, b) => a.t.localeCompare(b.t, 'fr')
            } [so];
            return r.sort(cmp)
        }

        /* Pagination construite par concaténation (évite les gabarits imbriqués que certains formateurs de code abîment) */
        function pager(list, pages) {
            if (!list.length) return '';
            let h = '<span>' + ((page - 1) * PER + 1) + '–' + Math.min(page * PER, list.length) + ' sur ' + list.length +
                '</span><div>';
            h += '<button data-p="' + (page - 1) + '"' + (page < 2 ? ' disabled' : '') +
                ' aria-label="Page précédente">‹</button>';
            for (let i = 1; i <= pages; i++) {
                h += '<button data-p="' + i + '"' + (i === page ? ' class="on"' : '') + '>' + i + '</button>';
            }
            h += '<button data-p="' + (page + 1) + '"' + (page >= pages ? ' disabled' : '') +
                ' aria-label="Page suivante">›</button></div>';
            return h
        }

        function render() {
            /* onglets */
            const cnt = k => k === 'all' ? articles.length : articles.filter(o => o.s === k).length;
            $('#tabs').innerHTML = [
                    ['all', 'Tous'],
                    ['pub', 'Publiés'],
                    ['rev', 'En relecture'],
                    ['sch', 'Planifiés'],
                    ['dra', 'Brouillons'],
                    ['arc', 'Archivés']
                ]
                .map(([k, l]) =>
                    '<button role="tab" aria-selected="' + (k === st) + '" data-s="' + k + '" class="' + (k === st ? 'on' :
                        '') + '">' + l + '<b>' + cnt(k) + '</b></button>'
                ).join('');
            $('#sub').textContent = fmt(articles.length) + (articles.length > 1 ? ' articles au total' :
                ' article au total');
            $('#navn').textContent = cnt('rev');
            /* lignes */
            const list = filtered(),
                pages = Math.max(1, Math.ceil(list.length / PER));
            if (page > pages) page = pages;
            const slice = list.slice((page - 1) * PER, page * PER);
            $('#rows').innerHTML = slice.map(o =>
                '<tr class="' + (sel.has(o.id) ? 'sel' : '') + '">' +
                '<td class="c"><input type="checkbox" data-id="' + o.id + '"' + (sel.has(o.id) ? ' checked' : '') +
                ' aria-label="Sélectionner ' + esc(o.t) + '"></td>' +
                '<td><a class="t" href="' + CREATE_URL + '">' + esc(o.t) + '</a><small>' + esc(o.r) + '</small></td>' +
                '<td>' + esc(o.a) + '</td>' +
                '<td><span class="tag s-' + o.s + '">' + SL[o.s] + '</span></td>' +
                '<td>' + day(o.d) + '</td>' +
                '<td>' + (o.v ? fmt(o.v) : '—') + '</td>' +
                '<td><div class="act"><a href="' + CREATE_URL + '">Modifier</a><button class="d" data-del="' + o.id +
                '">Supprimer</button></div></td></tr>'
            ).join('');
            $('#none').hidden = list.length > 0;
            $('.tw').hidden = !list.length;
            /* sélection */
            const ids = slice.map(o => o.id),
                n = sel.size;
            $('#all').checked = ids.length > 0 && ids.every(i => sel.has(i));
            $('#all').indeterminate = !$('#all').checked && ids.some(i => sel.has(i));
            $('#bulk').classList.toggle('show', n > 0);
            $('#bn').textContent = n + (n > 1 ? ' articles sélectionnés' : ' article sélectionné');
            /* pagination */
            $('#pg').innerHTML = pager(list, pages);
        }

        /* événements */
        $('#tabs').onclick = e => {
            const b = e.target.closest('button');
            if (b) {
                st = b.dataset.s;
                page = 1;
                render()
            }
        };
        ['#q', '#cat', '#sort'].forEach(s => $(s).addEventListener(s === '#q' ? 'input' : 'change', () => {
            page = 1;
            render()
        }));
        $('#pg').onclick = e => {
            const b = e.target.closest('button');
            if (b && !b.disabled) {
                page = +b.dataset.p;
                render()
            }
        };
        $('#rows').onclick = e => {
            const c = e.target.closest('[data-id]');
            if (c) {
                c.checked ? sel.add(+c.dataset.id) : sel.delete(+c.dataset.id);
                render();
                return
            }
            const d = e.target.closest('[data-del]');
            if (d) ask([+d.dataset.del])
        };
        $('#all').onchange = e => {
            const list = filtered().slice((page - 1) * PER, page * PER);
            list.forEach(o => e.target.checked ? sel.add(o.id) : sel.delete(o.id));
            render()
        };
        $('#bulk').onclick = e => {
            const b = e.target.closest('[data-a]');
            if (!b) return;
            const a = b.dataset.a,
                ids = [...sel];
            if (a === 'del') return ask(ids);
            const today = new Date().toISOString().slice(0, 10);
            articles.forEach(o => {
                if (sel.has(o.id)) {
                    o.s = a;
                    if (a === 'pub' && !o.d) o.d = today
                }
            });
            toast(ids.length + (ids.length > 1 ? ' articles mis à jour' : ' article mis à jour') + ' : ' + SL[a]
                .toLowerCase());
            sel.clear();
            render()
        };

        function ask(ids) {
            pending = ids;
            $('#dmsg').textContent = ids.length > 1 ?
                'Les ' + ids.length + ' articles sélectionnés seront supprimés. Cette action est irréversible.' :
                'Cet article sera supprimé. Cette action est irréversible.';
            $('#dlg').showModal()
        }
        $('#no').onclick = () => $('#dlg').close();
        $('#yes').onclick = () => {
            articles = articles.filter(o => !pending.includes(o.id));
            pending.forEach(i => sel.delete(i));
            $('#dlg').close();
            toast('Suppression effectuée');
            render()
        };

        render();
    </script>
@endpush
