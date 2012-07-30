<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>View PO</title>
<script src="SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
<link href="SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="TabbedPanels1" class="TabbedPanels">
  <ul class="TabbedPanelsTabGroup">
    <li class="TabbedPanelsTab" tabindex="0">View</li>
    <li class="TabbedPanelsTab" tabindex="0">Add</li>
    <li class="TabbedPanelsTab" tabindex="0">Delete</li>
    <li class="TabbedPanelsTab" tabindex="0">Update</li>
  </ul>
  <div class="TabbedPanelsContentGroup">
    <div class="TabbedPanelsContent"><h1>View</h1>
    <form>
    <table border="0">
    <tr>
    <td>No P0</td>
    <td><input type="text" name="No"/></td>
    </tr>
    <tr>
    <td colspan="2" align="Right"><input type="button" name="Cari" value="Cari"/></td>
    </tr>
    </table>
    </form>
    
    <?php
     		include("koneksi.php");
	?>
    
    
    <table border="1" align="Center">
         <tr>
             <th>No</th>
             <th>Nama_Barang</th>
             <th>Tipe_Barang</th>
             <th>No_Project</th>
             <th>Nama_Project</th>
             <th>Customer</th>
             <th>Quantity</th>
             <th>Unit_Price</th>
             <th>Total</th>
         </tr>
         <?php
              $sql = "SELECT * FROM tbl_po_mulia_makmur";
              $hasil = mysql_query($sql);
              if(mysql_num_rows($hasil) > 0)
              {
                  while($data = mysql_fetch_array($hasil))
                  {
                       echo"<tr>";
                            echo"<td>".$data['No']."</td>";
                            echo"<td>".$data['Nama_Barang']."</td>";
                            echo"<td>".$data['Tipe_Barang']."</td>";
                            echo"<td>".$data['No_Project']."</td>";
                            echo"<td>".$data['Nama_Project']."</td>";
                            echo"<td>".$data['Customer']."</td>";
                            echo"<td>".$data['Quantity']."</td>";
                            echo"<td>".$data['Unit_Price']."</td>";
                            echo"<td>".$data['Total']."</td>";
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
    <div class="TabbedPanelsContent"><h1>Content 2</h1></div>
    <div class="TabbedPanelsContent"><h1>Content 3</h1></div>
    <div class="TabbedPanelsContent"><h1>Content 4</h1></div>
  </div>
</div>
<script type="text/javascript">
<!--
var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
//-->
</script>
</body>
</html>
