@extends('plantilla')
@section('contenido')
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-12 text-center">
                <a href="{{route('ventas_mascotas')}}">
                    <i class="fa fa-arrow-left fa-2x mx-3"></i>
                    <h5> Regresar</h5>
                </a>
            </div>
            <div class="col-4 shadow p-5">
                <h3>Formulario de Reclamaciones</h3>
                <div class="form-group ">
                    <label for="">Mes</label>
                    <input type="text" class="form-control form-control-sm" value="Marzo" disabled>
                </div>
                
                <div class="form-group">
                    <label for="">Folio de la reclamación</label>
                    <input type="text" class="form-control">
                </div>

                <div class="form-group">
                    <label for="">Cliente</label>
                    <input type="text" class="form-control">
                </div>

                <div class="form-group">
                    <label for="">Estatus</label>
                    <input type="text" class="form-control">
                </div>

                <div class="form-group">
                    <label for="">Dictamen</label>
                    <input type="text" class="form-control">
                </div>

                <div class="form-group">
                    <label for="">Causa de l reclamación</label>
                    <textarea name="" class="form-control" id="" cols="30" rows="10"></textarea>
                </div>

                <div class="form-group mt-3">
                    <input type="file" class="form-control form-control-sm">
                </div>

                <div class="form-group mt-4 text-center">
                    <button class="btn btn-primary">
                        <i class="fa fa-plus-circle"></i>
                        Agregar Reclamación
                    </button>
                </div>

            </div>
        </div>
    </div>
@endsection