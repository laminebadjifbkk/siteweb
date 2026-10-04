@props(['name', 'label', 'type' => 'text', 'autocomplete' => null, 'value' => null, 'placeholder' => null, 'autofocus' => false, 'required' => true])
@php($err = $errors->first($name))
@php($pw = $type === 'password')
<div class="f {{ $err ? 'bad' : '' }}">
    <label for="{{ $name }}">{{ $label }}</label>
    @if ($pw)<div class="in">@endif
    <input id="{{ $name }}" type="{{ $type }}" name="{{ $name }}"
        @unless ($pw) value="{{ old($name, $value) }}" @endunless
        @if ($placeholder) placeholder="{{ $placeholder }}" @endif
        @if ($autocomplete) autocomplete="{{ $autocomplete }}" @endif
        @required($required) @if ($autofocus) autofocus @endif
        @if ($err) aria-invalid="true" aria-describedby="{{ $name }}-err" @endif>
    @if ($pw)
        <button class="eye" data-eye type="button" aria-label="Afficher le mot de passe" aria-pressed="false">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M2 12s3.5-7 10-7 10 7 10 7-3.5 7-10 7S2 12 2 12z"/><circle cx="12" cy="12" r="3"/></svg>
        </button></div>
        <span class="caps" role="status">Verr. Maj. est activé</span>
    @endif
    @if ($err)<span class="err" id="{{ $name }}-err">{{ $err }}</span>@endif
</div>
