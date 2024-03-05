<?php



$groceries = $app['database']->selectAll('groceries');

/* function that changes the format of the elements in $groceries retrieved above */
function encodeDecode ($data) {
    $dataEncoded = json_encode($data);
    $assoc_array = json_decode($dataEncoded, true);
    return $assoc_array;
}

/* to apply the function to the $groceries variable retrieved */
$groceries1 = [];
foreach ($groceries as $grocery) {
  array_push($groceries1, encodeDecode($grocery));
}





require "views\index.view.php";


