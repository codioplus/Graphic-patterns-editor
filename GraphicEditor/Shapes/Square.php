<?php

namespace GraphicEditor\Shapes;

/***
 * Square shape class
 * Class SquareShape
 * @package GraphicEditor\Shapes
 */
class Square extends ShapeBase
{
    /***
     * @var int
     */
    private $width = 10 ;
    /**
     * @var int
     */
    private $sideLength = 0 ;
    /**
     * @var int
     */
    private $addedBorderWidth = 10;

    /**
     * Sets the sideLength of the square
     * @param int $sideLength
     */
    public function setSideLength($sideLength)
    {
        $this->sideLength = $sideLength;
    }


    /**
     * Returns the sideLength of the square
     * @return int
     */
    public function getSideLength()
    {
        return $this->sideLength;
    }


    /***
     * Sets the border width of the square
     * @param $borderWidth
     */
    public function setWidth($width)
    {
        $this->width = $width + $this->addedBorderWidth;
    }

    /***
     * Returns the  border width of the square
     * @return int
     */
    public function getWidth()
    {
        return $this->width;
    }



    /***
     * Sorry, I implemented this, it is simple just to have a demonstration
     * @return string
     */
    public function calculateShape(){
        $count = 0;
        $i;
        $j;
        $n = $this->getSideLength();
        for ($i = 1; $i <= $n; $i++)
        {
            for ($j = 1; $j <= $n; $j++)
            {
                if ($i == 1 || $i == $n ||
                    $j == 1 || $j == $n)
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