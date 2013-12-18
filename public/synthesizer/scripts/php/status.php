<?php

// server side test function for cl01 activity log
// returns status message in JSON


$message = array (
               array
                  (
                    "msgBody" => "Test message from your friendly server",
                    "msgType" => "regular"
                  ),
                array
                  (
                    "msgBody" => "Test error message from your server",
                    "msgType" => "error"
                  ),
                array
                   (
                     "msgBody" => "command successful executed",
                     "msgType" => "regular",
                     "undoURL" => "http://myTestUndo.com"
                   )
              );

$i = rand(0,2);



  // delay between messages
  sleep(30);



  echo $_GET['callback'] . '(' . json_encode($message[$i]) . ');';
?>