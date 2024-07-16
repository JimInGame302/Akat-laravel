@extends('layouts.header_guest')

@section('Contenido')

<div class="cuerpo-cat accesorio">
    <h2>BUZOS</h2>
    <hr>
    <div class="contenido">
        <div class="grid">
            @for ($i = 0; $i < 10; $i++) <div class="item">
                <img src="images/buzo.png" alt="Buzo / Atletico nacional">
                <h3>
                    Buzo / Atletico nacional
                </h3>
                <h4>
                    $80.000
                </h4>
        </div>
        @endfor
    </div>
    @include('components.menu_categorias')
</div>
</div>
@endsection('Contenido')