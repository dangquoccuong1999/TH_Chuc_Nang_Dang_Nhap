<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userName = $_POST["username"];
    $pass = $_POST["password"];

    $dataJson = file_get_contents('data.json');
    $arrData = json_decode($dataJson, true);
    $dem = 0;

    foreach ($arrData as $value) {
        if ($userName == $value['username'] && $pass == $value['password']) {
            echo "<h2><span style='color:red'>Bạn đã đăng nhập thành công </h2>";
            $dem++;
        }
    }
    if ($dem == 0) {
        echo "<h2><span style='color:red'>Login Error</span></h2>";
    }
}
?>
