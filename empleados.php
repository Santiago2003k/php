<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form action="">
            <h1>Horas extras</h1>
    <?php
    if(empty($_REQUEST)){
    ?>
        <form action="" method="">
   
            <label for="num">¿Cuánto empleados? </label>
            <input type="text" name="num">
            <input type="submit" name="submit" value="enviar">
        </form>
    <?php
    } elseif (isset($_REQUEST['num'])) {
    ?> 
        <form action="">
     <?php 
    $num= $_REQUEST['num'];
    for($i=0; $i<$num; $i++){
    ?>
            <label for="">Elija profesión para empleado <?php echo$i+1?></label>
            <select name="selec[]" id="">
                <option value="1">Ingeniero</option>
                <option value="2">Tecnologo</option>
            </select>
    <br>
<?php
    echo "<br>";}
    ?>
        <input type="submit" value="Enviar">
        </form>
    <?php
    } elseif(isset($_REQUEST['selec'])){
    ?>
        <form action="">
    <?php
    $profetion=$_REQUEST['selec']; 
    foreach($profetion as $profesion){
    ?>
    <label for="">Ingrese horas trabajadas</label>
    <input type="number" name="time[]">
    <br>
    <?php
    echo"<br>";
    }
    ?>
    <input type="submit" value="Calcular">
    </form>
    <?php
    } else{
        $prof=$_REQUEST['selec'];
        $h=$_REQUEST['time'];
        $salary_ing=200000;
        $salary_tec=100000;
        $mes=$salary_ing/26;
        $mes_t=$salary_tec/26;
        $day=$mes/8;
        $day_tec=$mes_t/8;
        foreach($prof as $pr){
        foreach($h as $hora){
        $extra[]=$hora-160;
        }
            foreach($extra as $time){
                if($time<=0 && $pr==1){
                    echo"<p> Su salario es:  $salary_ing</p>";
                }
                elseif($time<=0 && $pr==2){
                    echo"<p> Su salario es:  $salary_tec</p>";
                }
            }
        }
    }
    ?>
</div>
</body>
</html>