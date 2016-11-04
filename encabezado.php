<?php
session_start(); // Inicio la sesión
$usu=$_SESSION['user1'];
if (!isset($_SESSION[user1]))
header("location:index.php");
?>
<table width="100%" height="100%" cellspacing="0" cellpadding="0">
			<tr>
				<td align="center" bgcolor="#3f6592" height="100">
						<div id="banner" name="banner" class="banners">
						        <SCRIPT LANGUAGE="JavaScript">
						                        mostrarBanner()
						        </SCRIPT>
						</div>
				</td>
			</tr>
			<tr>
				<td bgcolor="#8ba9cd" align="center">
					<table border="0">
						<tr>
							<td><a href="desconectarse.php"><img src="img/user_delete.png" width="50" height="50" title="salir" border="0"></a></td>
							<td><a href="listado.php"><img src="img/terminal.png" width="50" height="50" border="0"title="listado de servers"></a></td>
							
						</tr>
					</table>
				</td>
			</tr>
		<tr>
			<td height="90%" align="center" valign="top">