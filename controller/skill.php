<?php 
$koenksi = mysqli_connect("localhost","root","","portofolio");

// Check connection
if (mysqli_connect_errno()){
    echo "Koneksi database gagal : " . mysqli_connect_error();
}

$sql = "SELECT * FROM skill";
$result = mysqli_query($koenksi, $sql);
foreach ($result as $row) {
    $rows[] = $row;
}
echo json_encode($rows);