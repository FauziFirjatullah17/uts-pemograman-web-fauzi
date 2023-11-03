<?php 
$koneksi = mysqli_connect("localhost","root","","portofolio");

// Check connection
if (mysqli_connect_errno()){
    echo "Koneksi database gagal : " . mysqli_connect_error();
}

$sql = "SELECT * FROM sertifikat";
$result = mysqli_query($koneksi, $sql);
foreach ($result as $row) {
    $rows[] = $row;
}
echo json_encode($rows);

mysqli_close($koneksi);