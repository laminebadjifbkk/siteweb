<x-auth-layout title="Mot de passe oublié" heading="Mot de passe oublié ?" subtitle="Indiquez votre adresse e-mail : nous vous enverrons un lien pour en choisir un nouveau.">
    <form method="POST" action="{{ route('password.email') }}" data-once>
        @csrf
        <x-auth-field name="email" type="email" label="Adresse e-mail" autofocus placeholder="vous@exemple.com" />
        <button class="go" type="submit">Envoyer le lien de réinitialisation</button>
    </form>
    <p class="alt"><a class="lnk" href="{{ route('login') }}">← Retour à la connexion</a></p>
</x-auth-layout>
