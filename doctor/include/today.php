<?php
date_default_timezone_set("Asia/Kolkata");
$today = date("Y-m-d");
$current_date_time = date("Y-m-d H:i:s", time());
$current_time = date("H:i:s", time());

$tomoro = date_create($today);
date_add($tomoro,date_interval_create_from_date_string("1 days"));
$tomoro = date_format($tomoro,"Y-m-d");

$today_p3 = date_create($today);
date_add($today_p3,date_interval_create_from_date_string("3 days"));
$today_p3 = date_format($today_p3,"Y-m-d");
?>