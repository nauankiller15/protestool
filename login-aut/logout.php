<?php
session_start();
session_destroy();
header('location: /ProtesTool/login.php');
?>
