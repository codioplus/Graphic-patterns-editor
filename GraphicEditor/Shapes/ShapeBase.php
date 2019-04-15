<?php

namespace GraphicEditor\Shapes;

/***
 * Shape base to work as a contract for other shapes, if any other shape has to be created extend it using this class
 * Class ShapeBase
 * @package GraphicEditor\Shapes
 */
abstract class ShapeBase
{
    /***
     * Method to make the calculations of the shape
     * @return mixed
     */
    abstract function  calculateShape();


    protected $data;

    /***
     * Shape Color By default black
     * @var string
     */
    private $color = 'black';

    /***
     * Border width
     * @var int  by default 0
     */
    private $width = 0;

    /**
     * Sets the color of the shape
     * @param $color
     */
    public function setColor($color)
    {
        $this->color  = $color;
    }


    /***
     * Returns the color of the shape
     */
    public function getColor()
    {
        return $this->color;
    }

    /***
     * Returns the border width of the shape
     */
    public function getWidth()
    {
        return $this->width;
    }

    /***
     * Sets the border width
     * @param $width
     */
    public function setWidth($width)
    {
        $this->width = $width;
    }

    /***
     * To catch some possible errors
     * @param $name
     * @param $arguments
     */
    public function __call($name, $arguments)
    {
		echo "The shape class " . __CLASS__ . " has not implemented the method " .  $name . "\n";
    }
}