<?php
include_once("conexion.php");
$name=$_POST['name'];
$tipo=$_POST['tipo'];
$price=$_POST['price'];
$data=$_POST['data'];
$concentracion=$_POST['concentracion'];
$conexion->query("INSERT INTO medicamento(nombre_medicamento, tipo, precio, fecha, concentracion) values('$name','$tipo',$price, '$data', $concentracion)");
?>

<div class="modal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Ingresar</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div>
        <form action="inventario.php" method="POST">
        <label for="">Cantidad de stock</label>
        <input type="text" name="stock">
        <input type="submit" value="Ingresar">
    </form>
    </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
        </form>
      </div>
    </div>
  </div>
</div>
