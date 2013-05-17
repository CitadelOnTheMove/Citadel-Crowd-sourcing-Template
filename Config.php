<?php
/*
 * Configuration settings
*/

// directories
define("HTDOCS_ROOT", "C:/wamp/www/");                 //Don't forget to insert the web root directory (for example: 
                                             // "C:/wamp/www/")
define("BASE_DIR", "crowd-sourcing-template/" );
define("CLASSES_DIR", "php/");
define("CLASSES", HTDOCS_ROOT . BASE_DIR . CLASSES_DIR);
define("SERVERNAME", "http://localhost/");       //Don't forget to replace localhost
                                                 //with your IP address, if you want to connect to the template with your mobile phone


// database
define("DB_USERNAME", "root");
define("DB_PASSWORD", "");
define("DB_HOSTNAME", "127.0.0.1");
define("DB_PORT", "3306");
define("DB_NAME", "citadel_pois");

define("DEBUG", true);

// views
define("MAP_CENTER_LATITUDE", 51.033261);
define("MAP_CENTER_LONGITUDE", 3.726488);
define("MAP_ZOOM", 16);

// dataset
define("DATASET_FILE", HTDOCS_ROOT . BASE_DIR ."data/POI_athens.json");
define("DATASET_ID", 36);
define("DATASET_URL", SERVERNAME . BASE_DIR . "dataset.php");
define("USE_DATABASE", true);

?>
