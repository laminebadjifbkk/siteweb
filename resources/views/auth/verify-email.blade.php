<x-auth-layout title="Vérification e-mail" heading="Vérifiez votre e-mail" subtitle="Merci de votre inscription ! Cliquez sur le lien que nous venons de vous envoyer par e-mail. Si vous ne l'avez pas reçu, nous pouvons vous en envoyer un autre.">
    @if (session('status') == 'verification-link-sent')
        <div class="notice" role="status">Un nouveau lien de vérification a été envoyé à l'adresse indiquée lors de l'inscription.</div>
    @endif
    <div class="split">
        <form method="POST" action="{{ route('verification.send') }}" data-once>
            @csrf
            <button class="go" type="submit">Renvoyer l'e-mail de vérification</button>
        </form>
        <form method="POST" action="{{ route('logout') }}" style="text-align:center">
            @csrf
            <button class="lnk" type="submit">Se déconnecter</button>
        </form>
    </div>
</x-auth-layout>
