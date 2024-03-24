<!-- CONTENT -->
<div class="container text-center alto-pantalla">
  <h1 class="text-start ps-4">¡Hola <?php echo session()->get('user_name') ?>!</h1>
  <div class="container align-items-center">
    <h5 class="p-3">Servicios activos</h5>
    <div class="container">
    <h1>Usuarios</h1>
    <ul class="list-group">
        <?php foreach ($users as $user) : ?>
            <li class="list-group-item"><?= $user['user_name'] ?></li>
        <?php endforeach; ?>
    </ul>
    <div class="col d-flex justify-content-md-end justify-content-center text-dark" data-bs-theme="light">
      <nav aria-label="Page navigation example">
        <ul class="pagination">
          <li class="page-item"><a class="page-link" href="#">Anterior</a></li>
          <?php foreach ($pager->links() as $link) : ?>
            <li class="page-item"><a class="page-link" href="">1</a></li>
            
          <?php endforeach ?>
          <li class="page-item"><a class="page-link" href="#">Siguiente</a></li>
        </ul>
      </nav>
    </div>
</div>
    <table class="table table-sm table-light table-striped table-bordered rounded">
      <thead class="">
        <tr>
          <th scope="col">Sigla</th>
          <th scope="col">Origen</th>
          <th scope="col" class="d-none d-lg-table-cell">Destino</th>
          <th scope="col" class="d-none d-lg-table-cell">Pasajeros</th>
          <th scope="col">Estado</th>
          <th scope="col" class="d-sm-none">Más detalles</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>AAAAA</td>
          <td>Aeropuerto SCL</td>
          <td class="d-none d-lg-table-cell">Hotel Ibis Providencia</td>
          <td class="d-none d-lg-table-cell">12</td>
          <td>Activo</td>
          <td class="d-sm-none"><button type="button" class="btn btn-info">Ver más</button></td>
        </tr>
        <tr>
          <td>EEEEE</td>
          <td>Termina de buses</td>
          <td class="d-none d-lg-table-cell">Hotel Ibis Viña del mar</td>
          <td class="d-none d-lg-table-cell">6</td>
          <td>Por confirmar</td>
          <td class="d-sm-none"><button type="button" class="btn btn-success">Confirmar</button></td>
        </tr>
        <tr>
          <td>TTTTTT</td>
          <td>Aeropuerto SCL</td>
          <td class="d-none d-lg-table-cell">Hostal Valdivia</td>
          <td class="d-none d-lg-table-cell">8</td>
          <td>Activo</td>
          <td class="d-sm-none"><button type="button" class="btn btn-info">Ver más</button></td>
        </tr>
      </tbody>
    </table>
    <div class="col d-flex justify-content-end text-dark" data-bs-theme="light">
      <nav>
        <ul class="pagination">
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
        </ul>
      </nav>
    </div>
  </div>
  <div class="row pt-5">
  <div class="col col-3 text-center">
      <a href="<?php echo site_url('ingresar_servicio')?>">
        <img src="public/assets/img/ingresar_servicio.svg" alt="Boton para ingresar servicio" width="50">
        <br>
        Ingresar servicio
      </a>
    </div>
    <div class="col col-3 text-center">
      <a href="<?php echo site_url('confirmar_servicio')?>">
        <img src="public/assets/img/confirmar_servicio.svg" alt="Boton para confirmar servicio" width="50">
        <br>
        Confirmar servicio
      </a>
    </div>
    <div class="col col-3 text-center">
      <a href="<?php echo site_url('servicios_realizados')?>">
        <img src="public/assets/img/servicios_realizados.svg" alt="Boton para ver los servicios realizados" width="50">
        <br>
        Servicios realizados
      </a>
    </div>
    <div class="col col-3 text-center">
      <a href="<?php echo site_url('fixture')?>">
        <img src="public/assets/img/fixture.svg" alt="Boton para ver el fixture" width="50">
        <br>
        Fixture
      </a>
    </div>
  </div>
  <div class="row pt-4">
  <div class="col col-3 text-center">
      <a href="<?php echo site_url('recursos')?>">
        <img src="public/assets/img/van.svg" alt="Boton para ver los recursos" width="50">
        <br>
        Recursos
      </a>
    </div>
    <div class="col col-3 text-center">
      <a href="<?php echo site_url('conductor')?>">
        <img src="public/assets/img/volante.svg" alt="Boton para ver los conductores" width="50">
        <br>
        Conductor
      </a>
    </div>
    <div class="col col-3 text-center">
      <a href="<?php echo site_url('registro_pagos')?>">
        <img src="public/assets/img/registro_pagos.svg" alt="Boton para confirmar servicio" width="50">
        <br>
        Registro de pagos
      </a>
    </div>
    <div class="col col-3 text-center">
      <a href="<?php echo site_url('facturas-realizadas')?>">
        <img src="public/assets/img/factura.svg" alt="Boton para confirmar servicio" width="50">
        <br>
        Facturas realizadas
      </a>
    </div>
  </div>
  <div class="row pt-4">
    <div class="col col-3 text-center">
      <a href="<?php echo site_url('gastos_menores')?>">
        <img src="public/assets/img/caja_chica.svg" alt="Boton para confirmar servicio" width="50">
        <br>
        Caja de gastos menores
      </a>
    </div>
    <div class="col col-3 text-center">
      <a href="<?php echo site_url('reportes')?>">
        <img src="public/assets/img/reportes.svg" alt="Boton para confirmar servicio" width="50">
        <br>
        Reportes
      </a>
    </div>
  </div>
</div>
<style>
table{
  border: solid 3px;
}
a{
  text-decoration: inherit !important;
  color: inherit !important;
  cursor: auto !important;
  }
a.nostyle:link {
    text-decoration: inherit !important;
    color: inherit !important;
    cursor: auto !important;
}

a.nostyle:visited {
    text-decoration: inherit!important;
    color: inherit!important;
    cursor: auto!important;
}
</style>