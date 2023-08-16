<?php
    include'koneksi/connection.php';
    include'koneksi/function.php';
    include'koneksi/header.php';

    $employee = select("SELECT * FROM employe");
?>

    <section id="daftar">
        <h2>Daftar Karyawan</h2>
        <div class="container">
            <button type="button"> <a href="tambah-karyawan.php">Tambah Karyawan</a> </button>
            <div class="table">
            <table>
                <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NIP</th>
                <th>Department</th>
                <th>Keterangan</th>
        
                <tbody>
                <?php $no = 1; ?>
                <?php foreach($employee as $karyawan): ?>
                        <tr>
                        <td><?= $no++; ?>.</td>
                        <td><?= $karyawan['Nama']; ?></td>
                        <td><?= $karyawan['NIP']; ?></td>
                        <td><?= $karyawan['Department']; ?></td>
                        <td>
                            <a class="link" href="detail-karyawan.php?nip=<?= $karyawan['NIP'];?>">
                            Detail
                            </a>
                            <a class="link" href="edit-karyawan.php?nip=<?= $karyawan['NIP'];?>">
                            Edit
                            </a>
                            <a class="link" href="hapus.php?nip=<?= $karyawan['NIP'];?>">
                            Hapus
                            </a>
                        </tr>
                <?php endforeach; ?>
                </tbody>
        
                </tr>
            </table>
            </div>
        </div>
    </section>
</body>
</html>