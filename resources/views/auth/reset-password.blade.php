<x-auth-layout title="Nouveau mot de passe" heading="Nouveau mot de passe" subtitle="Choisissez un nouveau mot de passe pour votre compte.">
    <form method="POST" action="{{ route('password.store') }}" data-once>
        @csrf
        <input type="hidden" name="token" value="{{ $request->route('token') }}">
        <x-auth-field name="email" type="email" label="Adresse e-mail" autocomplete="username" autofocus :value="$request->email" />
        <x-auth-field name="password" type="password" label="Nouveau mot de passe" autocomplete="new-password" />
        <x-auth-field name="password_confirmation" type="password" label="Confirmer le mot de passe" autocomplete="new-password" />
        <button class="go" type="submit">Réinitialiser le mot de passe</button>
    </form>
</x-auth-layout>
