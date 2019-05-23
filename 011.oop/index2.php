<?php
/**
 * Created by PhpStorm.
 * User: Park Park
 * Date: 5/23/2019
 * Time: 7:19 PM
 */

class BasePhone
{
    public $name;
    public $model;
    public $manufacture;

    public function __construct($name, $model, $manufacture)
    {
        $this->name = $name;
        $this->model = $model;
        $this->manufacture = $manufacture;
    }

    /**
     * gửi tin nhắn sms
     */

    public function sendSms($phone)
    {
        echo "<br>" . __METHOD__ . " " . $phone;
    }

    /**
     * nhận tin nhắn
     * @param $phone
     */

    public function rêciveSms($phone)
    {
        echo "<br>" . __METHOD__ . " " . $phone;
    }

    /**
     * gọi điện
     * @param $phone
     */

    public function callNumber($phone)
    {
        echo "<br>" . __METHOD__ . " " . $phone;
    }

    /**
     * nhận cuộc gọi
     * @param $phone
     */

    public function receiveNumber($phone)
    {
        echo "<br>" . __METHOD__ . " " . $phone;
    }
}

/**
 * class Smartphone kế thừa từ class Basephone
 * extends == kế thừa từ 1 class cha
 *
 */
class  SmartPhone extends BasePhone
{

    public function __construct($name, $model, $manufacture)
    {
        parent::__construct($name, $model, $manufacture);
    }


    public function sendEmail($address_email)
    {
        echo "<br>" . __METHOD__ . " " . $address_email;
    }

    public function facebook($account)
    {
        echo "<br>" . __METHOD__ . " " . $account;
    }

    public function playgame($game_name)
    {
        echo "<br>" . __METHOD__ . " " . $game_name;
    }
}

$samsungi8 = new SmartPhone('samsung i8', 'i8', 'samsung');
$samsungi8->sendSms('086869433');
$samsungi8->facebook('facebook');
echo "<pre>";
print_r($samsungi8);
echo "</pre>";