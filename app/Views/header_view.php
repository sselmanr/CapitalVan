<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
  <meta charset="UTF-8">
  <title>CapitalVan</title>
  <meta name="description" content="Gestion de viajes de CapitalVan">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" type="image/png" href="public/assets/img/favicon.png">
  <link rel="stylesheet" href="public/assets/css/styles.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

  <!-- BOOTSTRAP -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <!-- BOOTSTRAP -->
</head>
<body class=" gradiente" style="height: 100%;">
<style>
</style>
<!-- HEADER: MENU + HEROE SECTION -->
<header class="pb-2 px-3 container w-100">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="" href="<?php echo site_url('home')?>" >
          <img src="public/assets/img/logoCapitalVan.png" alt="" class="logo-navbar" width="100">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <hr class="d-flex justify-content-center ocultar">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex justify-content-center">
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('home')?>">Home</a>
            </li>
            <div class="mx-md-1 mx-lg-2 mx-xl-3 mx-xxl-4"></div>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Servicios
              </a>
              <ul class="dropdown-menu px-3" aria-labelledby="navbarDropdown">
                <!-- <li><hr class="dropdown-divider"></li> -->
                <li><a class="dropdown-item" href="<?php echo site_url('ingresar_servicio')?>">Ingresar servicio</a></li>
                <li><a class="dropdown-item" href="<?php echo site_url('confirmar_servicio')?>">Confirmar servicio</a></li>
                <li><a class="dropdown-item" href="<?php echo site_url('servicios_realizados')?>">Servicios realizados</a></li>
              </ul>
            </li>
            <div class="mx-md-1 mx-lg-2 mx-xl-3 mx-xxl-4"></div>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('fixture')?>">Fixture</a>
            </li>
            <div class="mx-md-1 mx-lg-2 mx-xl-3 mx-xxl-4"></div>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('recursos')?>">Recursos</a>
            </li>
            <div class="mx-md-1 mx-lg-2 mx-xl-3 mx-xxl-4"></div>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('conductor')?>">Conductor</a>
            </li>
            <div class="mx-md-1 mx-lg-2 mx-xl-3 mx-xxl-4"></div>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Reportes
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <!-- <li><hr class="dropdown-divider"></li> -->
                <li><a class="dropdown-item" href="<?php echo site_url('gastos_menores')?>">Caja de gastos menores</a></li>
                <li><a class="dropdown-item" href="<?php echo site_url('facturas_realizadas')?>">Facturas realizadas</a></li>
                <li><a class="dropdown-item" href="<?php echo site_url('registro_pagos')?>">Registro de pagos</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="<?php echo site_url('reportes')?>">Reportes</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
</header>
<style>
.navbar-nav {
      flex-grow: 1; /* Permite que los elementos del menú ocupen todo el espacio disponible */
      
  }
  .margen{
    margin-left: 2rem !important;
    margin-right: 2rem !important;
  }
  @media (max-width: 991.33px) {
  .vr {
    display: none;
      }
  }

  @media (min-width: 991.33px) {
      .ocultar{
        display: none !important;
      }
  }
</style>