<?php

session_start();
if(isset($_SESSION['username'])){
    header('Location: ');
}else{
    header('Location: login.php');
}

?>