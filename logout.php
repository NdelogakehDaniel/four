<?php
//used to logout user that's we destroy all sessions
//and send him back to login page
session_destroy();
header('Location: index.php');
?>