<footer class="site">
    <div class="footer-flag" aria-hidden="true"><i style="background:#00853F"></i><i
            style="background:#FDB913"></i><i style="background:#E4032E"></i></div>
    <div class="container footer-inner">
        <div class="footer-brand">
            <img src="{{ asset('assets/img/logo-onfp-240.webp') }}" alt="Logo ONFP" width="81" height="84">
            <p>Établissement public créé par la loi n°86-44 du 11 août 1986, l'Office National de Formation
                Professionnelle est la référence de la formation professionnelle au Sénégal.</p>
            <div class="socials">
                <a href="#" aria-label="Facebook" title="Facebook — lien à renseigner"><svg viewBox="0 0 24 24"
                        aria-hidden="true">
                        <path
                            d="M14 8h3V4h-3c-2.8 0-4 1.8-4 4.5V11H7v4h3v9h4v-9h3l1-4h-4V8.8c0-.5.3-.8 1-.8Z" />
                    </svg></a>
                <a href="#" aria-label="LinkedIn" title="LinkedIn — lien à renseigner"><svg viewBox="0 0 24 24"
                        aria-hidden="true">
                        <path
                            d="M4 9h4v12H4zM6 3a2 2 0 1 1 0 4 2 2 0 0 1 0-4Zm4 6h3.8v1.7c.6-1 1.9-2 3.9-2 4 0 4.3 2.6 4.3 6V21h-4v-5.6c0-1.4 0-3.1-1.9-3.1s-2.2 1.5-2.2 3V21h-4Z" />
                    </svg></a>
                <a href="#" aria-label="X" title="X — lien à renseigner"><svg viewBox="0 0 24 24"
                        aria-hidden="true">
                        <path
                            d="M17.5 3h3.3l-7.2 8.3L22 21h-6.6l-5.2-6.8L4.3 21H1l7.7-8.8L.8 3h6.8l4.7 6.2Zm-1.2 16h1.8L6.8 4.9H4.9Z" />
                    </svg></a>
                <a href="#" aria-label="YouTube" title="YouTube — lien à renseigner"><svg viewBox="0 0 24 24"
                        aria-hidden="true">
                        <path
                            d="M23 7.2a3 3 0 0 0-2.1-2.1C19 4.6 12 4.6 12 4.6s-7 0-8.9.5A3 3 0 0 0 1 7.2 31 31 0 0 0 .5 12 31 31 0 0 0 1 16.8a3 3 0 0 0 2.1 2.1c1.9.5 8.9.5 8.9.5s7 0 8.9-.5a3 3 0 0 0 2.1-2.1 31 31 0 0 0 .5-4.8 31 31 0 0 0-.5-4.8ZM9.8 15.1V8.9l5.8 3.1Z" />
                    </svg></a>
            </div>
        </div>
        <div class="fcol">
            <h4>L'Office</h4>
            <a href="{{ url('/a-propos') }}">Présentation</a>
            <a href="{{ url('missions')}}">Nos missions</a>
            <a href="{{ url('poles-regionaux') }}">Pôles régionaux</a>
            <a href="{{ url('actualites')}}">Actualités</a>
            <a href="{{ url('marches-publics') }}">Marchés publics</a>
        </div>
        <div class="fcol">
            <h4>Services</h4>
            <a href="{{ url('formations') }}">Catalogue des formations</a>
            <a href="{{ url('inscription') }}">Pré-inscription</a>
            <a href="{{ url('certification') }}">Certification & VAE</a>
            <a href="{{ url('operateurs') }}">Opérateurs de formation</a>
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
            <span><a href="mentions-legales.html">Mentions légales</a><a
                    href="mentions-legales.html#donnees">Données personnelles</a><a href="plan-du-site.html">Plan
                    du site</a></span>
        </div>
    </div>
</footer>

<button class="to-top" type="button" aria-label="Retour en haut de page">↑</button>
<div class="cookie" role="region" aria-label="Cookies">
    <p>Ce site utilise uniquement des cookies techniques nécessaires à son fonctionnement et des mesures d'audience
        anonymisées. <a href="mentions-legales.html#cookies">En savoir plus</a></p>
    <button class="btn btn-solid btn-sm" type="button" data-cookie-ok>J'ai compris</button>
</div>
<script src="{{ asset('assets/js/main.js') }}" defer></script>
