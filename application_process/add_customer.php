<?php
include '..\library\user_handler.php';

$handler = new userHandler();

$customer = array(array());

//pribadi customer
$customer['dataDiri']['nama'] = $_POST["namaCustomer"];
$customer['dataDiri']['alamat'] = $_POST["alamat"];
$customer['dataDiri']['nomorTelepon'] = $_POST["noTelp"];
$customer['dataDiri']['nomorHP1'] = $_POST["noHP1"];
$customer['dataDiri']['nomorHP2'] = $_POST["noHP2"];
$customer['dataDiri']['email'] = $_POST["email"];
$customer['dataDiri']['agama'] = $_POST["agama"];
//$foto = $_FILES["fotoCustomer"];

//keluarga
//nama
$keluarga = array();
$keluarga['nama1'] = $_POST["keluarga1"];
$keluarga['nama2'] = $_POST["keluarga2"];
$keluarga['nama3'] = $_POST["keluarga3"];
$keluarga['nama4'] = $_POST["keluarga4"];
$keluarga['nama5'] = $_POST["keluarga5"];

//tanggal lahir
$date = array();
$date['customer'] = $_POST["tahunLahir"]."-".$_POST["bulanLahir"]."-".$_POST["tglLahir"];
$date['keluarga1'] = $_POST["tahunLahirK1"]."-".$_POST["bulanLahirK1"]."-".$_POST["tglLahirK1"];
$date['keluarga2'] = $_POST["tahunLahirK2"]."-".$_POST["bulanLahirK2"]."-".$_POST["tglLahirK2"];
$date['keluarga3'] = $_POST["tahunLahirK3"]."-".$_POST["bulanLahirK3"]."-".$_POST["tglLahirK3"];
$date['keluarga4'] = $_POST["tahunLahirK4"]."-".$_POST["bulanLahirK4"]."-".$_POST["tglLahirK4"];
$date['keluarga5'] = $_POST["tahunLahirK5"]."-".$_POST["bulanLahirK5"]."-".$_POST["tglLahirK5"];
$date['tglDO'] = $_POST["tglDO"]."-".$_POST["bulanDO"]."-".$_POST["tahunDO"];
$date['tglSTNK'] = $_POST["tglSTNK"]."-".$_POST["bulanSTNK"]."-".$_POST["tahunSTNK"];

//mobil
$customer['dataMobil']['tipeMobil'] = $_POST["tipeMobil"];
$customer['dataMobil']['warnaMobil'] = $_POST["warnaMobil"];

//asuransi
$customer['dataAsuransi']['tglAsuransi'] = $_POST["tahunAsuransi"]."-".$_POST["bulanAsuransi"]."-".$_POST["tglAsuransi"];
$customer['dataAsuransi']['nama'] = $_POST['namaAsuransi'];
$customer['dataAsuransi']['jmlTahunAsuransi'] = $_POST['jmlTahunAsuransi'];

//cara bayar
$customer['dataBayar']['caraBayar'] = $_POST['caraBayar'];
$customer['dataBayar']['jumlahTahunKredit'] = $_POST['jumlahTahunKredit'];

$handler->user->add_customerData($customer, $keluarga, $date);
?>