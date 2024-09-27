<?php

// to start session:
session_start();

// $_SESSION["variable name"] = "value";
$_SESSION["email"] = "johndoe@gmail.com";
echo $_SESSION["email"];