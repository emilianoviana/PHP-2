<?php 

    //ARRAY DIMENSI

    $nama = array ("I","EMIL","EMILY",100,2.5);

    var_dump ($nama);

    echo "<br>";

    echo $nama [4];

    echo "<br>";

    for ($i=0; $i <=4 ; $i++) { 
        echo $nama [$i]. "<br>";
    }

    //ARRAY ASSOSIATIF

    $nama = array (
        "I" => "Paris",
        "EMIL" =>"Amerika",
        "EMILY" =>"LOMBOK"
    );

    var_dump ($nama);

    echo "<br>";

    foreach ($nama as $key => $value) {
        echo $key ."=>". $value;

        echo "<br>";
    }



?>