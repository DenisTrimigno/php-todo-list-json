<?php 
$array = [
    "html",
    "html2",
    "html3",
    "html4",
    "html5",
         ];

    header ('Content-Type: application/json');     
    echo json_encode($array);

?>  