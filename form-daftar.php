<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Formulir Pendaftaran Siswa Baru</title>
    <style>
        .mx-auto {
            width: 800px;
        }
        .card {
            margin-top: 10px;
        }
    </style>
</head>
<body>
<div class="mx-auto">
    <div class="card">
        <div class="card-header">
            <h2 style="text-align: center">Formulir Pendaftaran Siswa Baru< lllllllll/h2>
        </div>
        <div class="card-body">
            <form action="proses-pendaftaran.php" method="post">
                <fieldset>
                    <div class="mb-3 row">
                        <label for="nama" class="col-sm-2 col-form-label">Nama:</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Isi Nama Lengkap">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="alamat" class="col-sm-2 col-form-label">Alamat:</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="alamat" name="alamat">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="jenis_kelamin" class="col-sm-2 col-form-label">Jenis Kelamin:</label>
                        <div class="col-sm-5">
                            <label><input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki</label>
                            <label><input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan</label>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="agama" class="col-sm-2 col-form-label">Agama:</label>
                        <div class="col-sm-5">
                            <select name="agama" class="form-select">
                                <option>Islam</option>
                                <option>Kristen</option>
                                <option>Hindu</option>
                                <option>Budha</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="sekolah_asal" class="col-sm-2 col-form-label">Sekolah Asal:</label>
                        <div class="col-sm-5">
                            <input type="text" name="sekolah_asal" placeholder="Isi Nama Sekolah" class="form-control"/>
                        </div>
                    </div>
                    <div class="col-30">
                        <input type="submit" value="Daftar" name="daftar" class="btn btn-primary">
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
