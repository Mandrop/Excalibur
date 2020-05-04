      <?php

        //$date = $value->event_date;
        //echo $date;
        $newDate = fixdate($value->event_date);

        //$newDate = date("d-M-Y", strtotime($date));

        $newDateArray = explode(" ",$newDate);
        $newDay = $newDateArray[0];
        $month = $newDateArray[1];
        $year = $newDateArray[2];

      ?>
      
      <!-- KALENDER EVENT -->
      <a href="?page=kalender&event_id=<?php echo $value->event_id ?>" class="event-hover w-100">
        <div class="container-fluid p-0 border-bottom pb-2 px-2"> <!-- KALENDER EVENT -->
            
            <div class="row m-0 my-1">
                <div class="col d-flex flex-column justify-content-center align-items-center p-0">
                    <h3 class="font-weight-bold mb-0 text-uppercase "><?php echo $newDay . ". " . $month ?></h3>
                    <p class="h6 line-height-05 "><?php echo $year ?></p>
                </div>

                <div class="col-8 line-height-1">
                <p class="m-0 font-weight-bold"><?php echo $value->event_title ?></p>
                <p class="m-0 font-weight-light"><?php echo $value->event_location ?></p>
                <p class="m-0">Arrangør: <?php echo $value->event_co ?></p>
                </div>
            </div>
        
        </div>
        </a>
        <!-- KALENDER EVENT END -->

<!-- BACKUP -->
              <!-- KALENDER EVENT -->
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