@props(['title' => 'Authentification', 'heading' => null, 'subtitle' => null])
<!DOCTYPE html>
<html lang="fr" data-theme="light">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>{{ $title }} — Administration</title>
<script>try{var t=localStorage.getItem('theme');if(t)document.documentElement.dataset.theme=t}catch(e){}</script>
<style>
:root{--bg:#f2f4f6;--surface:#fff;--ink:#14212b;--muted:#6a7885;--line:#e2e7ec;--side:#10262c;--accent:#ff2d20;--accent-soft:#ffe9e7;--ok:#12805c;--ok-bg:#dff5ec;--warn:#9a5b00;--bad:#b3261e}
:root[data-theme=dark]{--bg:#0b1519;--surface:#12222a;--ink:#e8eff2;--muted:#8fa2ad;--line:#1f333d;--side:#081114;--accent-soft:#3a1714;--ok:#5fd3a8;--ok-bg:#12352b;--warn:#f0c064;--bad:#ff8a82}
*{box-sizing:border-box;margin:0}
body{font:15px/1.5 system-ui,-apple-system,"Segoe UI",Roboto,sans-serif;background:var(--bg);color:var(--ink);min-height:100vh;display:grid;grid-template-columns:minmax(0,1.05fr) minmax(0,1fr)}
button,input{font:inherit;color:inherit}
:focus-visible{outline:2px solid var(--accent);outline-offset:2px}
.hero{position:relative;overflow:hidden;background:var(--side);color:#cfdde1;padding:48px 56px;display:flex;flex-direction:column;justify-content:space-between;gap:40px}
.hero::before{content:"";position:absolute;width:520px;height:520px;right:-180px;top:-160px;border-radius:50%;background:radial-gradient(circle at 30% 30%,rgba(255,45,32,.55),rgba(255,45,32,0) 65%)}
.hero::after{content:"";position:absolute;width:420px;height:420px;left:-140px;bottom:-180px;border-radius:50%;border:1px solid rgba(255,255,255,.12);box-shadow:0 0 0 60px rgba(255,255,255,.03),0 0 0 120px rgba(255,255,255,.02)}
.hero>*{position:relative;z-index:1}
.brand{display:flex;align-items:center;gap:10px;font-weight:700;font-size:18px;color:var(--ink)}
.brand i{width:34px;height:34px;border-radius:9px;background:var(--accent);color:#fff;display:grid;place-items:center;font-style:normal}
.hero .brand{color:#fff}
.hero h2{font-size:clamp(28px,3.2vw,40px);line-height:1.15;letter-spacing:-.02em;color:#fff;max-width:14em}
.hero p{margin-top:14px;max-width:30em;color:#a9bec4}
.hero small{color:#6f8a91}
main{display:flex;flex-direction:column;padding:20px 28px 28px;min-width:0}
.top{display:flex;justify-content:flex-end}
.ib{width:40px;height:40px;border-radius:8px;border:1px solid var(--line);background:var(--surface);display:grid;place-items:center;cursor:pointer}
.wrap{flex:1;display:grid;place-items:center;padding:16px 0}
.card{width:min(100%,400px)}
.m-brand{display:none;margin-bottom:28px}
h1{font-size:28px;letter-spacing:-.02em;line-height:1.2}
.sub{color:var(--muted);margin:6px 0 26px}
.notice{background:var(--ok-bg);color:var(--ok);border-radius:8px;padding:10px 14px;font-size:14px;margin-bottom:18px}
.f{display:grid;gap:6px;margin-bottom:16px}
label{font-weight:600;font-size:14px}
input[type=email],input[type=password],input[type=text]{width:100%;height:46px;background:var(--surface);border:1px solid var(--line);border-radius:10px;padding:0 14px;font-size:15px;transition:border-color .15s,box-shadow .15s}
input::placeholder{color:var(--muted);opacity:.7}
input:focus{outline:0;border-color:var(--accent);box-shadow:0 0 0 3px var(--accent-soft)}
.bad input{border-color:var(--bad)}
.in{position:relative}.in input{padding-right:48px}
.eye{position:absolute;right:4px;top:4px;width:38px;height:38px;border:0;background:none;border-radius:8px;color:var(--muted);display:grid;place-items:center;cursor:pointer}
.eye:hover{color:var(--ink);background:var(--bg)}.eye svg{width:20px;height:20px}
.err{color:var(--bad);font-size:13px}
.caps{display:none;font-size:13px;color:var(--warn)}
.go{width:100%;height:48px;border:0;border-radius:10px;background:var(--accent);color:#fff;font-weight:700;font-size:15px;cursor:pointer;transition:filter .15s,transform .05s;margin-top:6px}
.go:hover{filter:brightness(.92)}.go:active{transform:translateY(1px)}.go:disabled{opacity:.7;cursor:wait}
.lnk{background:none;border:0;padding:0;color:var(--accent);font-weight:600;font-size:14px;cursor:pointer;text-decoration:none}
.lnk:hover{text-decoration:underline}
.alt{margin-top:22px;text-align:center;font-size:14px;color:var(--muted)}
.split{display:grid;gap:18px;margin-top:6px}
.foot{margin-top:28px;text-align:center;font-size:13px;color:var(--muted)}
@media(max-width:900px){body{grid-template-columns:1fr}.hero{display:none}.m-brand{display:flex}.wrap{place-items:start center;padding-top:24px}}
@media(prefers-reduced-motion:reduce){*{transition:none!important}}
</style>
</head>
<body>
<aside class="hero">
    <div class="brand"><i>◆</i> ONFP ADMIN</div>
    <div>
        <h2>Gérez le contenu de votre site en toute simplicité</h2>
        <p>Rédigez, relisez et publiez vos articles, et suivez la fréquentation du site.</p>
    </div>
    <small>© {{ date('Y') }} ONFP. Accès réservé à l'équipe.</small>
</aside>
<main>
    <div class="top"><button class="ib" id="theme" type="button" aria-label="Changer de thème"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="9"/><path d="M12 3v18"/><path d="M12 3a9 9 0 0 1 0 18z" fill="currentColor"/></svg></button></div>
    <div class="wrap">
        <section class="card">
            <div class="brand m-brand"><i>◆</i> ONFP ADMIN</div>
            <h1>{{ $heading ?? $title }}</h1>
            @if ($subtitle)<p class="sub">{{ $subtitle }}</p>@endif
            @if (session('status') && session('status') !== 'verification-link-sent')
                <div class="notice" role="status">{{ session('status') }}</div>
            @endif
            {{ $slot }}
        </section>
    </div>
</main>
<script>
const $=s=>document.querySelector(s);
$('#theme').onclick=()=>{const r=document.documentElement,t=r.dataset.theme==='dark'?'light':'dark';r.dataset.theme=t;try{localStorage.setItem('theme',t)}catch(e){}};
/* Afficher / masquer le mot de passe */
document.addEventListener('click',e=>{const b=e.target.closest('[data-eye]');if(!b)return;const i=b.closest('.in').querySelector('input'),s=i.type==='password';i.type=s?'text':'password';b.setAttribute('aria-pressed',s);b.setAttribute('aria-label',s?'Masquer le mot de passe':'Afficher le mot de passe')});
/* Verr. Maj. */
document.querySelectorAll('input[type=password]').forEach(p=>{const c=p.closest('.f').querySelector('.caps');['keydown','keyup'].forEach(v=>p.addEventListener(v,e=>{c.style.display=e.getModifierState&&e.getModifierState('CapsLock')?'block':'none'}));p.addEventListener('blur',()=>c.style.display='none')});
/* Évite le double envoi */
document.querySelectorAll('form[data-once]').forEach(f=>f.addEventListener('submit',()=>{const b=f.querySelector('.go');b.disabled=true;b.dataset.l=b.textContent;b.textContent='Veuillez patienter…'}));
addEventListener('pageshow',e=>{if(e.persisted)document.querySelectorAll('.go[data-l]').forEach(b=>{b.disabled=false;b.textContent=b.dataset.l})});
</script>
</body>
</html>
