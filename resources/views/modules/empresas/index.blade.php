@extends('layouts.main')

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Empresas Registradas</h1>
    </div><!-- End Page Title -->

    <section class="section dashboard">
       <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Tabla de empresas</h5>


              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Plan Activo</th>
                    <th>Estado</th>
                    <th>Inicio Plan</th>
                    <th>Acciones</th>
                  </tr>
                </thead>
                <tbody>
                 <tr>
                    <td>2</td>
                    <td>Lupita Market</td>
                    <td>contacto@lupita.com</td>
                    <td>Básico</td>
                    <td><span class="badge bg-success">Activo</span></td>
                    <td>2025-06-15</td>
                    <td>
                      <button class="btn btn-sm btn-primary">Editar</button>
                      <button class="btn btn-sm btn-info" onclick="verHistorial()">Historial</button>
                      <button class="btn btn-sm btn-secondary">Usuarios</button>
                    </td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Farmacia Vida</td>
                    <td>vida@farmacias.com</td>
                    <td>Pro</td>
                    <td><span class="badge bg-secondary">Suspendido</span></td>
                    <td>2025-05-10</td>
                    <td>
                      <button class="btn btn-sm btn-primary">Editar</button>
                      <button class="btn btn-sm btn-info" onclick="verHistorial()">Historial</button>
                      <button class="btn btn-sm btn-secondary">Usuarios</button>
                    </td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>Tiendas Rápidas</td>
                    <td>admin@rapidas.com</td>
                    <td>Premium</td>
                    <td><span class="badge bg-success">Activo</span></td>
                    <td>2025-04-28</td>
                    <td>
                      <button class="btn btn-sm btn-primary">Editar</button>
                      <button class="btn btn-sm btn-info" onclick="verHistorial()">Historial</button>
                      <button class="btn btn-sm btn-secondary">Usuarios</button>
                    </td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>Electro Mundo</td>
                    <td>soporte@electro.com</td>
                    <td>Empresarial</td>
                    <td><span class="badge bg-success">Activo</span></td>
                    <td>2025-03-20</td>
                    <td>
                      <button class="btn btn-sm btn-primary">Editar</button>
                      <button class="btn btn-sm btn-info" onclick="verHistorial()">Historial</button>
                      <button class="btn btn-sm btn-secondary">Usuarios</button>
                    </td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td>Green Shop</td>
                    <td>contact@greenshop.com</td>
                    <td>Starter</td>
                    <td><span class="badge bg-secondary">Suspendido</span></td>
                    <td>2025-02-08</td>
                    <td>
                      <button class="btn btn-sm btn-primary">Editar</button>
                      <button class="btn btn-sm btn-info" onclick="verHistorial()">Historial</button>
                      <button class="btn btn-sm btn-secondary">Usuarios</button>
                    </td>
                  </tr>
                  <tr>
                    <td>7</td>
                    <td>Moda Express</td>
                    <td>ventas@modaexpress.com</td>
                    <td>Pro</td>
                    <td><span class="badge bg-success">Activo</span></td>
                    <td>2025-01-12</td>
                    <td>
                      <button class="btn btn-sm btn-primary">Editar</button>
                      <button class="btn btn-sm btn-info" onclick="verHistorial()">Historial</button>
                      <button class="btn btn-sm btn-secondary">Usuarios</button>
                    </td>
                  </tr>
                  <tr>
                    <td>8</td>
                    <td>Delicias Online</td>
                    <td>contacto@delicias.com</td>
                    <td>Empresarial</td>
                    <td><span class="badge bg-success">Activo</span></td>
                    <td>2024-12-05</td>
                    <td>
                      <button class="btn btn-sm btn-primary">Editar</button>
                      <button class="btn btn-sm btn-info" onclick="verHistorial()">Historial</button>
                      <button class="btn btn-sm btn-secondary">Usuarios</button>
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