<?php
// Start the session
session_start();
?>

<?php 

// het importeren van de initialize file om alles functionerend te krijgen.
require_once('../private/initialize.php'); 

?>

<?php include(SHARED_PATH . '/public_header.php'); ?>


<?php

if(isset($_POST) && !empty($_POST)) {

  $email = $database->sanitize(ucfirst($_POST['email']));
  $wachtwoord = $database->sanitize($_POST['wachtwoord']);



    // validatie 

    if($database->check_email_exist($email) == true && $database->check_password($wachtwoord, $email) == true){



      $database->session_inlog($email);
    

      // echo '<script>alert("Je bent ingelogd!")</script>';

      // echo "<script> windows.location = 'http://localhost/Projecten/Supermarket/public/account.php' ";


      
     echo "<script>window.location.href = 'index.php'</script>";


    }

     elseif($database->check_password($wachtwoord, $email) == false && $database->check_email_exist($email) == true) {

      echo '<script>alert("De ingevoerde wachtwoord komt niet overeen met de account!")</script>';

    } elseif($database->check_email_exist($email) == false){

      echo '<script>alert("De ingevoerde email heeft geen bestaande account!")</script>';

    } else {

   
      '<script>alert("Inloggen is niet gelukt!")</script>';

    } 
}  

else {

// do something

}


?>

<title>Login</title>



  <div class="container" style="border: 1px solid black; background-color: rgb(248,249,250); margin-top: 150px; padding-top: 15px;">

    <div class="row">
        <div class="col-md-4 offset-md-4 form-wrapper auth login">
          <h3 class="text-center form-title">Login</h3>
          <form action="login.php" method="post">
            <div class="form-group">
              <label>Email</label>
              <input type="email" name="email" maxlength="100" name="email" class="form-control form-control-lg" value="<?php echo $username; ?>" required>
            </div>
            <div class="form-group">
              <label>Wachtwoord</label>
              <input type="password" minlength="8" maxlength="225" name="wachtwoord" class="form-control form-control-lg" required>
            </div>
            <div class="form-group">
              <button name="submit" type="submit" name="login-btn" class="btn btn-lg btn-block">Login</button>
            </div>
          </form>
          <p> Heeft uw nog geen account? <a href="Register.php">Register</a></p>
        </div>
      </div>   
    </div>

<div style="position: absolute; bottom: 5px; left: 5px;">
    <footer>  
   <?php include(SHARED_PATH . '/public_copyright_disclaimer.php');  ?>
    </footer>
  </div>