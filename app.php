<?php
$data = json_decode($_POST['json'],true);
if (is_null($data)) {
    die("Sorry, json cannot be decoded!");
}else{

   $shapes = $data;

}

include_once("autoload.php");
use GraphicEditor\Canvas;
$canvas = new Canvas();
$canvas->drawShapes($shapes);
?>

