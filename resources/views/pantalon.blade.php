@extends('layouts.header_guest')

@section('Contenido')

<div class="cuerpo-cat accesorio">
    <h2>PANTALONES</h2>
    <hr>
    <div class="contenido">
        <div class="grid">
            @for ($i = 0; $i < 10; $i++) <div class="item">
                <img src="images/pantalon.webp" alt="Pantalon deportivo negro">
                <h3>
                    Pantalon deportivo negro
                </h3>
                <h4>
                    $100000
                </h4>
        </div>
        @endfor
    </div>
    @include('components.menu_categorias')
</div>
</div>
@endsection('Contenido')