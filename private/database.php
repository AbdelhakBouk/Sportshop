
<?php
 
 class Database {
     private $connection;
 
     public function connect_db(){
         $this->connection = mysqli_connect('localhost', 'root', '', 'webshop');
         if(mysqli_connect_error()){
         die("Databaseverbinding mislukt" . mysqli_connect_error() . mysqli_connect_errno());
         }
     }
     
     // de constructor zorgt ervoor dat de functie automatisch word aangeroepen als de class word aangeroepen.
 
     function __construct(){
         $this->connect_db();
     }
 
     // dit zorgt ervoor dat de speciale tekens en variabels worden verwerkt en de string 'escape' wordt.
 
     public function sanitize($var){
         $return = mysqli_real_escape_string($this->connection, $var);
         return $return;
     }
 
     // het toevoegen van de data die in de contactpage form word ingevuld.
 
     public function create_contact($id, $name, $email, $message){
         $name = ucfirst($name);
         $email = ucfirst($email);
         $message = ucfirst($message);

         $sql = "INSERT INTO `contact` (ID, Naam, Email, Bericht) VALUES ('$id','$name', '$email', '$message')";
         $res = mysqli_query($this->connection, $sql);
         if($res){
          return true;
         }else{
             return false;
         }
     }

     // functie voor het lezen van de query om alle categorieen te weergeven.

     public function read_category(){
         $sql = "SELECT * FROM categorie";
         $res = mysqli_query($this->connection, $sql);
         return $res;
     }

     // functie voor het aanmaken van een gebruiker.

     public function create_user($id, $voornaam, $achternaam, $telefoonnummer, $geslacht, $geboortedatum, $email, $postcode, $straatnaam, $huisnummer, $stad, $wachtwoord,$token){
        
        $voornaam = ucfirst($voornaam);
        $achternaam = ucfirst($achternaam); 
        $telefoonnummer = $telefoonnummer; 
        $geboortedatum = $geboortedatum;
        $email = ucfirst($email);
        $straatnaam = ucfirst($straatnaam);
        $stad = ucfirst($stad);
        $wachtwoord_hash = password_hash($wachtwoord, PASSWORD_DEFAULT);

         $sql = "INSERT INTO gebruiker (ID, Voornaam, Achternaam, Telefoonnummer, Geslacht, Geboortedatum, Email, Postcode, Straatnaam, Huisnummer, Woonplaats, Wachtwoord, Token) VALUES ('$id', '$voornaam', '$achternaam', '$telefoonnummer', '$geslacht', '$geboortedatum', '$email', '$postcode', '$straatnaam', '$huisnummer', '$stad', '$wachtwoord_hash','$token')";
         $res = mysqli_query($this->connection, $sql);
         if($res){
             return true;
             
         } else {
             return false;
             
         }
        
     }

         // checked of de ingevoerde e-mail in de database staat.

         public function check_email_exist($email){
             

            $sql = "SELECT * FROM gebruiker WHERE Email='$email'";
            $res = mysqli_query($this->connection, $sql);

            if(mysqli_num_rows($res) > 0){
                
                $result = true;

                
                return $result;

            } else{
                
                $result = false;

                return $result;

            }

         }

         // checked of de ingevoerde wachtwoord klopt van de email.

         public function check_password($wachtwoord, $email){

                $email = ucfirst($email);

                $sql = "SELECT * FROM gebruiker WHERE Email = '$email'";
                $res = mysqli_query($this->connection, $sql);

                if(mysqli_num_rows($res) > 0){

                $gebruiker = mysqli_fetch_array($res);

               

                if(password_verify($wachtwoord, $gebruiker['Wachtwoord'])){

                    
                    $result = true;
                                     
                    '<script>alert("De wachtwoorden kloppen!")</script>';

                    return true;

                } else {

                    $result = false;

                    '<script>alert("De wachtwoorden niet kloppen!")</script>';

                    return false;

                }

                } else {

                    // do something
                    
                } 
                
            }

        

         // de account van de gebruiker verifieren en activeren.

         public function verify_email($token) {

            $sql = "SELECT * FROM gebruiker WHERE token= '$token' LIMIT 1";
            $res = mysqli_query($this->connection, $sql);

            if(mysqli_num_rows($res) > 0){

                // stopt de rows van de uitkomst van de database in een array

                $gebruiker = mysqli_fetch_assoc($res);

                $query = "UPDATE gebruiker SET Geverifieerd=1 WHERE token='$token'";

                $result = mysqli_query($this->connection, $query);
                
                echo '<center><h1>Je account is geactiveerd!</h1></center>';
                echo '<script>alert("uw account is geactiveerd!")</script>';

            } else {

                echo '<script>alert("De gebruiker is niet gevonden!")</script>'; 
                
                
            }
        }





            // maakt sessions aan voor de data van gebruiker na het inloggen van de gebruiker

            public function session_inlog($email){

                $sql = "SELECT * FROM gebruiker WHERE Email = '$email'";
                $res = mysqli_query($this->connection, $sql);
        
                
                if(mysqli_num_rows($res) > 0){
        
                $gebruiker = mysqli_fetch_array($res);
        
                $_SESSION['ID'] = $gebruiker['ID'];
                $_SESSION['Email'] = $gebruiker['Email']; 
                $_SESSION['Wachtwoord'] = $gebruiker['Wachtwoord'];
        
        
                } else {
                
                '<script>alert("ERROR sessions!")</script>';
        
        
                }
        
            }


   
    }

  
 $database = new Database();
 $database->connect_db();
  
 ?>