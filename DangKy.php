<!DOCTYPE HTML>
<html>
<style type="text/css">
    .signin {
        height: 220px;
        width: 300px;
        margin: 0;
        padding: 10px;
        border: 1px #CCC solid;
    }

    .signin input {
        padding: 5px;
        margin: 5px
    }

    button {
        padding: 5px;
        margin: 5px;
    }

</style>

<body>
<form method="post">
    <div class="signin">
        <h2>Sign in</h2>
        <input type="text" name="username" size="30" placeholder="username"/>
        <input type="password" name="password" size="30" placeholder="password"/>
        <input type="password" name="password_2" size="30" placeholder="password"/>
        <input type="submit" value="Đăng ký"/>
    </div>
</form>
</body>
</html>
<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $userName = $_REQUEST['username'];
    $pass = $_REQUEST['password'];
    $pass_2 = $_REQUEST['password_2'];
    $dem = 0;

    $dataJson = file_get_contents('data.json');
    $arrData = json_decode($dataJson);

    if (!empty($pass) && !empty($pass_2)) {
        if ($pass == $pass_2) {
            $arrDataNew = array('username'=> $userName,'password'=>$pass);
            array_push($arrData ,$arrDataNew);
            $dataJson = json_encode($arrData);
            file_put_contents('data.json', $dataJson);
            echo '<h1 style="color: red">Bạn đã đăng ký thành công</h1>';
        }
    }
}
?>