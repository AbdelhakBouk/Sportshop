

<?php 

// het importeren van de initialize file om alles functionerend te krijgen.
require_once('../private/initialize.php'); 

?>


<!doctype html>
<html lang="en">
  <head>

    <title>Registratiepagina</title>

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

/* register form */

/*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}*/
html, body{
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;

    height:100%;
}
.container{ 
   height:100%;
   display:flex;
   align-items:center;
   justify-content:center;
   padding-top: 300px;
}
.content{
    background-color:white;
    width:500px;
    height:1465px;
    margin-top: 415px;

}
img{
    width: 100%;
    height: 25%;
}
.form-title{
    padding:10px 40px 0px;
}
form{
    padding:0px 40px;
}
input[type=text], [type=email]{
    border: none;
    border-bottom: 1px solid black;
    outline:none;
    width:100%;
    margin: 8px 0;
    padding:10px 0;
}
input[type=number]{
    border: none;
    border-bottom: 1px solid black;
    outline:none;
    margin: 8px 0;
    padding:5px 0;
}
input :hover {
    background-color: red;
}
select{
    border: none;
    border-bottom: 1px solid black;
    outline:none;
    margin: 8px 0;
    padding:5px 0;
    width:50%;
}
.beside{
    display:flex;  
    justify-content: space-between;
}
button{
    color:#ffffff;
    background-color: #4caf50;
    height:40px;
    width:25%;
    margin-top:15px;
    cursor: pointer;
    border:none;
    border-radius:2%;
    outline:none;
    text-align:center;
    font-size:16px;
    text-decoration:none;
    -webkit-transition-duration:0.4s;
    transition-duration:0.4s;
}
button:hover{
    background-color:#333333;
}

</style>
 
<body>
  
  <?php require_once('../private/initialize.php'); ?>

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
      <li class="nav-*tem">
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

      <ul class="nav navbar-nav navbar-right">
    <div id="navb" class="navbar-collapse collapse hide">
          <li><a style="text-decoration: none; padding-right: 5px;" href="register.php"><span class="fas fa-user"></span> Registreren</a></li>
          <li><a style="text-decoration: none; padding-left: 5px; " href="login.php"><span class="fas fa-sign-in-alt"></span> Login</a></li>
    </div>
        </ul>


    <form method="post" class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Zoek naar product..." aria-label="Search">
      <button id='zoeken' class="btn btn-outline-success my-2 my-sm-0" type="submit">Zoeken</button>
    </form>
  </div>
</nav>


 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<!-- register form -->
<script>

var today = new Date();
var dd = today.getDate();
var mm = today.getMonth()+1; //January is 0!
var yyyy = today.getFullYear();
 if(dd<10){
        dd='0'+dd
    } 
    if(mm<10){
        mm='0'+mm
    } 

today = yyyy+'-'+mm+'-'+dd;
document.getElementById("geboortedatum").setAttribute("max", today);
</script>

<script>

function myFunctionWachtwoord() {
  var x = document.getElementById("wachtwoord");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

function myFunctionWachtwoordBevestiging() {
  var x = document.getElementById("wachtwoordbevestiging");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

function passwordFunc() {
  myFunctionWachtwoord();
  myFunctionWachtwoordBevestiging();

}


</script>

<div  class="container">
    <div style="border: solid black 2px; background-color:#9C9C9C;" class="content">
       <img src="https://res.cloudinary.com/debbsefe/image/upload/f_auto,c_fill,dpr_auto,e_grayscale/image_fz7n7w.webp" alt="header-image" class="cld-responsive">
            <h1 class="form-title">Registreren</h1>
            <form method="post">
            <label for="voornaam">Voornaam:</label>
               <input style="border: solid black 2px;" name="voornaam" id="voornaam" type="text" maxlength="100" placeholder=" Voornaam" required>
               <label for="achternaam">Achternaam:</label>
               <input style="border: solid black 2px;" name="achternaam" id="achternaam" type="text" maxlength="100"  placeholder=" Achternaam" required>
            <div class="beside">
                <input style="border: solid black 2px;" name="telefoonnummer" id="telefoonnummer" type="tel"  maxlength="15"  placeholder=" Telefoonnummer" pattern="+31[0-9]{8}" required>
                <select style="border: solid black 2px;" maxlength="15"name="geslacht" id="geslacht">
                  <optgroup label="Geslacht">
                    <option value="Man">Man</option>
                    <option value="Vrouw">Vrouw</option>
                    <option value="Geen van beide">Geen van beide</option>
                  </optgroup>
                </select>
            </div>
            <p style="padding-top: 5px;">Selecteer hieronder je geboortedatum:</p>
            <input style="border: solid black 2px;" name="geboortedatum" id="geboortedatum" type="date" min="1920-01-01"  required>
            <br>
                <label for="postcode">E-mail:</label>
                <input  style="border: solid black 2px;" maxlength="100" name="email" id="email" type="email" placeholder=" E-mail" required>
                <label for="postcode">Postcode:</label>
                <div class="beside">
                <input style="border: solid black 2px; border-right: solid black 0px;"  type="number" maxlength="4" min="1000" max="9999"  name="postcodenummers" id="postcodenummers"  placeholder=" 4 nummers" pattern="[0-9]{4}" required>
                <input  style="border: solid black 2px;" type="text" id="postcodeletters" minlength="0" maxlength="2" name="postcodeletters" pattern="[A-Z]{2}" placeholder=" 2 letters" required/>
                </div>

                <label for="straat">Straatnaam:</label>
			          <input style="border: solid black 2px;" type="text" maxlength="100" id="straatnaam" name="straatnaam" placeholder=" Straatnaam" required>

                <label for="nummer">Huisnummer:</label>
			          <input style="border: solid black 2px;" placeholder=" Huisnummer" min="0" max="19999" type="number" name="huisnummer" id="huisnummer" required>
    	          <br>

                <label for="stad">Woonplaats:</label>
			          <input style="border: solid black 2px;" maxlength="100" placeholder=" Woonplaats" type="text" name="stad"  id="stad" required>

                <label for="stad">Wachtwoord: (8 tekens minimaal)</label>
			          <input style="border: solid black 2px;" placeholder=" Wachtwoord" type="password" minlength="8" maxlength="225" name="wachtwoord" id="wachtwoord" required>

                <label for="stad">Bevestig wachtwoord: (8 tekens minimaal)</label>
			          <input style="border: solid black 2px;" placeholder=" Wachtwoord" type="password" minlength="8" maxlength="225" name="wachtwoordbevestiging" id="wachtwoordbevestiging" required>

                <br>

                <!-- laat de ingevoerde password zien voor de gebruiker -->
                <input type="checkbox" onclick="passwordFunc()">laat wachtwoord zien

               <br>
            <button id="submit" name="submit" type="submit" class="btn btn-primary">Registeren</button>
            </form>

              <?php

              

              if($database->check_email_exist(ucfirst($_POST['email'])) == false){

              if(isset($_POST) && !empty($_POST) &&  $_POST['wachtwoord'] == $_POST['wachtwoordbevestiging']){

                 // POST request verzenden als de form submit is verstuurd, zet data in de variabele en sanitized vervolgens de data.

                  $id = $database->sanitize($functions->generate_random_ID());
                  $voornaam = $database->sanitize($_POST['voornaam']);
                  $achternaam = $database->sanitize($_POST['achternaam']);
                  $telefoonnummer = $database->sanitize($_POST['telefoonnummer']);
                  $geslacht = $database->sanitize($_POST['geslacht']);

                  // de gehele geboortedatum in een variabele.

                  $datum = $database->sanitize(strtotime($_POST['geboortedatum']));
                  
                  $geboortedatum = date('Y-m-d', $datum);


                  $email = $database->sanitize($_POST['email']);

                  // de gehele postcode in de variabele.

                  $postalcode =  $_POST['postcodenummers'] . '' . strtoupper($_POST['postcodeletters']);
                  
                  $postcode = $postalcode;
                  $straatnaam = $database->sanitize($_POST['straatnaam']);
                  $huisnummer = $database->sanitize($_POST['huisnummer']);
                  $stad = $database->sanitize($_POST['stad']);
                  $wachtwoord = $database->sanitize($_POST['wachtwoord']);

                  // genereert een unieke token

                  $token = bin2hex(random_bytes(50)); // generate unique token
                  
                  // einde

                  $res =  $database->create_user($id, $voornaam, $achternaam, $telefoonnummer, $geslacht, $geboortedatum, $email, $postcode, $straatnaam, $huisnummer, $stad, $wachtwoord,$token);

                  // verificatie e-mail versturen

                  $functions->send_verification_email($email, $token);

                  if($res){

                    echo '<script>alert("De registratie van uw account is gelukt, er is een e-mail verstuurd naar je mail om de account te activeren!")</script>'; 

                  }else {
                    
                    echo '<script>alert("De registratie van uw account is niet gelukt!")</script>'; 

                  }

                } elseif(isset($_POST) && !empty($_POST) && $_POST['wachtwoord'] != $_POST['wachtwoordbevestiging']) {

                  echo '<script>alert("De twee ingevoerde wachtwoorden komen niet overeen met elkaar!")</script>'; 
                  

                } elseif($database->check_email_exist($_POST['email']) == true) {


                  echo '<script>alert("De ingevoerde email bestaat al!")</script>';   
                
                }

              } else {
               
                // do something

              }
              ?>
        </div>
 </div>
</body>
</html>