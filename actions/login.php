<?php
require_once 'x.jpg';

$username = $_POST['username'];
$password = $_POST['password'];

session_start();

$hashed_password = password_hash($password, PASSWORD_BCRYPT);  // Gerando o hash da senha

if (strtoupper($username) === ADMIN_USER && password_verify($password, ADMIN_PASS_HASH)) {
$_SESSION['logged_in'] = true;
header('Location: ..\adm.php');
} else {
echo "Usuário ou senha incorretos.";
}

?>