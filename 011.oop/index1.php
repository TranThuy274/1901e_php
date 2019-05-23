<?php
/**
 * Created by PhpStorm.
 * User: Park Park
 * Date: 5/23/2019
 * Time: 6:30 PM
 */


class Student{
    /**
     * Khai báo biến
     * @var
     */
    public $name;
    public $age;
    public $location;
    public $point;


    /**
     * Hàm khởi tạo của class
     */
    public function __construct($name_param, $age_param, $location_param)
    {
        /**
         * trong các phương thức của class để gọi đến chính bản thân class
         * thì ta sử dụng từ khóa $this
         */
        $this->name = $name_param;
        $this->age = $age_param;
        $this->location = $location_param;

    }

    public function calculatePoint($point_ar_param){
        if(is_array($point_ar_param) && !empty($point_ar_param)){
            $count = 0;
            $total = 0;
            foreach ($point_ar_param as $key => $value){
                $total += $value;
                $count++;
            }
            $point = $total/$count;
            $this->$point = $point;
        }
        return false;
    }

}

/**
 * Khởi tạo đối tượng class
 *
 */

$name = "Nguyễn văn tuấn";
$age = 21;
$locaton = "Thái bình";
$tuan = new Student($name, $age, $locaton);

echo "<pre>";
print_r($tuan);
echo "</pre>";

$point = array(
    'java' => 5,
    'database' => 3,
    'php' => 6,
    'html' => 2,
    'oop' => 7,
    '.net' => 9
);

/**
 * gọi đến phương thức của class
 *
 */

$tuan->calculatePoint($point);
$cal_point = $tuan->point;
echo "Điểm trung bình: " . $cal_point;
echo "<pre>";
print_r($tuan);
echo "</pre>";