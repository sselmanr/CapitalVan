<!-- CONTENT -->
<div class="container alto-pantalla">
  <h2 class="text-center pb-5">Confirmar servicio</h2>
  <h5 class="pb-1">
    Buscar por fecha
  </h5>
  <div class="d-flex">
    <input type="date" name="" id="filtro_fecha" class="form-control mx-2">
    <button class="btn btn-info form-control mx-2" id="mostrar_todos">Mostrar todos</button>
  </div>
  <div class="row d-flex justify-content-start align-items-center pt-4">
    <div class="">
      <h5 class="text-center pb-3" id="subtitulo"></h5>
    </div>

    <?php foreach($servicios as $servicio) : ?>
      <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 mb-3" id="servicio" data-pagado data-date="" data-bs-toggle="modal" data-bs-target="#datosServicio" type="button">
          <a href="<?= "confirmar/" . $servicio['id_service']?>">
          <div class="d-flex flex-row align-items-center bg-light rounded-pill">
            <div class="d-flex justify-content-center align-items-center bg-info rounded-circle text-white fw-bold" style="width: 50px; height: 50px; border: 3px solid white;">10:30</div>
            <div class="flex-grow-1 ms-2 me-3">
              <h6 class="text-dark mb-0">Empresa 123 S.A.</h6>
            </div>
          </div>
        </a>
      </div>
    <?php endforeach ?>
    <!-- Repite para las siguientes etiquetas -->
  </div>
</div>

  <div class="modal modal-lg fade text-dark" data-bs-theme="light" id="datosVuelos" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header justify-content-between">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Datos de servicio</h1>          
          <!-- <button type="button" class="btn-close btn-white" data-bs-dismiss="modal" aria-label="Close"></button> -->
          <button type="button float-start " class="btn btn-secondary" data-bs-dismiss="modal">X</button>
        </div>
        <div class="modal-body">
          <iframe src="https://www.google.cl/" width="100%" height="100%"></iframe>
        </div>
        <div class="modal-footer d-flex justify-content-between">
          <div class="col">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          </div>
          <div class="col d-flex justify-content-end">
            <button type="button" class="btn btn-danger">Cancelar</button> &nbsp;
            <button type="button" class="btn btn-success">Aprobar</button>
          </div>
        </div>
      </div>
    </div>
  </div>



<div class="modal modal-lg fade text-dark align-items-center" data-bs-theme="light" id="datosServicio" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header justify-content-between">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Datos de servicio</h1>          
          <!-- <button type="button" class="btn-close btn-white" data-bs-dismiss="modal" aria-label="Close"></button> -->
          <button type="button float-start " class="btn btn-secondary" data-bs-dismiss="modal">X</button>
        </div>
        <div class="modal-body">
        <div class="container-fluid  rounded">
          <div class="row">
            <div class="col text-dark">Empresa</div>
            <div class="col text-dark">Nombre de la empresa uno</div>
          </div>
          <hr>
          <div class="row">
            <div class="col text-dark">Archivo</div>
            <div class="col text-dark">nombre_del_archivo</div>
          </div>
          <hr>
          <div class="row">
            <div class="col text-dark">N° de pasajeros</div>
            <div class="col text-dark">12</div>
          </div>
          <hr>
          <div class="row">
            <div class="col text-dark">Sigla del servicio</div>
            <div class="col text-dark">SigLA123</div>
          </div>
          <hr>
          <div class="row">
            <div class="col text-dark">Origen</div>
            <div class="col text-dark">Aeropuerto SCL</div>
          </div>
          <hr>
          <div class="row">
            <div class="col text-dark">Destino</div>
            <div class="col text-dark">Hotel Carrera</div>
          </div>
          <hr>
          <div class="row">
            <div class="col text-dark">Fecha</div>
            <div class="col text-dark">01-04-2024</div>
          </div>
          <hr>
          <div class="row">
            <div class="col text-dark">Conductor</div>
            <div class="col text-dark">Pedro Pascal</div>
          </div>
          <hr>
          <div class="row">
            <div class="col text-dark">Valor</div>
            <div class="col text-dark">$100.000</div>
          </div>
          <hr>
          <div class="row">
            <div class="col text-dark">Observaciones</div>
            <div class="col text-dark">Un pasajero baja en Alameda 1334</div>
          </div>
          <hr>
          <div class="row">
            <div class="col text-dark d-flex align-items-center">Aprobado por</div>
            <div class="col text-dark">
              Jorge Campillay <br>
              Sebastián Rosales <br>
              Salvador Selman <br>
            </div>
          </div>
        </div>
        </div>
        <div class="modal-footer d-flex justify-content-between">
          <div class="col">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          </div>
          <div class="col d-flex justify-content-end">
            <button type="button" class="btn btn-danger">Cancelar</button> &nbsp;
            <button type="button" class="btn btn-success">Aprobar</button>
          </div>
        </div>
      </div>
    </div>
  </div>
<style>
  hr{
    margin-top: 4px !important;
    margin-bottom: 4px !important;
  }
</style>
<script>
  $(document).ready(function(){
    $("#subtitulo").fadeOut(1);
    $("#mostrar_todos").click(function(){
      $("[data-date]").fadeIn();
      $("#subtitulo").fadeOut();
      $("#filtro_fecha").val("");
    });

    $("#filtro_fecha").change(function(){
      var fecha_seleccionada = $(this).val();
      var fecha = this.value.split("-");

      $("[data-date]").each(function(){
        var fecha_elemento = $(this).data("date");

        if (fecha_seleccionada === fecha_elemento) {
          $(this).fadeIn();
        } else {
          $(this).fadeOut();
          $("#subtitulo").text("Mostrando servicios de " + fecha[2] + "/" + fecha[1] + "/" + fecha[0]);
          $("#subtitulo").fadeIn();
        }
      });
    });

  });
</script>
<style>
  .borde-negro{
    border:solid 2px black;
  }
</style>