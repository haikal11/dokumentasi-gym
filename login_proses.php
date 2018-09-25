<html>

<?php
include('config.php');
$no_ic=$_GET['no_ic'];

echo "<br>";

$query="INSERT INTO tb_gym values
('$no_ic')";
if (mysql_query($query)){
echo'<script>';
echo'alert ("Berjaya");';
echo'window.location.href=("data.php");';
echo'</script>';}
else
{
echo'<script>';
echo'alert ("No ic tiada dalam rekod");';
echo'window.location.href=("login.php");';
echo'</script>';
}
?>
</body>
</html>