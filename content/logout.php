<?php

session_start();
session_destroy();

header("Location: ../content/login.php");

?>