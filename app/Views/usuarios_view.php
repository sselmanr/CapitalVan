<h5 class="text-underline">Usuarios</h5>
              <!-- TABLA CON LOS RESULTADOS DE LOS SERVICIOS ACTIVOS -->
    <div class="" data-bs-theme="">
      <table class="table table-light table-hover table-striped table-sm m-0 rounded-edges">
        <thead>
          <tr>
            <th hidden>ID</th>
            <th>Nombre</th>
            <th>RUT</th>
            <th class="d-none d-lg-table-cell">Correo</th>
            <th class="d-none d-lg-table-cell">Teléfono</th>
            <th>Modificar</th>
            <th>Eliminar</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($usuarios as $usuario) : ?>
            <tr>
              <td hidden> <?= $usuario['id_user']?> </td>
              <td> <?= $usuario['user_name']?> &nbsp; <?= $usuario['user_lastname']?></td>
              <td> <?= $usuario['user_rut']?></td>
              <td> <?= $usuario['user_email']?></td>
              <td> <?= $usuario['user_phone']?></td>
              <td><a href="<?= site_url('mostrar_usuarios/' . $usuario['id_user']) ?>" class="btn btn-warning">Modificar</a></td>
              <td><a href="<?= site_url('eliminar_usuarios/' . $usuario['id_user'] . "/" . $usuario['id_user_type'])?>" class="btn btn-danger">Eliminar</a></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>