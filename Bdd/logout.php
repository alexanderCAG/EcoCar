
<?php

    if(!empty($_SESSION['emailUser'])){
        session_start();
        session_unset();
        // unset($_SESSION);
        // unset($_COOKIE);
        $_SESSION = array();
        session_destroy();
        header("Location: ../Base");
        exit();
    }else{
        session_start();
        session_unset();
        // unset($_SESSION);
        // unset($_COOKIE);
        $_SESSION = array();
        session_destroy();
        header("Location: ../Base");
        exit;
    }
    
?>