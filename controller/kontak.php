<?php 
$koneksi = mysqli_connect("localhost","root","","portofolio");

// Check connection
if (mysqli_connect_errno()){
    echo "Koneksi database gagal : " . mysqli_connect_error();
}

$sql = "SELECT * FROM kontak";
$result = mysqli_query($koneksi, $sql);

//convert to json
$rows = array();
while($row = mysqli_fetch_assoc($result)){
    $rows[] = $row;
}
echo json_encode($rows);

mysqli_close($koneksi);