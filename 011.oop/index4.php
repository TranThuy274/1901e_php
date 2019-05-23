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

}

$t = new Test();
echo "<br>" .$t->a;
//truy cập vào thuộc tính có giới hạn truy cập là private

//echo "<br>" .$t->c;