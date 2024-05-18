<h5 class="text-underline">Servicios activos</h5>
<form action="<?= site_url('modificar_usuarios/'. $usuario['id_user'])?>" method="post">
              <!-- TABLA CON LOS RESULTADOS DE LOS SERVICIOS ACTIVOS -->
    <div class="" data-bs-theme="">
      <table class="table table-light table-hover table-striped table-sm m-0 rounded-edges">
        <tbody>
          <tr>
            <td>id</td>
            <td><input type="text" name="" id="" value="<?= $usuario['id_user']?>"></td>
          </tr>
          <tr>
            <td>tipo</td>
            <td><input type="text" name="" id="" value="<?= $usuario['id_user_type']?>"></td>
          </tr>
          <tr>
            <td>nombre</td>
            <td><input type="text" name="" id="" value="<?= $usuario['user_name']?>"></td>
          </tr>
          <tr>
            <td>apellido</td>
            <td><input type="text" name="" id="" value="<?= $usuario['user_lastname']?>"></td>
          </tr>
          <tr>
            <td>usuario</td>
            <td><input type="text" name="" id="" value="<?= $usuario['user_username']?>"></td>
          </tr>
          <tr>
            <td>correo</td>
            <td><input type="text" name="" id="" value="<?= $usuario['user_email']?>"></td>
          </tr>
          <tr>
            <td>telefono</td>
            <td><input type="text" name="" id="" value="<?= $usuario['user_phone']?>"></td>
          </tr>
          <tr>
            <td>rut</td>
            <td><input type="text" name="" id="" value="<?= $usuario['user_rut']?>"></td>
          </tr>
          <tr>
            <td>contraseña</td>
            <td><input type="text" name="" id="" value="<?= $usuario['user_pass']?>"></td>
          </tr>
          <tr>
            <td>fecha creación</td>
            <td><input type="text" name="" id="" value="<?= $usuario['user_created_at']?>"></td>
          </tr>
        </tbody>
      </table>
    </div>
    </form>
    <button class="btn btn-primary">Modificar</button>