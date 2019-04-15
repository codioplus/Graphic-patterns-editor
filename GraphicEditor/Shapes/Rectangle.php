<?php

namespace GraphicEditor\Shapes;

/***
 * Rectangle shape class
 * Class RectangleShape
 * @package GraphicEditor\Shapes
 */
class Rectangle extends ShapeBase
{
    /***
     * @var int
     */
    private $width = 10;
    /**
     * @var int
     */
    private $rectangleWidth = 0;
    /**
     * @var int
     */
    private $rectangleLength = 0;
    /**
     * @var int
     */
    private $addedBorderWidth = 10;



    /**
     * @return int
     */
    public function getRectangleWidth(): int
    {
        return $this->rectangleWidth;
    }

    /**
     * @param int $rectangleWidth
     */
    public function setRectangleWidth(int $rectangleWidth)
    {
        $this->rectangleWidth = $rectangleWidth;
    }

    /**
     * @return int
     */
    public function getRectangleLength()
    {
        return $this->rectangleLength;
    }

    /**
     * @param int $rectangleLength
     */
    public function setRectangleLength( $rectangleLength)
    {
        $this->rectangleLength = $rectangleLength;
    }


    /***
     * Sets the border width of the Rectangle
     * @param $borderWidth
     */
    public function setWidth($width)
    {
        $this->width = $width + $this->addedBorderWidth;
    }

    /***
     * Returns the  border width of the Rectangle
     * @return int
     */
    public function getWidth()
    {
        return $this->width;
    }



    /***
     * Add the Shape in array
     * @return array
     */
    public function calculateShape(){

        $count = 0;
         $n = $this->getRectangleLength();
         $m = $this->getRectangleWidth();
         $i;
         $j;
         for ($i = 1; $i <= $n; $i++)
         {
        for ($j = 1; $j <= $m; $j++)
        {
            if ($i == 1 || $i == $n ||
                $j == 1 || $j == $m)
                $data[$count]= "*";
            else
            $data[$count]= "\t\t";
            $count++;
        }
             $data[$count] = "\n";
             $count++;
        }

        return $data;
    }
}