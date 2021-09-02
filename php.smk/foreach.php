<?php 


// $nama = array ("I","EMIL","EMILY",100,2.5);

// var_dump ($nama);

// echo "<br>";

// foreach ($nama as $key ) {
//     echo $key ."<br>";
// }

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