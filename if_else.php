<?php
    $balance = 100;
    //เงื่อนไข ถ้ามีเงินมากกว่า 0 บาท ให้แสดงข่้อความว่า กดเงินได้
    //ถ้ามีเงินน้อย กว่า 0 บาท ให้แสดงข้อความว่า ไม่สามารถกดเงินได้่

    //if($balance>90){
    //    echo"กดเงินได้ <br>";
    //}else{
    //    echo"ไม่สามารถกดเงินได้ <br>";
    //}
    //echo "โปรแกรมทำงานเสร็จสิน";


    echo ($balance>0)?"กดเงินได้": "ไม่สามารถกดเงินได้"
?>