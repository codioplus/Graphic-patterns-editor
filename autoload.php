<?php

/***
 * Class to load classes, to make easier the inclusion files
 * Class Loader
 */
class Loader
{
    /***
     * Init class loader
     */
    public function init()
    {
        try {
            function loadClasses($pClassName)
            {
                if (file_exists(__DIR__ . "/" . str_replace('\\', '/', $pClassName) . ".php"))
                    include_once(__DIR__ . "/" . str_replace('\\', '/', $pClassName) . ".php");
                else
                    echo " Shape " . $pClassName . " has not been implemented  \n";
            }
            spl_autoload_register("loadClasses");
        }
        catch (Exception $ex)
        {
            echo $ex->getMessage();
        }
    }

}

$loader = new Loader();
$loader->init();
