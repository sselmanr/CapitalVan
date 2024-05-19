<!-- CONTENT -->
<div class="container alto-pantalla">
  <h2 class="text-center pb-5">Servicios realizados</h2>
  

  <div class="row row-cols-1 row-cols-lg-2 d-flex justify-content-between">
    <div class="col">
      <h5 class="pb-2">Servicios <button class="badge bg-success pagados">pagados</button> y <button class="badge bg-warning pendientes">pendientes</button>.</h5>
    </div>
      <div class="row">
        <div class="col col-3"><h5>Empresa:</h5></div>
        <div class="col col-5">
          <select name="select_empresa" id="select_empresa" class="form-control">
            <option value="" disabled selected hidden></option>
            <?php foreach ($empresas as $empresa) :?>
              <option value="<?= esc($empresa['company_name']); ?>"><?= $empresa['company_name']; ?></option>
            <?php endforeach ?>
          </select>
        </div>
        <div class="col col-4"><button class="btn btn-info form-control mx-2" id="mostrar_todos">Mostrar todos</button></div>
      </div>
  </div>


  <div class="row d-flex justify-content-center align-items-center pt-4 ">
    <!-- Etiqueta 1 -->
    <?php foreach ($servicios as $servicio) :?>
      <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 pb-3 ancho-maximo" id="servicio"

      <?php if ($servicio['service_status'] == 1) { 
              echo "data-pagado";
            } else {
              echo "data-pendiente";
            }?>

      data-nombre-empresa="<?= $servicio['company_name']?>">
        <div class="d-flex flex-row align-items-center bg-light rounded-pill">
          <div class="d-flex justify-content-center align-items-center

          <?php if ($servicio['service_status'] == 1) { 
              echo "bg-success";
            } else {
              echo "bg-warning";
            }?>

           rounded-circle text-white fw-bold" style="width: 50px; height: 50px; border: 3px solid white;"><?= substr($servicio['service_start_time'], 0, 5)?></div>
          <div class="flex-grow-1 ms-2 me-3">
            <h6 class="text-dark mb-0"><?= $servicio['company_name']?></h6>
          </div>
        </div>
      </div>
    <?php endforeach ?>
    <!-- Repite para las siguientes etiquetas -->
  </div>

  <div class="container-fluid bg-light rounded" style="display:none;">
    <h2 class="text-center text-dark pb-3 pt-3">Datos de servicio</h2>
    <div class="row m-1">
      <div class="col text-dark">Empresa</div>
      <div class="col text-dark">Nombre de la empresa uno</div>
    </div>
    <div class="row m-1">
      <div class="col text-dark">Archivo</div>
      <div class="col text-dark">nombre_del_archivo</div>
    </div>
    <div class="row m-1">
      <div class="col text-dark">N° de pasajeros</div>
      <div class="col text-dark">12</div>
    </div>
    <div class="row m-1">
      <div class="col text-dark">Sigla del servicio</div>
      <div class="col text-dark">SigLA123</div>
    </div>
    <div class="row m-1">
      <div class="col text-dark">Origen</div>
      <div class="col text-dark">Aeropuerto SCL</div>
    </div>
    <div class="row m-1">
      <div class="col text-dark">Destino</div>
      <div class="col text-dark">Hotel Carrera</div>
    </div>
    <div class="row m-1">
      <div class="col text-dark">Fecha</div>
      <div class="col text-dark">01-04-2024</div>
    </div>
    <div class="row m-1">
      <div class="col text-dark">Conductor</div>
      <div class="col text-dark">Pedro Pascal</div>
    </div>
    <div class="row m-1">
      <div class="col text-dark">Valor</div>
      <div class="col text-dark">$100.000</div>
    </div>
    <div class="row m-1 pt-4 pb-3">
      <div class="col text-dark">Observaciones</div>
      <div class="col text-dark">1 Pasajero baja en Alameda 1334</div>
    </div>
    <div class="row m-1 pt-3 pb-3">
      <div class="col text-dark">Aprobado por</div>
      <div class="col text-dark">Maria Antonieta de las Nieves</div>
    </div>
    <div class="row m-1 pb-4 text-center">
      <div class="col text-dark"><button class="btn btn-success">Aprobar</button></div>
      <div class="col text-dark"><button class="btn btn-danger">Cancelar</button></div>
    </div>
  </div>
</div>

<style>
  @media (max-width: 575.33px) {
    .ancho-maximo{
      max-width:87%;
      justify-content: center;
    } 
  }
</style>

<script>
  $(document).ready(function(){

    $(".pagados").click(function(){
      $("[data-pendiente]").fadeOut(300, function(){
        $("[data-pagado]").fadeIn(400);
      });
    });

    $(".pendientes").click(function(){
      $("[data-pagado]").fadeOut(300, function(){
        $("[data-pendiente]").fadeIn(400);
      });
    });

    $("#mostrar_todos").click(function(){
      $("[data-pagado]").fadeIn(400, function(){
        $("[data-pendiente]").fadeIn(400);
      });
      $("#select_empresa").val("");
    });

    $("#select_empresa").change(function(){
      var nom_empresa = $(this).val();
      $("[data-nombre-empresa]").each(function(){
        var nom_elemento = $(this).data("nombre-empresa");
        if (nom_empresa === nom_elemento) {
          $(this).fadeIn();
        } else {
          $(this).fadeOut();
        }
      });
    });

  });
</script>