<?php
include("config.php");

// kalau tidak ada id di query string
if (!isset($_GET['id'])) {
    header('Location: list-siswa.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM daftar WHERE id=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if (mysqli_num_rows($query) < 1) {
    die("data tidak ditemukan...");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Edit Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h2 style="text-align:center">Form Edit Siswa</h2>
            </div>
            <div class="card-body">
                <form action="proses-edit.php" method="post">

                    <fieldset>

                        <input type="hidden" name="id" value="<?php echo $siswa['id'] ?>" />

                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama:</label>
                            <input type="text" name="nama" class="form-control" placeholder="nama lengkap"
                                value="<?php echo $siswa['nama'] ?>" />
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat:</label>
                            <textarea name="alamat" class="form-control"><?php echo $siswa['alamat'] ?></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Jenis Kelamin:</label><br>
                            <?php $jk = $siswa['jenis_kelamin']; ?>
                            <label><input type="radio" name="jenis_kelamin" value="laki-laki"
                                    <?php echo ($jk == 'laki-laki') ? "checked" : "" ?>> Laki-laki</label>
                            <label><input type="radio" name="jenis_kelamin" value="perempuan"
                                    <?php echo ($jk == 'perempuan') ? "checked" : "" ?>> Perempuan</label>
                        </div>
                        <div class="mb-3">
                            <label for="agama" class="form-label">Agama:</label>
                            <?php $agama = $siswa['agama']; ?>
                            <select name="agama" class="form-select">
                                <option <?php echo ($agama == 'Islam') ? "selected" : "" ?>>Islam</option>
                                <option <?php echo ($agama == 'Kristen') ? "selected" : "" ?>>Kristen</option>
                                <option <?php echo ($agama == 'Hindu') ? "selected" : "" ?>>Hindu</option>
                                <option <?php echo ($agama == 'Budha') ? "selected" : "" ?>>Budha</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="sekolah_asal" class="form-label">Sekolah Asal:</label>
                            <input type="text" name="sekolah_asal" class="form-control" placeholder="nama sekolah"
                                value="<?php echo $siswa['sekolah_asal'] ?>" />
                        </div>
                        <div class="mb-3">
                            <input type="submit" value="Simpan" name="simpan" class="btn btn-primary" />
                        </div>

                    </fieldset>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
