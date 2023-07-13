<?php 

//recupero del contenuto presente in todo_list.json
$string = file_get_contents ('data/todo_list.json'); 

//LO CONVERTO IN MODO CHE SIA LAVORABILE DA PARTE DI PHP COME ARRAY
$array = json_decode ($string, true);

if(isset($_POST['todoItem'])) {

    $task = [
        'text' => $_POST ['todoItem'],
        'done' => false
    ];

    array_push($array, $task) ;
    $array_encoded = json_encode ($array);

    file_put_contents('data/todo_list.json',$array_encoded);
}
    header ('Content-Type: application/json');     
    echo json_encode($array);
?>  