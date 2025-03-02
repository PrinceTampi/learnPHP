<?php
echo "Halo, " . $_POST["nama"] . "!";
?>

<form method="POST">
    <label for="nama">Nama:</label>
    <input type="text" id="nama" name="nama">
    <button type="submit">Kirim</button>
</form>
