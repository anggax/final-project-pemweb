<?php
//konfigurasi koneksi ke database
include('../db_connect.php');
//set vendor composer
require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

//menambahkan table head pada excel
$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet ->getActiveSheet();
$sheet->setCellValue('A1', 'ID');
$sheet->setCellValue('B1', 'NAMA PRODUK');
$sheet->setCellValue('C1', 'HARGA');
$sheet->setCellValue('D1', 'JUMLAH');
$sheet->setCellValue('E1', 'TANGGAL');

//menangkap data pada tabel
$sql = mysqli_query($conn, "SELECT * FROM tb_penjualan2");
$i = 2;
$no = 1;
while ($row = mysqli_fetch_array($sql)) {
    $id_penjualan= $row['id_penjualan'];
    $jumlah = $row['jumlah'];
	$tgl_penjualan =$row['tgl_pesan'];
    $query = mysqli_query($conn, "SELECT nama_produk, harga FROM tb_produk WHERE id_produk='".$row['id_produk']."'");
    $row = $query->fetch_array();
	$nama_produk = $row['nama_produk'];
	$harga = $row['harga'];

	//memanggil data pada tabel agar masuk ke row tabel pada excel
	$sheet->setCellValue('A'.$i, $id_penjualan);
	$sheet->setCellValue('B'.$i, $nama_produk);
	$sheet->setCellValue('C'.$i, $harga);
	$sheet->setCellValue('D'.$i, $jumlah);
	$sheet->setCellValue('E'.$i, $tgl_penjualan);
	$i++;
}

$styleArray = [
			'borders' => [
				'allBorders' => [
					'borderStyle' => PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
				],
			],
		];
	$i = $i - 1;
	$sheet->getStyle('A1:E'.$i)->applyFromArray($styleArray);

	$writer = new xlsx($spreadsheet);
	$writer->save('Report Data Penjualan.xlsx');
?>