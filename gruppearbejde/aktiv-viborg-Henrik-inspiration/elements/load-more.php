<?php
include('../functions.php');
include('../api_connection.php');


 $no = $_POST['getresult'];

foreach(array_slice($data, $no, 2) as $value){

    include('event_element.php');
}


?>