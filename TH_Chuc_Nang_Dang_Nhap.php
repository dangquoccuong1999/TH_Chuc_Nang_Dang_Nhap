<!DOCTYPE HTML>
<html>
<style type="text/css">
    .login {
        height: 180px;
        width: 300px;
        margin: 0;
        padding: 10px;
        border: 1px #CCC solid;
    }

    .login input {
        padding: 5px;
        margin: 5px
    }
    button{
        padding: 5px;
        margin: 5px;
    }
</style>
<body>
<form method="post" action="DangNhap.php">
    <div class="login">
        <h2>Login</h2>
        <input type="text" name="username" size="30" placeholder="username"/>
        <input type="password" name="password" size="30" placeholder="password"/>
        <input type="submit" value="Đăng nhập"/>
        <a href="DangKy.php">
            <button type="button">Đăng ký</button>
        </a>
    </div>
</form>

</body>
</html>


