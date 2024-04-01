<?php
    include '../koneksi.php';
    include 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Guru</title>
    <style>
        th {
            text-align: center;
        }
    </style>
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <script src="../assets/js/bootstrap.js"></script>
</head>
<body>
    <div class="panel mt-4 m-2">
        <div class="panel-heading">
            <h4>Daftar Guru</h4>
        </div>
        <div class="panel-body">
            <a href="tambah_guru.php" class="btn btn-primary">Tambah Guru</a>
            <br><br><br>
            <table class="table table-bordered table-striped">
                <tr>
                    <th class="text-center">No</th>
                    <th class="text-center">NIP</th>
                    <th class="text-center">Nama Guru</th>
                    <th class="text-center">Alamat</th>
                    <th class="text-center">Telepon</th>
                    <th class="text-center">Password</th>
                    <th class="text-center">Tahun</th>
                    <th class="text-center">ID Jurusan</th>
                    <th class="text-center">Jabatan</th>
                    <th class="text-center">Pangkat</th>
                    <th class="text-center" width="10%">Opsi</th>
                </tr>
                <?php
                    $data = mysqli_query($koneksi, "SELECT * FROM guru ORDER BY nip ASC");
                    $no = 1;
                    while ($d = mysqli_fetch_array($data)) {
                        ?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $d['nip']; ?></td>
                            <td><?php echo $d['nama']; ?></td>
                            <td><?php echo $d['alamat']; ?></td>
                            <td><?php echo $d['telp']; ?></td>
                            <td><?php echo $d['password']; ?></td>
                            <td><?php echo $d['tahun']; ?></td>
                            <td><?php echo $d['id_jurusan']; ?></td>
                            <td><?php echo $d['jabatan']; ?></td>
                            <td><?php echo $d['pangkat']; ?></td>
                            <td>
                                <a href="edit_guru.php?nip=<?php echo $d['nip']; ?>" class="btn btn-sm btn-info">Edit</a>
                                <a href="hapus_guru.php?nip=<?php echo $d['nip']; ?>" class="btn btn-sm btn-danger">Hapus</a>
                            </td>
                        </tr>
                        <?php
                    }
                ?>
            </table>
        </div>
    </div>
</body>
</html>
