<?php
include('config.php');


function create_event($db){
    if(isset($_POST['formSubmit'])){
        $varTitle = $_POST['formTitle'];
        $varDate = $_POST['formDate'];
        $varLocation = $_POST['formLocation'];
        $varCo = $_POST['formCo'];

        $sql = "INSERT INTO events SET
            event_title = '{$varTitle}',
            event_date = '{$varDate}',
            event_location = '{$varLocation}',
            event_co = '{$varCo}'
        ";

        if($db->query($sql)){
            echo"Nyt event er oprettet";
        }else{
            echo"Der skete en fejl, prøv igen";
        }
    }

    echo"
    <form method='post'>
        <input type='text' name='formTitle' placeholder='Titel'><br>
        <input type='date' name='formDate'><br>
        <input type='text' name='formLocation' placeholder='Location'><br>
        <input type='text' name='formCo' placeholder='Arrangør'><br>
        <input type='submit' name='formSubmit'>
    </form
    ";
}



function update_event($db){
    $id = $_GET['id'];

    $sql = "SELECT * FROM events WHERE event_id = {$id}";
    $sqlQuery = $db->query($sql);

    if($sqlQuery){
        $dbFetch = $sqlQuery->fetch_object();
    }

    if(isset($_POST['formSubmit'])){
        $varTitle = $_POST['formTitle'];
        $varDate = $_POST['formDate'];
        $varLocation = $_POST['formLocation'];
        $varCo = $_POST['formCo'];

        $sql = "UPDATE events SET
            event_title = '{$varTitle}',
            event_date = '{$varDate}',
            event_location = '{$varLocation}',
            event_co = '{$varCo}'
                WHERE event_id = {$id}
        ";

        if($db->query($sql)){
            echo"Dit event er blevet opdateret";
        }else{
            echo $db->error;
        }
    }

    echo"
    <form method='post'>
        <input type='text' name='formTitle' value='$dbFetch->event_title'><br>
        <input type='date' name='formDate' value='$dbFetch->event_date'><br>
        <input type='text' name='formLocation' value='$dbFetch->event_location'><br>
        <input type='text' name='formCo' value='$dbFetch->event_co'><br>
        <input type='submit' name='formSubmit'>
    </form
    ";
}


?>