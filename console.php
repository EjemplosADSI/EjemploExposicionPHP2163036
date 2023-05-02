<?php
    foreach ($argv as $clave => $value){
        if($clave != 0)
        echo "Hola ".$value."\n";
    }
    echo "Llegaron ".($argc-1)." usuarios";