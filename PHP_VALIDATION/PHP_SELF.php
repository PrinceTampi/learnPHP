<!DOCTYPE html>
<html>
<head>
    <title>Contoh PHP_SELF</title>
</head>
<body>

<h2>Formulir dengan PHP_SELF</h2>
<form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>"> <!-- Mengembalikan output pada halaman yang sama -->
    Nama: <input type="text" name="name">
    <br><br>
    Email: <input type="text" name="email">
    <br><br>
    <input type="submit" value="Kirim">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    
    echo "<h3>Data yang Dikirim:</h3>";
    echo "Nama: " . $name . "<br>";
    echo "Email: " . $email . "<br>";
}
?>

</body>
</html>
