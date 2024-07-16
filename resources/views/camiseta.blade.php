@extends('layouts.header_guest')

@section('Contenido')

<div class="cuerpo-cat accesorio">
    <h2>CAMISETAS</h2>
    <hr>
    <div class="contenido">
        <div class="grid">
            @for ($i = 0; $i < 10; $i++) <div class="item">
                <img src="images/camiseta.jpg" alt="Camiseta blanca">
                <h3>
                    Camiseta blanca
                </h3>
                <h4>
                    $40.000
                </h4>
        </div>
        @endfor
    </div>
    @include('components.menu_categorias')
</div>
</div>
@endsection('Contenido')