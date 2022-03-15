@extends('plantilla') 
@section('contenido')
    <div class="container">
        
        <div class="row mt-3">
            <div class="col-12 text-center">
                <h2>Indicadores</h2>
            </div>
        </div>

        <div class="row justify-content-center text-center">
            <div class="col-4 p-5 shadow bg-white m-2">
                <a href="{{route('ventas_mascotas')}}">Ventas Mascotas</a>
            </div>
            <div class="col-4 p-5 shadow bg-white m-2">
                <a href="#">Ventas Pecuarios</a>
            </div>
            <div class="col-4 p-5 shadow bg-white m-2">
                <a href="#">Producción Mascotas 1</a>
            </div>
            <div class="col-4 p-5 shadow bg-white m-2">
                <a href="#">Producción Mascotas 2</a>
            </div>
            <div class="col-4 p-5 shadow bg-white m-2">
                <a href="#">Producción Pecuarios</a>
            </div>
            <div class="col-4 p-5 shadow bg-white m-2">
               <a href="#"> Aseguramiento de la calidad</a>
            </div>
            <div class="col-4 p-5 shadow bg-white m-2">
                <a href="#">Control de calidad Mascotas 1</a>
            </div>
            <div class="col-4 p-5 shadow bg-white m-2">
                <a href="#">Control de calidad Mascotas 2</a>
            </div>
            <div class="col-4 p-5 shadow bg-white m-2">
                <a href="#">Control de calidad Pecuarios</a>
            </div>
            <div class="col-4 p-5 shadow bg-white m-2">
                <a href="#">Recursos Humanos</a>
            </div>
            <div class="col-4 p-5 shadow bg-white m-2">
                <a href="#">Compras</a>
            </div>
            <div class="col-4 p-5 shadow bg-white m-2">
               <a href="#">Contabilidad</a>
            </div>
        </div>
    </div>
@endsection