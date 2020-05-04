<?php
include('api_connection.php');

?>

<div class="row m-0 bg-hero bg-opacity">

    <!-- MAIN CONTENT -->
    <div class="col-sm-7 bg-opacity min-vh-80 d-flex align-items-center">
            <div class="container p-3 d-flex ">
                <h1 class="font-weight-bolder big-title">AKTIV <br> VIBORG</h1>
            </div>
    </div>
    <!-- MAIN CONTENT -->

    <!-- KOMMENDE EVENT -->
    <div class="col-sm-5 p-0 bg-opacity">
      
      <div class="container-fluid bg-yellow shadow rounded kommende-events d-flex flex-column align-items-center pb-2 px-0">
      <h2 class="h5 mt-4 mb-0 ">KOMMENDE EVENTS</h2>
      <hr class="w-25 mt-0 border-dark">

<!-- KALENDER EVENT API -->

<?php


foreach(array_slice($data, 0, 5) as $value){
include('event_element.php');
}
?>

<!-- KALENDER EVENT API END -->


      <!-- KALENDER EVENT BACKUP -->
<!--       <a href="#" class="event-hover w-100">
        <div class="container-fluid p-0 border-bottom pb-2 px-2"> --> <!-- KALENDER EVENT -->
            
<!--             <div class="row m-0 my-1">
                <div class="col d-flex justify-content-center align-items-center p-0">
                    <h3 class="font-weight-bold mb-0 ">3. AUG</h3>
                </div>

                <div class="col-8 line-height-1">
                <p class="m-0 font-weight-bold">RUN FOR IT!</p>
                <p class="m-0 font-weight-light">Aarhus</p>
                <p class="m-0">Arrangør: Aktiv-aarhus.dk</p>
                </div>
            </div>
        
        </div>
        </a> -->
        <!-- KALENDER EVENT END -->

        </div> 
    </div>
    <!-- KOMMENDE EVENT END-->

  </div>