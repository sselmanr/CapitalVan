<!-- CONTENT -->
<div class="container text-center alto-pantalla">
  <h1 class="text-start ps-4">¡Hola <?php echo session()->get('user_name') ?>!</h1>
  <div class="container align-items-center">
    <h5 class="text-underline">Servicios activos</h5>
              <!-- TABLA CON LOS RESULTADOS DE LOS SERVICIOS ACTIVOS -->
    <div class="" data-bs-theme="">
      <table class="table table-light table-hover table-striped table-sm m-0 rounded-edges">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nombre conductor</th>
            <th class="d-none d-lg-table-cell">Nombre aprobador</th>
            <th>Origen</th>
            <th class="d-none d-lg-table-cell">Destino</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($services as $service) : ?>
            <tr>
              <td> <?= $service['id_service']?> </td>
              <td> <?= $service['nameDriver']?> &nbsp; <?= $service['lastnameDriver']?></td>
              <td> <?= $service['nameApprover']?> &nbsp; <?= $service['lastnameApprover']?></td>
              <td class="d-none d-lg-table-cell"> <?= $service['origin']?> </td>
              <td class="d-none d-lg-table-cell"> <?= $service['destination']?> </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>

              <!-- BOTONES DE NAVEGACION DE RESULTADOS -->
      <nav aria-label="Page navigation example borde-verde" data-bs-theme="light">
        <ul class="pagination text-dark justify-content-center justify-content-md-end pt-2">
          <?php if ($pager->getCurrentPage() != 1) : ?>
            <li class="page-item">
              <a class="page-link" href="<?= "home?page=" . $pager->getCurrentPage() - 1 ?>" aria-label="<?= lang('Pager.previous') ?>">
                <span aria-hidden="true">&laquo;</span>
              </a>
            </li>
          <?php else :?>
            <li class="page-item">
              <a class="page-link disabled"  aria-label="<?= lang('Pager.previous') ?>">
                <span aria-hidden="true">&laquo;</span>
              </a>
            </li>
          <?php endif ?>
          <li class="page-item">
            <?= str_ireplace('<a', '<a class="page-link"', $pager->links()) ?>
          </li>
          <?php if ($pager->getCurrentPage() < $pager->getPageCount()) : ?>
            <li class="page-item">
              <a class="page-link" href="<?= "home?page=" . $pager->getCurrentPage() + 1 ?>" aria-label="<?= lang('Pager.previous') ?>">
                <span aria-hidden="true">&raquo;</span>
              </a>
            </li>
          <?php else :?>
            <li class="page-item">
              <a class="page-link disabled"  aria-label="<?= lang('Pager.previous') ?>">
                <span aria-hidden="true">&raquo;</span>
              </a>
            </li>
          <?php endif ?>
        </ul>
      </nav>  
    </div>
              <!-- FIN TABLA CON LOS RESULTADOS DE LOS SERVICIOS ACTIVOS -->
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
      <a href="<?php echo site_url('listar_usuarios/2')?>">
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