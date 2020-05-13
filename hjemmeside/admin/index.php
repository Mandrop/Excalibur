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

.wrapper{
  display: grid;
  justify-items: center;
  align-items: center;
  background: url(parchment.png) no-repeat 0;
  background-size: 100% 100%;
  height: 100%;
  width: 100%;
}


    </style>
  </head>
  <body>
    
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="#">Admin</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?page=logout">Log ud <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Arrangementer
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="?page=create_event">Opret arrangement</a>
          <a class="dropdown-item" href="?page=list_events">Arrangement oversigt</a>
        </div>
      </li>
    </ul>
  </div>
</nav>

<div class="wrapper">
  <div class="login">
    <form action="/action_page.php">
      <label for="brugernavn">Brugernavn</label><br>
      <input type="text" id="brugernavn" name="Brugernavn"><br>
      <label for="kodeord">Kodeord</label><br>
      <input type="password" id="kodeord" name="kodeord"><br><br>
      <input type="submit" value="Submit">
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