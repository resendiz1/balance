@extends('plantilla')
@section('contenido')

<div class="container">
    <div class="row mt-5">
        <div class="col-12 text-center mb-5">
            <a href="{{route('ventas_mascotas')}}">
                <i class="fa fa-arrow-left fa-2x mx-3"></i>
                <h5> Regresar</h5>
            </a>
            
            <h1>Visitas</h1>
        </div>
        

        <div class="col-2 shadow p-3 m-2">
            <h4 class="text-center">Enero</h4>
            <form action="">
                <div class="form-group px-4 text-center">
                    <label for="">Visitas Esperadas</label>
                    <h3>8</h3>
                </div>
            </form>
                <hr>
                <div class="form-group text-center mt-2 px-4">
                    <label for="">Visitas Realizadas</label>
                    <h3>4</h3>
                </div>
                <hr>
                <div class="form-group text-center">
                    <p class="text-danger">
                        Se obtuvo un rendimiento del 50% respecto al 100% esperado.
                    </p>
                    <strong class="bg-danger text-white p-1 mt-5"> incumplimiento</strong>
                </div>
        </div>

        <div class="col-2 shadow p-3 m-2">
            <h4 class="text-center">Febrero</h4>
            <form action="">
                <div class="form-group px-4 text-center">
                    <label for="">Visitas Esperadas</label>
                    <h3>8</h3>
                </div>
            </form>
                <hr>
                <div class="form-group text-center mt-2 px-4">
                    <label for="">Visitas Realizadas</label>
                    <h3>4</h3>
                </div>
                <hr>
                <div class="form-group text-center">
                    <p class="text-danger">
                        Se obtuvo un rendimiento del 50% respecto al 100% esperado.
                    </p>
                    <strong class="bg-danger text-white p-1 mt-5"> incumplimiento</strong>
                </div>
        </div>


        <div class="col-2 shadow p-3 m-2">
            <h4 class="text-center">Marzo</h4>
            <form action="">
                <div class="form-group px-4 text-center">
                    <label for="">Visitas Esperadas</label>
                    <h3>8</h3>
                </div>
            </form>
                <hr>
                <div class="form-group text-center mt-2 px-4">
                    <label for="">Visitas Realizadas</label>
                    <input type="text" class="form-control form-control-sm" name="" id="">
                </div>
                <div class="form-group mt-4 text-center">
                    <button class="btn btn-secondary btn-sm">Agregar</button>
                </div>
                
                
        </div>
    </div>
</div>
@endsection