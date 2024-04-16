<?php
include 'config.php';
$data_edit = mysqli_query($koneksi, "SELECT * FROM siswa WHERE id = '" . $_GET['id'] . "' ");
$result = mysqli_fetch_array($data_edit);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PPDB KELOMPOK 7</title>
    <link rel="stylesheet" href="update.css">
</head>
<body>
    <h1>Input Data Siswa</h1>
        <a href="index.php">Data Siswa</a><br><br>
    <form action="" method="POST">
        <table>
            <tr>
                <td>Id</td>
                <td>:</td>
                <td><input type="text" name="id" value="<?php echo $result['id'] ?>" placeholder="ID" required></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama" value="<?php echo $result['nama'] ?>" placeholder="Nama" required></td>
            </tr>
            <tr>
                <td>Asal Sekolah</td>
                <td>:</td>
                <td><input type="text" name="asal_sekolah" value="<?php echo $result['asal_sekolah'] ?>" placeholder="Asal Sekolah" required></td>
            </tr>
            <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td>
                <input type="radio" name="jenis_kelamin" value="Laki-Laki" id="laki" <?php echo ($result['jenis_kelamin'] == 'Laki-laki') ? 'checked' : ''; ?>> Laki-Laki
                <input type="radio" name="jenis_kelamin" value="Perempuan" id="perempuan" <?php echo ($result['jenis_kelamin'] == 'Perempuan') ? 'checked' : ''; ?>> Perempuan
            </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><textarea name="alamat" cols="30" rows="2" <?php echo $result['alamat'] ?>> </textarea></td>
            </tr>
            <td>Agama</td>
                <td>:</td>
                <td>
                    <select name="agama">
                    <option value="<?php echo $result['agama'] ?>">
                            <?php echo $result['agama'] ?></option>
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
                    <option value="<?php echo $result['jurusan'] ?>">
                            <?php echo $result['jurusan'] ?></option>
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
                <td><input type="submit" name="edit" value="Simpan"></td>
            </tr>
    </form>
    <script>
    $(document).ready(function() {
        $('form').submit(function(e) {
            var id = $('input[name="id"]').val();
            var nama = $('input[name="nama"]').val();
            var asalSekolah = $('input[name="asal_sekolah"]').val();
            var jenisKelamin = $('input[name="jenis_kelamin"]:checked').val();
            var alamat = $('textarea[name="alamat"]').val();
            var agama = $('select[name="agama"]').val();
            var jurusan = $('select[name="jurusan"]').val();

            if (!id || !nama || !asalSekolah || !jenisKelamin || !alamat || !agama || !jurusan) {
                e.preventDefault(); // Mencegah formulir dikirim
                Swal.fire({
                    title: "Error!",
                    text: "Silahkan lengkapi semua kolom data.",
                    icon: "error",
                    confirmButtonText: "OKE"
                });
            }
        });
    });
</script>
<?php
    include 'config.php';
    if (isset($_POST['edit'])) {
        $update = mysqli_query($koneksi, "UPDATE siswa SET
        id = '" . $_POST['id'] . "',
        nama = '" . $_POST['nama'] . "',
        asal_sekolah = '" . $_POST['asal_sekolah'] . "',
        jenis_kelamin = '" . $_POST['jenis_kelamin'] . "',
        alamat = '" . $_POST['alamat'] . "',
        agama = '" . $_POST['agama'] . "',
        jurusan = '" . $_POST['jurusan'] . "'
        WHERE id = '" . $_GET['id'] . "'");
        if ($update) {
            echo '<script>
            Swal.fire({
                title: "Berhasil!",
                text: "Data berhasil disimpan.",
                icon: "success",
                confirmButtonText: "OKE"
            });
         </script>';
        }
    } 
    ?>
</body>
</html>