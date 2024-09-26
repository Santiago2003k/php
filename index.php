<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tienda de naranjas</h1>
    <?php
    if(empty($_REQUEST)){
    ?>
        <form action="" method="">
            <label for="num">¿Cuánto clientes? </label>
            <input type="text" name="num">
            <input type="submit" name="submit" value="enviar">
        </form>
<?php    
    } elseif (isset($_REQUEST['num'])){
    ?>
        <form action="">
      <?php
      $num= $_REQUEST['num'];
      for($i=0; $i<$num; $i++){
        ?>
        <label for="">Ingrese la Cantidad de kilos del cliente <?php echo$i+1?></label>
        <input type="number" name="cantidad[]">
        <br>
    <?php
      }
    ?>   
        <input type="submit" value="Envia">   
        </form>
    <?php
    } else {
        $cantidades=$_REQUEST['cantidad'];
        $p=10000;
        $acum=0;
        foreach($cantidades as $cantidad){
            echo "<p>Cantidad : $cantidad </p>";
            if($cantidad>10){
                $total=$p*$cantidad;
                $acum=$acum+$total;
                echo "Tiene descuento";
            } else{
                echo"No tiene descuento";
            }
        }
        echo"<br>";
        echo "Total en ventas: ",$acum;
    }
   ?>
</body>
</html>