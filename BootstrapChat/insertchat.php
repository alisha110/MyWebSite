<?php
require_once("connection.php");
require_once("classes.php");

$lmessages = new  MyMessages();
//
//$lmessages->userid = $_POST['userid'];
//$lmessages->costummerid = $_POST['costummerid'];
//$lmessages->sendertypeid = $_POST['sendertypeid'];


$lmessages->id = 1;
$lmessages->userid = 1;
$lmessages->costummerid = 1;
$lmessages->sendertypeid = 1;
$lmessages->txt =$_POST['txt'];
//$lmessages->recordtime = '';


$sql ="INSERT INTO messages VALUES (null,".$lmessages->userid.",".$lmessages->costummerid.",".$lmessages->sendertypeid.",'".$lmessages->txt."',Now())";
$link->exec($sql);
echo "Inserted Success";
//header('Location: index.html');
?>