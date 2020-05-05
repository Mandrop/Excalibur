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
  <div class="header">
  <h1>Header</h1>
  </div>

    <div class="background" id="background">

    <!-- INFO BOKS -->
      <div class="info-waypoint"></div>
      <div class="info">
      <img class="info-img" src="images/info.png" alt="">
      <button type="button" class="btn btn-primary info-btn" data-toggle="modal" data-target="#infoModal"></button>
      </div>

<!-- Modal -->
<div class="modal fade" id="infoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalScrollableTitle">Information</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
  <h5>Forældreinfo</h5>
  <p>Når dit barn deltager til Excalibur Rollespil er det ikke meget anderledes end hvis du sender dit barn til fodbold eller spejder. Alle børn spiller som udgangspunkt på et hold med en voksen holdleder, som sørger for at dit barn får en spændende og tryg dag i skoven.<br>
Rollespil arrangeres af Excalibur, som er en forening drevet af frivillige og entusiastiske rollespillere. Excalibur er medlem af DUF igennem Bifrost, som er landsforeningen for kreativ udvikling af børn og unge.
<br>
Vi arrangerer Rollespil to gange om måneden i Undallslund.</p>

<h6>Undallslund Plantage Aldersgrænse:</h6>
<p>Som udgangspunkt er spillere i alle aldre velkomne. Vores rollespil sigter dog imod børn og unge i alderen 8-13 år.</p>
<h6>Forældre må gerne spille med:</h6>
<p>Vi ser meget gerne at forældre deltager til Rollespil sammen med deres børn. Det er en rigtig sjov måde at være sammen med sit barn på og de elsker at se mor eller far blive sminket som ork.</p>
<h6>Facebookgruppe:</h6>
<p>Efterhånden har vi mange forældre, der har været med i nogle år og som ofte giver en hånd med det praktiske og som sørger for kaffe og kakao til gamle sjæle i skoven.
Entusiastiske forældre mødes på <a href="#" class="tooltip-test" title="Tooltip">facebookgruppen</a>:

Excalibur afviklere, forældre og kreative hjælpere</p>
<h6>Ingen mødepligt:</h6>
<p>Når man deltager til Rollespil er man ikke forpligtet til at møde op til samtlige spildage. Alle er velkomne – også bare for en enkelt gang.
</p>
<h6>Vind og vejr:</h6>
<p>Man kan spille rollespil i al slags vejr og vi lader ikke en smule sne eller regn stoppe os. Hvis det regner meget kan vi dog godt finde på et slutte tidligere end normalt. I så fald vil vi hvis det er muligt annoncere det ved check-in inden spilstart.
</p>
<h6>Hvis noget går galt, så fortæl os det!</h6>
<p>Vi laver rollespil med hundredevis af børn, og nogle gange går noget galt. Der er børn, der bliver uvenner, børn der bliver kede af det eller børn som har en uheldig oplevelse. Vi fanger langt det meste i skoven, men der sker stadig nogle gange ting vi ikke hører om derude. Så hvis du får et barn hjem, som har haft en uheldig oplevelse, så fortæl os det! Ellers finder vi aldrig ud af det, og selvom der er nogle ting vi ikke kan gøre noget ved, så er der også ting vi KAN gøre noget ved.
<br>
Vores mål er at give børnene en god oplevelse og feedback fra forældre er derfor uvurderligt. Tøv derfor ikke med at kontakte os, også hvis du “bare” har spørgsmål.
<br>
Du kan finde telefonnumre og mail-adresser på foreningens afviklere under Kontakt.
</p>
<h6>Husk telefonnummer:</h6>
<p>Det er meget vigtigt at dit barn har et telefonnummer på sig, så vi kan få fat på forældre eller værge, hvis der skulle opstå en situation, hvor dette er nødvendigt.</p>
  <hr>
  <h5>Sidste Nyt</h5>
  <p><a href="#" class="tooltip-test" title="Tooltip">This link</a> and <a href="#" class="tooltip-test" title="Tooltip">that link</a> have tooltips on hover.</p>
  <hr>
  <h5>Arrangementer</h5>
  <p><a href="#" class="tooltip-test" title="Tooltip">This link</a> and <a href="#" class="tooltip-test" title="Tooltip">that link</a> have tooltips on hover.</p>
</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Luk</button>
        <!--<button type="button" class="btn btn-primary">Save changes</button>-->
      </div>
    </div>
  </div>
</div>
      
    <!-- INFO BOKS SLUT -->
    </img><img id="sprite" src="Images/2,1.png" alt="walk01" class="walk"/>
    <div id="scrollDiv"></div>
    </div>

    
    
    <div class="stald">
      <div class="first" id="basic-waypoint"></div>
    
    </div>


<div class="second" id="second"></div>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Test</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


    <!-- Optional JavaScript -->
    
    
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.5.0.min.js"></script>

    <script src="Scripts/waypoint/lib/jquery.waypoints.min.js"></script>
    

    <script>
      




      var $first = $('.first');
      //var imageArr = ["Images/Layer1.png","Images/Layer2.png","Images/Layer3.png","Images/Layer4.png",,"Images/Layer5.png",,"Images/Layer6.png",,"Images/Layer7.png"];

      var imageArr = ["Images/2,1.png","Images/2,2.png","Images/2,3.png","Images/2,2.png"];

      $first.waypoint(function (direction) {
        if (direction == 'down') {
          console.log('waypoint down!')
          //document.getElementById("sprite").src = "Images/shrek.png";
          imageArr = ["Images/1,1.png","Images/1,2.png","Images/1,3.png","Images/1,2.png"];
        }else {
          console.log('waypoint up!')
          imageArr = ["Images/2,1.png","Images/2,2.png","Images/2,3.png","Images/2,2.png"];
        }
      }, { offset: '50%'});


      var $infoWaypoint = $('.info-waypoint');
      var $info = $('.info');

      $infoWaypoint.waypoint(function (direction) {
        if (direction == 'down') {
          console.log('fixed!')
          $info.css({'position': 'fixed', 'top': '2%'});
          //document.getElementById("sprite").src = "Images/shrek.png";
          
        }else {
          console.log('not fixed')
          $info.css({'position': 'relative', 'top': '0px'}); 
          
        }
      }, { offset: '2%'});
      
      


        
        var image = 1;
        //console.log("document.getElementById('sprite').innerHTML = testDiv.offsetTop");
        $(window).scroll(function() {
            
            //console.log("scrolled");
            windowScrollCount   = $(this).scrollTop();
            animationFrame      = (windowScrollCount / 130);

            animationFrame = Math.floor(animationFrame % imageArr.length);
            //console.log(animationFrame + " : " + windowScrollCount);
            $('.walk').attr("src", imageArr[animationFrame]);
        });
    </script>
  </body>
</html>