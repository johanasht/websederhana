<?php
    include'koneksi/connection.php';
    include'koneksi/function.php';
    include'koneksi/header.php';

    $nip = (int)$_GET['nip'];
    $employee = select("SELECT * FROM employe WHERE NIP = $nip ")[0];

    if (isset($_POST['ubah'])) {
        if (update_data($_POST) > 0) {
          echo "<script>
                  alert('Data berhasil diubah!');
                  document.location.href = 'index.php';
                 </script>";
        }
      }
?>

<section id="ubah">
    <h2>Ubah Data <?= $employee['Nama'];?></h2>

    <form action="" method="post">
        <div class="row">
        <div class="col">
            <input type="hidden" name="NIP" value="<?=$employee['NIP'];?>">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Lengkap </label>
                <input type="text" class="form-control"  name="Nama"
                value="<?= $employee['Nama']; ?>" placeholder="Input Nama" required>
            </div>

            <div class="mb-3">
                <label for="Posisi" class="form-label">Posisi</label>
                <select class="form-select" name="Posisi" required>
                <option>::Pilih Posisi::</option>
                <?php
                $posisiOptions = ['Menager', 'Anggota']; // Daftar opsi posisi
                foreach ($posisiOptions as $option) {
                    $selected = ($option == $employee['Posisi']) ? 'selected' : '';
                    echo "<option value='$option' $selected>$option</option>";
                }
                ?>
                </select>
            </div>
        </div>
        <div class="col">
            <div class="mb-3">
                <label for="Department" class="form-label">Departement</label>
                <select class="form-select" name="Department" required>
                <?php
                $departmentOptions = ['System Menagement', 'Human Resource', 'Finance', 'Marketing', 'Web Development']; // Daftar opsi departemen
                foreach ($departmentOptions as $option) {
                    $selected = ($option == $employee['Department']) ? 'selected' : '';
                    echo "<option value='$option' $selected>$option</option>";
                }
                ?>
                </select>
            </div>

            <div class="mb-3">
                <label for="tanggalMasuk" class="form-label">tanggalMasuk</label>
                <input type="date" class="form-control"  name="tanggalMasuk"
                value="<?= $employee['tanggalMasuk']; ?>" placeholder="00/00/0000" required>
            </div>
        </div>
        <div class="col">
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat </label>
                <textarea class="form-control"  name="Alamat" 
                placeholder="Alamat" required><?= $employee['Alamat']; ?>
                </textarea>
            </div>

            <div class="mb-3">
                <label for="noHP" class="form-label">Telepon </label>
                <input type="text" class="form-control"  name="noHP"
                value="<?= $employee['noHP']; ?>" placeholder="ex: 08xxxxxxxxxx" required>
            </div>
        </div>
        
    <button type="submit" name="ubah" >
    Ubah
    </button>
    <a href="javascript:window.history.go(-1);" class="btn btn-dark mt-4" style="margin-left: 4pt">
    Kembali
    </a>
    
  </form>
  </div>
</section>
</body>
</html>