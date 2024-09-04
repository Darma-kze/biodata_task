<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Biodata</title>
    <link rel="stylesheet" href="style.css">
    <script>function showSuccessPopup() {
            alert('Data has been submitted successfully!');
            window.location.href = 'index.php';}
    </script>
</head>
<body>
    <div class="card">
        <?php
        if (isset($_GET['success']) && $_GET['success'] == 1) {
            echo "<script>showSuccessPopup();</script>";
        }
        ?>
        <form action="submit.php" method="POST">
    <label for="nama">Nama:</label>
    <input type="text" id="nama" name="nama" required><br>

    <label for="nim">NIM:</label>
    <input type="text" id="nim" name="nim" required><br>

    <label for="kelas">Kelas:</label>
    <input type="text" id="kelas" name="kelas" required><br>

    <label for="gender">Gender:</label>
    <input type="text" id="kelas" name="kelas" required><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br>

    <label for="pesan">Pesan:</label>
    <textarea id="pesan" name="pesan"></textarea><br>

    <input type="submit" value="Kirim">
</form>

    </div>
</body>
</html>
