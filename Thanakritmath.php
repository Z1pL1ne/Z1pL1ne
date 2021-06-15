<?php
    $name = "นาย ธนกฤษ" ;
    $lastname = "ขุนเพ็ง" ;
    $no = "เลขที่ 7" ;

    $a = 1;
    $b = 2;
    $d = 4;
    $e = 5;
    $f = 7;
    $g = 8;
    $h = 9;
    $i = 10;
    $j = 25;
    $k = 40;
    $sum = "";
    echo $name."&nbsp".$lastname."&nbsp".$no ;

    echo "<hr>";
    $sum = $e+$g*$h;
    echo $e."+".$g."*".$h."=".$sum;

    echo "<hr>";
    $sum = $i-$d+$b;
    echo $i."-".$d."+".$b."=".$sum;

    echo "<hr>";
    $sum = $i-$b+$a;
    echo $i."-"."(".$b."+".$a.")"."=".$sum;

    echo "<hr>";
    $sum = $e*$b-$k%$e;
    echo $e."*".$b."-".$k."%".$e."=".$sum;

    echo "<hr>";
    $sum = $f+$g%$b+$j;
    echo $f."+".$g."%".$b."+".$j."=".$sum;
    
    echo "<hr>";

?>