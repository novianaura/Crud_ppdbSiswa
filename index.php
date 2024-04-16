<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PPDB KELOMPOK 7</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <h1> DATA SISWA </h1><br>
    <table border=1 cellspacing=0 width=50%>
    <a href="input.php"> Tambah Data </a><br>
        <tr style="text-align:center;font_weight:bold;background-color:#eee;">
            <td>Id</td>
            <td>Nama</td>
            <td>Asal Sekolah</td>
            <td>Jenis Kelamin</td>
            <td>Alamat</td>
            <td>Agama</td>
            <td>Jurusan</td>
            <td>Opsi</td>
        </tr>
    <?php
        include 'config.php';
        $no = 1;
        $select = mysqli_query($koneksi, "SELECT * FROM siswa");
        if (mysqli_num_rows($select) > 0) {
            while ($hasil = mysqli_fetch_array($select)) {
                ?>
                    <tr style="text-align:center;">
                        <td>
                            <?php echo $hasil ['id'] ?>
                        </td>
                        <td>
                            <?php echo $hasil ['nama'] ?>
                        </td>
                        <td>
                            <?php echo $hasil ['asal_sekolah'] ?>
                        </td>
                        <td>
                            <?php echo $hasil ['jenis_kelamin'] ?>
                        </td>
                        <td>
                            <?php echo $hasil ['alamat'] ?>
                        </td>
                        <td>
                            <?php echo $hasil ['agama'] ?>
                        </td>
                        <td>
                            <?php echo $hasil ['jurusan'] ?>
                        </td>
                        <td>
                            <a href="update.php?id=<?php echo $hasil['id'] ?>">Edit</a>
                            <a href="delete.php?id=<?php echo $hasil ['id'] ?>">Hapus</a>
                        </td>
                    </tr>
                <?php }
            } else { ?>
                <tr>
                    <td colspan=7 align="center">Data Kosong</td>
                </tr>
            <?php } ?>
    </table>
</body>
</html>