
@extends('plantilla')
@section('contenido')

<div class="container">
    <div class="row mt-5">
        <div class="col-12 text-center mb-5">
            <a href="{{route('ventas_mascotas')}}">
                <i class="fa fa-arrow-left fa-2x mx-3"></i>
                <h5> Regresar</h5>
            </a>
            
            <h1>Ventas realizadas</h1>
        </div>
        
        <div class="col-2 shadow p-3 m-2 text-center">
            <strong>
                Venta esperada <br> 2000 Tn
            </strong>
            <form action="">
                <div class="form-group p-4">
                    <h4>Enero</h4>
                    <input type="number" min="0" class="form-control form-control-sm" value="2100" disabled>
                </div>
            </form>
            <strong class="text-success mt-3">
                Rendimiento del: <br>
                105%
            </strong>

        </div>


        <div class="col-2 shadow p-3 m-2 text-center">
            <strong>
                Venta esperada <br> 2500 Tn
            </strong>
            <form action="">
                <div class="form-group p-4">
                    <h4>Febrero</h4>
                    <input type="number" min="0" class="form-control form-control-sm" value="2800" disabled>
                </div>
            </form>
            <strong class="text-success">
                Rendimiento del: <br>
                112%
            </strong>
        </div>

        <div class="col-2 shadow p-3 m-2">
            <form action="">
                <div class="form-group p-4">
                    <h4>Marzo</h4>
                    <input type="number" min="0" class="form-control form-control-sm">
                </div>
                <div class="form-group text-center">
                    <button class="btn btn-success btn-sm">
                        Agregar
                    </button>
                </div>
            </form>
        </div>

        <div class="col-2 shadow p-3 m-2">
            <form action="">
                <div class="form-group p-4">
                    <h4>Abril</h4>
                    <input type="text" class="form-control form-control-sm">
                </div>
                <div class="form-group text-center">
                    <button class="btn btn-success btn-sm">
                        Agregar
                    </button>
                </div>
            </form>
        </div>

        <div class="col-2 shadow p-3 m-2">
            <form action="">
                <div class="form-group p-4">
                    <h4>Mayo</h4>
                    <input type="text" class="form-control form-control-sm">
                </div>
                <div class="form-group text-center">
                    <button class="btn btn-success btn-sm">
                        Agregar
                    </button>
                </div>
            </form>
        </div>


        <div class="col-2 shadow p-3 m-2">
            <form action="">
                <div class="form-group p-4">
                    <h4>Junio</h4>
                    <input type="text" class="form-control form-control-sm">
                </div>
                <div class="form-group text-center">
                    <button class="btn btn-success btn-sm">
                        Agregar
                    </button>
                </div>
            </form>
        </div>

        <div class="col-2 shadow p-3 m-2">
            <form action="">
                <div class="form-group p-4">
                    <h4>Julio</h4>
                    <input type="text" class="form-control form-control-sm">
                </div>
                <div class="form-group text-center">
                    <button class="btn btn-success btn-sm">
                        Agregar
                    </button>
                </div>
            </form>
        </div>



        <div class="col-2 shadow p-3 m-2">
            <form action="">
                <div class="form-group p-4">
                    <h4>Agosto</h4>
                    <input type="text" class="form-control form-control-sm">
                </div>
                <div class="form-group text-center">
                    <button class="btn btn-success btn-sm">
                        Agregar
                    </button>
                </div>
            </form>
        </div>



        <div class="col-2 shadow p-3 m-2">
            <form action="">
                <div class="form-group p-4">
                    <h4>Septiembre</h4>
                    <input type="text" class="form-control form-control-sm">
                </div>
                <div class="form-group text-center">
                    <button class="btn btn-success btn-sm">
                        Agregar
                    </button>
                </div>
            </form>
        </div>

        <div class="col-2 shadow p-3 m-2">
            <form action="">
                <div class="form-group p-4">
                    <h4>Octubre</h4>
                    <input type="text" class="form-control form-control-sm">
                </div>
                <div class="form-group text-center">
                    <button class="btn btn-success btn-sm">
                        Agregar
                    </button>
                </div>
            </form>
        </div>


        <div class="col-2 shadow p-3 m-2">
            <form action="">
                <div class="form-group p-4">
                    <h4>Noviembre</h4>
                    <input type="text" class="form-control form-control-sm">
                </div>
                <div class="form-group text-center">
                    <button class="btn btn-success btn-sm">
                        Agregar
                    </button>
                </div>
            </form>
        </div>

        <div class="col-2 shadow p-3 m-2">
            <form action="">
                <div class="form-group p-4">
                    <h4>Diciembre</h4>
                    <input type="text" class="form-control form-control-sm">
                </div>
                <div class="form-group text-center">
                    <button class="btn btn-success btn-sm">
                        Agregar
                    </button>
                </div>
            </form>
        </div>

    </div>
</div>





@endsection