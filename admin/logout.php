<?php

include_once "support.php";

    session_start();
    session_destroy();
    header("location:index.php");



?>