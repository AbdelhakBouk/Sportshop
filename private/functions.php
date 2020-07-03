 <?php

Class Functions {


    // deze functie genereert een unieke string / ID op basis van de ingevoerde lengte.

    public function generate_random_ID() {
        $random = '';
        $length = 11;

        for ($i = 0; $i < $length; $i++) {
            $random .= strtoupper(chr(rand(ord('a'), ord('z'))));
        }
        return $random;

        

    }

    // verstuurd een e-mail om te account te verifieren

public function send_verification_email($email, $token) {
    
$subject = "Activeer je account voor The Sportshop";
$headers = "From: The Sportshop\r\n"; 
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";


    $body = '<!DOCTYPE html>
    <html lang="en">

    <head>
      <meta charset="UTF-8">
      <title>Verification mail</title>
      <style>
        .wrapper {
          padding: 20px;
          color: #444;
          font-size: 1.3em;
        }
        a {
          background: #592f80;
          text-decoration: none;
          padding: 8px 15px;
          border-radius: 5px;
          color: #fff;
        }
      </style>
    </head>

    <body>
      <div class="wrapper">
        <p>Bedankt voor het aanmelden op onze site. Klik op de onderstaande link om uw account te activeren:</p>
        <a href="http://localhost/Projecten/Supermarket/public/verify.php?token=' . $token . '">Verifieer Email!</a>
      </div>
    </body>

    </html>';


    if (mail($email, $subject, $body, $headers)) {
    
    // nothing

  } else {
      echo "De verificatie e-mail versturen is niet gelukt";
  }


}

}

$functions = new Functions();

?>