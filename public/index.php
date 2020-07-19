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


/* slideshow CSS */

.carousel-caption,h3{
    font-weight: lighter;
}


</style>


<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">Home</h1>
        <p class="lead text-muted mb-0">Welkom bij the Sportshop, voor al uw sportkleding en accesoires. neem een kijkje in ons brede assortiment, wij staan altijd klaar voor ons klanten om te beste en de hoogste kwaliteit sportspullen te bieden, jouw exercise, ons missie!</p>
    </div>
</section>


<!--Slideshow-->
<div style="padding-bottom: 35px;" id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img style="width: auto;  height: 738px;" src="https://img.freepik.com/vrije-photo/gewichten-uitoefenen-gewichtheffer-sterke-atletische_1139-709.jpg?size=626&ext=jpg" class=" w-100 " alt="Error loading image">
        <div class="carousel-caption d-none d-md-block">
          <h3>Wij brengen uw oefening tot leven!</h3>
        </div>
      </div>
      <div class="carousel-item">
        <img style="width: auto;  height: 738px;" src="https://www.ayurveda.nl/media/wysiwyg/content/ayurveda-tipps/Contentbild-Sport-Fitness.jpg" class="d-block w-100" alt="Error loading image">
        <div class="carousel-caption d-none d-md-block">
          <h3>Elegantie en luxe uitstraling met de hoogste kwaliteit materiaal!</h3>
        </div>
      </div>
      <div class="carousel-item">
        <img style="width: auto;  height: 738px;" src="https://www.focus-lerenenontwikkelen.nl/wp-content/uploads/2017/04/fitness-4.jpg" class="d-block w-100" alt="Error loading image">
        <div class="carousel-caption d-none d-md-block">
          <h3>Samenwerking met de meest bekende fabrikanten!</h3>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>





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

