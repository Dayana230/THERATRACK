<?php
    session_start(); // WAJIB dulu sebelum apa-apa

    // Kalau nak buang session tertentu
    unset($_SESSION['sess_adminid']);
    unset($_SESSION['sess_adminemail']);
    unset($_SESSION['admin_loggedin']);

    // ATAU kalau nak buang semua:
    // session_unset(); // buang semua session variable
    // session_destroy(); // musnahkan session sepenuhnya

    header("Location: login.php");
    exit();
?>
