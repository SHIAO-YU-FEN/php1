<?php
    error_reporting(0); #把警告訊息關掉
    
    #php要怎麼跟mysql資料庫進行連結，有三步驟
    #1. mysql_connect，必須要設定ip(本地端為localhost)
    #   帳號、密碼、以及連結的資料庫(mydb)
    $conn = mysqli_connect("localhost", "root", "", "mydb");
    #2. mysql_query來找出資料
    $result=mysqli_query($conn, "select * from user");
    
    #3. mysql_fetch_array來擷取每筆資料
    $row=mysqli_fetch_array($result);
    echo $row[0]. " ".$row[1]; 

    echo "<br>";
    $row=mysqli_fetch_array($result);
    echo $row[id]." ".$row[pwd];
?>