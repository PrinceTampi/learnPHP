<!DOCTYPE html>
<html>
<head>
    <title>Form Pendaftaran</title>
</head>
<body>

    <center>
        <h2>Form Pendaftaran</h2>

        <fieldset style="width: 350px; padding: 20px;">
            <legend><b>Data Pendaftaran</b></legend>
            <form action="" method="">
                <table>
                    <tr>
                        <td><label>Nama:</label></td>
                        <td><input type="text" name="nama" ></td>
                    </tr>
                    <tr>
                        <td><label>Email:</label></td>
                        <td><input type="email" name="email" ></td>
                    </tr>
                    <tr>
                        <td><label>Username:</label></td>
                        <td><input type="text" name="username" ></td>
                    </tr>
                    <tr>
                        <td><label>Password:</label></td>
                        <td><input type="password" name="password" ></td>
                    </tr>
                    <tr>
                        <td><label>Jenis Kelamin:</label></td>
                        <td>
                            <input type="radio" name="gender" value="Laki-laki" > Laki-laki
                            <input type="radio" name="gender" value="Perempuan" > Perempuan
                        </td>
                    </tr>
                    <tr>
                        <td><label>Tanggal Lahir:</label></td>
                        <td><input type="date" name="tanggal_lahir" ></td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center">
                            <br>
                            <input type="submit" value="Daftar">
                        </td>
                    </tr>
                </table>
            </form>
        </fieldset>
    </center>

</body>
</html>
