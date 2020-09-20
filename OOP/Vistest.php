<?php
class Vistest {
    public $one = "one";
    private $two = "two";
    protected $three = "three";

    public function __construct()
    {
        echo $this->one."<br>";
        echo $this->two."<br>";
        echo $this->three."<br>";
    }
    public function change($two2, $three2){
        $this->two = $two2;
        $this->three = $three2;
        echo $this->one."<br>";
        echo $this->two."<br>";
        echo $this->three."<br>";

    }
}
$vistest = new Vistest();
echo $vistest->one;
$vistest->one = "the new one";
echo $vistest->one;
echo "<br><br>";

$vistest->change("the new two", "the new three");


