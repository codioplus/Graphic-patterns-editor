<?php

namespace GraphicEditor;

use GraphicEditor\Shapes\ShapeBase;
use GraphicEditor\ShapeFormatter;


class Canvas
{

    /***
     * An array of all current shapes in the canvas
     * @var array
     */
    private $shapes = [];


    /**
     * Draws a Shape in the canvas
     * @param ShapeBase $shape
     */
    public function drawShape(ShapeBase $shape)
    {
        //first calculates the shape
        $this->shapes[] = $shape;
        //then draw the shape
        ShapeFormatter::printShapeHtml($shape); //sends it to the screen as Html


    }

    /***
     * This method accepts an array of shapes to draw them in the canvas
     * @param $aShapes
     */
    public function drawShapes(array $aShapes)
    {
        if ($aShapes['shapes']) {
            //parses all shapes in the array
            foreach ($aShapes['shapes'] as $shape) {
                if ($shape['type']) {
                    $classShape = "GraphicEditor\\Shapes\\" . ucfirst($shape['type']);
                }


                if (class_exists($classShape)) {
                    //instance the shape and set all params
                    $oShape = new  $classShape();


                    foreach ($shape as $keyParam => $valueParam) {
                        if ($keyParam == 'type') {
                            continue;
                        }

                        if (is_array($valueParam)) {
                            foreach ($valueParam as $keyP => $valueP) {
                                $param = "set" . ucfirst($keyP);
                                $oShape->$param($valueP);
                            }
                        } else {
                            $param = "set" . ucfirst($keyParam);
                            $oShape->$param($valueParam);
                        }
                    }

                    $this->drawShape($oShape);
                }
            }
        } else {

             die("Shapes array missing in your json.");
        }
    }


}