<?php
try
{
    $server_name = "localhost";
    $server_user = "takfilmc_alisha";
    $server_password = "Ali13811381";
    $name_db = "takfilmc_winoot";
    global $link;
    $link  = new PDO("mysql:host=$server_name;dbname=$name_db;charset=utf8", "$server_user", "$server_password");

}
catch (PDOException $e)
{
    echo $e->getMessage();
}