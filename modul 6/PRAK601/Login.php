<?php
function cekSessionLogin(){
    session_start();

    if (!isset($_SESSION["login"])) {
        header("Location: ErrorPage.php");
        exit;
    }
}
