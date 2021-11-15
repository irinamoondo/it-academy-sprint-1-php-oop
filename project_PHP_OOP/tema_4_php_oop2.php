<?php
    class Shape {
        public $height;
        public $width;
        public function __construct($height, $width) {
            $this->height = $height;
            $this->width = $width;
        }
    }
    class Triangle extends Shape {
        public function areaTriangle ($height, $width) {
            return ($height * $width)/2;
        }
    }
    class Rectangle extends Shape {
        public function areaTriangle ($height, $width) {
            return $height * $width;
        }
    }
/* example
$triangle1 = new Triangle(20, 30);
echo $triangle1->areaTriangle (20, 30); */
?>