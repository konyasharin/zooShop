<?php
    require_once 'registrationDB.php';
    $body = json_decode(file_get_contents('php://input'));
    $login = trim($body->login);
    $password = trim(md5($body->password));

    

    $checkuser = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");
    $email = $checkuser->fetch_assoc()['email'];
    if (mysqli_num_rows($checkuser) == 0){
        echo json_encode(array('error' => "Неверный логин или пароль"));
        exit();
    }

    $mysql->close();
    echo json_encode(array('login' => $login, 'email' => $email));








