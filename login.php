<?php
require_once __DIR__ . '/functions.php';

if (isAuthorized()) {
    redirect('index');
}

$errors = [];
$error;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $login = $_POST['login'];
    $password = $_POST['password'];
    $username = $_POST["guest"];

    if (login($login, $password)) {
        redirect('index');
    } elseif (username($username)) {
        redirect('list');
    } else {
        $errors[] = 'Логин или пароль неверные';
    }    
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Авторизация</title>
</head>
<body>
<section id="login">
    <div class="container">
        <div class="row">
            <div class="col-xs-4">
                <div class="form-wrap">
                    <h1>Авторизация</h1>
                    <ul>
                        <? foreach ($errors as $error): ?>
                           <li><?= $error ?></li>
                        <? endforeach; ?>
                    </ul>
                    <form method="POST" id="login-form" action="">
                        <div class="form-group">
                            <label for="lg" class="sr-only">Логин</label>
                            <input type="text" placeholder="Логин" name="login" id="lg" class="form-control">
                        </div>
                        <br/>
                        <div class="form-group">
                            <label for="key" class="sr-only">Пароль</label>
                            <input type="password"  placeholder="Пароль" name="password" id="key" class="form-control">
                        </div>
                        <input type="submit" id="btn-login" class="btn btn-custom btn-lg btn-block" value="Войти">
                    

                    <h1>Войти как гость:</h1>
                    
                        <div class>
                            <label for="lg" class="sr-only">Введите имя</label>
                            <input type="text" placeholder="Имя" name="guest" id="lg" class="form-control" >
                        </div>
                        <br/>
                    <input type="submit" id="btn_login" class="btn btn-custom btn-lg btn-block"  value="Отправить">
                    </form>

                    <hr>
                </div>
            </div> <!-- /.col-xs-12 -->
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</section>
</body>
</html>