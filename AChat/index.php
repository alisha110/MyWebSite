<?php
require_once ("selectChat.php");
?>
<!DOCTYPE html>
<html>
<head>
    <script src="js/jquery-1.9.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/custom.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome-4.7.0/css/font-awesome.min.css">
    <meta charset="utf-8" dir="rtl">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body style="direction: rtl">

<div class="main-section">
    <div class="row border-chat">
        <div class="col-md-12 col-sm-12 col-xs-12 first-section">
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-6 right-first-section">
                    <a href="#"><i class="fa fa-minus" aria-hidden="true" style="float: left"></i></a>
                    <a href="#"><i class="fa fa-location-arrow" aria-hidden="true" style="float: left"></i></a>
                </div>
                <div class="col-md-8 col-sm-6 col-xs-6 left-first-section">
                    <p>مشاوره</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row border-chat">
        <div class="col-md-12 col-sm-12 col-xs-12 second-section" >
            <div class="chat-section" id="chatbox" >
                <ul class="listchat" id="listchat">
                    <?php

                    relodchats();
                    ?>

                </ul>
            </div>
        </div>
    </div>
    <div class="row border-chat">
        <div class="col-md-12 col-sm-12 col-xs-12 third-section">
            <div class="text-bar">
                <textarea class="txtmsg" cols="38" rows="2"  id="txtmsg"
                          placeholder="پیام خود را اینجا وارد کنید"></textarea>
            </div>
        </div>
    </div>
</div>
</body>
</html>

<script type="text/javascript">
    $(document).ready(function () {
        $(".fa-minus").click(function () {
            $('.main-section').toggleClass("open-more");
        });
        $('.main-section').toggleClass("");
        $('#tt').scrollTop(10000);

        // ----- Start Enter Key send Mesaage----


        $('#txtmsg').keyup(function(e) {
            if (e.which == '13') {
                e.which == ''
                var data =  $('#txtmsg').val();

              if (1==2) {
                  $('#listchat').append(
                      " <li class='chatli' >" +
                      "<div class='right-chat' >" +
                      "<img src = 'image/custommer.png' >" +
                      "<div class='custommerch' >" + data + "</div >" +
                      "</div >   </li >"
                  );
              }else
              {

                  $('#listchat').append(
                      " <li class='chatli' >" +
                      "<div class='left-chat' >" +
                      "<img src = 'image/employee3.png' >" +
                      "<div class='userch' >" + data + "</div >" +
                      "</div >   </li >"
                  );
              };

                var formData = {txt: $('#txtmsg').val()};
                        $.ajax({
                            url: "insertchat.php",
                            type: "POST",
                            data: formData,
                        });
                $('#chatbox').scrollTop($('#chatbox').scrollTop() + 5000);
                $('#txtmsg').val('');


            }
        });



    });

</script>
