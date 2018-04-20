<?php
require_once("connection.php");
$GLOBALS['link']  = $link;


function reloadregin()
{

    $sql ='select * from regin';
    $GLOBALS['q']  = $GLOBALS['link']->prepare($sql);
    $GLOBALS['q'] ->execute();
    $GLOBALS['q'] ->setFetchMode(PDO::FETCH_ASSOC);

    while ($r = $GLOBALS['q']->fetch()) {

        echo "<option>" . $r['reginname'] . "</option>";
    }
}
function reloahometype()
{

    $sql ='select * from home';
    $GLOBALS['q']  = $GLOBALS['link']->prepare($sql);
    $GLOBALS['q'] ->execute();
    $GLOBALS['q'] ->setFetchMode(PDO::FETCH_ASSOC);

    while ($r = $GLOBALS['q']->fetch()) {

        echo "<option>" . $r['hometype'] . "</option>";
    }
}




?>