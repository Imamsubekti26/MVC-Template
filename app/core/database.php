<?php 

$conn = mysqli_connect(HOSTDB, USERDB, PASSDB, NAMEDB);
if (mysqli_connect_errno()) echo "koneksi gagal: " . mysqli_connect_error();
