<h2 class="text-center pb-5">Ingresar nuevo 
  <?php
    if($user==2) {
      echo "conductor";
    } elseif ($user == 3) {
      echo "guía";
    }  elseif ($user == 1) {
      echo "administrador";
    } else {
      echo "cliente";
    }
  ?>
</h2>
<form action="<?php echo site_url('ingresarUsuario')?>" method="post">
  <div class="container">
    <div class="row">
      <div class="col" hidden></div>
      <div class="col"hidden> <input type="text" name="" id="id_user_type" value="<?php echo $user?>"> </div>
    </div>
    <div class="row">
      <div class="col">Nombre</div>
      <div class="col"><input type="text" name="" id=""></div>
    </div>
    
    <div class="row">
      <div class="col">Apellido</div>
      <div class="col"><input type="text" name="" id=""></div>
    </div>
    
    <div class="row">
      <div class="col">Correo</div>
      <div class="col"><input type="email" name="" id=""></div>
    </div>
    
    <div class="row">
      <div class="col">Teléfono</div>
      <div class="col"><input type="tel" name="" id=""></div>
    </div>
    
    <div class="row">
      <div class="col">RUT</div>
      <div class="col"><input type="text" name="" id=""></div>
    </div>
    
    <div class="row">
      <div class="col">Contraseña</div>
      <div class="col"><input type="pass" name="" id=""></div>
    </div>
  </div>
  </form>