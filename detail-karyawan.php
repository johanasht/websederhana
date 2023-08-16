<?php
    include'koneksi/connection.php';
    include'koneksi/function.php';
    include'koneksi/header.php';

    $nip = (int)$_GET['nip'];
    $employee = select("SELECT * FROM employe WHERE NIP = $nip ")[0];
?>

<section id="detail">
        <h2>Detail Karyawan <?= $employee['Nama'];?></h2>
        <div class="container">
            <button type="button"><a href="index.php">Kembali</a></button>
        </div>
        <div class="container">
            <table>
                <tr>
                    <th>Nama</th>
                    <td><?=$employee['Nama'] ?></td>
                </tr>
                <tr>
                    <th>NIP</th>
                    <td><?=$employee['NIP'] ?></td>
                </tr>
                <tr>
                    <th>Posisi</th>
                    <td><?=$employee['Posisi'] ?></td>
                </tr>
                <tr>
                    <th>Departement</th>
                    <td><?=$employee['Department'] ?></td>
                </tr>
                <tr>
                    <th>Tanggal Masuk</th>
                    <td><?=$employee['tanggalMasuk'] ?></td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td><?=$employee['Alamat'] ?></td>
                </tr>
                <tr>
                    <th>Telepon</th>
                    <td><?=$employee['noHP'] ?></td>
                </tr>
            </table>
        </div>

    </section>
</body>
</html>