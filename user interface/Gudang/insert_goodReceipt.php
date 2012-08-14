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
        <h1>Input Good Receipt</h1>
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
                <td>No Project : </td>
                <td><input type="text" name="noProject" /></td>
            </tr>
            <tr>
                <td>Quantity PO: </td>
                <td><input type="text" name="qtyPO" id="qtyPO" /></td>
            </tr>
            <tr>
                <td>Actual Qty : </td>
                <td><input type="text" name="actualQty" id="actualQty" /></td>
            </tr>
            <tr>
            	<td colspan="2" align="right"><input type="submit" name="submit" value="Input" /></td>
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