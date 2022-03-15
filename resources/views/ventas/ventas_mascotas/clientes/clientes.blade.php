@extends('plantilla')
@section('contenido')
    

<div class="container">

    <div class="row justify-content-center mt-4">
        <div class="col-12 text-center">
            <a href="{{route('ventas_mascotas')}}">
                <i class="fa fa-arrow-left fa-2x mx-3"></i>
                <h5> Regresar</h5>
            </a>
        </div>

        <div class="col-12 text-center mt-5">
            <h2>Clientes ganados</h2>
        </div>
    </div>



    <div class="row mt-4 justify-content-around p-5">

        <div class="col-3 p-2 shadow p-4 m-2">
            <h3>Enero</h3>
            <form action="">
                <div class="form-group">
                    <input type="text" class="form-control" value="3" disabled>
                </div>
            </form>
            <p>Acomulados durante el año: <strong>3</strong> </p>
        </div>



        <div class="col-3 p-2 shadow p-4 m-2">
            <h3>Febrero</h3>
            <form action="">
                <div class="form-group">
                    <input type="text" class="form-control" value="2" disabled>
                </div>
            </form>
            <p>Acomulados durante el año: <strong>5</strong> </p>
        </div>



        <div class="col-3 p-2 shadow p-4 m-2">
            <h3>Marzo</h3>
            <form action="">
                <div class="form-group">
                    <input type="text" class="form-control" value="1" disabled>
                </div>
            </form>
            <p>Acomulados durante el año: <strong>6</strong> </p>
        </div>




        <div class="col-3 p-2 shadow p-4 m-2">
            <h3>Abril</h3>
            <form action="">
                <div class="form-group">
                    <input type="text" class="form-control">
                </div>
                <div class="form-group text-center mt-3">
                    <button class="btn btn-primary btn-sm">
                        <i class="fa fa-plus-square mx-1"></i>
                        Agregar
                    </button>
                </div>
            </form>
        </div>


    </div>
</div>






@endsection