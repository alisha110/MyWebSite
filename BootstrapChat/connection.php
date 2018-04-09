<?php
try
{
    $server_name = "localhost";
    $server_user = "root";
    $server_password = "";
    $name_db = "test";
    global $link;
    $link  = new PDO("mysql:host=$server_name;dbname=$name_db;charset=utf8", "$server_user", "$server_password");

}
catch (PDOException $e)
{
    echo $e->getMessage();
}