<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Komentar</title>
    <link rel="stylesheet" href="style.css">

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #55f558;
        }

        .comentar {
            max-width: 100%;
            margin: auto;
            background-color: #3498db;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            color: #fff;
        }

        h1 {
            color: #333;
            text-align: center;
        }

        form {
            max-width: 600px;
            margin-top: 20px;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #333;
        }

        input, textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <nav>
        <div class="wrapper" >
            <div class="logo"><a href=''>Raja Design</a></div>
            <div class="menu" >
                <ul >
                    <li><a href="home.html">Home</a></li>
                    <li><a href="../index.html" class="tbl-pink">log out</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="comentar">
        <h3>Komentar anda adalah semangat bagi kami</h3>

        <form action="process_comment.php" method="post">
            <label for="name">Nama:</label>
            <input type="text" name="name" required><br>

            <label for="email">Email:</label>
            <input type="email" name="email" required><br>

            <label for="comment">Komentar:</label>
            <textarea name="comment" rows="4" required></textarea><br>

            <input type="submit" value="Kirim Komentar">
        </form>

        <h3>Komentar</h3>

        <!-- Menampilkan komentar yang sudah ada -->
        <?php
        // Mengambil dan menampilkan komentar yang sudah ada dari database
        require 'display_comments.php';
        ?>

        <!-- Formulir Komentar -->
    </div>

</body>
</html>
