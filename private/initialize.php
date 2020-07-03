<?php


  // Assign file paths to PHP constants
  // __FILE__ returns the current path to this file
  // dirname() returns the path to the parent directory
  define("PRIVATE_PATH", dirname(__FILE__));
  define("PROJECT_PATH", dirname(PRIVATE_PATH));
  define("PUBLIC_PATH", PROJECT_PATH . '/public');
  define("SHARED_PATH", PRIVATE_PATH . '/shared');
  
    // * Can dynamically find everything in URL up to "/public"
    $public_end = strpos($_SERVER['SCRIPT_NAME'], '/public') + 7;
    $doc_root = substr($_SERVER['SCRIPT_NAME'], 0, $public_end);
    define("WWW_ROOT", $doc_root);

    // de includen van de database class file.

    include('database.php');

    // de includen van de function class file.

    include('functions.php');

    // Autoload class definitions
    function my_autoload($class) {
        if(preg_match('/\A\w+\Z/', $class)) {
        include('classes/' . $class . '.class.php');
        }
    }
    spl_autoload_register('my_autoload');


    // error reporting / handling

    error_reporting(E_ALL & ~E_NOTICE);


?>