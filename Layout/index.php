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
	<div id="image" style="float:left; padding-left:100px;">
    	<img src="images/logo mulia.jpg" width="50" height="50" style="margin-left:7px; margin-top:10px;"/>
    </div>
	<div id="header-main" style="padding-top:20px;" align="center">PT. MULIA MAKMUR ELEKTRIKATAMA</div>
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
                <input type="submit" value="search"/>                </td>
                </tr>
                </table>
                </form>
	  </div>
    </div>
    
    <div id="content-table">
		
        
         	 <?php
     		include("koneksi.php");
			?>
    
    
    <table border="1" align="Center" style="background-color:#FFFFFF; border: 1px solid #000000;  margin-top:4px; width:100%;">
         <tr style=" border:#000000;">
             <th>No. PO</th>
             <th>Tanggal PO</th>
             <th>Supplier</th>
             <th>Alamat</th>
             <th>Up</th>
             <th>Type Supplier</th>
             <th>Dateline</th>
             <th>Total Order</th>
             <th>Grand Total</th>
             <th>Action</th>
         </tr>
         <?php
              $sql = "SELECT * FROM po";
              $hasil = mysql_query($sql);
              if(mysql_num_rows($hasil) > 0)
              {
                  while($data = mysql_fetch_array($hasil))
                  {
                       echo"<tr align='center'>";
                            echo"<td >".$data['noPO']."</td>";
                            echo"<td >".$data['tglPO']."</td>";
                            echo"<td >".$data['supplier']."</td>";
                            echo"<td >".$data['alamat']."</td>";
                            echo"<td >".$data['up']."</td>";
                            echo"<td >".$data['typeSupplier']."</td>";
                            echo"<td >".$data['dateline']."</td>";
                            echo"<td >".$data['totalOrder']."</td>";
                            echo"<td >".$data['grandTotal']."</td>";
							echo"<td ><input type='submit' value='Edit' /><input type='submit' value='Hapus'/></td>";
							
                       echo"</tr>";
                   }
               }else{
                    echo"<tr>";
                         echo"<td colspan='4'>Data Belum Ada</td>";
                    echo"</tr>";
               }
         ?>
         </table>
        
        
            </div>
    
    <div id="content-menu">
    
    
     <div id="TabbedPanels1" class="TabbedPanels">
       <ul class="TabbedPanelsTabGroup">
         <li class="TabbedPanelsTab" tabindex="0">Tambah Data</li>
         <li class="TabbedPanelsTab" tabindex="1">Hapus Data</li>
         <li class="TabbedPanelsTab" tabindex="2">Edit Data</li>
       </ul>
       <div class="TabbedPanelsContentGroup">
         <div class="TabbedPanelsContent">Content 1
         
         
         <fieldset>
     <legend>[ Tambah data ]</legend>
     <table>
     <form >
     <tr>
     <td>Nomor PO </td><td><input type="text" /></td>
     </tr>
     <tr>
     <td>Tanggal PO </td>
     <td colspan="5">
     <select>
     <?php
		for($i=1; $i<32; $i++)
		print ("<option value=$i>$i</option>");
	 ?>
     </select>
     Bulan
    
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
     
     Tahun
     <?
		echo "<select name='tanggal'>";
		for ($i=2012;$i<=20;$i++) {
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
     <td>Alamat</td><td><input type="text" height="70" width="145" /></td>
     </tr>
     <tr>
     <td>Up</td><td><input type="text"/></td>
     </tr>
     <tr>
     <td>Tipe Pemasok<td><select><option>PPN</option><option>Bukan PPN</option></select></td>
     </tr>
     <tr>
     <td>Dateline Pengiriman</td>
     <td colspan="5">
     <?php
	 	print ("<select>");
		for($i=1; $i<32; $i++)
		print ("<option value=$i>$i</option>");
		print ("</select>");
		?>
    
     Bulan
     
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
     
     Tahun
     
     <?
		echo "<select name='tanggal'>";
		for ($i=2012;$i<=20;$i++) {
		echo "<option value=$i selected>$i</option> ";
		}
		echo "</select>";
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
         <div class="TabbedPanelsContent">Content 2</div>
       </div>
     </div>
    
          </div>
  </div>
<div id="footer">
<div id="footer-main"><b><i>Copyright 2012 @ Creative Spirit. All Right Reserved</i></b></div>
</div>
</div>
<script type="text/javascript">
<!--
var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
//-->
</script>
</body>
</html>