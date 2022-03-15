@extends('plantilla')

@section('contenido')
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <a href="{{route('ventas_mascotas')}}">
                    <i class="fa fa-arrow-left fa-2x mx-3"></i>
                    <h5> Regresar</h5>
                </a>
            </div>

            <div class="col-12 text-center mt-5">
                <h2>Reclamaciones</h2>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-4">
                <div class="card">
                    <div class="card-header bg-info text-white h4 text-center">
                        Mes de la reclamacion
                    </div>
                    <div class="card-body">
                        <h5 class="text-center"> <strong>Toda la reclamación</strong></h5>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit aut porro ad dicta excepturi inventore ex odit eligendi? Autem alias corporis facilis aliquam soluta sed maiores atque deserunt harum adipisci?
                        </p>
                        <div class="row">
                            <div class="col-6">
                                <img src="https://eldiario.com/wp-content/uploads/2020/09/Lionel-Messi.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="col-6">
                                <img src="https://eldiario.com/wp-content/uploads/2020/09/Lionel-Messi.jpg" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-12 mt-3 text-center">
                                <a href="#">
                                    <i class="fa fa-file-pdf"></i>
                                    Descargar el Archivo de la reclamación
                                </a>
                            </div>
                        </div>
                        
                        </div>
                    <div class="card-footer bg-info text-white h5">
                        Nombre del cliente que reclama
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection