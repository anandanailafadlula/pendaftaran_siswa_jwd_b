<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Siswa Baru</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <style>
        .mx-auto {
            width:700px
        }
        .card {
            margin-top: 100px
        }
    </style>
</head>
<body>
<div class="mx-auto">
        <div class="card">
            <div class="card-header bg-info">
                <h2 style ="text-align:center"> Pendaftaran Siswa Baru | Digital Talent</h2>
        </div>
        <div class="card-body">
        <ul>
            <li><a href="form-daftar.php">Daftar Baru</a></li><br>
            <li><a href="list-siswa.php">Pendaftar</a></li>
        </ul>
        <?php if(isset($_GET['status'])): ?>
            <p>
                <?php
                    if($_GET['status'] == 'sukses'){
                        echo "Pendaftaran siswa baru berhasil!";
                    } else {
                        echo "Pendaftaran gagal!";
                    }
                ?>
            </p>
        <?php endif; ?>
        </div>
        </div> 
    </body>
</html>