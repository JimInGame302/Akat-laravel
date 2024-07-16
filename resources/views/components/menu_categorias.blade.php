<style>
    .borde-vertical {
        width: 1px;
        height: auto;
        background-color: black;
    }

    .menu {
        float: right;
        width: 30%;
        margin: 5%;
        height: auto;
    }

    .menu ul {
        padding-left: 10px;
    }

    .menu li {
        text-align: left;
        margin: 5%;
        font-size: 20pt;
        font-family: 'Klee One', sans-serif;
        list-style-type: none;
    }

    .menu a {
        text-decoration: none;
        color: black;
        transition: all .8s cubic-bezier(.25, .4, .45, 1.4);
    }

    .menu a:hover {
        font-size: 30pt;
    }
</style>

<div class="borde-vertical"></div>
<div class="menu">
    <h2>Categorías</h2>
    <ul>
        <li><a href="{{ url('/html/categorias/accesorio.html') }}">Accesorios</a></li>
        <li><a href="{{ url('/html/categorias/buzo.html') }}">Buzos</a></li>
        <li><a href="{{ url('/html/categorias/camisa.html') }}">Camisas</a></li>
        <li><a href="{{ url('/html/categorias/camiseta.html') }}">Camisetas</a></li>
        <li><a href="{{ url('/html/categorias/pantalon.html') }}">Pantalones</a></li>
    </ul>
</div>

