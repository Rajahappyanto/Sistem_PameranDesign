<?php
// Parameter koneksi database
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'dbuser';

// Membuat koneksi database
$conn = new mysqli($host, $username, $password, $database);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Memproses data formulir
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Melindungi input pengguna untuk keamanan
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $comment = mysqli_real_escape_string($conn, $_POST['comment']);

    // Memasukkan data ke dalam database
    $sql = "INSERT INTO comments (name, email, comment) VALUES ('$name', '$email', '$comment')";

    if ($conn->query($sql) === TRUE) {
        // Mengalihkan kembali ke halaman utama setelah pengiriman berhasil
        header("Location: index.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Menutup koneksi database
$conn->close();
?>
