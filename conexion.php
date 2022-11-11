<?PHP
function conectar() {
	$host = "localhost";
	$user = "root";
	$pass = "";
    $db = "crudphp";
	$conn = mysqli_connect($host,$user,$pass,$db);
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }
	mysqli_select_db($conn, $db);
	return $conn;
}
?>