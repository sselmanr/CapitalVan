<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CapitalVan</title>
    <meta name="description" content="Gestion de viajes de CapitalVan">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- <link href="public/assets/css/estilos2.css" rel="stylesheet"> -->
</head>
<body>
<div class="pt-5 text-white text-center pb-5">
  <img src="public/assets/img/logoCapitalVan.png" alt="Logo de CapitalVan" width="300" class="pt-5">
</div>

<div class="container responsivo">
  <form action="home" method="POST">
    <div class="mb-3 pb-2">
      <label for="username" class="form-label">Nombre de usuario</label>
      <input type="text" class="form-control" id="username" placeholder="Usuario">
    </div>
    <div class="mb-3 pb-2">
      <label for="pass" class="form-label">Contraseña</label>
      <input type="password" class="form-control" id="pass" placeholder="******">
    </div>
    <div class="col d-flex justify-content-center justify-content-md-end pt-3">
      <input type="submit" value="Iniciar sesión" class="btn btn-dark w-100 btn-responsive">
    </div>
  </form>
</div>
<style>
  @media (min-width: 768px) {
    .btn-responsive {
        width: 150px !important; /* O puedes especificar un ancho fijo, por ejemplo, width: 200px; */
    }
    .responsivo{
      max-width: 545px;
    }
}
</style>
</body>
</html>