<?php
session_start();
if(!isset($_session['mobile'])){
    header("location:login.php");
}
echo "this is HOME";
?>
