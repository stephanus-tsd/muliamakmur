

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">


<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>FINANCE</title>

<?php
	include_once "konesi.php";
?>

<script src="SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
<link href="SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css" />
</head>

<body>

<tr>
    <td width="20" align="center" valign="top" ><table width="1300" height="220" border="1">
      <tr>
        <td align="left"><p><strong>FINANCE</strong></p>
          <div id="TabbedPanels1" class="TabbedPanels" align="center">
            <ul class="TabbedPanelsTabGroup">
              <li class="TabbedPanelsTab" tabindex="0">DATA STOK</li>
              <li class="TabbedPanelsTab" tabindex="0">BARANG</li>
            </ul>
            <div class="TabbedPanelsContentGroup">
              <div class="TabbedPanelsContent">
                <div id="TabbedPanels2" class="TabbedPanels" align="center">
                  <ul class="TabbedPanelsTabGroup" >
                    <li class="TabbedPanelsTab" tabindex="0">VIEW</li>
                    <li class="TabbedPanelsTab" tabindex="0">EDIT</li>
                    <li class="TabbedPanelsTab" tabindex="0">OUT</li>
                  </ul>
                  <div class="TabbedPanelsContentGroup" align="center">
                    <div class="TabbedPanelsContent">
                      <p>DATA STOK TRANSFER DAN RETURN</p>
                      <form id="form1" name="form1" method="post" action=""  >
                        <label > </label>
                        <div align="left">No
                          <input type="text" name="textfield" id="textfield" />
                        </div>
                        <div align="left">Nama Barang
                          <input type="text" name="textfield" id="textfield" />
                        </div>
                        <div align="left">Type
                          <input type="text" name="textfield" id="textfield" />
                        </div>
                        <div align="left">Supplier
                          <input type="text" name="textfield" id="textfield" />
                        </div>
                        <table width="1107" border="1" align="center">
                          <tr align="center">
                            
                            <td width="11" align="center" valign="middle">Nama Barang</td>
                            <td width="12" align="center" valign="middle">Type</td>
                            <td width="11" align="center" valign="middle">Nomor PO</td>
                            <td width="11" align="center" valign="middle">Nomor Project</td>
                            <td width="3" align="center" valign="middle">Qty PO</td>
                            <td width="11" align="center" valign="middle">Qty IN</td>
                            <td width="11" align="center" valign="middle">Qty OUT</td>
                            <td width="11" align="center" valign="middle">Tgl Qty IN</td>
                            <td width="11" align="center" valign="middle">Tgl Qty OUT</td>
                            <td width="11" align="center" valign="middle">Unit Price PO</td>
                            <td width="11" align="center" valign="middle">Unit Price Actual</td>
                            
                            
                          </tr>
                          
                        </table>
                      
                        <?php
					/*
					$link=mysql_connect($dbhost,$dbuser,$dbpass);
					if(!$link){
						die('Failed to connect to database'.mysql_error());
					}
							
							$result=mysql_query("select * from barang");
							
							$baris=1;
					while($row=mysql_fetch_array($result)){
						if($baris%2!=0) $warna='#cccccc'; 
						else $warna='#ccff99';
						
						echo"<tr bgcolor='$warna' style='color:#000000'>";
							echo"<td align='center' style='padding:5px;'>$row[0]</td>";
							echo"<td style='padding:5px;'>$row[1]</td>";
							echo"<td style='padding:5px;'>$row[2]</td>";
							echo"</tr>";
						$baris++;
					}
					*/
						  ?>
                        
                        <p align="left">
                          <input type="submit" name="submit3" id="submit3" value="Search" />
                          <input type="text" name="search3" id="search3" width="400"/>
                        </p>
		</form>
                      <p>&nbsp;</p>
                    </div>
                    <div class="TabbedPanelsContent">
                      <p>DATA STOK TRANSFER DAN RETURN</p>
                      <form id="form2" name="form1" method="post" action=""  >
                        <label > </label>
                        <div align="left">No
                          <input type="text" name="textfield2" id="textfield2" />
                        </div>
                        <div align="left">Nama Barang
                          <input type="text" name="textfield2" id="textfield2" />
                        </div>
                        <div align="left">Type
                          <input type="text" name="textfield2" id="textfield2" />
                        </div>
                        <div align="left">Supplier
                          <input type="text" name="textfield2" id="textfield2" />
                        </div>
                        <table width="650" border="1" align="center">
                          <tr>
                            <td align="center">No</td>
                            <td align="center">Nama Barang</td>
                            <td align="center">Type</td>
                            <td align="center">Qty</td>
                            <td align="center">PO</td>
                          </tr>
                        </table>
                        <p align="left">
                          <input type="submit" name="submit2" id="submit2" value="Search" />
                          <input type="text" name="search2" id="search2" width="400"/>
                        </p>
                      </form>
                      <p>&nbsp;</p>
                    </div>
                    <div class="TabbedPanelsContent">
                      <p>DATA STOK TRANSFER DAN RETURN</p>
                      <form id="form3" name="form1" method="post" action=""  >
                        <label > </label>
                        <div align="left">No
                          <input type="text" name="textfield3" id="textfield3" />
                        </div>
                        <div align="left">Nama Barang
                          <input type="text" name="textfield3" id="textfield3" />
                        </div>
                        <div align="left">Type
                          <input type="text" name="textfield3" id="textfield3" />
                        </div>
                        <div align="left">Supplier
                          <input type="text" name="textfield3" id="textfield3" />
                        </div>
                        <table width="1273" height="27" border="1" align="center">
                          <tr>
                            <td width="43" align="center">No</td>
                            <td width="432" align="center">Nama Barang</td>
                            <td width="335" align="center">Type</td>
                            <td width="82" align="center">Qty</td>
                            <td width="344" align="center">PO</td>
                          </tr>
                        </table>
                        <p align="left">
                          <input type="submit" name="submit" id="submit" value="Search" />
                          <input type="text" name="search" id="search" width="400"/>
                        </p>
                      </form>
                      <p>&nbsp;</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="TabbedPanelsContent">
                <div id="TabbedPanels3" class="TabbedPanels">
                  <ul class="TabbedPanelsTabGroup">
                    <li class="TabbedPanelsTab" tabindex="0">HUTANG</li>
                    <li class="TabbedPanelsTab" tabindex="0">TERBAYAR</li>
                  </ul>
                  <div class="TabbedPanelsContentGroup">
                    <div class="TabbedPanelsContent">Content 1</div>
                    <div class="TabbedPanelsContent">Content 2</div>
                  </div>
                </div>
                HUTANG BARANG</div>
            </div>
          </div>
        <p></p></td>
      </tr>
    </table></td>
  </tr>
<script type="text/javascript">
<!--
var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
var TabbedPanels2 = new Spry.Widget.TabbedPanels("TabbedPanels2");
var TabbedPanels3 = new Spry.Widget.TabbedPanels("TabbedPanels3");
//-->
</script>
</body>
</html>