
<?php
class Triangle extends Shape
{
    public function area()
    {
        return 0.5 * $this->width * $this->height;
    }
}
?>