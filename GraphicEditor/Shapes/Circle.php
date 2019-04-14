<?php

namespace GraphicEditor\Shapes;

/***
 * Circle shape square
 * Class CircleShape
 * @package GraphicEditor\Shapes
 */
class Circle extends ShapeBase
{

	/***
	 * Perimeter of the circle
	 * @var int
	 */
    private $perimeter = 0;
    private $width = 10 ;
    private $addedBorderWidth = 10;

    /***
     * Sets the border width of the circle
     * @param $borderWidth
     */
    public function setWidth($width)
    {
        $this->width = $width + $this->addedBorderWidth;
    }

    /***
     * Returns the  border width of the circle
     * @param $borderWidth
     * @return int
     */
    public function getWidth()
    {
        return $this->width;
    }

    /***
     * Sets the value for perimeter
     * @param $perimeter
     */
    public function setPerimeter($perimeter)
    {
        $this->perimeter = $perimeter;
    }

    /***
     * Return the perimeter of the circle
     * @return int
     */
    public function getPerimeter()
    {
        return $this->perimeter;
    }

    /***
	 * here we should calculate the shape of circle, for know we just create empty values
     * @return string
     */
    public function calculateShape()
    {
        // dist represents distance
        // to the center

        $dist = 0.0;
        $count = 0;
        $radius = $this->getPerimeter();
        // for horizontal movement
        for ($i = 0; $i <= 2 * $radius; $i++) {

            // for vertical movement
            for ($j = 0; $j <= 2 * $radius; $j++) {
                $dist = sqrt(($i - $radius) *
                    ($i - $radius) +
                    ($j - $radius) *
                    ($j - $radius));

                // dist should be in the range
                // (radius - 0.5) and (radius + 0.5)
                // to print stars(*)
                if ($dist > $radius - 0.5 &&
                    $dist < $radius + 0.5)
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