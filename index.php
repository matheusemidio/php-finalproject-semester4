<?php 
//Getting access functions file
define("FOLDER_PHP", "PHP/");
define("FILE_PHP_FUNCTIONS",FOLDER_PHP. "PHP-functions.php");


require_once FILE_PHP_FUNCTIONS;


//Beginning of the HTML 
generateHeader("Home");

    //Calling and writing space
        ?>
            <p class="margin-zero">Welcome to my Website!</p>
        <?php
        showAdvertisingPicture();
    //End of writing space


//End of the HTML
generateFooter();


