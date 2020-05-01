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
    

    <title>Hello, world!</title>
  </head>
  <body>
    <h1>Hello, world!</h1>
    <div class="background" id="background">
    </img><img id="sprite" src="Images/Layer1.png" alt="walk01" class="walk"/>
    <div id="scrollDiv"></div>
    </div>

    
    
    <div class="stald">
      <div class="first" id="basic-waypoint"></div>
    
    </div>
<div class="second" id="second"></div>


    <!-- Optional JavaScript -->
    
    
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.5.0.min.js"></script>

    <script src="Scripts/waypoint/lib/jquery.waypoints.min.js"></script>
    

    <script>
      var $first = $('.first');
      var imageArr = ["Images/Layer1.png","Images/Layer2.png","Images/Layer3.png","Images/Layer4.png",,"Images/Layer5.png",,"Images/Layer6.png",,"Images/Layer7.png"];

      $first.waypoint(function (direction) {
        if (direction == 'down') {
          console.log('waypoint down!')
          document.getElementById("sprite").src = "Images/shrek.png";
          imageArr = ["Images/shrek.png","Images/shrek.png","Images/shrek.png","Images/shrek.png",,"Images/shrek.png",,"Images/shrek.png",,"Images/shrek.png"];
        }else {
          console.log('waypoint up!')
          imageArr = ["Images/Layer1.png","Images/Layer2.png","Images/Layer3.png","Images/Layer4.png",,"Images/Layer5.png",,"Images/Layer6.png",,"Images/Layer7.png"];
        }
      }, { offset: '50%'});
      


        
        var image = 1;
        //console.log("document.getElementById('sprite').innerHTML = testDiv.offsetTop");
        $(window).scroll(function() {
            
            //console.log("scrolled");
            windowScrollCount   = $(this).scrollTop();
            animationFrame      = (windowScrollCount / 20);

            animationFrame = Math.floor(animationFrame % imageArr.length);
            //console.log(animationFrame + " : " + windowScrollCount);
            $('.walk').attr("src", imageArr[animationFrame]);
        });
    </script>
  </body>
</html>