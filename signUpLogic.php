<?php
require_once 'logic.php';
require_once 'signup.php';
require_once 'db.php';

$data = $_POST;

function checkPassword($password, &$errors)
{
    if (strlen($password) < 7) {
        setcookie("error", "Пароль слишком короткий!",time()+3600);
        header('Location: signup.php ');
        die();
        return false;
    }
    if (strlen($password) > 30) {
        setcookie("error", "Пароль слишком длинный!",time()+3600);
        header('Location: signup.php ');
        die();
        return false;
    }
    if (preg_match("#[А-Я]+#", $password)) {
        setcookie("error", "Пароль не должен содержать русских букв!",time()+3600);
        header('Location: signup.php ');
        die();
        return false;
    }
    if (!preg_match("#[0-9]+#", $password)) {
        setcookie("error", "Пароль должен содержать минимум 1 цифру!",time()+3600);
        header('Location: signup.php ');
        die();
        return false;
    }
    if (!preg_match("#[a-z]+#", $password)) {
        setcookie("error", "Пароль должен содержать минимум 1 строчную букву!",time()+3600);
        header('Location: signup.php ');
        die();
        return false;
    }
    if (!preg_match("#[A-Z]+#", $password)) {
        setcookie("error", "Пароль должен содержать минимум 1 заглавную букву!",time()+3600);
        header('Location: signup.php ');
        die();
        return false;
    }
    if (preg_match("#\s+#", $password)) {
        setcookie("error", "Пароль не должен содержать пробел!",time()+3600);
        header('Location: signup.php ');
        die();
        return false;
    }
    return true;
}

if (isset($data['doSignUp'])) {
    echo '<script type="text/javascript">alert("aaaaa")</script>';
    $userdata['blood_group'] = $data["blood_group"];
    $userdata['rh_factor'] = $data["rh_factor"];
    $password = '';

    setcookie("blood_group", $data['blood_group'],time()+3600);
    setcookie("rh_factor", $data['rh_factor'],time()+3600);
    setcookie("login", $data['login'],time()+3600);
    setcookie("name", $data['name'],time()+3600);
    setcookie("surname", $data['surname'],time()+3600);
    setcookie("patronymic", $data['patronymic'],time()+3600);
    setcookie("VK_link", $data['VK_link'],time()+3600);


    if (trim($data['name']) == '') {
        setcookie("error", "Введите имя!",time()+3600);
        header('Location: signup.php ');
        die();
    } else {
        $userdata['name'] = $data['name'];
    }
    if (trim($data['surname']) == '') {
        setcookie("error", "Введите фамилию!",time()+3600);
        header('Location: signup.php ');
        die();
    } else {
        $userdata['surname'] = $data['surname'];
    }

    if (trim($data['patronymic']) == '') {
        setcookie("error", "Введите отчество!",time()+3600);
        header('Location: signup.php ');
        die();
    } else {
        $userdata['patronymic'] = $data['patronymic'];
    }


    if (trim($data['login']) == '') {
        setcookie("error", "Введите логин!",time()+3600);
        header('Location: signup.php ');
        die();
    } else {
        if (filter_var(trim($data['login']), FILTER_VALIDATE_EMAIL)){
            $userdata['login'] = $_POST["login"];
        }
        else {
            setcookie("error", "Некорректный email!",time()+3600);
            header('Location: signup.php ');
            die();
        }
    }

    if ($data['password'] == '') {
        setcookie("error", "Введите пароль!",time()+3600);
        header('Location: signup.php ');
        die();
    } else {
        if (checkPassword($data['password'],$errors)) {
            $password = $_POST["password"];
            $userdata['password'] = $_POST["password"];
            $userdata['password'] = password_hash($userdata['password'], PASSWORD_DEFAULT);
        }
    }

    if($data['password_rep'] !== $password)
    {
        setcookie("error", "Пароли не совпадают!",time()+3600);
        header('Location: signup.php ');
        die();
    }


    if (trim($data['VK_link']) == '') {
        setcookie("error", "Введите ссылку на свой профиль VK!",time()+3600);
        header('Location: signup.php ');
        die();
    } else {
        if (strpos(trim($data['VK_link']), 'https://vk.com/')!== false){
            $userdata['VK_link'] = $data['VK_link'];
        }
        else{
            setcookie("error", "Некорректная ссылка на профиль VK!",time()+3600);
            header('Location: signup.php ');
            die();
        }
    }

    if (empty($errors)) {
        $pdo = DBConnect();
        $bar = [];
        $sql_test = "SELECT COUNT(*) FROM `users` WHERE login = ?";
        $result = $pdo->prepare($sql_test);
        $result->execute([$userdata['login']]);
        $number_of_rows = $result->fetchColumn();
        $sql_test2 = "SELECT COUNT(*) FROM `users` WHERE vk = ?";
        $result2 = $pdo->prepare($sql_test2);
        $result2->execute([$userdata['VK_link']]);
        $number_of_rows2 = $result2->fetchColumn();
        if ($number_of_rows == 0 && $number_of_rows2 == 0) {
            $sql = "INSERT INTO `users` (`login`, `password`, `name`, `surname`, `patronymic`, `vk`, `blood_group`, `rh_factor`)
        VALUES (:login, :password, :name, :surname, :patronymic, :VK_link, :blood_group, :rh_factor)";
            $query = $pdo->prepare($sql);
            $res = $query->execute($userdata);
            deleteCookies();
            header('Location: trains.php ');
            die();
        } else if ($number_of_rows !== 0) {
            setcookie("error", "Пользователь с таким логином уже существует!",time()+3600);
            header('Location: signup.php ');
            die();
        }
        if($number_of_rows2 !== 0){
            setcookie("error", "Пользователь с такой ссылкой VK уже существует!",time()+3600);
            header('Location: signup.php ');
            die();
        }
    }
}

