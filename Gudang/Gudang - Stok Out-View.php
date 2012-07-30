<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>View Data Stock Out</title>
</head>

<body>
<center>
<table border="1" height="300">
	<tr>
    	<td>
        	<h2><center>View Data Stock Out (Gudang)</center></h2>
			<?php 
                include 'db.inc.php';
				if(isset($_REQUEST['button'])){
				$input = $_REQUEST['input'];
                
                $query = "SELECT stockout.tglAmbil, stockout.namaPengambil, project.noProject, project.namaProject, project.customer, stockout.namaOrgGudang
		from project, stockout
		where project.noProject = '$input' || project.namaProject = '$input' || project.customer = '$input'";
                $result = mysql_query($query);
                
                $i=1;
                while ($row = mysql_fetch_array($result)){
                
            ?>
            <table width="399" border="0">
                <tr>
                  <td width="151">Tanggal Pengambilan</td>
                  <td width="35"><div align="center">:</div></td>
                  <td width="199"><?php echo $row['0']; ?></td>
                </tr>
                <tr>
                  <td>Nama Pengambil</td>
                  <td><div align="center">:</div></td>
                  <td><?php echo $row['1']; ?></td>
                </tr>
                <tr>
                  <td>NO Proyek</td>
                  <td><div align="center">:</div></td>
                  <td><?php echo $row['2']; ?></td>
                </tr>
                <tr>
                  <td>Nama Proyek</td>
                  <td><div align="center">:</div></td>
                  <td><?php echo $row['3']; ?></td>
                </tr>
                <tr>
                  <td>Nama Customer </td>
                  <td><div align="center">:</div></td>
                  <td><?php echo $row['4']; ?></td>
                </tr>
                <tr>
                  <td>Nama Orang Gudang</td>
                  <td><div align="center">:</div></td>
                  <td><?php echo $row['5']; ?></td>
                </tr>
            </table>
            <?php 
                } 
                
               
                $query = "SELECT barang.namaBarang, barang.type, po.supplier, barang.quantityOUT, barang.note
		from barang, po, project
		where project.noProject = '$input' || project.namaProject = '$input' || project.customer = '$input'";
                $result = mysql_query($query);	
            ?>
            
            <p>
            <table width="918" border="1">
            <tr>
                <td width="45"><div align="center">No.</div></td>
                <td width="167"><div align="center">Nama Barang</div></td>
                <td width="121"><div align="center">Type/SKU</div></td>
                <td width="101"><div align="center">Nama Supplier</div></td>
                <td width="151"><div align="center">Qty Keluar</div></td>
                <td width="124"><div align="center">Note</div></td>
       		</tr>
            
            
            <?php
                $i=1;
                while ($row = mysql_fetch_array($result)){
                    echo "
                            <tr>
                                <td><center>".$i."</center></td>
                                <td><center>".$row['0']."</center></td>
                                <td><center>".$row['1']."</center></td>
                                <td><center>".$row['2']."</center></td>
                                <td><center>".$row['3']."</center></td>
                                <td><center>".$row['4']."</center></td>
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
