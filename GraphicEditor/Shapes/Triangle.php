<?php

namespace GraphicEditor\Shapes;

/***
 * Triangle shape class
 * Class TriangleShape
 * @package GraphicEditor\Shapes
 */
class Triangle extends ShapeBase
{
    /***
     * @var int
     */
    private $width = 10 ;
    /**
     * @var int
     */
    private $triangleX = 0 ;

    /**
     * @var int
     */
    private $addedBorderWidth = 10;


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

    /**
     * @return int
     */
    public function getTriangleX(): int
    {
        return $this->triangleX;
    }

    /**
     * @param int $triangleX
     */
    public function setTriangleX(int $triangleX)
    {
        $this->triangleX = $triangleX;
    }





    /***
     * Sorry, I implemented this, it is simple just to have a demonstration
     * @return string
     */
    public function calculateShape(){

        $count = 0;
        $n = $this->getTriangleX();
        $k = 0;

        for ($i = 1; $i <= $n; $i++)
        {

            // Print spaces
            for ($j = $i; $j < $n; $j++)
            {
                $data[$count]= "\t\t";
                $count++;
            }

            // Print *
            while ($k != (2 * $i - 1))
            {
                if ($k == 0 || $k == 2 *
                    $i - 2)
                    $data[$count]= "*";
                else
                    $data[$count]= "\t\t";
                $count++;
                $k++;
            }
            $k = 0;

            // print next row
            $data[$count] = "\n";
            $count++;
        }

        // print last row
        for ($i = 0; $i < 2 * $n - 1; $i++)
        {
            $data[$count]= "*";
            $count++;
        }

        return $data;
    }
}