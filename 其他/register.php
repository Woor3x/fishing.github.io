<?php
    #数据库相关信息
    $servername = "localhost";
    $db_username = "root";
    $db_password = "root";
    $dbname = "user";
    
    #连接数据库
    $conn = new mysqli($servername, $db_username, $db_password, $dbname);
    if ($conn->connect_error){
        die("Connection failed: " . $conn->connect_error);
    }
    echo "connect sucessfully!<br>";


    $username = $_POST['username'];
    $password = $_POST['password'];
    $repassword = $_POST["repassword"];


    $sql = "INSERT INTO users (username, password) VALUES (" . $username . ", " . $password . ");";
    echo "用户名:" . $username . "<br>";
    echo "密码:" . $password . "<br>";
    echo $repassword . "<br>";


    echo "sql语句:" . $sql . "<br>";

    if ($conn->query($sql) == TRUE)
    {
        echo "注册成功";
    }
    else
    {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
?>