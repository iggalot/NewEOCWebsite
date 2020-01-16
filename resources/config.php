<?php
/* This file should be located in the RESOURCES directory of the project. */

 
/*
    The important thing to realize is that the config file should be included in every
    page of your project, or at least any page you want access to these settings.
    This allows you to confidently use these settings throughout a project because
    if something changes such as your database credentials, or a path to a specific resource,
    you'll only need to update it here.
*/
 
$config = array(
    "db" => array(
        "db1" => array(
            "dbname" => "database1",
            "username" => "dbUser",
            "password" => "pa$$",
            "host" => "localhost"
        ),
        "db2" => array(
            "dbname" => "database2",
            "username" => "dbUser",
            "password" => "pa$$",
            "host" => "localhost"
        )
    ),
    "urls" => array(
        "baseUrl" => "localhost"
    ),
    "paths" => array(
        "resources" => $_SERVER["DOCUMENT_ROOT"] . "/resources",
        "images" => array(
            "content" => $_SERVER["DOCUMENT_ROOT"] . "/img/content",
            "layout" => $_SERVER["DOCUMENT_ROOT"] . "/img/layout"
        )
    )
);
 
/*
    I will usually place the following in a bootstrap file or some type of environment
    setup file (code that is run at the start of every page request), but they work 
    just as well in your config file if it's in php (some alternatives to php are xml or ini files).
*/
 
/*
    Creating constants for heavily used paths makes things a lot easier.
    ex. require_once(LIBRARY_PATH . "Paginator.php")
*/
// defined("LIBRARY_PATH")
//     or define("LIBRARY_PATH", (__DIR__) . '\library');
     
// defined("TEMPLATES_PATH")
//     or define("TEMPLATES_PATH", (__DIR__) . '\templates');
 
// defined("RESOURCES_PATH")
//     or define ("RESOURCES_PATH", (__DIR__) );




/* The subdirectory that serves as the root directory for this website -- the location of index.php from the root diretory */

defined("LIBRARY_PATH")
    or define("LIBRARY_PATH", realpath(dirname(__FILE__) . '/library'));
     
defined("TEMPLATES_PATH")
    or define("TEMPLATES_PATH", realpath(dirname(__FILE__)  . '/templates'));
 
defined("RESOURCES_PATH")
    or define ("RESOURCES_PATH",realpath(dirname(__FILE__)  ));

defined("INDEX_PATH")
    or define ("INDEX_PATH", realpath(dirname(__FILE__) . "/../"));

defined("CSS_PATH")
    or define ("CSS_PATH", realpath(dirname(__FILE__) . '/../css'));

defined("CAROUSEL_PATH")
    or define ("CAROUSEL_PATH", realpath(dirname(__FILE__) . '/../img/content/carousel'));



// echo "LibraryPath: " . LIBRARY_PATH . "<br>";
// echo "TemplatesPath: ". TEMPLATES_PATH . "<br>";
// echo "ResourcesPath: " . RESOURCES_PATH . "<br>";
// echo "IndexPHPPath: " . INDEX_PATH . "<br>";
// echo "CSSPath: " . CSS_PATH . "<br>";
// echo "CarouselPath: " . CAROUSEL_PATH . "<br>";
/*
  
    Error reporting.
*/
ini_set("error_reporting", "true");
error_reporting(E_ALL|E_STRCT);
 
?>