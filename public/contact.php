

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

  <?php
  // Start the session
  session_start();
  ?>

  <?php require_once('../private/initialize.php'); ?>

  <?php include(SHARED_PATH . '/public_header.php'); ?>

<!-- Contact form -->

<title>Contactpagina</title>

  <div class="container" style="border: 1px solid black; background-color: rgb(248,249,250); margin-top: 150px; padding-top: 15px;">
      
      
    
    <form method="post">
    <div class="form-group">
      <label for="exampleInputNaam1">Naam</label>
      <input id="name" name="name" type="textbox" class="form-control"  aria-describedby="emailHelp" placeholder="Voer hier je naam in" required>
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Email</label>
      <input id="email" name="email" type="email" class="form-control"  placeholder="Voer hier je email in" required>
      <small id="emailHelp" class="form-text text-muted">We zullen uw e-mail nooit met iemand anders delen.</small>
      </div>
    <div class="form-group">
      <label for="exampleFormControlTextarea1">Opmerking</label>
      <textarea id="message" name="message" class="form-control"  placeholder="Voer hier je opmerking of vraag in" rows="3" required></textarea>
    </div>
      <button id="submit" name="submit" type="submit" class="btn btn-primary">Verzenden</button>

      <?php 
  
        // POST request verzenden als de form submit is verstuurd, zet data in de variabele en sanitized vervolgens de data.

      if(isset($_POST) && !empty($_POST)){
        $id = $database->sanitize($functions->generate_random_ID());
        $name = $database->sanitize($_POST['name']);
        $email = $database->sanitize($_POST['email']);
        $message = $database->sanitize($_POST['message']);

        // Melding als de functie create is uitgevoerd en data wordt vervolgens toegevoegd.

        $res = $database->create_contact($id, $name, $email, $message);
        if($res){
          echo '<script>alert("Uw bericht is succesvol verzonden.")</script>'; 
        }else{
          echo '<script>alert("Het verzenden van uw bericht is niet gelukt!")</script>'; 
          echo "Het verzenden van uw bericht is niet gelukt!";
        }
      }
      ?>

    </form>



  </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
  
  <div style="position: absolute; bottom: 5px; left: 5px;">
    <footer>  
   <?php include(SHARED_PATH . '/public_copyright_disclaimer.php');  ?>
    </footer>
  </div>