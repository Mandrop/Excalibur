<?php
include('api_connection.php');

?>



<div class="row m-0 bg-hero bg-opacity">

    <!-- MAIN CONTENT -->
    <div class="col-md-7 bg-opacity min-vh-80">
        <div class="container pt-3"> 
            <h1 class="big-text mb-0 line-height-5">KALENDER</h1>
            <div class="bg-yellow heading-text d-flex align-items-center">
            <p class="container h4 mb-0 ">Her på siden kan du finde en liste over alle vores events</p>
            </div>
        </div>

    <?php
   
        $event_id = $_GET['event_id'];
        if($event_id != 0){

    foreach($data as $value){

        $event_id = $_GET['event_id'];

            if($event_id == $value->event_id){
                include('event_info.php');
            }
    } 
            

        }

   ?>

    </div>
    <!-- MAIN CONTENT -->

       <!-- EVENT LOAD MORE-->
    <div class="col-md-5 p-0 bg-opacity">
      
      <div class="container-fluid bg-yellow shadow rounded kommende-events d-flex flex-column align-items-center pb-2 px-0">
      <h2 class="h5 mt-4 mb-0 ">EVENTS TEST</h2>
      <hr class="w-25 mt-0 border-dark">
    <div id="result_para" class="container-fluid bg-yellow rounded kommende-events d-flex flex-column align-items-center pb-2 px-0">
    <?php

   $amount_in_event_array = count($data);
    //echo $amount_in_event_array;


foreach(array_slice($data, 0, 5) as $value){
include('event_element.php');
}

¸
?>


</div>

<!-- LOAD MORE KNAPPER -->

    <input type="hidden" id="result_val" value="0">

    <input type="hidden" id="result_no" value="5">

<!-- Antal events i DB -->
    <input type="hidden" id="allcount_val" value="<?php echo $amount_in_event_array ?>">

<div class="load-arrow-div position-relative d-flex flex-column align-items-center">
    <p id="events-loaded"></p>
    <input type="button" id="load" value="FLERE EVENTS">
    <p class="" id="no-more-events"></p>

        <img id="load-arrow" src="images/chevron-down-solid.svg" alt="" style="">

</div>
<!-- LOAD MORE KNAPPER END-->

        </div> 
    </div>
    <!-- EVENT LOAD MORE END-->


    <!-- EVENT -->
    <div class="col-md-5 p-0 bg-opacity">
      
      <div class="container-fluid bg-yellow shadow rounded kommende-events d-flex flex-column align-items-center pb-2 px-0">
      <h2 class="h5 mt-4 mb-0 ">EVENTS</h2>
      <hr class="w-25 mt-0 border-dark">

    <?php
   //$amount_in_event_array = count($data);
   // echo $amount_in_event_array;


foreach($data as $value){

    include('event_element.php');
  
}
?>

        </div> 
    </div>
    <!-- EVENT END-->




  </div>

