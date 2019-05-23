<?php
/**
 * Created by PhpStorm.
 * User: Park Park
 * Date: 5/23/2019
 * Time: 7:46 PM
 */

class Test{
    public $a = 5;

    protected $b = 7;

    private $c = 8;

    public function getC(){
        echo "<br>" . __METHOD__ . " " . $this->c;
    }
}

$t = new Test();
echo "<br>" .$t->a;
