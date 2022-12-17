<?php
    
    $sayilar = array(1,5,7,4,56,78,12,45);
    $isimler = array("ali","zeynep","canan","beril");
    $kullanicilar = array("sadikturan"=>"38","cinarturan"=>"4","yigitbilgi"=>"12");

    // echo count($sayilar)."<br>";
    // echo count($isimler)."<br>";
    // echo count($kullanicilar)."<br>";

    # artan sırada
    sort($sayilar);
    sort($isimler);
    asort($kullanicilar); # value
    ksort($kullanicilar); # key

    # azalan sırada
    rsort($sayilar);
    rsort($isimler);
    arsort($kullanicilar); # value
    krsort($kullanicilar); # key

    print_r($sayilar);
    echo "<br>";
    print_r($isimler);
    echo "<br>";
    print_r($kullanicilar);

    # string to array
    $string = "sadık|turan|38";
    $arr = explode("|",$string);

    # array to string
    $arr = array("sadık","turan","38");
    $string = implode(",", $arr);

    # rastgele sıralama
    print_r($isimler);
    echo "<br>";
    shuffle($isimler);
    print_r($isimler);
    print_r($string);

    # dizi birleştirme
    $plakalar = array("41","34");
    $sehirler = array("kocaeli","istanbul");

    $arr = array_combine($plakalar,$sehirler);

    $arr1 = ["istanbul","kocaeli"];
    $arr2 = ["rize","izmir"];

    $arr = array_merge($arr1,$arr2);

    # eleman tekrarlama sayıları
    $arr1 = ["istanbul","kocaeli","istanbul","kocaeli","izmir","rize"];
    $arr = array_count_values($arr1);

    # dizinin sonuna eleman ekleme
    array_push($arr1,"giresun");

    # dizinin başına eleman ekleme
    array_unshift($arr1,"yalova");

    print_r($arr1);

?>