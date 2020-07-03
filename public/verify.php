<?php 

// het importeren van de initialize file om alles functionerend te krijgen.
require_once('../private/initialize.php'); 

?>

<?php include(SHARED_PATH . '/public_header.php'); ?>

<title>Verificatie</title>

<div class="container" style="border: 1px solid black; background-color: rgb(248,249,250); margin-top: 150px; padding-top: 15px;">
      
<?php 

if(isset($_GET['token'])){

  $token = $_GET['token'];

  $database->verify_email($token);


} else {

  echo '<script>alert("De token is niet gevonden!")</script>'; 

}

?>      
  
</div>
  



<div style="position: absolute; bottom: 5px; left: 5px;">
    <footer>  
   <?php include(SHARED_PATH . '/public_copyright_disclaimer.php');  ?>
    </footer>
  </div>