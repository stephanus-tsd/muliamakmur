<?php

?>
<html>
<title>Edit PO</title>

<body>
<div align="center">
<table>
	<tr>
    <td>
    <div>
        <h1>Edit PO</h1>
    </div>
    <div align="center">
        <form>
        <table width="341">
            <tr>
                <td width="134">No PO : </td>
                <td width="195"><input type="text" name="noPO" /></td>
            </tr>
            <tr>
                <td>Nama Supplier : </td>
                <td><input type="text" name="supplier" /></td>
            </tr>
            <tr>
                <td>Alamat : </td>
                <td><input type="text" name="alamat" /></td>
            </tr>
            <tr>
                <td>UP : </td>
                <td><input type="text" name="up" /></td>
            </tr>
            <tr>
                <td>Type Supplier : </td>
                <td>
                	<select>
                    <option value="PPN">PPN</option>
                    <option value="Non">Non PPN</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Dateline Delivery : </td>
                <td><input type="text" name="dateline" /></td>
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