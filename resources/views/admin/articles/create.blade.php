@extends('layout.admin')

@section('title', 'Administration — Nouvel article')
@section('heading', 'Nouvel article')
@section('subtitle')<span id="saved">Non enregistré</span>@endsection

{{-- Les boutons restent dans le header du layout et pilotent le formulaire via l'attribut form="form" --}}
@section('actions')
    <button type="button" class="btn" id="preview">Aperçu</button>
    <button type="button" class="btn" id="draft">Enregistrer le brouillon</button>
    <button type="submit" class="btn p" id="pub" form="form">Publier</button>
@endsection

@push('styles')
    <style>
        .btn {
            color: var(--ink);
            border: 1px solid var(--line);
            background: var(--surface)
        }

        .btn:hover {
            filter: none;
            border-color: var(--muted)
        }

        .btn.p {
            background: var(--accent);
            border-color: var(--accent);
            color: #fff
        }

        .btn.p:hover {
            filter: brightness(.92)
        }

        .layout {
            display: grid;
            grid-template-columns: 1fr 320px;
            gap: 18px;
            align-items: start
        }

        .col {
            display: grid;
            gap: 16px;
            min-width: 0
        }

        .card>h2 {
            font-size: 15px;
            margin-bottom: 14px
        }

        .f {
            display: grid;
            gap: 6px;
            margin-bottom: 14px
        }

        .f:last-child {
            margin-bottom: 0
        }

        label,
        .lb {
            font-size: 14px;
            font-weight: 600
        }

        .hint {
            font-size: 12px;
            color: var(--muted);
            font-weight: 400
        }

        .row {
            display: flex;
            justify-content: space-between;
            gap: 8px;
            align-items: baseline
        }

        input[type=text],
        input[type=url],
        input[type=date],
        input[type=time],
        input[type=password],
        select,
        textarea {
            width: 100%;
            font: inherit;
            color: inherit;
            background: var(--bg);
            border: 1px solid var(--line);
            border-radius: 8px;
            padding: 9px 12px
        }

        input:focus,
        select:focus,
        textarea:focus {
            outline: 2px solid var(--accent);
            outline-offset: -1px;
            border-color: transparent
        }

        .title {
            font-size: 22px;
            font-weight: 700;
            padding: 12px 14px
        }

        textarea {
            resize: vertical;
            min-height: 84px
        }

        .err {
            color: var(--bad);
            font-size: 13px;
            display: none
        }

        .bad input,
        .bad textarea,
        .bad .ed {
            border-color: var(--bad)
        }

        .bad .err {
            display: block
        }

        .slug {
            display: flex;
            align-items: center;
            background: var(--bg);
            border: 1px solid var(--line);
            border-radius: 8px;
            padding-left: 12px;
            color: var(--muted);
            font-size: 14px
        }

        .slug input {
            border: 0;
            background: none;
            padding-left: 0
        }

        .slug input:focus {
            outline: 0
        }

        .tb {
            display: flex;
            flex-wrap: wrap;
            gap: 2px;
            padding: 6px;
            border: 1px solid var(--line);
            border-bottom: 0;
            border-radius: 8px 8px 0 0;
            background: var(--bg)
        }

        .tb button {
            min-width: 34px;
            height: 32px;
            border: 0;
            background: none;
            border-radius: 6px;
            font-size: 14px
        }

        .tb button:hover {
            background: var(--line)
        }

        .tb i {
            width: 1px;
            background: var(--line);
            margin: 4px 4px
        }

        .ed {
            min-height: 320px;
            border: 1px solid var(--line);
            border-radius: 0 0 8px 8px;
            padding: 16px;
            outline: 0;
            background: var(--surface);
            line-height: 1.7
        }

        .ed:focus {
            border-color: var(--accent)
        }

        .ed:empty::before {
            content: attr(data-ph);
            color: var(--muted)
        }

        .ed h2 {
            font-size: 22px;
            margin: .6em 0 .3em
        }

        .ed h3 {
            font-size: 18px;
            margin: .6em 0 .3em
        }

        .ed blockquote {
            border-left: 3px solid var(--accent);
            padding-left: 14px;
            color: var(--muted);
            margin: .8em 0
        }

        .ed a {
            color: var(--c2);
            text-decoration: underline
        }

        .ed ul,
        .ed ol {
            padding-left: 24px
        }

        .stats {
            display: flex;
            justify-content: space-between;
            font-size: 13px;
            color: var(--muted);
            margin-top: 8px
        }

        .drop {
            border: 2px dashed var(--line);
            border-radius: 10px;
            padding: 26px 14px;
            text-align: center;
            color: var(--muted);
            cursor: pointer;
            display: block;
            font-weight: 400
        }

        .drop:hover,
        .drop.over {
            border-color: var(--accent);
            background: var(--accent-soft);
            color: var(--ink)
        }

        .drop input {
            display: none
        }

        .prev {
            position: relative;
            display: none
        }

        .prev img {
            width: 100%;
            aspect-ratio: 16/9;
            object-fit: cover;
            border-radius: 8px;
            display: block
        }

        .prev button {
            position: absolute;
            top: 8px;
            right: 8px;
            background: rgba(0, 0, 0, .65);
            color: #fff;
            border: 0;
            border-radius: 6px;
            padding: 4px 10px;
            font-size: 13px
        }

        .seg {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 4px;
            background: var(--bg);
            padding: 3px;
            border-radius: 8px
        }

        .seg label {
            margin: 0;
            text-align: center;
            padding: 6px 4px;
            border-radius: 6px;
            font-size: 13px;
            font-weight: 500;
            color: var(--muted);
            cursor: pointer
        }

        .seg input {
            position: absolute;
            opacity: 0
        }

        .seg input:checked+span {
            color: var(--ink)
        }

        .seg label:has(input:checked) {
            background: var(--surface);
            color: var(--ink);
            font-weight: 600;
            box-shadow: 0 1px 2px rgba(0, 0, 0, .15)
        }

        .seg label:has(input:focus-visible) {
            outline: 2px solid var(--accent)
        }

        .two {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 8px
        }

        .chips {
            display: flex;
            flex-wrap: wrap;
            gap: 6px;
            padding: 6px;
            background: var(--bg);
            border: 1px solid var(--line);
            border-radius: 8px
        }

        .chips:focus-within {
            outline: 2px solid var(--accent);
            outline-offset: -1px
        }

        .chip {
            background: var(--accent-soft);
            color: var(--accent);
            border-radius: 14px;
            padding: 2px 4px 2px 10px;
            font-size: 13px;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 4px
        }

        .chip button {
            border: 0;
            background: none;
            color: inherit;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            line-height: 1
        }

        .chips input {
            border: 0 !important;
            background: none !important;
            flex: 1;
            min-width: 90px;
            padding: 4px !important;
            outline: 0 !important
        }

        .sw {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 10px;
            padding: 8px 0
        }

        .sw b {
            display: block;
            font-size: 14px
        }

        .sw span {
            font-size: 12px;
            color: var(--muted)
        }

        .sw input {
            appearance: none;
            width: 40px;
            height: 22px;
            background: var(--line);
            border-radius: 11px;
            position: relative;
            cursor: pointer;
            flex: none;
            transition: .2s
        }

        .sw input::after {
            content: "";
            position: absolute;
            top: 3px;
            left: 3px;
            width: 16px;
            height: 16px;
            border-radius: 50%;
            background: #fff;
            transition: .2s
        }

        .sw input:checked {
            background: var(--ok)
        }

        .sw input:checked::after {
            left: 21px
        }

        .gp {
            border: 1px solid var(--line);
            border-radius: 8px;
            padding: 12px 14px;
            margin-bottom: 14px;
            background: var(--surface)
        }

        .gp small {
            color: var(--ok);
            font-size: 13px;
            display: block;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap
        }

        .gp b {
            display: block;
            color: #1a4fc4;
            font-size: 18px;
            font-weight: 400
        }

        :root[data-theme=dark] .gp b {
            color: #8ab4ff
        }

        .gp p {
            font-size: 14px;
            color: var(--muted)
        }

        .meter {
            height: 4px;
            background: var(--line);
            border-radius: 2px;
            overflow: hidden
        }

        .meter div {
            height: 100%;
            width: 0;
            background: var(--ok);
            transition: width .2s
        }

        .meter.warn div {
            background: #e8a317
        }

        .meter.over div {
            background: var(--bad)
        }

        @media(max-width:1000px) {
            .layout {
                grid-template-columns: 1fr
            }
        }
    </style>
@endpush

@section('content')
    <form id="form" method="POST" action="{{ route('admin.articles.store') }}" enctype="multipart/form-data"
        novalidate>
        @csrf
        <div class="layout">
            <div class="col">
                <div class="card">
                    <div class="f" data-f="title"><label for="title">Titre de l'article</label>
                        <input class="title" id="title" name="title" type="text"
                            placeholder="Un titre clair et accrocheur" maxlength="120" autocomplete="off">
                        <span class="err">Le titre est obligatoire.</span>
                    </div>
                    <div class="f"><label for="slug">Adresse de l'article (slug)</label>
                        <div class="slug">/blog/<input id="slug" name="slug" type="text" aria-label="Slug">
                        </div>
                    </div>
                    <div class="f" data-f="body"><span class="lb">Contenu</span>
                        <div>
                            <div class="tb" role="toolbar" aria-label="Mise en forme">
                                <button type="button" data-c="bold" title="Gras"><b>G</b></button>
                                <button type="button" data-c="italic" title="Italique"><i
                                        style="font-style:italic">I</i></button>
                                <button type="button" data-c="underline" title="Souligné"><u>S</u></button><i></i>
                                <button type="button" data-b="h2" title="Titre 2">H2</button>
                                <button type="button" data-b="h3" title="Titre 3">H3</button>
                                <button type="button" data-b="p" title="Paragraphe">¶</button><i></i>
                                <button type="button" data-c="insertUnorderedList" title="Liste à puces">•
                                    Liste</button>
                                <button type="button" data-c="insertOrderedList" title="Liste numérotée">1.
                                    Liste</button>
                                <button type="button" data-b="blockquote" title="Citation">❝</button><i></i>
                                <button type="button" id="lnk" title="Lien">Lien</button>
                                <button type="button" data-c="removeFormat"
                                    title="Effacer la mise en forme">Effacer</button>
                                <button type="button" data-c="undo" title="Annuler">↶</button>
                                <button type="button" data-c="redo" title="Rétablir">↷</button>
                            </div>
                            <div class="ed" id="ed" contenteditable="true" role="textbox" aria-multiline="true"
                                aria-label="Contenu de l'article" data-ph="Écrivez votre article ici…"></div>
                            <div class="stats"><span id="wc">0 mot</span><span id="rt">Lecture : 0
                                    min</span></div>
                        </div>
                        <input type="hidden" name="body" id="body"><span class="err">Le contenu ne
                            peut pas être vide.</span>
                    </div>
                    <div class="f">
                        <div class="row"><label for="exc">Extrait</label><span class="hint" id="excn">0 /
                                200</span></div>
                        <textarea id="exc" name="excerpt" maxlength="200"
                            placeholder="Un résumé court affiché dans la liste des articles"></textarea>
                    </div>
                </div>

                <div class="card">
                    <h2>Référencement (SEO)</h2>
                    <div class="gp" aria-label="Aperçu Google"><small id="gu">monsite.com ›
                            blog</small><b id="gt">Titre de l'article</b>
                        <p id="gd">La description de votre article apparaîtra ici.</p>
                    </div>
                    <div class="f">
                        <div class="row"><label for="mt">Titre SEO</label><span class="hint" id="mtn">0
                                / 60</span></div>
                        <input id="mt" name="meta_title" type="text"
                            placeholder="Laissez vide pour reprendre le titre">
                        <div class="meter" id="mtm">
                            <div></div>
                        </div>
                    </div>
                    <div class="f">
                        <div class="row"><label for="md">Description SEO</label><span class="hint"
                                id="mdn">0 / 160</span></div>
                        <textarea id="md" name="meta_description" style="min-height:70px"
                            placeholder="Laissez vide pour reprendre l'extrait"></textarea>
                        <div class="meter" id="mdm">
                            <div></div>
                        </div>
                    </div>
                    <div class="f"><label for="can">URL canonique <span
                                class="hint">(facultatif)</span></label>
                        <input id="can" name="canonical" type="url" placeholder="https://">
                    </div>
                    <div class="sw">
                        <div><b>Indexation par les moteurs de recherche</b><span>Désactivez pour masquer l'article
                                de Google</span></div><input type="checkbox" name="index" checked
                            aria-label="Autoriser l'indexation">
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <h2>Publication</h2>
                    <div class="f"><span class="lb">Statut</span>
                        <div class="seg" role="radiogroup">
                            <label><input type="radio" name="status" value="draft" checked>Brouillon</label>
                            <label><input type="radio" name="status" value="review">En relecture</label>
                            <label><input type="radio" name="status" value="published">Publié</label>
                            <label><input type="radio" name="status" value="scheduled">Planifié</label>
                        </div>
                    </div>
                    <div class="f" id="sched" hidden data-f="date"><span class="lb">Date et heure
                            de publication</span>
                        <div class="two"><input type="date" id="dt" name="date"
                                aria-label="Date"><input type="time" id="tm" name="time"
                                aria-label="Heure" value="09:00"></div>
                        <span class="err">Choisissez une date future.</span>
                    </div>
                    <div class="f"><label for="vis">Visibilité</label>
                        <select id="vis" name="visibility">
                            <option value="public">Publique</option>
                            <option value="private">Privée (administrateurs)</option>
                            <option value="password">Protégée par mot de passe</option>
                        </select>
                    </div>
                    <div class="f" id="pw" hidden data-f="pw"><label for="pwi">Mot de
                            passe</label><input type="password" id="pwi" name="password"
                            autocomplete="new-password"><span class="err">Saisissez un mot de passe.</span>
                    </div>
                    <div class="sw">
                        <div><b>Article à la une</b><span>Mis en avant sur l'accueil</span></div><input type="checkbox"
                            name="featured" aria-label="Article à la une">
                    </div>
                    <div class="sw">
                        <div><b>Autoriser les commentaires</b><span>Les lecteurs peuvent réagir</span></div><input
                            type="checkbox" name="comments" checked aria-label="Autoriser les commentaires">
                    </div>
                </div>

                <div class="card">
                    <h2>Image à la une</h2>
                    <label class="drop" id="drop" for="img">Glissez une image ici<br>ou cliquez pour
                        parcourir<br><span class="hint">JPG, PNG ou WebP, 2 Mo maximum</span>
                        <input type="file" id="img" name="image"
                            accept="image/jpeg,image/png,image/webp"></label>
                    <div class="prev" id="prev"><img id="pi" alt="Image à la une sélectionnée"><button
                            type="button" id="rm">Retirer</button></div>
                    <div class="f" style="margin-top:14px"><label for="alt">Texte
                            alternatif</label><input id="alt" name="image_alt" type="text"
                            placeholder="Décrivez l'image"></div>
                    <span class="err" id="imgerr" style="margin-top:6px"></span>
                </div>

                <div class="card">
                    <h2>Document joint</h2>
                    <div class="f"><label for="doc">Fichier à télécharger <span
                                class="hint">(facultatif)</span></label>
                        <input type="file" id="doc" name="document" accept=".pdf,.doc,.docx,.xls,.xlsx">
                        <span class="hint">PDF, Word ou Excel, 10 Mo maximum. Idéal pour un rapport ou un
                            communiqué.</span>
                        <span class="err" id="docerr"></span>
                    </div>
                </div>

                <div class="card">
                    <h2>Classement</h2>
                    <div class="f"><label for="cat">Catégorie</label>
                        <select id="cat" name="category">
                            <option value="">Choisir…</option>
                            <option>Actualités</option>
                            <option>Communiqués</option>
                            <option>Événements</option>
                            <option>Rapports et publications</option>
                            <option>Discours et interviews</option>
                            <option>Appels et recrutements</option>
                        </select>
                    </div>
                    <div class="f"><label for="tg">Mots-clés <span class="hint">Entrée ou virgule
                                pour ajouter</span></label>
                        <div class="chips" id="chips"><input id="tg" type="text"
                                placeholder="Ajouter un mot-clé" autocomplete="off"></div>
                    </div>
                    <div class="f"><label for="au">Auteur</label>
                        <select id="au" name="author">
                            <option>{{ Auth::user()->name }}</option>
                            <option>Awa Diallo</option>
                            <option>Moussa Ndiaye</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection

@push('scripts')
    <script>
        const ed = $('#ed');
        let tags = [],
            slugEdited = false,
            imgData = '';
        const slugify = s => s.normalize('NFD').replace(/[̀-ͯ]/g, '').toLowerCase().replace(/[^a-z0-9]+/g, '-')
            .replace(/^-+|-+$/g, '');
        const status = () => document.querySelector('[name=status]:checked').value;

        /* Titre -> slug */
        $('#title').oninput = e => {
            if (!slugEdited) $('#slug').value = slugify(e.target.value);
            seo()
        };
        $('#slug').oninput = e => {
            slugEdited = true;
            e.target.value = slugify(e.target.value);
            seo()
        };

        /* Éditeur */
        document.querySelectorAll('[data-c]').forEach(b => b.onclick = () => {
            ed.focus();
            document.execCommand(b.dataset.c);
            count()
        });
        document.querySelectorAll('[data-b]').forEach(b => b.onclick = () => {
            ed.focus();
            document.execCommand('formatBlock', false, b.dataset.b);
            count()
        });
        $('#lnk').onclick = () => {
            const u = prompt('Adresse du lien (https://…)');
            if (u && /^(https?:|mailto:)/i.test(u)) {
                ed.focus();
                document.execCommand('createLink', false, u)
            } else if (u) toast('Le lien doit commencer par https://')
        };
        ed.addEventListener('paste', e => {
            e.preventDefault();
            document.execCommand('insertText', false, e.clipboardData.getData('text/plain'))
        });

        function count() {
            const t = ed.innerText.trim(),
                n = t ? t.split(/\s+/).length : 0;
            $('#wc').textContent = n + (n > 1 ? ' mots' : ' mot');
            $('#rt').textContent = 'Lecture : ' + Math.max(n ? 1 : 0, Math.round(n / 220)) + ' min'
        }
        ed.oninput = count;

        /* Compteurs et SEO */
        function meter(id, len, max, warn) {
            const m = $(id);
            m.className = 'meter' + (len > max ? ' over' : len >= warn ? ' warn' : '');
            m.firstElementChild.style.width = Math.min(len / max * 100, 100) + '%'
        }

        function seo() {
            const t = $('#mt').value || $('#title').value || "Titre de l'article",
                d = $('#md').value || $('#exc').value || 'La description de votre article apparaîtra ici.';
            $('#gt').textContent = t.slice(0, 70);
            $('#gd').textContent = d.slice(0, 170);
            $('#gu').textContent = 'monsite.com › blog › ' + ($('#slug').value || 'article');
            $('#mtn').textContent = $('#mt').value.length + ' / 60';
            meter('#mtm', $('#mt').value.length, 60, 45);
            $('#mdn').textContent = $('#md').value.length + ' / 160';
            meter('#mdm', $('#md').value.length, 160, 120);
            $('#excn').textContent = $('#exc').value.length + ' / 200'
        }
        ['#mt', '#md', '#exc'].forEach(s => $(s).oninput = seo);
        seo();

        /* Statut et visibilité */
        document.querySelectorAll('[name=status]').forEach(r => r.onchange = () => {
            $('#sched').hidden = status() !== 'scheduled';
            $('#pub').textContent = {
                draft: 'Publier',
                review: 'Soumettre à la relecture',
                published: 'Publier',
                scheduled: 'Planifier'
            } [status()]
        });
        $('#vis').onchange = e => $('#pw').hidden = e.target.value !== 'password';
        $('#dt').min = new Date().toISOString().slice(0, 10);

        /* Image */
        function setImg(f) {
            const er = $('#imgerr');
            er.style.display = 'none';
            if (!f) return;
            if (!/^image\/(jpeg|png|webp)$/.test(f.type)) {
                er.textContent = 'Format non pris en charge.';
                er.style.display = 'block';
                $('#img').value = '';
                return
            }
            if (f.size > 2 * 1024 * 1024) {
                er.textContent = 'Image trop lourde (2 Mo maximum).';
                er.style.display = 'block';
                $('#img').value = '';
                return
            }
            const r = new FileReader();
            r.onload = () => {
                imgData = r.result;
                $('#pi').src = imgData;
                $('#prev').style.display = 'block';
                $('#drop').style.display = 'none'
            };
            r.readAsDataURL(f)
        }
        $('#img').onchange = e => setImg(e.target.files[0]);
        $('#rm').onclick = () => {
            imgData = '';
            $('#img').value = '';
            $('#prev').style.display = 'none';
            $('#drop').style.display = 'block'
        };
        const dz = $('#drop');
        ['dragover', 'dragenter'].forEach(v => dz.addEventListener(v, e => {
            e.preventDefault();
            dz.classList.add('over')
        }));
        ['dragleave', 'drop'].forEach(v => dz.addEventListener(v, e => {
            e.preventDefault();
            dz.classList.remove('over')
        }));
        dz.addEventListener('drop', e => {
            const f = e.dataTransfer.files[0];
            if (f) {
                $('#img').files = e.dataTransfer
                .files; /* le fichier déposé doit être dans l'input pour partir avec le formulaire */
                setImg(f)
            }
        });

        /* Document joint */
        $('#doc').onchange = e => {
            const f = e.target.files[0],
                er = $('#docerr');
            er.style.display = 'none';
            if (f && f.size > 10 * 1024 * 1024) {
                er.textContent = 'Fichier trop lourd (10 Mo maximum).';
                er.style.display = 'block';
                e.target.value = ''
            }
        };

        /* Mots-clés */
        function chips() {
            document.querySelectorAll('.chip').forEach(c => c.remove());
            tags.forEach((t, i) => {
                const c = document.createElement('span');
                c.className = 'chip';
                c.textContent = t;
                const b = document.createElement('button');
                b.type = 'button';
                b.textContent = '×';
                b.setAttribute('aria-label', 'Retirer ' + t);
                b.onclick = () => {
                    tags.splice(i, 1);
                    chips()
                };
                c.append(b);
                $('#chips').insertBefore(c, $('#tg'))
            })
        }

        function addTag() {
            const v = $('#tg').value.replace(',', '').trim();
            if (v && !tags.includes(v) && tags.length < 10) {
                tags.push(v);
                chips()
            }
            $('#tg').value = ''
        }
        $('#tg').onkeydown = e => {
            if (e.key === 'Enter' || e.key === ',') {
                e.preventDefault();
                addTag()
            } else if (e.key === 'Backspace' && !$('#tg').value && tags.length) {
                tags.pop();
                chips()
            }
        };
        $('#tg').onblur = addTag;

        /* Validation et envoi */
        function validate(draft) {
            let ok = true;
            const flag = (k, bad) => {
                document.querySelector(`[data-f=${k}]`).classList.toggle('bad', bad);
                if (bad) ok = false
            };
            flag('title', !$('#title').value.trim());
            flag('body', !draft && !ed.innerText.trim());
            flag('date', status() === 'scheduled' && !draft && (!$('#dt').value || new Date($('#dt').value + 'T' + ($('#tm')
                .value || '00:00')) <= new Date()));
            flag('pw', $('#vis').value === 'password' && !$('#pwi').value);
            if (!ok) {
                const f = document.querySelector('.bad');
                f.scrollIntoView({
                    behavior: 'smooth',
                    block: 'center'
                })
            }
            return ok
        }

        /* Envoi réel : le contenu HTML, les mots-clés (tags[]) et le statut final partent avec le formulaire */
        function send(st) {
            $('#body').value = ed.innerHTML;
            document.querySelectorAll('input[name="tags[]"]').forEach(i => i.remove());
            tags.forEach(t => {
                const i = document.createElement('input');
                i.type = 'hidden';
                i.name = 'tags[]';
                i.value = t;
                $('#form').append(i)
            });
            document.querySelector(`[name=status][value=${st}]`).checked = true;
            $('#form').submit()
        }
        $('#form').onsubmit = e => {
            e.preventDefault();
            if (validate(false)) send(status() === 'draft' ? 'published' : status())
        };
        $('#draft').onclick = () => {
            if (validate(true)) send('draft')
        };
        $('#preview').onclick = () => {
            const w = open('', '_blank');
            if (!w) return toast('Autorisez les fenêtres pour voir l\'aperçu');
            const esc = s => s.replace(/[&<>]/g, c => ({
                '&': '&amp;',
                '<': '&lt;',
                '>': '&gt;'
            } [c]));
            w.document.write(
                `<meta charset=utf-8><title>Aperçu</title><body style="font:18px/1.7 Georgia,serif;max-width:700px;margin:40px auto;padding:0 18px">${imgData?`<img src="${imgData}" style="width:100%;border-radius:8px" alt="">`:''}<h1>${esc($('#title').value||'Sans titre')}</h1>${ed.innerHTML}`
            );
            w.document.close()
        };
    </script>
@endpush
