<?php include('header.php');
?>

<div class="row">
  <div class="col-1">

  </div>
  <div class="col-10 text-center bg-dark text-white fs-1">
    NOM-005-ASEA-2016
  </div>
  <div class="col-1">

  </div>
</div>
<br>
<div class="card col-md-12">
  <div class="card-header bg-dark text-white fs-3 text-center">
    Recepción de combustibles
  </div>
  <div class="card-body">
    <form class="" action="save_proveedores.php" method="post">
      <div class="mb-3">
        <div class="row">
          <div class="col-2">
            <label class="fw-bolder fs-5 form-control-md">Fecha de recepción: </label>
          </div>
          <div class="col-3">
            <input type="date" id="fechaRecepcion" name="fechaRecepcion" class="form-control form-control-lg">
          </div>
        </div>
      </div>
      <div class="mb-3">
        <div class="row">
          <div class="col-2">
            <label class="fw-bolder fs-5 form-control-lg">Hora de inicio: </label>
          </div>
          <div class="col-3">
            <input type="time" name="horaInicio" class="form-control form-control-lg">
          </div>
            <div class="col-2">
                <label class="fw-bolder fs-5 form-control-lg">Hora de fin: </label>
            </div>
            <div class="col-3">
              <input type="time" name="horaFin" class="form-control form-control-lg">
            </div>
        </div>
      </div>
      <div class="mb-3">
        <div class="row">
          <div class="col-3">
            <label class="fw-bolder fs-5">Número de tanque: </label>
          </div>
          <div class="col-3">
            <select class="form-select form-control-lg" name="selNoTanque">
              <option selected>Selecciona una opción</option>
              <option value="1">1</option>
              <option value="2">2</option>
            </select>
          </div>
        </div>
      </div>
      <div class="mb-3 row">
        <div class="col-3">
          <label class="fw-bolder fs-5">Volumen descargado (en litros): </label>
        </div>
        <div class="col-3">
          <input type="number" name="volumenDescarga" class="form-control form-control-lg" placeholder="20000">
        </div>
        <div class="col-3">
          <label class="fw-bolder fs-5">Volumen en factura (en litros): </label>
        </div>
        <div class="col-3">
          <input type="number" name="volumenFactura" class="form-control form-control-lg" placeholder="20000">
        </div>
      </div>
      <div class="mb-3 row">
        <div class="col-3">
          <label class="fw-bolder fs-5">Número de factura: </label>
        </div>
        <div class="col-3">
          <input type="text" name="noFactura" class="form-control form-control-lg" placeholder="F-00001">
        </div>
        <div class="col-2">
          <label for="formFile" class="form-label fw-bolder fs-5">Selecciona la factura:</label>
        </div>
        <div class="col-4">
          <input class="form-control form-control-lg" type="file" id="docFactura">
        </div>
      </div>
      <div class="mb-3 row">
        <div class="col-3">
          <label class="fw-bolder fs-5">Comentarios: </label>
        </div>
        <div class="col-12">
          <input type="text" name="Comentarios" class="form-control form-control-lg" placeholder="Escriba cualquier comentario aquí">
        </div>
      </div>
      <div class="mb-3 row">
          <div class="col-3">
            <label class="fw-bolder fs-5">Nombre de quien firma: </label>
          </div>
          <div class="col-3">
            <select class="form-select form-control-lg" name="selFirma">
              <option selected>Selecciona una opción</option>
              <option value="1">Oscar Barrales</option>
              <option value="2">Kenia Castrejón</option>
            </select>
          </div>
      </div>

      <input type="submit" name="guardarDescarga" value="Guardar Datos" class="btn btn-success fs-4">
    </form>
  </div>
</div>

<?php include('footer.php'); ?>
