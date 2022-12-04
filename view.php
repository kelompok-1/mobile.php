<?php

include 'koneksi.php';

$queryResult=$connect->query("SELECT * FROM tabel_barang");

$result=array();
while($rowData=$queryResult->fetch_assoc()){
    $result[]=$rowData;
}
echo json_encode($result);
?>