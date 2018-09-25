<html>
<head><title>CARL'S GYMNASIUMS JOHOR BAHRU</title>
  <!--tajuk bagi sistem gym jb-->
<style>
body
{
	background-color: lightblue;
  /*gambar banner di dlm sistem */
	width:100%;
	background-size: cover;
}
#wraper
{
	width:960px;
	margin:0 auto;
}
#header
{
	border:1px solid blue;
	height:250px;
}
#menu
{
	border:1px solid blue;
	background-color: #ccc;
}
#menu ul
{
	list-style-type:none;
	margin:0;
	padding:0;
}
#menu ul li
{
	list-style-type:none;
	margin:0;
	padding:0;
	display:inline-table;
}
#menu ul li:hover
{
	list-style-type:none;
	margin:0;
	padding:0;
	background-color:grey;
}
#menu ul li a
{
	list-style-type:none;
	margin:0;
	padding:0;
	text-decoration:none;
	display: block;
	line-height:40px;
	padding: 0 10px;
}
#kandungan
{
	border:1px solid blue;
	min-height:400px;
	padding:10px;
}
#footer
{
	border:1px solid blue;
	text-align:center;
	min-height:100px
	padding:10px;
	background-color: #ccc;
}


</style>
</head>
<body>

<div id="wraper">
<div id="header">

<img src="gym.jpg" alt="batik" style="width:959px;height:250px;"/>

</div>
<div id="menu">
	
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #ccc;
}

li {
    float: left;
}

li a, .dropbtn {
    display: inline-block;
    color: black;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color: blue;
}

li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color:blue}

.dropdown:hover .dropdown-content {
    display: block;
}
</style>
</head>
<body>

<ul><!--butang navigasi-->
  <li><a href="index.php">UTAMA</a></li>
  <li class="dropdown">
  <li><a href="#"></a></li>
  <li class="dropdown">
	  
    
    </div>
  </li>
  </li>
</ul>

</body>
</div>

<div id="kandungan">

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
. {display:none;}
</style>
<body>
<?php
include('config.php');//page yang sambung ke config.php
isset($_SESSION['login_user']); 
?>
<div class="w3-container">
	<center>
		 <div class="w3-panel w3-leftbar w3-sand">
    <p class="w3-xxlarge w3-serif"><b>WELCOME</p></b>
    <p><i>"CARL'S GYMNASIUMS JOHOR BAHRU<i></p>
  </div>
</center>
</div>
<?php
include('config.php');
$sql="SELECT * from bio ";
$result=mysql_query($sql)or die(mysql_error());
?>
<center><table style="width:70%">
<p><strong><center>BIODATA</strong></center>
<table border="1" width="849" align="center" cellspacing="2" cellpadding="2">
<tr>
<td align="center" bgcolor="#3385ff"><strong>Nama</strong></td>
<td align="center" bgcolor="#3385ff"><strong>Tarikh Menyertai</strong></td>
<td align="center" bgcolor="#3385ff"><strong>No ID</strong></td>

</tr>
<?php
while($row=mysql_fetch_array($result))
{
	echo"<tr>";
	echo"<td>".$row["nama"]."</td>";
	echo"<td>".$row["tarikh"]."</td>";
	echo"<td>".$row["no_id"]."</td>";

 
}
echo"</table>";
echo"<center>";
echo"<br>";
?>

</body>


</html>