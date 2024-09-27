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
            <label for="">Ingrese horas trabajadas</label>
            <input type="number" name="time[]">
            <br>
  
<?php
    echo "<br>";}
    ?>
        <input type="submit" value="Enviar">
        </form>
    <?php
    }  else{
        $prof=$_REQUEST['selec'];
        $h=$_REQUEST['time'];
        $salary_ing=2000000;
        $salary_tec=1000000;
        $mes=$salary_ing/26;
        $mes_t=$salary_tec/26;
        $day=$mes/8;
        $day_tec=$mes_t/8;  
        foreach($prof as $profe){
            foreach($h as $time){
                echo $time;
                $hora_extra=[(int)$time-160];//cpnvertir a int
                foreach($hora_extra as $he){
                    if($he==0 && $profe=="1"){
                        echo "<p> ing $salary_ing</p>";
                        echo "<br>";
                    } elseif($he==0 && $profe="2"){
                        echo"<p> tec $salary_tec</P";
                        echo "<br>";
                    } elseif($he>0 && $profe="1"){
                        $pago=($day*$he)+$salary_ing;
                        echo "pago con horas extras: i",round($pago);
                        echo "<br>";
                    } elseif($he>0 && $profe="2"){
                        $pago_t=($day*$he)+$salary_tec;
                        echo "pago con horas extras: t",round($pago_t);
                        echo "<br>";
                    }
                }
            }
        }
    }
    ?>
</div>
</body>
</html>