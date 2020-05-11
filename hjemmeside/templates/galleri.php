<!-- GALLERI SIDE -->

<!doctype html>
<html lang="en" id="html">
  <head>
  
  
  <script src="Scripts/jquery-3.2.1.min.js" charset="utf-8"> </script>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    
    <style>


/* WOOD FRAME STYLE */
.wood-frame img{
  width:100%;
}

.wood-frame-content{
  background:white url("../images/wood-frame/wood-frame-middle.png") repeat-y center;
  background-size: 100%;
  padding: 1px 4rem 1px 4rem;
}
/* WOOD FRAME STYLE END */



/* PERKAMENT FRAME */
.perkament-frame img{
  width:100%;
}

.perkament-frame-content{
  background:transparent url("../images/perkament/perkament-center.png") repeat-y center;
  background-size: 100%;
  padding: 1px 10% 1px 10%;
}
/* PERKAMENT FRAME END */



/* GALLERI SIDE */

.galleri{
    background:transparent url("../images/bog.png") no-repeat center;
    background-size:contain;
    height: 50vw;
}

.galleri .card{
  background-color: transparent;
  border:none;
}

/* GALLERI SIDE END */



    </style>

    <title>Excalibur</title>
  </head>
  <body>







<br>


<!-- WOOD FRAME START -->
<!-- !!!!       Husk INTERNAL CSS i HEAD !!!!-->
 
  <div class="wood-frame">

      <img src="../images/wood-frame/wood-frame-top.png" alt="Wood frame top">

      <div class="wood-frame-content">
          <article class="galleri d-flex justify-content-center">
      <!-- CONTENT HERE -->


<!-- BOOTSTRAP MODAL -->

<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
  Launch demo modal
</button> -->



            <!-- GALLERI SECTION START -->
        <div class="row row-cols-1 row-cols-md-3 mx-0 my-5 d-flex justify-content-center">
            <!-- IMG CARD -->

            <div class="col mb-6 " data-toggle="modal" data-target="#myModal">
                <div class="card h-100 ">
                <img src="../images/roleplay-news.jpg" class="card-img-top img-fit-to-galleri" alt="..." id="1" data-toggle="modal" data-target="#myModal">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
                </div>
            </div>
            <!-- IMG CARD END -->

            <!-- IMG CARD -->
            <div class="col mb-6 ">
                <div class="card h-100">
                <img src="../images/roleplay-news.jpg" class="card-img-top img-fit-to-galleri" alt="..." id="2" data-toggle="modal" data-target="#myModal">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a short card.</p>
                </div>
                </div>
            </div>
            <!-- IMG CARD END -->

</div>

            <!-- GALLERI CONTENT END -->

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-body">
                <img class="img-responsive" src="" style="width: 100%;"/>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- BOOTSTRAP MODAL END -->


      <!-- CONTENT HERE -->
          </article>
      </div>

      <img src="../images/wood-frame/wood-frame-bottom.png" alt="Wood frame bottom">
  </div>

<!-- WOOD FRAME END -->










    <!-- Optional JavaScript -->
    
    
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.5.0.min.js"></script>

    <script src="Scripts/waypoint/lib/jquery.waypoints.min.js"></script>
    
  </body>
</html>