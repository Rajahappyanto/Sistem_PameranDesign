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

// Mengambil komentar dari database
$sql = "SELECT * FROM comments ORDER BY created_at DESC";
$result = $conn->query($sql);

// Menampilkan komentar dalam tabel berwarna dan menarik
if ($result->num_rows > 0) {
    echo '<style>
            table {
                width: 100%;
                border-collapse: collapse;
                margin-top: 20px;
                font-family: Arial, sans-serif;
                border-radius: 8px;
                overflow: hidden;
                box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            }
            th, td {
                padding: 15px;
                text-align: left;
                border-bottom: 1px solid #ddd;
            }
            th {
                background-color: #4CAF50;
                color: white;
            }
            tr:hover {
                background-color: #f5f5f5;
            }
          </style>';
    
    echo '<table>';
    echo '<tr><th>Nama</th><th>Email</th><th>Komentar</th></tr>';
    
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>{$row['name']}</td><td>{$row['email']}</td><td>{$row['comment']}</td>";
        echo "</tr>";
    }

    echo '</table>';
} else {
    echo "<p>Belum ada komentar.</p>";
}

// Menutup koneksi database
$conn->close();
?>
