if (isset($_POST['login'])) {
		$username = $_POST['username'];
		$password = sha1($_POST['password']);

		$sql_query = "select * from user where username='$username' and password= '$password'";
if(mysql_query($sql_query)) {
            $num_rows = mysql_num_rows(mysql_query($sql_query));
			<script type="text/javascript">
				alert('Anda berhasil Login');
				window.location.href="index.php";
			</script>
			
                ?>