<?php
//conection to de database

$server = 'localhost';
$username = 'root';
$password = '';
$database = 'blog_master';


$db = mysqli_connect($server,$username, $password, $database);

mysqli_query($db, "SET NAMES 'utf8'");  // para aceptar acentos y ñ

//Initialice the session

if(!isset($_SESSION)){
    session_start();
}