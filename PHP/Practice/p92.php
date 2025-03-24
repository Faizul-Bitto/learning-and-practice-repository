<?php

session_start();

// destroying a single session variable
unset( $_SESSION["email"] );