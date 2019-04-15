<?php

namespace GraphicEditor\Shapes;

/***
 * Rhombus shape class
 * Class RhombusShape
 * @package GraphicEditor\Shapes
 */
class Rhombus extends ShapeBase
{
    /***
     * @var int
     */
    private $width = 10;
    /**
     * @var int
     */
    private $rhombusX = 0;
    /**
     * @var int
     */
    private $addedBorderWidth = 10;

    /**
     * @return int
     */
    public function getRhombusX()
    {
        return $this->rhombusX;
    }

    /**
     * @param int $rhombusX
     */
    public function setRhombusX(int $rhombusX)
    {
        $this->rhombusX = $rhombusX;
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
         $n = $this->getRhombusX();

        for ($i = 1; $i <= $n; $i++)
        {

            // Print trailing spaces
            for ($j = 1; $j <= $n - $i; $j++) {
                $data[$count] = "\t\t";
                $count++;
            }

            // Print stars after spaces
            // Print stars for each solid $n
            if ($i == 1 || $i == $n)
                for ($j = 1; $j <= $n; $j++) {
                    $data[$count] = "*";
                    $count++;
                }
            // stars for hollow $n
            else
                for ($j = 1; $j <= $n; $j++) {
                    if ($j == 1 || $j == $n)
                        $data[$count] = "*";
                    else
                        $data[$count]= "\t\t";
                    $count++;
                }
            // Move to the next line/row
            $data[$count] = "\n";
            $count++;
        }


        return $data;
    }
}