<?php
     $db_con = mysql_connect("localhost","root","");
     if (!$db_con){
          die('Could not connect: ' . mysql_error());
     }
     mysql_select_db("search", $db_con);
?>
