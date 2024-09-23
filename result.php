<?php
    $id=$_REQUEST['id'];
    echo "Su id es: ",$id.'<br>';
    $name=$_REQUEST['nombre'];
    echo "Su nombre: ",$name.'<br>';
    $lastname=$_REQUEST['apellido'];
    echo "Su apellido: ",$lastname.'<br>';
    $email=$_REQUEST['email'];
    echo "Su correo es: ",$email.'<br>';
    $tel=$_REQUEST['telefono'];
    echo "Su número es: ",$tel.'<br>';
    $direction=$_REQUEST['direccion'];
    echo "Su dirección es: ",$direction.'<br>';
    $naci=$_REQUEST['fecha_nacimiento'];
    echo "Usted nació el: ",$naci.'<br>';
    $gender=$_REQUEST['genero'];
    echo "Usted es:  ",$gender.'<br>';
    $status=$_REQUEST['estado_civil'];
    echo "Su estado es: ",$status.'<br>';
    $ocupation=$_REQUEST['select'];
    $aux=$_REQUEST['aux'];
    $city=$_REQUEST['select_city'];
    $hr=$_REQUEST['horas'];
    if($ocupation=="value1" & $city="1"){
        $desc=8000000*0.10;
        $salary_end=8000000-$desc;
        $salary=$salary_end+$aux;
        $dia=8000000/26;
        $hora=$dia/8;
        $horas_extras=$hr-160;
            if($horas_extras<=0){
                echo "Su salario total es: ",$salary.'<br>';
            } else{
                $extra=$hora*0.50;
                $salary_total=$extra*$horas_extras;
                echo"Pago de hora extra: ",$extra.'<br>';
                $s_end=$salary+$salary_total;
                echo "Pago total: ",round($s_end);
            }
        
    } else if($ocupation=="value2" & $city="1"){
        $desc=6000000*0.05;
        $salary_end=6000000-$desc;
        $salary=$salary_end+$aux;
        $dia=6000000/26;
        $hora=$dia/8;
        $horas_extras=$hr-160;
            if($horas_extras<=0){
                echo "Su salario total es: ",$salary.'<br>';
            } else{
                $extra=$hora*0.50;
                $salary_total=$extra*$horas_extras;
                echo"Pago de hora extra: ",$extra.'<br>';
                $s_end=$salary+$salary_total;
                echo "Pago total: ",$s_end;
            }
    }
    else if($ocupation=="value1" & $city="2"){
        $desc=6000000*0.10;
        $salary_end=6000000-$desc;
        $salary=$salary_end+$aux;
        $dia=6000000/26;
        $hora=$dia/8;
        $horas_extras=$hr-160;
            if($horas_extras<=0){
                echo "Su salario total es: ",$salary.'<br>';
            } else{
                $extra=$hora*0.50;
                $salary_total=$extra*$horas_extras;
                echo"Pago de hora extra: ",$extra.'<br>';
                $s_end=$salary+$salary_total;
                echo "Pago total: ",$s_end;
            }
    } else if($ocupation=="value2" & $city="2"){
        $desc=4000000*0.05;
        $salary_end=4000000-$desc;
        $salary=$salary_end+$aux;
        $dia=4000000/26;
        $hora=$dia/8;
        $horas_extras=$hr-160;
            if($horas_extras<=0){
                echo "Su salario total es: ",$salary.'<br>';
            } else{
                $extra=$hora*0.50;
                $salary_total=$extra*$horas_extras;
                echo"Pago de hora extra: ",$extra.'<br>';
                $s_end=$salary+$salary_total;
                echo "Pago total: ",$s_end;
            }
    }
    else if($ocupation=="value1" & $city="3"){
        $desc=3000000*0.10;
        $salary_desc=3000000-$desc;
        $salary=$salary_desc+$aux;
        $dia=3000000/26;
        $hora=$dia/8;
        $horas_extras=$hr-160;
            if($horas_extras<=0){
                echo "Su salario total es: ",$salary.'<br>';
            } else{
                $extra=$hora*0.50;
                $salary_total=$extra*$horas_extras;
                echo"Pago de hora extra: ",$extra.'<br>';
                $s_end=$salary+$salary_total;
                echo "Pago total: ",$s_end;
            }
    } else if($ocupation=="value2" & $city="3"){
        $desc=2000000*0.05;
        $salary_end=2000000-$desc;
        $salary=$salary_end+$aux;
        $dia=2000000/26;
        $hora=$dia/8;
        $horas_extras=$hr-160;
            if($horas_extras<=0){
                echo "Su salario total es: ",$salary.'<br>';
            } else{
                $extra=$hora*0.50;
                $salary_total=$extra*$horas_extras;
                echo"Pago de hora extra: ",$extra.'<br>';
                $s_end=$salary+$salary_total;
                echo "Pago total: ",$s_end;
            }
    }
?>