@extends('layouts.header_guest')

@section('Contenido')

<div class="cuerpo-cat accesorio">
    <h2>CAMISAS</h2>
    <hr>
    <div class="contenido">
        <div class="grid">
            @for ($i = 0; $i < 10; $i++) <div class="item">
                <img src="images/camisa.png" alt="Camisa playera / Cigüeña blanca">
                <h3>
                    Camisa playera / Cigüeña blanca
                </h3>
                <h4>
                    $50.000
                </h4>
        </div>
        @endfor
    </div>
    @include('components.menu_categorias')
</div>
</div>
@endsection('Contenido')