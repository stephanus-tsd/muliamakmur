<?php
include '../library/user_handler.php';
session_start();

$handler = new userHandler();
$pageData = $handler->user->fetch_page('home');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Reminder Plaza Toyota - HOME</title>
<link href="../css/main.css" type="text/css" rel="stylesheet" />
</head>

<body>
	<div id="container">
        <div id="top"> 
            <div  align="center">
                <img src="../image/logo plato.jpg" width="350" height="71"/>        
            </div>
            <div id="menubar">
               <ul>
               	<li><a href="#">HOME</a></li>
                <li><a href="#">ADD CUSTOMER</a></li>
                </ul>
            </div>
        </div>
        
        <div id="content-wrap">
        	<div id="profil">
            	<p id="text-pro">PROFILE</p>
            	<div id="foto" align="center">
                	<img src="testing.jpg" />
                </div>
                <div id="table-profile">
                	<table>
                    	<col width="100px"/>
                        <col width="20px"/>
                    	<tr>
                        	<td>
                            	KODE SALES
                            </td>
                            <td>
                            	:
                            </td>
                            <td>
                            	<?php echo $pageData['profile']['kodeSales']; ?>
                            </td>
                        </tr>
                        <tr>
                        	<td>
                            	NAMA SALES
                            </td>
                            <td>
                            	:
                            </td>
                            <td>
                            	<?php echo $pageData['profile']['namaSales']; ?>
                            </td>
                        </tr>
                        <tr>
                        	<td>
                            	ALAMAT
                            </td>
                            <td>
                            	:
                            </td>
                            <td>
                            	ALAMAT
                            </td>
                        </tr>
                         <tr>
                        	<td>
                            	NO TELP
                            </td>
                            <td>
                            	:
                            </td>
                            <td>
                            	NO TELP
                            </td>
                        </tr>
                         <tr>
                        	<td>
                            	EMAIL
                            </td>
                            <td>
                            	:
                            </td>
                            <td>
                            	EMAIL
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <div id="event-wrap">
            	<p id="today-event">TODAY EVENT</p><span id="date-event">Sekarang</span>
            	<div id="event">
               		<p> Click event for  more detail</p>
               		<a href="#"><div id="event-ULTAH">BIRTHDAY - ANDY SUMARDJOE <br /></div></a>
                    <a href="#"><div id="event-STNK">HABIS MASA STNK - ANDY SUMARDJOE <br /></div></a>
                </div>
            </div>
        </div>
        
        <div id="bottom">
        	<div>
                <img src="..\image\footer.jpg" width="900" height="62" />
                Copyright 2012
            </div>
        </div>
    </div>
</body>
<script src="../Javascript/main-HOME.js"></script>
</html>
