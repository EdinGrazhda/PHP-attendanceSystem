<?php

$connection = mysqli_connect('localhost', 'root', '') or die('Cannot connect to server');
mysqli_select_db($connection, 'attendancemanagementsystem') or die('Cannot find database');

?>
