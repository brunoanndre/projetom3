<?php
include ('config.php');
if(isset($_SESSION['Usuario'])){
    session_abort();
    header("Location: index.php"); exit;
}else{
    header("Location: index.php"); exit;
}
?>
