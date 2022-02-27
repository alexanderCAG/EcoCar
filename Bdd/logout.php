
<?php
    session_start();
    session_unset();
    // $SESSION = array();
    session_destroy();
    header("Location: ../Base");
?>