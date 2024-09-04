<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "biodata";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$nama = isset($_POST['nama']) ? $_POST['nama'] : '';
$nim = isset($_POST['nim']) ? $_POST['nim'] : '';
$kelas = isset($_POST['kelas']) ? $_POST['kelas'] : '';
$gender = isset($_POST['gender']) ? $_POST['gender'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$pesan = isset($_POST['pesan']) ? $_POST['pesan'] : '';

$sql = "INSERT INTO contacts (nama, nim, kelas, gender, email, pesan) VALUES ('$nama', '$nim', '$kelas', '$gender', '$email', '$pesan')";

if ($conn->query($sql) === TRUE) {
    header("Location: index.php?success=1");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
