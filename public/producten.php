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

img {
    float: left;
    width:  200px;
    height: 200px;
    object-fit: cover;
}

</style>

<?php 

// voert de functie uit waarbij de query is beschreven om de categorieen te weergeven.

$res = $database->read_category();

?>


<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">categorieën</h1>
    </div>
</section>

<div class="container">
        <div class="col">
            <div class="row">


            <!-- laat data zien uit de database door middel van het fetchen van de array -->
    
                        <?php 
            while($r = mysqli_fetch_assoc($res)){
            ?>


                <div style="padding-bottom: 10px;"class="col-12 col-md-6 col-lg-4">
                    <div class="card">
                       <img class="card-img-top" src='<?php echo $r['Afbeelding']; ?>' alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title"><a style="text-decoration:none" href="product.php?categorie=<?php echo $r['Categorie'] ?>" title="Bekijk Product"><?php echo $r['Categorie']?></a></h4>
                            <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                            <div class="row">
                            </div>
                        </div>
                    </div>
                </div>

                
                <?php } ?>


                <!-- <div class="col-12">
                    <nav aria-label="...">
                        <ul class="pagination">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1">Previous</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item active">
                                <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div> -->
        </div>

    </div>
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
                    <li><a href="index.php">Home</a></li>
                    <li><a href="producten.php">Producten</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>

            <!-- <div class="col-md-3 col-lg-2 col-xl-2 mx-auto">
                <h5>Others links</h5>
                <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
                <ul class="list-unstyled">
                    <li><a href=""></a></li>
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
                    <li><i class="fa fa-envelope mr-2"></i>Sportshop@contact.nl</li>
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



