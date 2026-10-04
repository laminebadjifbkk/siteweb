<x-auth-layout title="Inscription" heading="Créer un compte" subtitle="Renseignez vos informations pour accéder à l'administration.">
    <form method="POST" action="{{ route('register') }}" data-once>
        @csrf
        <x-auth-field name="name" label="Nom complet" autocomplete="name" autofocus placeholder="Prénom Nom" />
        <x-auth-field name="email" type="email" label="Adresse e-mail" autocomplete="username" placeholder="vous@exemple.com" />
        <x-auth-field name="password" type="password" label="Mot de passe" autocomplete="new-password" />
        <x-auth-field name="password_confirmation" type="password" label="Confirmer le mot de passe" autocomplete="new-password" />
        <button class="go" type="submit">Créer mon compte</button>
    </form>
    <p class="alt">Déjà inscrit ? <a class="lnk" href="{{ route('login') }}">Se connecter</a></p>
</x-auth-layout>
