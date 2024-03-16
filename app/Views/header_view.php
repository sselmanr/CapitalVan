<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
  <meta charset="UTF-8">
  <title>CapitalVan</title>
  <meta name="description" content="Gestion de viajes de CapitalVan">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" type="image/png" href="public/assets/img/favicon.png">
  <link rel="stylesheet" href="public/assets/css/styles.css">

  <!-- BOOTSTRAP -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body class=" gradiente" style="height: 100%;">
<style>
</style>
<!-- HEADER: MENU + HEROE SECTION -->
<header class="pb-2 px-3 container">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="<?php echo site_url('home')?>" >
        <img src="public/assets/img/logoCapitalVan.png" alt="" class="logo-navbar float-center d-inline-block align-text-top" width="100">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <hr class="d-flex justify-content-center ocultar">
        <div class="collapse navbar-collapse float-end text-md-center" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0 align-items-center">
            <hr class="vr">
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('home')?>">Home</a>
            </li>
            <hr class="vr">
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('ingresar_servicio')?>"> Ingresar servicio</a>
            </li>
            <hr class="vr">
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('confirmar_servicio')?>">Confirmar servicio</a>
            </li>
            <hr class="vr">
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('servicios_realzados')?>">Servicios realizados</a>
            </li>
            <hr class="vr">
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('fixture')?>">Fixture</a>
            </li>
            <hr class="vr">
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('recursos')?>">Recursos</a>
            </li>
            <hr class="vr">
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('conductor')?>">Conductor</a>
            </li>
            <hr class="vr">
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('gastos_menores')?>">Caja de gastos menores</a>
            </li>
            <hr class="vr">
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('facturas_realizadas')?>">Facturas realizadas</a>
            </li>
            <hr class="vr">
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('registro_pagos')?>">Registro de pagos</a>
            </li>
            <hr class="vr">
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('reportes')?>">Reportes</a>
            </li>
            <hr class="vr">
          </ul>
        </div>
      </div>
    </nav>
</header>
<style>
  @media (max-width: 768px) {
    .vr {
      display: none;
    }

}

@media (min-width: 768px) {
    .ocultar{
      display: none !important;
    }

}
</style>