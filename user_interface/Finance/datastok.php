<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>View Data Goods Receipts</title>
</head>

<body>
<center>
<table border="1" height="300" align="center">
	<tr>
    	<td>
        	<h2><center>
        	  DATA STOK TRANSFER
        	</center></h2>
			<?php 
                include 'file:///C|/xampp/htdocs/muliamakmur/Gudang/koneksi.php';
				if(isset($_REQUEST['button'])){
				$input = $_REQUEST['input'];
                
               /* $query = "select po.noPO, po.supplier, goodsreceipt.noSuratJalan, goodsreceipt.tglSuratJalan, goodsreceipt.tglTerima, goodsreceipt.namaOrgGudang from po, barang, goodsreceipt where po.noPO = '$input' or po.supplier= '$input'";
                $result = mysql_query($query);
                
                $i=1;
                while ($row = mysql_fetch_array($result)){
                */
            ?>
            <table width="399" border="0">
                <tr>
                  <td width="151">Tanggal</td>
                  <td width="35"><div align="center">:</div></td>
                  <td width="199"><?php printf ("date(d F Y)") ?></td>
                </tr>
                <tr>
                  <td>Nama   </td>
                  <td><div align="center">:</div></td>
                  <td><?php  ?></td>
                </tr>
                
            </table>
            <?php 
               // } 
                
                
                $query = "select barang.namaBarang, barang.type, po.supplier, project.noProject, project.namaProject, barang.quantityPO, barang.note, barang.quantityIN, barang.quantityOUT from project, barang, po where po.noPO = '$input' or po.supplier= '$input'";
                $result = mysql_query($query);	
            ?>
            
            <p>
            <table width="918" border="1">
            <tr>
                    <td width="45"><div align="center">No.</div></td>
                    <td width="167"><div align="center">Nama Barang</div></td>
                    <td width="121"><div align="center">Type/SKU</div></td>
                    <td width="101"><div align="center">Nama Supplier</div></td>
                    <td width="151"><div align="center">Quantity</div></td>
                    
                    
                    <td width="130"><div align="center">No. Proyek</div></td>
                    <td width="130"><div align="center">Nama Proyek</div></td>                    <td width="130"><div align="center">Nama Customer</div></td>
                    
                    <td width="130"><div align="center">Balance Stock</div></td>
                    
                	 <td width="130"><div align="center">No. Proyek</div></td>
                    <td width="130"><div align="center">Nama Proyek</div></td>                    <td width="130"><div align="center">Nama Customer</div></td>
                    
                    <td width="124"><div align="center">Note</div></td>
                </tr>
            
            
            <?php
                $i=1;
				$actualQty = 0;
                while ($row = mysql_fetch_array($result)){
					$actualQty = $row['7'] - $row['8'];
                    echo "
                            <tr>
                                <td><center>".$i."</center></td>
                                <td><center>".$row['0']."</center></td>
                                <td><center>".$row['1']."</center></td>
                                <td><center>".$row['2']."</center></td>
                                <td><center>".$row['3']."</center></td>
                                <td><center>".$row['4']."</center></td>
                                <td><center>".$row['5']."</center></td>
                                <td><center>".$actualQty."</center></td>
								<td><center>".$row['6']."</center></td>
                            </tr>
                    ";
                    $i++;
                }	
            ?>
            </table>
            </p>
        <?php } ?>
		</td>
	</tr>
</table>
</center>
</body>
</html>
