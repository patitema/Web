<?php
  $login = isset($_POST['login']) ? htmlspecialchars(trim($_POST['login'])) : '';
  $password = isset($_POST['password']) ? htmlspecialchars(trim($_POST['password'])) : '';

  if(mb_strlen($login) < 5 || mb_strlen($login) > 90) {
    echo "Недопустимая длинна логина";
    exit();
  } else if (mb_strlen($password) < 2 || mb_strlen($password) > 6){
    echo "Недопустимая длинна пароля (2-6 символов)";
    exit();
  } else{

    $password = md5($password."werwnbfddkj");

    $mysql = new mysqli("localhost","root","root","register-bd",8889);
    $mysql->query("INSERT INTO `users` (`login`, `password`) 
    VALUES('$login', '$password')");
    $mysql->close();
  }
  
  header("Location: /");
?>