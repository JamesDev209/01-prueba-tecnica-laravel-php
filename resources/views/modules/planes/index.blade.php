@extends('layouts.main')

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Planes</h1>
    </div><!-- End Page Title -->

    <section class="section dashboard">
       <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Tabla de planes</h5>


              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                 <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Precio mensual</th>
                    <th>Límite de usuarios</th>
                    <th>Características</th>
                    <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
               <tr>
                    <td>2</td>
                    <td>Pro</td>
                    <td>$39.99</td>
                    <td>15</td>
                    <td><button class="btn btn-sm btn-secondary" onclick="verCaracteristicas()">Ver</button></td>
                    <td>
                      <button class="btn btn-sm btn-warning">Editar</button>
                      <button class="btn btn-sm btn-danger">Eliminar</button>
                    </td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Empresarial</td>
                    <td>$89.99</td>
                    <td>50</td>
                    <td><button class="btn btn-sm btn-secondary" onclick="verCaracteristicas()">Ver</button></td>
                    <td>
                      <button class="btn btn-sm btn-warning">Editar</button>
                      <button class="btn btn-sm btn-danger">Eliminar</button>
                    </td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>Starter</td>
                    <td>$9.99</td>
                    <td>2</td>
                    <td><button class="btn btn-sm btn-secondary" onclick="verCaracteristicas()">Ver</button></td>
                    <td>
                      <button class="btn btn-sm btn-warning">Editar</button>
                      <button class="btn btn-sm btn-danger">Eliminar</button>
                    </td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>Avanzado</td>
                    <td>$59.99</td>
                    <td>30</td>
                    <td><button class="btn btn-sm btn-secondary" onclick="verCaracteristicas()">Ver</button></td>
                    <td>
                      <button class="btn btn-sm btn-warning">Editar</button>
                      <button class="btn btn-sm btn-danger">Eliminar</button>
                    </td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td>Corporativo</td>
                    <td>$129.99</td>
                    <td>100</td>
                    <td><button class="btn btn-sm btn-secondary" onclick="verCaracteristicas()">Ver</button></td>
                    <td>
                      <button class="btn btn-sm btn-warning">Editar</button>
                      <button class="btn btn-sm btn-danger">Eliminar</button>
                    </td>
                  </tr>
                  <tr>
                    <td>7</td>
                    <td>Ilimitado</td>
                    <td>$199.99</td>
                    <td>Ilimitado</td>
                    <td><button class="btn btn-sm btn-secondary" onclick="verCaracteristicas()">Ver</button></td>
                    <td>
                      <button class="btn btn-sm btn-warning">Editar</button>
                      <button class="btn btn-sm btn-danger">Eliminar</button>
                    </td>
                  </tr>
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->