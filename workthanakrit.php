<?php
    $a = null;
    $b = "";
    $c = 0;
    $d = "7 ธนกฤษ ขุนเพ็ง" ;


    echo "ฟังก์ชัน isset ตรวจสอบว่ามีการกำหนดค่าหรือไม่ <br>";
    echo "ตัวแปร a มีค่าเป็น".isset($a)."<br>";
    echo "ตัวแปร b มีค่าเป็น".isset($b)."<br>";
    echo "ตัวแปร c มีค่าเป็น".isset($c)."<br>";
    echo "ตัวแปร d มีค่าเป็น".isset($d)."<br>";
    echo "<hr>";

    echo "ฟันก์ชัน empty ตรวจสอบว่ามีค่าว่างหรือมีเลขศูนย์หรือไม่ <br>";
    echo "ตัวแปร a เป็น".empty($a)."<br>";
    echo "ตัวแปร b เป็น".empty($b)."<br>";
    echo "ตัวแปร c เป็น".empty($c)."<br>";
    echo "ตัวแปร d เป็น".empty($d)."<br>";
    echo "<hr>";
?>