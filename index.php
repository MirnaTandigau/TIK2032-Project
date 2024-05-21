<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "profil";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

if (isset($_POST['submit'])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $sql = "INSERT INTO feedback (name, email, message) VALUES ('$name', '$email', '$message')";
    $query = mysqli_query($conn, $sql);

    if ($query) {
        header('Location: contact.html');
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "Ada field yang kosong. Silakan lengkapi formulir.";
}
?>
