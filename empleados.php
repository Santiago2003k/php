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
        $profe=$_REQUEST['selec'];
        $h=$_REQUEST['time'];
        $salary_ing=2000000;
        $salary_tec=1000000;
        $mes=$salary_ing/26;
        $mes_t=$salary_tec/26;
        $day=$mes/8;
        $day_tec=$mes_t/8;
        $pago=[];  
        $pago_t=[];
            foreach($h as $key => $t){
                echo "<li>$key</li>";
                $hora_extra[$key]=(int)$t-160;//convertir a int
                echo "<li>$hora_extra[$key]</li>";
                echo "<li>$profe[$key]</li>";
                    if($hora_extra[$key]==0 && $profe[$key]=="1"){
                        echo "<p> Su salario $salary_ing</p>";
                        echo "<br>";
                    }elseif($hora_extra[$key]==0 && $profe[$key]="2"){
                        echo"<p> tec $salary_tec</P>";
                        echo "<br>";
                    } elseif($hora_extra[$key]>0 && $profe[$key]="1"){
                        $pago[$key]=($day*$hora_extra[$key])+$salary_ing;
                        echo "pago con horas extras: ",round($pago[$key]);
                        echo "<br>";
                    } elseif($hora_extra[$key]>0 && $profe[$key]="2"){
                        $pago_t=[($day_tec*$hora_extra[$key])+$salary_tec];
                        echo $day_tec;
                        echo "pago con horas extras: t",(round($pago_t[$key]));
                        echo "<br>";
                    } else{
                        echo $salary_ing;
                    }
                }
            }
    ?>
</div>
</body>
</html>