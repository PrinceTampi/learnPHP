<?php
echo "Halo, " . $_GET["nama"] . "!";
?>

<form method="GET">
    <label for="nama">Nama:</label>
    <input type="text" id="nama" name="nama">
    <button type="submit">Kirim</button>
</form>
