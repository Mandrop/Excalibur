<?php

function forside($db){
    include('elements/forside.php');
}

function kalender($db){
    include('elements/kalender.php');
}

function galleri($db){
    include('elements/galleri.php');
}

function nyheder($db){
    include('elements/nyheder.php');
}

function kontakt($db){
    include('elements/kontakt.php');
}

function om_os($db){
    include('elements/om_os.php');
}

function indexRedirect(){
    $page = $_GET['page'];

    // IF ?PAGE IS FOUND IN URL
    if(!$page){
        // IF NO ?PAGE IS FOUND IN URL THEN TAKE CURRENT URL AND ADD ?PAGE=INDEX.PHP AT THE END
        $url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $urlNew = $url . '?page=forside';
        header('Location: ' . $urlNew);
    }
}

function fixdate($date) {
    //return strftime(" %e %b %Y", strtotime($date));
    $newDate = strftime("%d-%b-%Y", strtotime($date));

    $dateArray = explode("-",$newDate);

    $newDay = $dateArray[0];
    $newMonth = $dateArray[1];
    $newYear = $dateArray[2];

    if($newMonth == "Oct"){
        $newMonth = "Okt";
    }
    if($newMonth == "May"){
        $newMonth = "Maj";
    }
   $newDateArray = array($newDay,$newMonth,$newYear);
   return implode(" ",$newDateArray);
   

    //return $newDateImplode;
}

?>