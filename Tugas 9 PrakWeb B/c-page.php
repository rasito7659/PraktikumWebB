<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Data | 17-23</title>
</head>
<body>
    <div class="container">
        <h1 class="title">Tambah Data</h1><br>
        <table>
            <form action="c-proc.php" method="POST">
                <tr>
                    <td><label for="nik">NIK :</label></td>
                    <td><input type="text" name="nik" id="nik"></td>
                </tr>
                <tr>
                    <td><label for="nama">Nama :</label></td>
                    <td><input type="text" name="nama" id="nama"></td>
                </tr>
                <tr>
                    <td><label for="jk">Jenis Kelamin :</label></td>
                    <td>
                        <select name="jk" id="jk">
                            <option value="L">Laki-laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                    </td>
                </tr>  
                <tr>
                    <td><label for="telp">No. Telepon :</label></td>
                    <td><input type="text" name="telp" id="telp"></td>
                </tr>
                <tr>
                    <td><label for="email">Email :</label></td>
                    <td><input type="text" name="email" id="email"></td>
                </tr>
                <tr>
                    <td><label for="alamat">Alamat :</label></td>
                    <td><textarea name="alamat" id="alamat" cols="30" rows="3"></textarea></td>
                </tr>
                <tr>
                    <td><input type="submit" name="tambah" value="Tambah"></td>
                    <td><input type="submit" name="batal" value="Batal"></td>
                </tr>
            </form>
        </table>
    </div>
</body>
</html>