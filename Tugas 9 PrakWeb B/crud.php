<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PEGAWAI | 17-23</title>
</head>
<body>
    <div class="container">
        <h1 class="title">Data Pegawai</h1>
        <br>
        <a href="c-page.php"><button>Tambah Data</button></a>
        <table border="1" cellpadding="8">
            <tr>
                <th>No.</th>
                <th>NIK</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>No. Telp</th>
                <th>Email</th>
                <th>Alamat</th>
                <th>Opsi</th>
            </tr>
            <?php
                include('konek.php');
                $sql = mysqli_query($connect,"SELECT * FROM `tb_pegawai`");
                if(mysqli_num_rows($sql)!=0){
                    $no=0;
                    while($data=mysqli_fetch_array($sql)){
                        $no++;
            ?>
            <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $data['nik']; ?></td>
                <td><?php echo $data['nama']; ?></td>
                <td><?php echo $data['jkelamin']; ?></td>
                <td><?php echo $data['telp']; ?></td>
                <td><?php echo $data['email']; ?></td>
                <td><?php echo $data['alamat']; ?></td>
                <td>
                    <a href="u-page.php?nik=<?php echo $data['nik'] ?>"><button>Edit Data</button></a>
                    <a href="d-proc.php?nik=<?php echo $data['nik'] ?>"><button>Hapus Data</button></a>
                </td>
            </tr>
            <?php
                    }
                }
            ?>
        </table>
    </div>
</body>
</html>