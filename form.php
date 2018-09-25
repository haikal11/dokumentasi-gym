<html>
<head><title>CARL'S GYMNASIUMS JOHOR BAHRU</title>
<style>
body
{
	background-image:url("bggym.jpg");
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

<img src="gym.jpg" alt="batik" 
style="width:959px;height:250px;"/>

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
  <li><a href="login.php">LOG MASUK</a></li>
  <li class="dropdown">
    </div>
  </li>
  </li>
</ul>

</body>
</div>


<div id="kandungan">
<h1><center>BORANG PENDAFTARAN AHLI BARU</h1></center>
<center>
<form id="form" name="form" method="post" action="pros_insert.php">
<table width="400" border="1">
<tr>
    
<th scope="col">NAMA  :</th>
<th scope="col"><div align="left">
<input type="text" name="nama" value="" size="50" />
</div>
</th>
</tr>
<tr>
<th scope="col">NOMBOR IC :</th>
<th scope="col"><div align="left">
<input type="text" name="no_ic" value="" size="30"/>
</div>
</th>
</tr>
</table>
<br>
<center><button type="submit" name="submit" value="SUBMIT">Hantar</button>
<button type="reset" value="RESET">Isi Semula</button>
</br>
</html>