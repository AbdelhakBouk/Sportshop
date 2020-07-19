
<?php
// Start the session
session_start();
?>

<?php require_once('../private/initialize.php'); ?>

<!doctype html>
<html lang="en">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  
    <!-- Glyphicons icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">


  </head>
<style>

body, html {
  height: 100%;
}

body { 
  /* The image used */
  background-image: url("https://static.webshopapp.com/shops/041466/files/133965380/walimex-background-graduation-15x2m-grey.jpg");

  /* Full height */
  height: 100%; 

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

</style>
 
<body>
  
  

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <h3>The Sportshop</h3>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="producten.php">Producten</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact</a>
      </li>
      <!-- <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li> -->
      <!-- <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li> -->
    </ul>

 
    <!-- sign up en login -->


    <?php

      if(isset($_SESSION['Email']) && isset($_SESSION['Wachtwoord'])){

        echo   "<ul class='nav navbar-nav navbar-right'>";
        echo	"<div id='navb' class='navbar-collapse collapse hide'>";
        echo    "<li><a style='text-decoration: none; padding-left: 5px; padding-right: 5px;' href='logout.php'><span class='fas fa-sign-in-alt'></span> Uitloggen</a></li>";
        echo    "<li><a style='text-decoration: none; padding-left: 5px; padding-right: 5px;' href='account.php'><span class='fas fa-user'></span> Account</a></li>";
      	echo   "</div>";
        echo    "</ul>";

      

      } else {

        echo   "<ul class='nav navbar-nav navbar-right'>";
        echo	"<div id='navb' class='navbar-collapse collapse hide'>";
        echo    "<li><a style='text-decoration: none; padding-right: 5px;' href='register.php'><span class='fas fa-user'></span> Register</a></li>";
        echo    "<li><a style='text-decoration: none; padding-left: 5px; padding-right: 5px;' href='login.php'><span class='fas fa-sign-in-alt'></span> Login</a></li>";
      	echo   "</div>";
        echo    "</ul>";

      }

    ?>

    <!-- einde -->

    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Zoek naar product..." aria-label="Search">
      <button name="zoeken" class="btn btn-outline-success my-2 my-sm-0" type="submit">Zoeken</button>
    </form>
  </div>
</nav>


 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    