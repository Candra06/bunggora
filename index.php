<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
if (!session_id()) {
    session_start();
}

error_reporting(E_ALL);
 require_once 'app/init.php';

 $app = new App();
?>
