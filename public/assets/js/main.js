/* ==========================================================================
   ONFP — Scripts communs (sans dépendance)
   Menu mobile, recherche, carrousel, onglets, filtres du catalogue,
   carte des pôles, validation des formulaires, retour en haut, cookies.
   ========================================================================== */
(function () {
  'use strict';
  const $ = (s, c = document) => c.querySelector(s);
  const $$ = (s, c = document) => Array.from(c.querySelectorAll(s));

  /* ---- Année dans le pied de page ---- */
  $$('[data-year]').forEach(el => { el.textContent = new Date().getFullYear(); });

  /* ---- Menu mobile (tiroir) ---- */
  const drawer = $('#drawer');
  const openDrawer = () => { drawer.classList.add('open'); drawer.setAttribute('aria-hidden', 'false'); $('.burger').setAttribute('aria-expanded', 'true'); document.body.style.overflow = 'hidden'; $('a', drawer.querySelector('.panel')).focus(); };
  const closeDrawer = () => { drawer.classList.remove('open'); drawer.setAttribute('aria-hidden', 'true'); $('.burger').setAttribute('aria-expanded', 'false'); document.body.style.overflow = ''; };
  if (drawer) {
    $('.burger').addEventListener('click', openDrawer);
    $$('[data-close-drawer]', drawer).forEach(b => b.addEventListener('click', closeDrawer));
  }

  /* ---- Recherche ---- */
  const search = $('#search-overlay');
  if (search) {
    $$('[data-open-search]').forEach(b => b.addEventListener('click', () => { search.classList.add('open'); $('input', search).focus(); }));
    $('.close', search).addEventListener('click', () => search.classList.remove('open'));
  }
  document.addEventListener('keydown', e => {
    if (e.key === 'Escape') { if (search) search.classList.remove('open'); if (drawer && drawer.classList.contains('open')) closeDrawer(); }
  });

  /* ---- Carrousel du héros ---- */
  const slides = $$('.hero-slide');
  if (slides.length > 1) {
    const dotsWrap = $('.slide-dots');
    let i = 0, timer;
    slides.forEach((_, k) => {
      const b = document.createElement('button');
      b.type = 'button'; b.setAttribute('role', 'tab');
      b.setAttribute('aria-label', 'Annonce ' + (k + 1));
      b.addEventListener('click', () => { go(k); restart(); });
      dotsWrap.appendChild(b);
    });
    const go = k => {
      i = k;
      slides.forEach((s, n) => s.classList.toggle('active', n === k));
      $$('button', dotsWrap).forEach((d, n) => d.setAttribute('aria-selected', n === k ? 'true' : 'false'));
    };
    const restart = () => { clearInterval(timer); timer = setInterval(() => go((i + 1) % slides.length), 7000); };
    go(0); restart();
    $('.hero-slides').addEventListener('mouseenter', () => clearInterval(timer));
    $('.hero-slides').addEventListener('mouseleave', restart);
  }

  /* ---- Onglets accessibles ---- */
  $$('.tabs').forEach(t => {
    const tabs = $$('[role="tab"]', t);
    const select = tab => {
      tabs.forEach(x => {
        const on = x === tab;
        x.setAttribute('aria-selected', on); x.tabIndex = on ? 0 : -1;
        $('#' + x.getAttribute('aria-controls')).hidden = !on;
      });
    };
    tabs.forEach((tab, k) => {
      tab.addEventListener('click', () => select(tab));
      tab.addEventListener('keydown', e => {
        if (e.key === 'ArrowRight') { tabs[(k + 1) % tabs.length].focus(); select(tabs[(k + 1) % tabs.length]); }
        if (e.key === 'ArrowLeft') { tabs[(k - 1 + tabs.length) % tabs.length].focus(); select(tabs[(k - 1 + tabs.length) % tabs.length]); }
      });
    });
    const hash = location.hash.slice(1);
    const fromHash = tabs.find(x => x.getAttribute('aria-controls') === hash);
    select(fromHash || tabs[0]);
  });

  /* ---- Filtres génériques (catalogue, actualités, marchés, documents) ----
     Conteneur [data-filter-list] ; éléments [data-item] portant des data-*.
     Contrôles [data-filter="clé"] (select/input) ; puces [data-chip="clé:valeur"]. */
  $$('[data-filter-scope]').forEach(scope => {
    const list = $('[data-filter-list]', scope);
    if (!list) return;
    const items = $$('[data-item]', list);
    const count = $('[data-results-count]', scope);
    const empty = $('.empty-state', scope);
    const state = {};
    const norm = s => (s || '').toString().toLowerCase().normalize('NFD').replace(/[̀-ͯ]/g, '');
    const apply = () => {
      let n = 0;
      items.forEach(it => {
        let ok = true;
        for (const [k, v] of Object.entries(state)) {
          if (!v) continue;
          if (k === 'q') { if (!norm(it.textContent).includes(norm(v))) ok = false; }
          else if (!(it.dataset[k] || '').split(' ').includes(v)) ok = false;
        }
        it.hidden = !ok; if (ok) n++;
      });
      if (count) count.textContent = n + (n > 1 ? ' résultats' : ' résultat');
      if (empty) empty.style.display = n ? 'none' : 'block';
    };
    $$('[data-filter]', scope).forEach(c => {
      const ev = c.tagName === 'SELECT' ? 'change' : 'input';
      c.addEventListener(ev, () => { state[c.dataset.filter] = c.value.trim(); apply(); });
    });
    $$('[data-chip]', scope).forEach(b => b.addEventListener('click', () => {
      const [k, v] = b.dataset.chip.split(':');
      $$('[data-chip^="' + k + ':"]', scope).forEach(x => x.setAttribute('aria-pressed', x === b ? 'true' : 'false'));
      state[k] = v === 'tous' ? '' : v; apply();
    }));
    $$('[data-reset]', scope).forEach(b => b.addEventListener('click', () => {
      Object.keys(state).forEach(k => delete state[k]);
      $$('[data-filter]', scope).forEach(c => { c.value = ''; });
      $$('[data-chip]', scope).forEach(x => x.setAttribute('aria-pressed', x.dataset.chip.endsWith(':tous') ? 'true' : 'false'));
      apply();
    }));
    // Pré-remplissage depuis l'URL (?domaine=...&q=...)
    const params = new URLSearchParams(location.search);
    params.forEach((v, k) => {
      const c = $('[data-filter="' + k + '"]', scope);
      if (c) { c.value = v; state[k] = v; }
    });
    apply();
  });

  /* ---- Carte interactive des pôles régionaux ---- */
  const poles = $$('.pole');
  if (poles.length) {
    const activate = id => {
      poles.forEach(p => p.classList.toggle('active', p.dataset.pole === id));
      $$('.map-svg .pin').forEach(p => p.classList.toggle('active', p.dataset.pole === id));
    };
    poles.forEach(p => p.addEventListener('click', () => activate(p.dataset.pole)));
    $$('.map-svg .pin').forEach(p => {
      p.addEventListener('click', () => { activate(p.dataset.pole); const t = $('.pole[data-pole="' + p.dataset.pole + '"]'); t && t.scrollIntoView({ behavior: 'smooth', block: 'nearest' }); });
      p.addEventListener('keydown', e => { if (e.key === 'Enter' || e.key === ' ') { e.preventDefault(); p.dispatchEvent(new Event('click')); } });
    });
  }

  /* ---- Validation des formulaires (côté client uniquement) ----
     IMPORTANT : la validation serveur reste obligatoire (voir README). */
  $$('form[data-validate]').forEach(form => {
    form.setAttribute('novalidate', '');
    form.addEventListener('submit', e => {
      let valid = true;
      $$('.field', form).forEach(f => {
        const input = $('input,select,textarea', f);
        if (!input) return;
        const ok = input.checkValidity();
        f.classList.toggle('invalid', !ok);
        if (!ok && valid) { input.focus(); valid = false; }
      });
      if (!valid) { e.preventDefault(); return; }
      if (form.dataset.demo !== undefined) {
        // Mode maquette : pas de backend. À supprimer lors de l'intégration.
        e.preventDefault();
        const ok = $('.alert.success', form.parentElement);
        if (ok) { ok.hidden = false; ok.scrollIntoView({ behavior: 'smooth', block: 'center' }); }
        form.reset();
      }
    });
    $$('input,select,textarea', form).forEach(i => i.addEventListener('input', () => {
      const f = i.closest('.field'); if (f && i.checkValidity()) f.classList.remove('invalid');
    }));
  });

  /* ---- Navigation latérale active au défilement ---- */
  const sideLinks = $$('.side-nav a[href^="#"]');
  if (sideLinks.length && 'IntersectionObserver' in window) {
    const obs = new IntersectionObserver(entries => {
      entries.forEach(en => {
        if (en.isIntersecting) sideLinks.forEach(a => a.classList.toggle('active', a.getAttribute('href') === '#' + en.target.id));
      });
    }, { rootMargin: '-30% 0px -60% 0px' });
    sideLinks.forEach(a => { const t = $(a.getAttribute('href')); t && obs.observe(t); });
  }

  /* ---- Retour en haut ---- */
  const top = $('.to-top');
  if (top) {
    window.addEventListener('scroll', () => top.classList.toggle('show', window.scrollY > 600), { passive: true });
    top.addEventListener('click', () => window.scrollTo({ top: 0, behavior: 'smooth' }));
  }

  /* ---- Bannière cookies ---- */
  const cookie = $('.cookie');
  if (cookie) {
    let seen = false;
    try { seen = localStorage.getItem('onfp-cookies') === '1'; } catch (e) {}
    if (!seen) cookie.classList.add('show');
    $$('[data-cookie-ok]', cookie).forEach(b => b.addEventListener('click', () => {
      try { localStorage.setItem('onfp-cookies', '1'); } catch (e) {}
      cookie.classList.remove('show');
    }));
  }

  /* ---- Partage (article) ---- */
  $$('[data-copy-link]').forEach(b => b.addEventListener('click', e => {
    e.preventDefault();
    if (navigator.clipboard) navigator.clipboard.writeText(location.href).then(() => { b.textContent = 'Lien copié ✓'; });
  }));
})();
