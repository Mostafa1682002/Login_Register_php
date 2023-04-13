<?php
setcookie("login_username", '', time() - 20);
setcookie("login_password", '', time() - 20);

session_start();
session_unset();
session_destroy();
header("Location: login.php");
