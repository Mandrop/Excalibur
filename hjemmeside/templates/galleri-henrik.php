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

* {box-sizing:border-box}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -22px;
  padding: 16px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
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


  <!-- Slideshow container -->
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="../images/galleri-img/DSC06880.jpg" style="width:100%">
    <div class="text">Caption Text</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="../images/galleri-img/DSC06880.jpg" style="width:100%">
    <div class="text">Caption Two</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="../images/galleri-img/DSC06880.jpg" style="width:100%">
    <div class="text">Caption Three</div>
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
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

    <script src="galleri-henrik.js"></script>
    
  </body>
</html>

<?php
            /*<!-- GALLERI SECTION START -->
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
    </div>*/
?>