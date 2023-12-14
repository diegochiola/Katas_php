<?php
//defino variables
$numeros = array(1,2,3,4,5);
$letras = array("A","B","C","D",5);
$bo = (bool) true;


function devolver(array $numeros, array $letras,bool $bo ): mixed{
   
    if ($bol == true){
       $coincidencias = array( array_intesect ($numeros, $letras));
       foreach ($coincidencias as $valor){
            echo $valor;
            $resultado = $valor;   
       }

    }else{
        $noCoincide= array(array_diff($numeros, $letras));
        $resultado = $noCoincide;

    }

    return $resultado;
}


//buscar coincidencias 1 a 1
foreach($numeros as $item) {
    if(in_array($item, $letras) {
        echo $item;
    }
}

?>
<?php
//defino variables
$numeros = array(1,2,3,4,5);
$letras = array("A","B","C","D",5);
$bo = (bool) true;

    if ($bol == true){
       $coincidencias = array_intersect($numeros, $letras);
       foreach ($coincidencias as $valor){
            echo $valor;
            
       }
    }
echo $valor;

?>