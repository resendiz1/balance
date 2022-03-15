

<div class="container">
    <div class="row shadow-lg justify-content-around m-5 p-5">
        <h2 class="text-center m-2">Ventas Mascotas</h2>
        <div class="col-auto">
            <a href="{{asset(route('ventas_mascotas'))}}" class="btn btn-success">Balance General</a>
        </div>

        <!-- DROPDOWN DE VENTAS -->
        <div class="col-auto">
            <div class="btn-group">
                <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    Ventas
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{route('ventas_esperadas')}}">Capturar Ventas Esperadas</a></li>
                    <li><a class="dropdown-item" href="{{route('ventas_realizadas')}}">Capturar Ventas Realizadas</a></li>
                    <li><a class="dropdown-item" href="{{route('toneladas_producidas')}}">Capturar Toneladas Producidas</a></li>
                </ul>
            </div>
        </div>
        <!--CIERRE DROPDOWN DE VENTAS -->





        <!-- DROPDOWN DE RECLAMACIONES -->
        <div class="col-auto">
            <div class="btn-group">
                <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    Reclamaciones
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{route('alta_reclamaciones')}}">Alta de Reclamaciones</a></li>
                    <li><a class="dropdown-item" href="{{route('detalles_reclamaciones')}}">Detalles reclamaciones</a></li>
                </ul>
            </div>
        </div>
        <!--CIERRE DROPDOWN DE VENTAS -->





        {{-- DROPDOWN DE CLIENTES --}}
        <div class="col-auto">
            <div class="btn-group">
                <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    Clientes Ganados
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{asset(route('clientes'))}}">Capturar clientes</a></li>
                    <li><a class="dropdown-item" href="#">Item 2</a></li>
                    <li><a class="dropdown-item" href="#">Item 3</a></li>
                </ul>
            </div>
        </div>
        {{-- CIERRE DEL DROPDOWN DE CLIENTES --}}


        
        {{-- DROPDOWN DE CLIENTES --}}
        <div class="col-auto">
            <div class="btn-group">
                <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    Programas de Visitas
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{asset(route('visitas'))}}">Visitas a clientes</a></li>
                    <li><a class="dropdown-item" href="#">Item 2</a></li>
                    <li><a class="dropdown-item" href="#">Item 3</a></li>
                </ul>
            </div>
        </div>
        {{-- CIERRE DEL DROPDOWN DE CLIENTES --}}

    </div>
</div>


