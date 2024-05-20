<!-- CONTENT -->
<div class="container alto-pantalla px-3 px-lg-5">
  <h2 class="text-center pb-5">Ingresar servicio</h2>
  <form action="#" method="post">
    <div class="row pb-2">
      <input type="text" name="id_service" id="id_service" value="<?= $servicio['id_service'] ?>" hidden></input>
      <div class="col"><label for="empresa">Empresa</label></div>
      <div class="col" data-bs-theme="dark">
          <input type="text" name="" id="" class="form-control" value="<?= $servicio['company_name'] ?>" disabled>
        </div>
    </div>
    <!-- <div class="row pb-2">
      <div class="col"><label for="archivo"></label>Archivo</div>
      <div class="col"><input type="file" id="archivo" class="form-control"></div>
    </div> -->
    <div class="row pb-2">
      <div class="col"><label for="npasajeros"></label>N° de pasajeros</div>
      <div class="col"><input type="number" id="npasajeros" class="form-control" value="<?= $servicio['service_quantity_passengers'] ?>" disabled></div>
    </div>
    <div class="row pb-2">
      <div class="col"><label for="sigla_servicio">Sigla del servicio</label></div>
      <div class="col" data-bs-theme="dark">
          <input class="form-control" type="text" name="sigla" id="sigla" value="<?= $servicio['service_acronym'] ?>" disabled>
        </div>
    </div>
    <div class="row pb-2">
      <div class="col"><label for="origen_servicio">Origen</label></div>
      <div class="col">
        <input type="text" name="" id="" class="form-control" value="<?= $servicio['origin_place_name'] ?>" disabled>
      </div>
    </div>
    <div class="row pb-2">
      <div class="col"><label for="destino_servicio">Destino</label></div>
      <div class="col">
        <input class="form-control" type="text" name="" id="" value="<?= $servicio['destination_place_name'] ?>" disabled>
      </div>
    </div>
    <div class="row pb-2">
      <div class="col"><label for="fecha">Fecha del servicio</label></div>
      <div class="col">
        <input type="date" name="fecha" id="fecha" class="form-control" value="<?= $servicio['service_date'] ?>" disabled>
      </div>
    </div>
    <div class="row pb-2">
      <div class="col"><label for="precio">Precio</label></div>
      <div class="col"><input type="text" data-type="currency" id="precio" class="form-control" value="<?= $servicio['service_price'] ?>" disabled></div>
    </div>
    <div class="row pb-2">
      <div class="col"></div>
      <div class="col d-flex">
        <div class="col-6"><a href="<?= site_url('confirmarServicio/' . $servicio['id_service'] . '/0') ?>" class="btn btn-danger">Cancelar</a></div>
        <div class="col-6 d-flex justify-content-end"><a href="<?= site_url('confirmarServicio/' . $servicio['id_service'] . '/1') ?>" class="btn btn-success">Aprobar</a></div>
      </div>
    </div>
  </form>

</div>
<script>
  // Jquery Dependency

$("input[data-type='currency']").on({
    keyup: function() {
      formatCurrency($(this));
    },
    blur: function() { 
      formatCurrency($(this), "blur");
    }
});


function formatNumber(n) {
  // format number 1000000 to 1,234,567
  return n.replace(/\D/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ".")
}


function formatCurrency(input, blur) {
  // appends $ to value, validates decimal side
  // and puts cursor back in right position.
  
  // get input value
  var input_val = input.val();
  
  // don't validate empty input
  if (input_val === "") { return; }
  
  // original length
  var original_len = input_val.length;

  // initial caret position 
  var caret_pos = input.prop("selectionStart");
    
  // check for decimal
  if (input_val.indexOf(",") >= 0) {

    // get position of first decimal
    // this prevents multiple decimals from
    // being entered
    var decimal_pos = input_val.indexOf(",");

    // split number by decimal point
    var left_side = input_val.substring(0, decimal_pos);
    var right_side = input_val.substring(decimal_pos);

    // add commas to left side of number
    left_side = formatNumber(left_side);

    // validate right side
    right_side = formatNumber(right_side);
    
    // On blur make sure 2 numbers after decimal
    if (blur === "blur") {
      right_side += "00";
    }
    
    // Limit decimal to only 2 digits
    right_side = right_side.substring(0, 2);

    // join number by .
    input_val = "$" + left_side + "," + right_side;

  } else {
    // no decimal entered
    // add commas to number
    // remove all non-digits
    input_val = formatNumber(input_val);
    input_val = "$" + input_val;
    
    // final formatting
    if (blur === "blur") {
      input_val += "";
    }
  }
  
  // send updated string to input
  input.val(input_val);

  // put caret back in the right position
  var updated_len = input_val.length;
  caret_pos = updated_len - original_len + caret_pos;
  input.setSelectionRange(caret_pos, caret_pos);
}
</script>