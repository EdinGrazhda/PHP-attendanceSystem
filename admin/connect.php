<?php

$connection = mysqli_connect('localhost', 'root', '') or die('Cannot connect to server');
mysqli_select_db($connection, 'attmgsystem') or die('Cannot find database');

?>
