<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MULIA MAKMUR</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<script src="SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
<link href="SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="container">
<div id="header">
<img src="images/logo mulia.jpg" width="50" height="50" style="margin-left:7px; margin-top:10px;"/>
<div id="header-main"></div>
</div>
<div id="content">

<div id="content-main">

      		<div id="content-form" align="left">
				<form name="">
				<table style="border:1px solid #000000; margin-top:5px; margin-left:5px">
				<tr>
				<td>Cari berdasarkan :</td>
				<td>
                <select>
                <option>Nomor id</option>
                <option>Nama</option>
                <option>tanggal</option>
                <option>Pemasok</option>
                </select>                </td>
                <td>
                <input type="text"  />
                <input type="button" value="search"/>                </td>
                </tr>
                </table>
                </form>
			</div>
    </div>
    
    <div id="content-table">
    </div>
    
    <div id="content-menu">
     <fieldset>
     <legend>[ Tambah data ]</legend>
     <table>
     <form >
     <tr>
     <td>Nomor PO </td><td><input type="text" /></td>
     </tr>
     <tr>
     <td>Tanggal PO </td>
     <td>
     <?php
	 	print ("<select>");
		for($i=1; $i<32; $i++)
		print ("<option value=$i>$i</option>");
		print ("</select>");
		?>
     </td>
     <td>Bulan</td>
     <td>
     <?php
		$month = array(
		"01"=>"Januari",
		"02"=>"Februari",
		"03"=>"Maret",
		"04" =>"April",
		"05"=>"Mei",
		"06"=>"Juni",
		"07"=>"Juli",
		"08"=>"Agustus",
		"09"=>"September",
		"10"=>"Oktober",
		"11"=>"November",
		"12"=>"Desember");
		?>
        <?php
		echo "<select>";
		foreach ($month as $key=>$value){
		echo '<option value="'.$key.'"';
		if($month==$key) echo 'selected';
		echo '>'.$value.'</option>';
		}
		echo '</select>';
		?>
     </td>
     <td>Tahun</td>
     <td>
     <?
		echo "<select name='tanggal'>";
		for ($i=2012;$i<=2012;$i++) {
		echo "<option value=$i selected>$i</option> ";
		}
		echo "</select>";
	?>
     </td>
     </tr>
     <tr>
     <td>Pemasok</td><td><input type="text"/></td>
     </tr>
     <tr>
     <td>Alamat</td><td><input type="text" height="70" width="200" /></td>
     </tr>
     <tr>
     <td>Up</td><td><input type="text"/></td>
     </tr>
     <tr>
     <td>Tipe Pemasok<td><select><option>PPN</option><option>Bukan PPN</option></select></td>
     </tr>
     <tr>
     <td>Dateline Pengiriman</td>
     <td>
     <?php
	 	print ("<select>");
		for($i=1; $i<32; $i++)
		print ("<option value=$i>$i</option>");
		print ("</select>");
		?>
     </td>
     </tr>
     <tr>
     <td>Total Order</td><td><input type="text"/></td>
     <td>Grand Total</td><td><input type="text"/></td>
     </tr>
     <tr>
     <td colspan="4" align="right"><input type="button" value="Masukan Data"/></td>
     </tr>
     </form>
     </table>
     </fieldset>
     </div>
  </div>
<div id="footer">
<div id="footer-main"><b><i>Copyright 2012 @ Creative Spirit. All Right Reserved</i></b></div>
</div>
</div>
</body>
</html>