<?php
include('functions.php');
include('config.php');
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Place2run.dk - Admin</title>

    <style>
    
html, body{
  height: 96.2%;
}

nav{
  background-color: #D6AB90;
}

form label{
    margin-top: -10px;
    margin-bottom: -20px
}

#submit{
    margin-top: -30px
}

form{
    display: flex;
    flex-direction: column;
}

.wrapper{
  display: grid;
  justify-items: center;
  align-items: center;
  background: url(parchment2.jpg) no-repeat 0;
  background-size: 100% 100%;
  height: 100%;
  width: 100%;
}


    </style>
  </head>
  <body>
    
<?php
include("navbar.php")
?>

<div class="wrapper">
  <div class="create">
    <form action="/action_page.php">
      <label for="titel">Titel</label><br>
      <input type="text" id="titel" name="titel"><br>
      <label for="dato">Dato</label><br>
      <input type="date" id="dato" name="dato"><br>
      <label for="lokation">Lokation</label><br>
      <input type="text" id="lokation" name="lokation"><br>
      <label for="information" id="information" name="information">Information</label><br>
      <textarea type="textarea" id="information" name="information"></textarea><br>
      <label for="arrangør">Arrangør</label><br>
      <input type="text" id="arrangør" name="arrangør"><br><br>
      <input type="submit" id="submit" value="Update">
    </form> 
  </div>
</div>

<?php

?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>