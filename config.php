<?php

define("DB_SERVER","localhost");
define("DB_USER","root");
define("DB_PASSWORD","root");
define("DB_NAME","task");
define("PS",PATH_SEPARATOR);
define("DS",DIRECTORY_SEPARATOR);

define('Index',"index.php?r=");

define("CONTROLLERS_DIR",__DIR__.DS."controllers");
define("LIBS_DIR",__DIR__.DS."libs");
define("MODELS_DIR",__DIR__.DS."models");
define("VIEW_DIR",__DIR__.DS."views");
define("CSS",__DIR__.DS."css");
define("JS",__DIR__.DS."js");


//define("CLASS_OBJECT","Courses");


class Path {

    function __construct() {
        
    }
    function Ratev_Path() {
        
        return "http://localhost/server/";
        
    }

}

?>
