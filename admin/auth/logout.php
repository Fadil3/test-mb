<?php
session_start();
$_SESSION['admin_email'] = '';
unset($_SESSION['admin_email']);
session_unset();
session_destroy();
header("Location: admin/auth/login.php");
