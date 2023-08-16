<?php
include 'koneksi/function.php';

//menerima NIP yang dipilih 
$nip = (int)$_GET['nip'];

if (delete($nip) > 0) {
    echo "<script>
            document.location.href = 'index.php';
          </script>";
}

else {
    echo "<script> 
            document.location.href = 'index.php';
            alert('gagal menghapus');
          </script>";
}

?>