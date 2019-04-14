<?php

namespace GraphicEditor;
use GraphicEditor\Shapes\ShapeBase;


/***
 * Class responsible to format our shapes including sending to screen, if any new format is needed just add it here
 * Interface ShapeFormatter
 * @package GraphicEditor\Shapes
 */
class ShapeFormatter
{

    public static function printShapeHtml(ShapeBase $shape){
        echo "<div class='shapeBlk' style='color:".$shape->getColor().";font-size:".$shape->getWidth()."px'>";
       $return = $shape->calculateShape();
       foreach($return as $key => $echoData){
           $string = str_replace("\t","&nbsp;",$echoData);
           echo  nl2br($string);
       }
        echo "</div>";
    }

}
