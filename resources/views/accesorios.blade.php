@extends('layouts.header_guest')

@section('Contenido')

<div class="cuerpo-cat accesorio">
    <h2>ACCESORIOS</h2>
    <hr>
    <div class="contenido">
        <div class="grid">
            @for ($i = 0; $i < 10; $i++) <div class="item">
                <img src="images/accesorios.webp" alt="Accesorios para dama">
                <h3>Accesorios para dama</h3>
                <h4>$120000</h4>
            </div>
        @endfor
        </div>
        @include('components.menu_categorias')
    </div>
</div>
@endsection('Contenido')