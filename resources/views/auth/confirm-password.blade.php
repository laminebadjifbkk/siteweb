<x-auth-layout title="Confirmation" heading="Confirmer le mot de passe" subtitle="Zone sécurisée : veuillez confirmer votre mot de passe avant de continuer.">
    <form method="POST" action="{{ route('password.confirm') }}" data-once>
        @csrf
        <x-auth-field name="password" type="password" label="Mot de passe" autocomplete="current-password" autofocus />
        <button class="go" type="submit">Confirmer</button>
    </form>
</x-auth-layout>
