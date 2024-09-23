<?php
    $edad=$_REQUEST['edad'];
        echo "Su edad es: ",$edad.'<br>';
            if($edad>=18){
                echo " Es mayor de edad :)";
            }else{
                echo " Es menor de edad :(";
            }
?>