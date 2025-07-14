@extends('layouts.main')

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>usuarios de empresa</h1>
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
                    <th>Rol</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Laura Jiménez</td>
                    <td>laura@empresa.com</td>
                    <td>Admin</td>
                    <td><span class="badge bg-success">Activo</span></td>
                    <td>
                      <button class="btn btn-sm btn-warning">Editar</button>
                      <button class="btn btn-sm btn-danger">Eliminar</button>
                      <button class="btn btn-sm btn-outline-dark">Suspender</button>
                    </td>
                  </tr>
                  <tr>
                      <td>2</td>
                      <td>Carlos Méndez</td>
                      <td>carlos@empresa.com</td>
                      <td>Operador</td>
                      <td><span class="badge bg-success">Activo</span></td>
                      <td>
                        <button class="btn btn-sm btn-warning">Editar</button>
                        <button class="btn btn-sm btn-danger">Eliminar</button>
                        <button class="btn btn-sm btn-outline-dark">Suspender</button>
                      </td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>Sofía Ruiz</td>
                      <td>sofia@empresa.com</td>
                      <td>Viewer</td>
                      <td><span class="badge bg-secondary">Suspendido</span></td>
                      <td>
                        <button class="btn btn-sm btn-warning">Editar</button>
                        <button class="btn btn-sm btn-danger">Eliminar</button>
                        <button class="btn btn-sm btn-outline-dark">Reactivar</button>
                      </td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td>Javier Torres</td>
                      <td>jtorres@empresa.com</td>
                      <td>Admin</td>
                      <td><span class="badge bg-success">Activo</span></td>
                      <td>
                        <button class="btn btn-sm btn-warning">Editar</button>
                        <button class="btn btn-sm btn-danger">Eliminar</button>
                        <button class="btn btn-sm btn-outline-dark">Suspender</button>
                      </td>
                    </tr>
                    <tr>
                      <td>5</td>
                      <td>Mariana Paredes</td>
                      <td>mariana@empresa.com</td>
                      <td>Operador</td>
                      <td><span class="badge bg-secondary">Suspendido</span></td>
                      <td>
                        <button class="btn btn-sm btn-warning">Editar</button>
                        <button class="btn btn-sm btn-danger">Eliminar</button>
                        <button class="btn btn-sm btn-outline-dark">Reactivar</button>
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