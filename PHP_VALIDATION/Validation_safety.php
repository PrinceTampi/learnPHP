<!DOCTYPE HTML>
<html>
<head>
    <title>Form Validasi</title>
</head>
<body>
    <?php
        $name = $email = $gender = "";
        $genderErr = "";
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = htmlspecialchars($_POST["name"]);
            $email = htmlspecialchars($_POST["email"]);
            
            if (empty($_POST["gender"])) {
                $genderErr = "Wajib diisi";
            } else {
                $gender = htmlspecialchars($_POST["gender"]);
            }
        }
    ?>
    
    <h2>Form Validasi</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Nama: <input type="text" name="name" required>
        <br><br>
        Email: <input type="email" name="email" required>
        <br><br>
        Gender:
        <input type="radio" name="gender" value="female">Perempuan
        <input type="radio" name="gender" value="male">Laki-laki
        <span style="color: red;">* <?php echo $genderErr; ?></span>
        <br><br>
        <input type="submit" value="Submit">
    </form>
    
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            echo "<h2>Data Anda:</h2>";
            echo "Nama: $name<br>Email: $email<br>Gender: $gender";
        }
    ?>
</body>
</html>
