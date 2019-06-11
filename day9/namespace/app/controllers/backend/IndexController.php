<?php
/**
 * Created by PhpStorm.
 * User: Park Park
 * Date: 6/10/2019
 * Time: 9:49 PM
 */

namespace App\Controller\Backend;

/**
 * cú pháp as để tạo bí danh
 * Khi import namspace thì phải import đến tận cấp tên class
 *
 */
use App\Controllers\Frontend\IndexController as FIC;
use App\Model\CommonModel;
use Duc\Console\Http;

class IndexController
{
    public function indexAction()
    {
        echo "<br>" . __METHOD__;
        $this->userOtherNamespace();
    }

    public function userOtherNamespace(){
        $controlerFe = new FIC();
        $controlerFe->indexAction();

        $model = new CommonModel();
        $model->indexAction();

        $test = new Http();
        $test->indexAction();
    }
}