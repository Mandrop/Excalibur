    <?php
/*     foreach($data as $value){

        $event_id = $_GET['event_id'];

            if($event_id == $value->event_id){
                echo $value->event_title;
                echo $value->event_location;
                echo $value->event_co;
                echo $value->event_date;
            }
    }       

 */

   ?>

<!-- EVENT INFO -->

<div class="container mt-3 px-xl-5 kontakt rounded">
    <div class="row  bg-white-opacity-75 border-bottom">

        <!-- EVENT TITLES CONTAINER -->
        <div class="col-3 p-0"> 
            <div class="my-5 ml-5 border-warning text-right">
                <h4>EVENT:</h3>
                <p class="line-height-1">ARRANGØR: </p>
                <p class="mb-0">ADRESSE: </p>
                <p class="line-height-1">BY: </p>
                

            </div>
        
        </div>
        <!-- EVENT TITLES CONTAINER END-->

        <!-- EVENT INFO CONTAINER -->
        <div class="col p-0"> 
            <div class="my-5 ml-5 border-warning">
                <h4><?php echo $value->event_title; ?></h3>
                <p class="line-height-1"><?php echo $value->event_co ?></p>
                <p class="mb-0"><?php echo $value->event_street . " " . $value->event_street_num; ?></p>
                <p class="line-height-1"> <?php echo $value->event_zip_code . " " . $value->event_city; ?></p>

                

            </div>
        
        </div>
        <!-- EVENT INFO CONTAINER END-->


    </div>

    <div class="row bg-white-opacity-75 p-4">

        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis totam fugit nostrum facere fugiat earum obcaecati saepe asperiores maiores officia odio harum, culpa libero, rerum quae possimus molestiae? Nostrum, inventore deleniti distinctio nulla vitae eligendi sunt sit hic cupiditate debitis, eius autem! Iste at maxime, vel laborum asperiores saepe similique!</p>
    </div>

</div>

<!-- EVENT END -->