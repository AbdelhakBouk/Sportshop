<?php
// Start the session
session_start();
?>

<?php 

// het importeren van de initialize file om alles functionerend te krijgen.
require_once('../private/initialize.php'); 

?>

<?php include(SHARED_PATH . '/public_header.php'); ?>

<title>Producten</title>

<style>

.categorie {

  background-color: #e6e6e6;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;


}

.price {
  color: grey;
  font-size: 22px;
}

.card button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.card button:hover {
  opacity: 0.7;
}

</style>

<?php 

// voert de functie uit waarbij de query is beschreven om de categorieen te weergeven.

$res = $database->read_category();

?>

<!-- laat data zien uit de database door middel van het fetchen van de array -->

<?php 
while($r = mysqli_fetch_assoc($res)){
?>





<?php } ?>




<div style="position: absolute; bottom: 5px; left: 5px;">
    <footer>  
   <?php include(SHARED_PATH . '/public_copyright_disclaimer.php');  ?>
    </footer>
  </div>