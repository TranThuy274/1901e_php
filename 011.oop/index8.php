<?php
/**
 * Created by PhpStorm.
 * User: Park Park
 * Date: 5/23/2019
 * Time: 8:55 PM
 */

class HinhTron{
    public static $r;

    public static function datBanKinh($r)
    {
        self::$r = $r;
        return self::$r;
    }

    public static function tinhchuvi($r) {
        // C = r*2*4.14
        $cv = $r*2*3.14;
        return $cv;
    }

    public static function tinhdientich($r)
    {
        $s = $r*$r*3.14;
        return $s;
    }
}

/**
 * khi khởi tạo đối tượng thông thường
 * $doituong = new TenClass();
 * gọi đến thuộc tính hay phương thức của class
 * thì sẽ phải gọi qua đối tượng
 * $doituong->tenthuoctinh;
 * $doituong->tenphuongthuc();
 */
/**
 * khi class có các thuộc tính hay phương thức có từ khoá static
 * thì không cần khởi tạo đối tượng bằng từ khoá new
 * gọi đến thuộc tính statuc bằng cách
 * TenClass::TenThuocTinh;
 * gọi đến phương thức static bằng cách
 * TenClass::TenPhuongThuc();
 *
 *
 */

$bankinh = HinhTron::datBanKinh(5);
echo "<br> Bán kinh " . $bankinh;

$chuvi = HinhTron::tinhchuvi(5);
echo "<br> Chu vi " . $chuvi;

$dientich = HinhTron::tinhdientich(5);
echo "<br> Dien tich " . $dientich;