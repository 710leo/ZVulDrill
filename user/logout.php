<?php
include_once('../sys/config.php');
session_destroy();
header('Location: ../index.php');
?>