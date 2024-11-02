@if ( session('updateClave') )
<div class="alert alert-success" role="alert">
  <strong>Felicitaciones {{ Auth::user()->name }},</strong>
    {{ session('updateClave') }}
</div>
@endif


@if ( session('name') )
<div class="alert alert-success" role="alert">
  <strong>Felicitaciones </strong>
    {{ session('name') }}
</div>
@endif


@if ( session('claveIncorrecta') )
  <div class="alert alert-danger" role="alert">
    <strong>Lo siento!</strong>  {{ session('claveIncorrecta') }}
  </div>
@endif


@if ( session('clavemenor') )
<div class="alert alert-warning" role="alert">
  <strong>Lo siento {{ Auth::user()->name }},</strong>
    {{ session('clavemenor') }}!
</div>
@endif

@if ( session('claveerror') )
<div class="alert alert-warning" role="alert">
  <strong>Lo siento {{ Auth::user()->name }},</strong>
    {{ session('claveerror') }}!
</div>
@endif