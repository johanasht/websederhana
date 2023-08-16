<?php
    include'connection.php';

    // fungsi menampilkan data
    function select($query) {
    global $conn;
    
    $result = mysqli_query($conn, $query);
    $rows = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
    }

    //fungsi create data karyawan
    function create_karyawan($post) {
        global $conn;

        $nip = $post['NIP'];
        $nama = $post['Nama']; 
        $posisi = $post['Posisi'];
        $department = $post['Department'];
        $tanggalMasuk = $post['tanggalMasuk'];
        $alamat = $post['Alamat'];
        $noHP = $post['noHP'];

        $query = "INSERT INTO employe VALUES(null, '$nama', '$posisi'
        , '$department', '$tanggalMasuk', '$alamat', '$noHP')";

        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    //fungsi update data 
    function update_data($post) {

    global $conn;

    $nip = $post['NIP'];
    $nama = $post['Nama']; 
    $posisi = $post['Posisi'];
    $department = $post['Department'];
    $tanggalMasuk = $post['tanggalMasuk'];
    $alamat = $post['Alamat'];
    $noHP = $post['noHP'];
    //query ubah data
    $query = "UPDATE employe SET Nama = '$nama', Posisi = '$posisi', 
    Department = '$department', tanggalMasuk = '$tanggalMasuk',
    Alamat = '$alamat', noHP = '$noHP' WHERE NIP = $nip";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn); 

    }
    // fungsi hapus
    function delete($nip) {
    global $conn;

    //query hapus data produk
    $query = "DELETE FROM employe WHERE NIP = $nip";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
    }
?>