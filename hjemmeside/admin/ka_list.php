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
  background: url(parchment2.jpg) no-repeat 0;
  background-size: 100% 100%;
  height: 100%;
  width: 100%;
}

.table{
    width: 80%;
    margin-top: 30px;
}

td, th{
    border-bottom: 1px solid black;
}

tr{
    border: 1px solid black;
}



/* a:not([href]){
    color: white;
} */


    </style>
  </head>
  <body>
    
<?php
include("navbar.php")
?>

<div class="wrapper">
  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Navn på karakter</th>
        <th scope="col">Navn på bruger</th>
        <th scope="col">Delete</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">Legolas</th>
        <td>Peter Hansen</td>
        <td><a href="ka_delete.php" class="btn btn-danger">Delete</a></td>
      </tr>
      <tr>
        <th scope="row">Bilbo</th>
        <td>Johannes Nielsen</td>
        <td><a href="ka_delete.php" class="btn btn-danger">Delete</a></td>
      </tr>
      <tr>
        <th scope="row">Gandalf</th>
        <td>Lise Johansen</td>
        <td><a href="ka_delete.php" class="btn btn-danger">Delete</a></td>
      </tr>
    </tbody>
  </table>
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