<?php

include 'connection.php';

require_once("classes.php");

$GLOBALS['lmessagesview'] = new  MyMessagesview();

$GLOBALS['lmessagesview']->custommerid=


    $sql = 'select * from  chatmessageview';
    $GLOBALS['q']  = $link->prepare($sql);
    $GLOBALS['q'] ->execute();
    $GLOBALS['q'] ->setFetchMode(PDO::FETCH_ASSOC);


   function relodchats ()
   {


       while ($r = $GLOBALS['q'] ->fetch()) {
           $GLOBALS['lmessagesview']->custommerid = $r['custommerid'];
           $GLOBALS['lmessagesview']->userid = $r['userid'];
           $GLOBALS['lmessagesview']->txt = $r['txt'];
           $GLOBALS['lmessagesview']->recordtime = $r['recordtime'];
           $GLOBALS['lmessagesview']->usernickname = $r['usernickname'];
           $GLOBALS['lmessagesview']->custommernicname = $r['custommernicname'];
           $GLOBALS['lmessagesview']->sendertypeid = $r['sendertypeid'];

           if ($GLOBALS['lmessagesview']->sendertypeid==1) {
               echo "<li class='chatli' >";
               echo "  <div class='left-chat' >";
               echo " <img src = 'image/employee3.png' >";
               echo " <div class='userch' >".$GLOBALS['lmessagesview']->txt."</div >";
               echo "  </div >   </li >";
           }
           else {

               echo "<li class='chatli' >";
               echo "  <div class='right-chat' >";
               echo " <img src = 'image/custommer.png' >";
               echo " <div class='custommerch' >" . $GLOBALS['lmessagesview']->txt . "</div >";
               echo "  </div >   </li >";
           }
       }



   }

?>