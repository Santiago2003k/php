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
            <form action="" method="POST">
    
                <label for="num">¿Cuánto empleados? </label>
                <input type="number" name="num">
                <input type="submit" name="submit" value="enviar">
            </form>
        <?php
        $array= $_REQUEST['num'];
        } elseif (isset($array)) {
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
            for($i=0; $i<=$array; $i++){
                    echo $profe[$i],"<br>";
                    if($profe==1){
                        $salary=($salary_ing*0.10);
                        echo $salary, "<br>";
                        $salary_reducido=$salary_ing-$salary;
                        echo $salary_reducido, "<br>";
                    }    
            }
                }
        ?>
    </div>
    </body>
    </html>