Citadel-Crowd-sourcing-Template
===============================

CITADEL on the move - Mobile application template for Crowd-sourced Points of Interest - www.citadelonthemove.eu

Deployment

1.  Put all the files under a folder named 'citadel-crowd-sourcing-template' inside the web directory of your local webserver.
2.  Open the Config.php file and fill in your root web directory,e.g. (in a WAMP default installation): 

        define(“HTDOCS_ROOT”, “C:/wamp/www/”)
4.  Run the database.sql script to create a sample database
5.  Set the database setting to true:
        define("USE_DATABASE", true);
5.  Open a browser and point it at: http://localhost/citadel-crowd-sourcing-template/index.php
6.  The template application is up and running with the default dataset of the database.

For more details on how to install the template and the underlying technology please refer to the 
[guide documents](doc/Installation Guide-Crowd-Sourcing.docx) inside the 'doc' folder. 