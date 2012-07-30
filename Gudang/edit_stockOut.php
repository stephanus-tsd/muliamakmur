<?php
?>
<html>
<title>Input Barang</title>

<body>
<div align="center">
<table>
	<tr>
    <td>
    <div>
        <h1>Edit Stock Out</h1>
    </div>
    <div align="center">
        <form>
        <table width="341">
            <tr>
                <td width="134">Nama Barang : </td>
                <td width="195"><input type="text" name="namaBarang" /></td>
            </tr>
            <tr>
                <td>Type/no SKU : </td>
                <td><input type="text" name="type" id="type" /></td>
            </tr>
            <tr>
                <td>Nama Supplier : </td>
                <td><input type="text" name="supplier" id="supplier" /></td>
            </tr>
            <tr>
                <td>Qty Keluar: </td>
                <td><input type="text" name="quantityOUT" id="quantityOUT" /></td>
            </tr>
            <tr>
                <td>Note : </td>
                <td><input type="text" name="actualQty" id="actualQty" /></td>
            </tr>
            <tr>
            	<td colspan="2" align="right"><input type="submit" name="submit" value="Edit" /></td>
            </tr>
        </table>
        </form>
    </div>
    </td>
    </tr>
</table>
</div>
</body>
</html>