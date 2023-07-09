<?php
    require_once 'registrationDB.php';
    $body = json_decode(file_get_contents('php://input'));
    $login = trim($body->login);
    $password = trim(md5($body->password));
    $email = trim($body->email);

    $check_email = $mysql->query("SELECT * FROM `users` WHERE `email` = '$email'");
    $check_login = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login'");

    if (mb_strlen($login) > 128 || mb_strlen($login) == 0){
        echo json_encode(array('error' => 'Неверная длина логина. Допустима от 1 до 128 символов.'));
        exit();
    }

    else if (mb_strlen($password) > 32 || mb_strlen($password) < 8){
        echo json_encode(array('error' => 'Неверная длина пароля. Допустима от 8 до 32 символов.'));
        exit();
    }
    
    else if (mb_strlen($email) > 64 || mb_strlen($email) == 0){
        echo json_encode(array('error' => 'Неверная длина email. Допустима от 1 до 64 символов.'));
        exit();
    }
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo json_encode(array('error' => 'Неверная запись email'));
        exit();
    }
    
    else if (mysqli_num_rows($check_email) > 0){
        echo json_encode(array('error' => 'Есть пользователь с такой же почтой'));
        exit();
    }
    else if (mysqli_num_rows($check_login) > 0){
        echo json_encode(array('error' => 'Есть пользователь с таким же логином'));
        exit();
    }
    
    
   
    $mysql->query("INSERT INTO `users` (`login`, `email`, `password`) VALUES ('$login', '$email', '$password')");
    $mysql->close();
    $answer = array('login' => $login, 'email'=>$email);
    echo json_encode($answer);
    
    

?>