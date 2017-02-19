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
	<h1>operasi crud</h1>
</header>

<nav>
	<ul>
	<li><b>menu</b></li>
	<li><a href="#">Menu 1</a></li>
	<li><a href="#">Menu 2</a></li>
	<li><a href="#">Menu 3</a></li>
	<li><a href="#">Menu 4</a></li>
	</ul>
</nav>

<aticle>
<table border="1" width="75%" align="center">
  <tr>
    <th><a href="tambah.php">
      <button
	type="submit">+tambah</button>
    </a> 
  </tr>
  <tr>
    <td>No</td>
    <td>nama</td>
    <td>alamat</td>
    <td>aksi</td>
  </tr>
</table>
</article>
<footer>nama-nim</footer>
</div>
</body>
</html>