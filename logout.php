<?php

session_start();
unset($_SESSION["emailid"]);
session_destroy();

header('location:index.php');

?>