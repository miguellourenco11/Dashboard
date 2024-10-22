<?php
$db_name = 'bd_miguel';
$link = mysqli_connect('localhost','root','',$db_name);
if(!$link){
    die('Could not connect: '.mysqli_connect_error());
}
?>