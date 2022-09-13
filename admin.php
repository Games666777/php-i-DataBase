<?php
header("Content -type: text/html; charset=utf-8");
session_start();
$s = session_start();
if ($s!==0){
include "enter.php";
exit();
}
?> 
