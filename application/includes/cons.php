<?php
/*
| Constant variable are set to this file. 
| You may add your contact variable in this file.
*/

/*
| Constant for database action
*/
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', 'root123');
define('DB_NAME', 'myframework');

/*
| Constant for Application
*/

define('APP_DOMAIN', 'http://localhost');
define('APP_TIMEZONE', 'UTC');

/*
| Constant for PHP Settings
*/

define('PHP_MAX_EXECUTION_TIME', '123456');
define('PHP_DISPLAY_ERROR', true);


/*
| Constant for setting up our directory. Let's avoid using ../ when including.
*/


/*
| Our Main Path in our server.
*/
define('ROOT', realpath($_SERVER['DOCUMENT_ROOT']));
/* 
| Our Main folder where our application in located
*/
define('FOLDER_ROOT', 'myfw/myfw');


/*
| Constant for Baseref,  etc...
*/


/* 
| We will this for loading images, css, js, etc....
*/
define ("BASE_HREF", APP_DOMAIN."/".FOLDER_ROOT."/public/");

/* 
| We will this AJAX request
*/
define ("AJAX_HREF", APP_DOMAIN."/".FOLDER_ROOT."/");
/* 
| We will use
*/
define ("INCLUDE_ROOT", ROOT."/". FOLDER_ROOT ."/");
