<?php 
    $conn = mysqli_connect("localhost","root","","websederhana");
    if (!$conn) {
        die("Koneksi gagal: " . mysqli_connect_error());
    }
?>