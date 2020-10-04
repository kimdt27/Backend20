<?php
class Statest
{
    public $jojo;
    public static $stavar = "static variable";
    public static function echovar(){
        echo "I'm static func - ". self::$stavar;
    }
}
$test = new Statest();
//echo $test->stavar;
echo Statest::$stavar;
Statest::echovar();
