<?php
  require '../controller/Login/Login.php';
  @$email = $_POST['email'];
  @$senha = $_POST['senha'];

  $login = new Login();
  $login->logar($email,$senha);