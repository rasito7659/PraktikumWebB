<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data | 17-23</title>
</head>
<body>
    <div class="container">
        <h1 class="title">Ubah Data</h1><br>
        <table>
            <?php
                include('konek.php');
                $nik = $_GET['nik'];
                $sql = mysqli_query($connect,"SELECT * FROM `tb_pegawai` WHERE `nik`='$nik'");
                $data = mysqli_fetch_array($sql);
            ?>
            <form action="u-proc.php" method="POST">
                <tr>
                    <td><label for="nik">NIK :</label></td>
                    <td>
                    <input type="text" name="nik" id="nik" value="<?php echo $data['nik'] ?>" disabled='disabled'>
                    <input type="text" name="nik" id="nik" value="<?php echo $data['nik'] ?>" hidden='hidden'>
                    </td>
                </tr>
                <tr>
                    <td><label for="nama">Nama :</label></td>
                    <td><input type="text" name="nama" id="nama" value="<?php echo $data['nama'] ?>"></td>
                </tr>
                <tr>
                    <td><label for="jk">Jenis Kelamin :</label></td>
                    <td>
                        <select name="jk" id="jk">
                            <option value="L" <?php if($data['jkelamin']=='L'){echo "selected";} ?>>Laki-laki</option>
                            <option value="P" <?php if($data['jkelamin']=='P'){echo "selected";} ?>>Perempuan</option>
                        </select>
                    </td>
                </tr>  
                <tr>
                    <td><label for="telp">No. Telepon :</label></td>
                    <td><input type="text" name="telp" id="telp" value="<?php echo $data['telp'] ?>"></td>
                </tr>
                <tr>
                    <td><label for="email">Email :</label></td>
                    <td><input type="text" name="email" id="email" value="<?php echo $data['email'] ?>"></td>
                </tr>
                <tr>
                    <td><label for="alamat">Alamat :</label></td>
                    <td><textarea name="alamat" id="alamat" cols="30" rows="3"><?php echo $data['alamat'] ?></textarea></td>
                </tr>
                <tr>
                    <td><input type="submit" name="edit" value="Edit"></td>
                    <td><input type="submit" name="batal" value="Batal"></td>
                </tr>
            </form>
        </table>
    </div>
</body>
</html>