</html>

<!DOCTYPE html>
<html>
<head>
    <title>URL Injection Example</title>
</head>
<body>
    <h2>Halo, Pengguna!</h2>
    <?php
    // ?name=<script>alert('Anda telah diretas!');</script>  <-- coba pakai ini
    if (isset($_GET["name"])) {
        $name = $_GET["name"]; // Tidak divalidasi! Rentan terhadap Injection
        echo "<h3>Selamat datang, " . $name . "!</h3>";
    }
    ?>
</body>
</html>