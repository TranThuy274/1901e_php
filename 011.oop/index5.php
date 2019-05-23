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
//truy cập vào thuộc tính có giới hạn truy cập là protected

//echo "<br>" .$t->b;

class Test1 extends Test{
    public function truycapthuoctinhpubliccha(){
        echo "<br>" . __METHOD__ . " " . $this->a;
    }

    public function truycapthuoctinhprotectedcha(){
        echo "<br>" . __METHOD__ . " " . $this->b;
    }

    /**
     * private chỉ truy cập được trong cùng 1 lớp
     */

   /* public function truycapthuoctinhprivatecha(){
        echo "<br>" . __METHOD__ . " " . $this->c;
    }*/
}

$t1 = new Test1();

//$t1->truycapthuoctinhprivatecha();
$t1->truycapthuoctinhpubliccha();
$t1->truycapthuoctinhprotectedcha();