<?php
include('koneksi.php');
require 'vendor/autoload.php';
 
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Reader\Csv;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;
// use PhpOffice\PhpSpreadsheet\Reader\Xls;

 
$file_mimes = array('application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
 
if(isset($_FILES['berkas_excel']['name']) && in_array($_FILES['berkas_excel']['type'], $file_mimes)) {
 
    $arr_file = explode('.', $_FILES['berkas_excel']['name']);
    $extension = end($arr_file);
 
    if('csv' == $extension) {
        $reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();
    } else {
        $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
        // $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
    }
 
    $spreadsheet = $reader->load($_FILES['berkas_excel']['tmp_name']);
     
    $sheetData = $spreadsheet->getActiveSheet()->toArray();
	for($i = 1;$i < count($sheetData);$i++)
	{
        $kecamatan = $sheetData[$i]['0'];
        $kelurahan = $sheetData[$i]['1'];
        $nik = $sheetData[$i]['2'];
        $nama =$mysqli->real_escape_string($sheetData[$i]['3']);
        $ttl = $sheetData[$i]['4'];
        $status_kawin = $sheetData[$i]['5'];
        $kelamin = $sheetData[$i]['6'];
        $alamat = $sheetData[$i]['7'];
        $rt_rw = $sheetData[$i]['8'];
        $ektp = $sheetData[$i]['9'];
        $disabilitas = $sheetData[$i]['10'];
        $keterangan = $sheetData[$i]['11'];
        $sumber = $sheetData[$i]['12'];
        $tps = $sheetData[$i]['13'];
        mysqli_query($mysqli,"insert into data_kecamatan_bayongbong (kecamatan, kelurahan, nik, nama, ttl, status_kawin, kelamin, alamat, rt_rw, disabilitas, ektp, keterangan, sumber, tps) values ('$kecamatan','$kelurahan','$nik','$nama','$ttl','$status_kawin','$kelamin','$alamat','$rt_rw','$disabilitas','$ektp','$keterangan','$sumber','$tps')");
    }
    header("Location: form_upload.php"); 
}
?>