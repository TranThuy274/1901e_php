<?php
/**
 * Created by PhpStorm.
 * User: Park Park
 * Date: 5/23/2019
 * Time: 7:46 PM
 */

class Test
{
    public $a = 5;

    protected $b = 7;

    private $c = 8;

    public function methoda()
    {
        echo "<br>" . __METHOD__;
    }

    protected function methodb()
    {
        echo "<br>" . __METHOD__;
    }

    private function methodc()
    {
        echo "<br>" . __METHOD__;
    }
}

$t = new Test();
echo "<br>" . $t->a;
//truy cập vào thuộc tính có giới hạn truy cập là protected

//echo "<br>" .$t->b;

class Test1 extends Test
{
    public function truycapphuongthucpubliccha()
    {
        echo "<br>" . __METHOD__ . " " . $this->methoda();
    }

    public function truycapphuongthucprotectedcha()
    {
        echo "<br>" . __METHOD__ . " " . $this->methodb();
    }

    /**
     * private chỉ truy cập được trong cùng 1 lớp
     */

   /* public function truycapphuongthucprivatecha()
    {
        echo "<br>" . __METHOD__ . " " . $this->methodc();
    }*/
}

$t1 = new Test1();

//$t1->truycapphuongthucprivatecha();
$t1->truycapphuongthucpubliccha();
//$t1->truycapphuongthucprotectedcha();