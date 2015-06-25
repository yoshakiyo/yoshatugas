 <?php
 
$host = "localhost";
$user = "root";
$pass = "";
$database = "nelayan";

$conn = mysql_connect($host, $user, $pass);
if ($conn) {
$buka = mysql_select_db ($database);
if (!$buka) {
die ("Database tidak dapat dibuka");
}
} else {
die ("Server MySQL tidak terhubung");
}

?>