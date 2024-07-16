@extends('layouts.header_guest')

@section('Contenido')

<div class="cuerpo">
    <h2>Nuestros productos</h2>
    <div class="categorias">
        <a href="/accesorios" class="accesorios" style="background-image: url('images/accesorios.webp')">
            <h3>Accesorios</h3>
        </a>
        <a href="/buzos" class="buzos" style="background-image: url('images/buzo.png');">
            <h3>Buzos</h3>
        </a>
        <a href="/camisas" class="camisas" style="background-image: url('images/camisa.png')">
            <h3>Camisas</h3>
        </a>
        <a href="/camisetas" class="camisetas" style="background-image: url('images/camiseta.jpg')">
            <h3>Camisetas</h3>
        </a>
        <a href="/pantalones" class="pantalones" style="background-image: url('images/pantalon.webp')">
            <h3>Pantalones</h3>
        </a>
    </div>
</div>

@endsection