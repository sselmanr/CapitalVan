<h5 class="text-underline">Servicios activos</h5>
              <!-- TABLA CON LOS RESULTADOS DE LOS SERVICIOS ACTIVOS -->
    <div class="" data-bs-theme="">
      <table class="table table-light table-hover table-striped table-sm m-0 rounded-edges">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th class="d-none d-lg-table-cell">Correo</th>
            <th>RUT</th>
            <th class="d-none d-lg-table-cell">Fecha creación</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($usuarios as $usuario) : ?>
            <tr>
              <td> <?= $usuario['id_user']?> </td>
              <td> <?= $usuario['user_name']?> &nbsp; <?= $usuario['user_lastname']?></td>
              <td> <?= $usuario['user_email']?> &nbsp; <?= $usuario['user_phone']?></td>
              <td class="d-none d-lg-table-cell"> <?= $usuario['user_rut']?> </td>
              <td class="d-none d-lg-table-cell"> <?= $usuario['user_created_at']?> </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>