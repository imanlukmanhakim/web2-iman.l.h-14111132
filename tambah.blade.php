<html>
<head>
<title>halaman awal operasi crud</title>
<style>
div.container {
	width: 100%;
	border: 1px solid gray;
}
header, footer{
	padding: 1cm;
	color: white;
	background-color: brown;
	clear: left;
	text-align: center;
}
nav {
	float: left;
	max-width: 160px;
	margin: 0;
	padding: 1cm;
}
nav ul {
	list-style-type: none:
	padding: 0;
}
nav ul a {
	text-decoration: none;
}
article {
	margin-left:170px;
	border-left: 1px solid gray;
	padding: 1cm;
	overflow: hidden;
}
</style>

</head>

<body>

<div class="container">

<header>
<h1> Operasi CRUD </h1>
</header>

<nav>
<ul>
<li><b>Menu</b></li>
<li><a href="#">Menu 1</a></li>
<li><a href="#">Menu 2</a></li>
<li><a href="#">Menu 3</a></li>
<li><a href="#">Menu 4</a></li>
</ul>
</nav>

<article>
<form>
<table border="1" width="60%" align="center">
<tr>
<th align="center" colspan="2>Tambah Data</th>
</tr>
<tr>
<td>Nama</td>
<td><input type="text" name="nama" size="80"></td>
</tr>
<tr>
<td>Nama</td>
<td><input type="text" name="nama" size="80"></td>
</tr>
<tr>
<td>NIM</td>
<td><input type="text" name="nim" size="80"></td>
</tr>
<tr>
<td>Alamat</td>
<td><input type="text" name="alamat" size="80"></td>
</tr>
<tr>
<td colspan="2" align="right"><input type="button" value="Tambah"> <input type="button" value="Batal"></td>
</tr>
</table>
</form>
</article>
<Footer>NAMA-NIM</footer>
</div>
</body>
</html>