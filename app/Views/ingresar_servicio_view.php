<!-- CONTENT -->
<div class="container alto-pantalla">
  <h2 class="text-center pb-5">Ingresar servicio</h2>
  <form action="#" method="post">
    <div class="row pb-2">
      <div class="col"><label for="empresa">Empresa</label></div>
      <div class="col" data-bs-theme="dark">
          <select name="empresa" id="empresa" class="form-control form-select">
            <option value="Empresa1">Empresa 1</option>
            <option value="Empresa2">Empresa 2</option>
            <option value="Empresa3">Empresa 3</option>
          </select>
        </div>
    </div>
    <div class="row pb-2">
      <div class="col"><label for="archivo"></label>Archivo</div>
      <div class="col"><input type="file" id="archivo" class="form-control"></div>
    </div>
    <div class="row pb-2">
      <div class="col"><label for="npasajeros"></label>N° de pasajeros</div>
      <div class="col"><input type="number" id="npasajeros" class="form-control"></div>
    </div>
    <div class="row pb-2">
      <div class="col"><label for="sigla_servicio">Sigla del servicio</label></div>
      <div class="col" data-bs-theme="dark">
          <select name="sigla_servicio" id="sigla_servicio" class="form-control form-select">
            <option value="sigla_servicio1">Sigla 1</option>
            <option value="sigla_servicio2">Sigla 2</option>
            <option value="sigla_servicio3">Sigla 3</option>
          </select>
        </div>
    </div>
    <div class="row pb-2">
      <div class="col"><label for="origen_servicio">Origen</label></div>
      <div class="col"><input type="text" id="origen_servicio" class="form-control"></div>
    </div>
    <div class="row pb-2">
      <div class="col"><label for="destino_servicio">Destino</label></div>
      <div class="col"><input type="text" id="destino_servicio" class="form-control"></div>
    </div>
    <div class="row pb-2">
      <div class="col"><label for="observaciones">Observaciones</label></div>
      <div class="col"><textarea name="observaciones" id="observaciones" rows="8" class="form-control"></textarea></div>
    </div>
    <div class="row pb-2">
      <div class="col"><label for="fecha">Fecha del servicio</label></div>
      <div class="col">
        <input type="date" name="fecha" id="fecha" class="form-control">
      </div>
    </div>
    <div class="row pb-2">
      <div class="col"><label for="precio">Precio</label></div>
      <div class="col"><input type="number" id="precio" class="form-control"></div>
    </div>
  </form>
</div>