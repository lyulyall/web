<?php
require_once 'logic.php';
require_once 'login.php';
require_once 'db.php';

$data = $_POST;


if (isset($data['doLogin'])) {

    $login = htmlspecialchars($data['login']);
    if (trim($data['login']) == '') {
        setcookie("error_log", "Введите логин!",time()+3600);
        header('Location: login.php ');
        die();
    } else {
        setcookie("login", $data['login'],time()+3600);
    }

    if ($data['password'] == '') {
        setcookie("error_log", "Введите пароль!",time()+3600);
        header('Location: login.php ');
        die();
    } else {
        $password = $data['password'];
    }

    if (isset($_COOKIE["wrong_pass"])) {
        if ($_COOKIE["wrong_pass"] > 2) {
            setcookie("error_log", "Вы превысили количество попыток входа. Попробуйте позже.", time() + 3600);
            header('Location: login.php ');
            die();
        }
    }

    if (empty($errors)) {
        $sql_count = "SELECT * FROM `users` WHERE `login` = ?";
        $query = $pdo->prepare($sql_count);
        $query->execute([$login]);
        $query_array = $query->fetch(PDO::FETCH_ASSOC);
        if (!empty($query_array)) {
            if (password_verify($password, $query_array['password'])) {
                session_start();
                $_SESSION['loggedUser'] = $login;
                deleteCookies();
                setcookie("wrong_pass", "",time()-3600);
                header('Location: index.php ');
                die();
            }
            else{
                if (!isset($_COOKIE["wrong_pass"])){
                    setcookie("wrong_pass", 1 ,time()+3600);
                }
                else{
                    $wrong_pass = $_COOKIE["wrong_pass"];
                    $wrong_pass++;
                    setcookie("wrong_pass", $wrong_pass, time()+3600);
                }
                if (isset($_COOKIE["wrong_pass"])){
                    if($_COOKIE["wrong_pass"]>1){
                        setcookie("error_log", "Вы превысили количество попыток входа. Попробуйте позже.",time()+3600);
                        header('Location: login.php ');
                        die();
                    }
                }
                else{
                    setcookie("error_log", "Неверный пароль!",time()+3600);
                    header('Location: login.php ');
                    die();
                }
            }
        }
        else{
            setcookie("error_log", "Логина нет в системе!",time()+3600);
            header('Location: login.php ');
            die();
        }
    }
}
