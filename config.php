<?php //sambungan ke db phpmyadmin
mysql_connect("localhost","root","123456");
mysql_select_db ('gym') or die (mysql_error());

?>