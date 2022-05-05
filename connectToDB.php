<?php
define ("HOST", "localhost");
define ("USER", "root");
define ("PASS", "");
define ("DB", "review");
 
 $linkmy = @mysqli_connect(HOST, USER, PASS, DB) or die ('Не получилось из-за @mysqli_connect :(');
 mysqli_select_db($linkmy, "f0593353_students") or die("Нет такой таблицы!");


 ?>