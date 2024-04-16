<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PPDB KELOMPOK 7</title>
    <link rel="stylesheet" href="input.css">
</head>
<body>
    <h1> INPUT DATA SISWA </h1><br>
        <a href="index.php"> Data Siswa </a>
    <form action="" method="POST">
        <table>
            <tr>
                <td> Id </td>
                <td>:</td>
                <td><input type="text" name="id" placeholder="ID" required></td>
            </tr>

            <tr>
                <td> Nama </td>
                <td>:</td>
                <td><input type="text" name="nama" placeholder="Nama Lengkap" required></td>
            </tr>

            <tr>
                <td> Asal Sekolah </td>
                <td>:</td>
                <td><input type="text" name="asal_sekolah" placeholder="Asal Sekolah" required></td>
            </tr>

            <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td>
                <input type="radio" name="jenis_kelamin" value="Laki-Laki" id="laki"> Laki-Laki
                <input type="radio" name="jenis_kelamin" value="Perempuan" id="perempuan"> Perempuan
            </td>
            </tr>

            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><textarea name="alamat" id="-" cols="30" rows="2"></textarea></td>
            </tr>
            <td>Agama</td>
                <td>:</td>
                <td>
                    <select name="agama">
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Katolik">Katolik</option>
                        <option value="Buddha">Buddha</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Konghucu">Konghucu</option>
                    </select>
                </td>
            <tr>
                <td>Jurusan</td>
                <td>:</td>
                <td>
                    <select name="jurusan">
                        <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                        <option value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
                        <option value="Teknik Kendaraan Ringan">Teknik Kendaraan Ringan</option>
                        <option value="Teknik Sepeda Motor">Teknik Sepeda Motor</option>
                        <option value="Teknik Instalasi Tenaga Listrik">Teknik Instalasi Tenaga Listrik</option>
                        <option value="Teknik Pembangkit Tenaga Listrik">Teknik Pembangkit Tenaga Listrik</option>
                        <option value="Teknik Pemanas, Tata Udara dan Pendingin">Teknik Pemanas, Tata Udara dan Pendingin</option>
                        <option value="Teknik Pemesinan">Teknik Pemesinan</option>
                        <option value="Desain Dan Produksi Busana">Desain Dan Produksi Busana</option>
                        <option value="Kuliner">Kuliner</option>
                    </select>
                </td>
            </tr>
        </table>
        <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="simpan" value="Simpan"></td>
            </tr>
    </form>
    <?php
    include 'config.php';
    if (isset($_POST['simpan'])) {
        $insert = mysqli_query($koneksi, "INSERT INTO siswa VALUES ('" . $_POST['id'] . "','" . $_POST['nama'] . "','" . $_POST['asal_sekolah'] . "','" . $_POST['jenis_kelamin'] . "','" . $_POST['alamat'] . "','" . $_POST['agama'] . "', '" . $_POST['jurusan'] . "')");
        if ($insert) {
            echo 'Berhasil disimpan';
        } else {
            echo 'Gagal disimpan';
        }
    }
    ?>
</body>
</html>