@extends('plantilla')
<div class="container">
    <div class="row shadow-lg justify-content-around m-5">
        
        <h2 class="text-center m-2">Ventas Mascotas</h2>

        <div class="col-auto p-4">
            <a href="#">Balance General</a>
        </div>
        <div class="col-auto  p-4">
            <a href="{{asset(route('ventas'))}}">Ventas</a>
        </div>
        <div class="col-auto  p-4">
            <a href="#">Reclamaciones</a>
        </div>
        <div class="col-auto  p-4">
            <a href="#">Clientes Ganados</a>
        </div>
        <div class="col-auto p-4">
            <a href="#">Programa de visitas</a>
        </div>
        
    </div>
</div>