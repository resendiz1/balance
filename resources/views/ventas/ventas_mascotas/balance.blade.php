@extends('plantilla')
@include('ventas.ventas_mascotas.navbar.navbar')


@section('contenido')
<div class="container">
    <div class="row mb-5">
        <div class="col-12 text-center">
            <h1 class="m-5">Balance de las ventas</h1>
        </div>
        <div class="col-6 shadow-sm p-5">
            <h1>Ventas</h1>
            <div class="row">
                <table class="table">
                    <tbody>
                      <tr>
                        <td>Ventas Esperadas Marzo</td>
                        <td>7000 Tn</td>
                      </tr>
                      <tr>
                        <td>Ventas Realizadas Marzo</td>
                        <td class="text-success">7500 Tn</td>
                      </tr>
                      <tr>
                        <td>Toneladas Producidas</td>
                        <td>8000 Tn</td>
                      </tr>
                    </tbody>
                  </table>

                  <br>

                  <table class="table">
                      <tbody>
                        <tr>
                              <td class="text-success"><strong>Rendimiento de Ventas Esperadas VS Ventas Realizadas</strong></td>
                              <td> <strong class="text-success"> 107.14% </strong></td>
                        </tr>
                        <tr>
                            <td class="text-success"><strong>Rendimiento de Ventas Realizadas VS Toneladas Producidas</strong></td>
                            <td> <strong class="text-success"> 107.14% </strong></td>
                        </tr>
                        <tr>
                            <td class="text-center">
                                <h3 class="btn-success">
                                    Esto esta en cumplimiento
                                </h3>
                            </td>
                        </tr>

                      </tbody>
                  </table>



            </div>
        </div>
        <div class="col-6 shadow-sm p-5">
            <h1>Clientes</h1>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. At nobis sapiente excepturi consequuntur reiciendis rem eaque accusantium eligendi, voluptatum eos vitae ab repudiandae eveniet labore sit beatae suscipit consequatur natus!
        </div>


        <div class="col-6 shadow-sm p-5">
            <h1> Reclamaciones </h1>
            <table class="table">
                <thead>
                    <tr>
                      <th scope="col">Mes</th>
                      <th scope="col">Procedieron</th>
                      <th scope="col">No Procedieron</th>
                    </tr>
                  </thead>
                <tbody>
                  <tr>
                    <td class="text-success"><strong>Enero</strong></td>
                    <td>4</td>
                    <td>5</td>
                  </tr>

                  <tr>
                    <td class="text-success"><strong>Febrero</strong></td>
                    <td>3</td>
                    <td>3</td>
                  </tr>

                  <tr>
                    <td class="text-success"><strong>Marzo</strong></td>
                    <td>2</td>
                    <td>1</td>
                  </tr>

                  <tr>
                    <td class="text-success h4"><strong>Total: </strong></td>
                    <td>9</td>
                    <td>9</td>
                  </tr>
                </tbody>
            </table>

            <div class="col-12 p-1 bg-success text-white h3 text-center">
                  Esto esta en cumplimiento
            </div>

        </div>
        <div class="col-6 shadow-sm p-5">
            <h1> Visitas </h1>
            <table class="table">
                <thead>
                    <tr>
                      <th scope="col">Mes</th>
                      <th scope="col">Planeadas</th>
                      <th scope="col">Realizadas</th>
                    </tr>
                  </thead>
                <tbody>
                  <tr>
                    <td class="text-success"><strong>Enero</strong></td>
                    <td>4</td>
                    <td>3</td>
                  </tr>

                  <tr>
                    <td class="text-success"><strong>Febrero</strong></td>
                    <td>3</td>
                    <td>2</td>
                  </tr>

                  <tr>
                    <td class="text-success"><strong>Marzo</strong></td>
                    <td>2</td>
                    <td><small>Pendiente</small></td>
                  </tr>

                </tbody>
            </table>

            <div class="col-12 p-1 bg-success text-white h3 text-center">
                  Esto esta en cumplimiento
            </div>
        </div>
    </div>
</div>
@endsection