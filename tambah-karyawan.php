<?php
    include'koneksi/connection.php';
    include'koneksi/function.php';
    include'koneksi/header.php';

    if (isset($_POST['tambah'])) {
        if (create_karyawan($_POST) > 0) {
          echo "<script>
                  alert('Data berhasil ditambah!');
                  document.location.href = 'index.php';
                 </script>";
        }
      
        else {
          echo "<script>
                  alert('Data gagal ditambah!');
                  document.location.href = 'index.php';
                 </script>";
        }
    }
?>

<section id="tambah">
    <h2>Tambah Karyawan</h2>

    <form action="" method="post">
        <div class="row">
            <div class="col">
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Lengkap </label>
                    <input type="text" class="form-control" id="nama" name="Nama" placeholder="Input Nama" required>
                </div>

                <div class="mb-3">
                    <label for="Posisi" class="form-label">Posisi</label>
                    <select class="form-select" name="Posisi" required>
                    <option >::Pilih Posisi::</option>
                    <option value="Menager">Menager</option>
                    <option value="Anggota">Anggota</option>
                    </select>
                </div>
            </div>

            <div class="col">
                <div class="mb-3">
                    <label for="Department" class="form-label">Departement</label>
                    <select class="form-select" name="Department" required>
                    <option >::Pilih Departement::</option>
                    <option value="System Menagement" >System Menagement</option>
                    <option value="Human Resource">Human Resource</option>
                    <option value="Finance">Finance</option>
                    <option value="Marketing">Marketing</option>
                    <option value="Web Development">Web Development</option>
                    </select>
                </div>
            
                <div class="mb-3">
                    <label for="tanggalMasuk" class="form-label">tanggalMasuk</label>
                    <input type="date" class="form-control"  name="tanggalMasuk"
                    placeholder="00/00/0000" required>
                </div>
            </div>

            <div class="col">
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat </label>
                    <textarea class="form-control"  name="Alamat"
                    placeholder="Alamat" required>
                    </textarea>
                </div>
           
                <div class="mb-3">
                    <label for="noHP" class="form-label">Telepon </label>
                    <input type="text" class="form-control"  name="noHP"
                    placeholder="ex: 08xxxxxxxxxx" required>
                </div>        
            </div>

        <button type="submit" name="tambah">
        Tambah
        </button>

        <a href="javascript:window.history.go(-1);" class="btn btn-dark mt-4" style="margin-left: 4pt">
        Kembali
        </a>


</form>

    </div>
</section>

</body>