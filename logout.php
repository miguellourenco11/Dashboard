<?php
    session_start();

    unset($_SESSION['iduser']);
    unset($_SESSION['nome']);

    session_destroy();

    header("Location: index.php");
?>