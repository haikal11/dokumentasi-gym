<?php
include('config.php');
$nama=$_POST['nama'];
$no_ic=$_POST['no_ic'];



echo "<br>";

$query="insert into tb_gym values
('$nama','$no_ic')";
if (mysql_query($query)){
	echo "berjaya";
    header("location:data.php");}
else
	header("location:form.php");
?>