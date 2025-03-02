<!DOCTYPE html>
<html>
    <head>
        <title>HTML Injection Example</title>
    </head>
    <body>
        <h2>Masukkan Nama Anda</h2>
        <form method="post" action="">
            Nama: <input type="text" name="name">
            <br><br>
            <input type="submit" name="submit" value="Submit">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST["name"]; // Tidak difilter, rentan terhadap HTML Injection
            echo "<h3>Halo, " . $name . "!</h3>"; // Bisa disisipi kode HTML
        }
        ?>
    </body>
