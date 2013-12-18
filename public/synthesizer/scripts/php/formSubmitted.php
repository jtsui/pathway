<?php

$temp = array 
          (
            "msgBody" => "I received: " . $_POST['searchTerm'],
            "msgType" => "regular",
            "undoURL" => ""
          );
//if (is_numeric($_POST['searchTerm'])) {
//    $temp["chemid"] = $_POST['searchTerm'];
//}
echo $_GET['callback'] . '(' . json_encode($temp) . ');';

?>
