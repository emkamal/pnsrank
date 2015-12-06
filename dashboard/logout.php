<?php
include("../globalconfig.php");

session_destroy();
header("Location: login.php?text='Please log in first'");
die();

?>