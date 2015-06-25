<?php
include"koneksi.php";
session_start();
if(isset($_POST['login'])) {

	$username = $_POST['nama'];
	$password = $_POST['password'];
	$sql = mysql_query("SELECT * FROM user WHERE username='$username' &&
	password='$password'");
	$num = mysql_num_rows($sql);
	if($num==1) {

		$_SESSION['nama'] = $username;
		$_SESSION['password'] = $password;
		?><script language="JavaScript">
		document.location='admin.php'</script><?php
	} else {
		?><script language="JavaScript">alert('Username & Password Salah');
		document.location='login.php'</script><?php
	}
}
else if(isset($_SESSION['nama'])){
header("location:admin.php");
}
else{
	echo "dilarang akses langsung!!!!!!!!!!!!!!!!!!!!<br/>";
	echo "silahkan login <a href='login.php'>disini</a>";
	//header("location:Formlogin.php");
}
?>