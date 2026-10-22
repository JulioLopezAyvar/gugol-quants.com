<?php
    session_start();
    date_default_timezone_set('America/Lima');
    $time_start = new DateTime();

    //https://stackoverflow.com/questions/607673/setting-a-php-sessionvar-using-jquery
    //do any authentication first, then add POST variable to session
    $_SESSION['lang'] = $_POST['lang'];
    echo $_SESSION['lang'];
?>