

<?php

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test1";
$tablename = "doctors";



try {


    $connection = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", "$username", "$password");
    $stext="INSERT INTO userinfo   VALUES ('".$name."','".$email."','".$phone."')";
    $connection->exec($stext);

//    echo "<h1>New Record !!!</h1><hr>";
//
//
//    $q = $connection->prepare("SELECT * FROM ".$tablename." ");
//    $q->execute();
//    $r = $q->fetch(PDO::FETCH_ASSOC);
//
//
//    while($r)
//    {
//        echo $r['name']."  | ".$r['email']." |  ".$r['phone']."<hr>";
//        $r = $q->fetch(PDO::FETCH_ASSOC);
//    }


} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}


$conn = null;
