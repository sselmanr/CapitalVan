<!-- CONTENT -->
<div class="container alto-pantalla px-3 px-lg-5">
  <h2 class="text-center pb-5">Ingresar servicio</h2>
  <form action="#" method="post">
    <div class="row pb-2">
      <div class="col"><label for="empresa">Empresa</label></div>
      <div class="col" data-bs-theme="dark">
          <select name="empresa" id="empresa" class="form-control form-select">
            <option selected hidden disabled>Seleccionar empresa</option>
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
      <div class="col"><input type="number" id="npasajeros" class="form-control" placeholder="Ej: 6"></div>
    </div>
    <div class="row pb-2">
      <div class="col"><label for="sigla_servicio">Sigla del servicio</label></div>
      <div class="col" data-bs-theme="dark">
          <select name="sigla_servicio" id="sigla_servicio" class="form-control form-select">
            <option disabled selected hidden>Seleccionar sigla</option>
            <option value="sigla_servicio1">Sigla 1</option>
            <option value="sigla_servicio2">Sigla 2</option>
            <option value="sigla_servicio3">Sigla 3</option>
          </select>
        </div>
    </div>
    <div class="row pb-2">
      <div class="col"><label for="origen_servicio">Origen</label></div>
      <div class="col"><input type="text" id="origen_servicio" class="form-control" placeholder="Ej: Santiago"></div>
    </div>
    <div class="row pb-2">
      <div class="col"><label for="destino_servicio">Destino</label></div>
      <div class="col"><input type="text" id="destino_servicio" class="form-control" placeholder="Ej: Viña del mar"></div>
    </div>
    <div class="row pb-2">
      <div class="col"><label for="observaciones">Observaciones</label></div>
      <div class="col"><textarea name="observaciones" id="observaciones" rows="4" class="form-control"></textarea></div>
    </div>
    <div class="row pb-2">
      <div class="col"><label for="fecha">Fecha del servicio</label></div>
      <div class="col">
        <input type="date" name="fecha" id="fecha" class="form-control">
      </div>
    </div>
    <div class="row pb-2">
      <div class="col"><label for="precio">Precio</label></div>
      <div class="col"><input type="text" data-type="currency" id="precio" class="form-control" placeholder="Ej: $120.000"></div>
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
  input[0].setSelectionRange(caret_pos, caret_pos);
}
</script>