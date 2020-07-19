<?php
// Start the session
session_start();
?>

<?php 

// het importeren van de initialize file om alles functionerend te krijgen.
require_once('../private/initialize.php'); 

?>



<?php include(SHARED_PATH . '/public_header.php'); ?>


<title>Hoofdpagina</title>

<style>

/*
** Style Simple Ecommerce Theme for Bootstrap 4
** Created by T-PHP https://t-php.fr/43-theme-ecommerce-bootstrap-4.html
*/
.bloc_left_price {
    color: #c01508;
    text-align: center;
    font-weight: bold;
    font-size: 150%;
}
.category_block li:hover {
    background-color: #007bff;
}
.category_block li:hover a {
    color: #ffffff;
}
.category_block li a {
    color: #343a40;
}
.add_to_cart_block .price {
    color: #c01508;
    text-align: center;
    font-weight: bold;
    font-size: 200%;
    margin-bottom: 0;
}
.add_to_cart_block .price_discounted {
    color: #343a40;
    text-align: center;
    text-decoration: line-through;
    font-size: 140%;
}
.product_rassurance {
    padding: 10px;
    margin-top: 15px;
    background: #ffffff;
    border: 1px solid #6c757d;
    color: #6c757d;
}
.product_rassurance .list-inline {
    margin-bottom: 0;
    text-transform: uppercase;
    text-align: center;
}
.product_rassurance .list-inline li:hover {
    color: #343a40;
}
.reviews_product .fa-star {
    color: gold;
}
.pagination {
    margin-top: 20px;
}
footer {
    background: #343a40;
    padding: 40px;
}
footer a {
    color: #f8f9fa!important
}


/* error CSS */

body section .card {
  display:flex;
  align-items: center !important;
  vertical-align: center !important;
  align-content: center !important;
  
}

</style>


<main style="padding-bottom: 20px;" class="container">
  <div class="row mt-5">
    <section class="col-md-6 offset-md-3">
      
      <div class="card text-center animated zoomIn slow p-5 shadow-lg">
        
         <span><i class="far text-warning  fa-5x fa-frown"></i></span>
        
        <p class="display-3  ">Oops!</p>
        
       
        
        <i><h2 class="text-danger font-weight-bold my-1">Geen producten gevonden</h2></i>
          
        <p>Er zijn geen producten gevonden in de categorie <?php echo $_GET['categorie']?></p>
        <form action="index.php">
        <button class="btn btn-primary btn-block rounded-pill">Ga naar homepagina</button>
        </form>
      </div>
    </section>
  </div>
</main>






<!-- Footer -->
<footer class="text-light">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-lg-4 col-xl-3">
                <h5>About</h5>
                <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
                <p class="mb-0">
                The Sportshop is sinds 2020 actief in de verkoop van de bekendste merken binnen de sportkleding</p>
            </div>

            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto">
                <h5>Navigatie</h5>
                <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
                <ul class="list-unstyled">
                    <li><a href="">Home</a></li>
                    <li><a href="">Producten</a></li>
                    <li><a href="">Contact</a></li>
                </ul>
            </div>

            <!-- <div class="col-md-3 col-lg-2 col-xl-2 mx-auto">
                <h5>Others links</h5>
                <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
                <ul class="list-unstyled">
                    <li><a href="">Link 1</a></li>
                    <li><a href="">Link 2</a></li>
                    <li><a href="">Link 3</a></li>
                    <li><a href="">Link 4</a></li>
                </ul>
            </div> -->

            <div class="col-md-4 col-lg-3 col-xl-3">
                <h5>Contact</h5>
                <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
                <ul class="list-unstyled">
                    <li><i class="fa fa-home mr-2"></i>The Sportshop</li>
                    <li><i class="fa fa-envelope mr-2"></i> Sportshop@contact.nl</li>
                    <li><i class="fa fa-phone mr-2"></i>+ 0184 23 43 49 88</li>
                    <li><i class="fa fa-print mr-2"></i>+ 31629246187</li>
                </ul>
            </div>
            <div class="col-12 copyright mt-3">
                <p class="float-left">
                    <a href="#">Terug naar boven</a>
                </p>
            </div>
        </div>
        <p>Copyright <?php echo date('Y'); ?>, Abdel Boukechoudan.</p>
    </div>
</footer>

