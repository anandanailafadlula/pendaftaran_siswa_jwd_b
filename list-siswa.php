<?php include("config.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Siswa Baru</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h3 class="text-center mb-0">Siswa Yang Sudah Mendaftar</h3>
            </div>
            <div class="card-body">
                <a href="form-daftar.php" class="btn btn-primary mb-3">[+] Tambah Baru</a>
                <button class="btn btn-success mb-3" onclick="printPage()">Cetak</button>
                <a href="#" class="btn btn-success mb-3" onclick="exportToExcel()">Ekspor ke Excel</a>
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Agama</th>
                            <th scope="col">Sekolah Asal</th>
                            <th scope="col">Tindakan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM daftar";
                        $query = mysqli_query($db, $sql);

                        while ($siswa = mysqli_fetch_array($query)) {
                            echo "<tr>";
                            echo "<td>" . $siswa['id'] . "</td>";
                            echo "<td>" . $siswa['nama'] . "</td>";
                            echo "<td>" . $siswa['alamat'] . "</td>";
                            echo "<td>" . $siswa['jenis_kelamin'] . "</td>";
                            echo "<td>" . $siswa['agama'] . "</td>";
                            echo "<td>" . $siswa['sekolah_asal'] . "</td>";
                            echo "<td>";
                            echo "<a href='form-edit.php?id=".$siswa['id']."' class='btn btn-sm btn-warning'>Edit</a> ";
                            echo "<a href='hapus.php?id=".$siswa['id']."' class='btn btn-sm btn-danger'>Hapus</a>";
                            echo "</td>";
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
                <p class="mb-0">Total: <?php echo mysqli_num_rows($query) ?></p>
                <a href="index.php" class="btn btn-secondary mt-3">Kembali</a>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Fungsi untuk mencetak halaman
        function printPage() {
            window.print();
        }

        // Fungsi untuk mengekspor data ke Excel
        function exportToExcel() {
            const table = document.querySelector('table');
            const rows = table.querySelectorAll('tr');
            let csvContent = "data:text/csv;charset=utf-8,";

            rows.forEach(row => {
                const rowData = [];
                row.querySelectorAll('th, td').forEach(cell => {
                    rowData.push(cell.innerText);
                });
                csvContent += rowData.join(',') + "\n";
            });

            const encodedUri = encodeURI(csvContent);
            const link = document.createElement("a");
            link.setAttribute("href", encodedUri);
            link.setAttribute("download", "data_siswa.csv");
            document.body.appendChild(link);
            link.click();
        }
    </script>
</body>
</html>
