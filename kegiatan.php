<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>index Document</title>
<style type="text/css">
.putih {
 color: #FFF;
}
</style>
</head>

<body>
<div align="center">
<form id="form1" name="form1" method="post" action="#">
<p>&nbsp;</p>
<table width="500" height="300" border="2">
<tr>
<td colspan="2" bgcolor="#666666">
<div align="center" class="putih">
<strong>DATA LIBURAN</strong>
</div>
</td>
</tr>
<tr>
<td width="124" bgcolor="#CCCCCC">nama_lengkap </td>
<td width="243" bgcolor="#CCCCCC">&nbsp;
<input name="nama_lengkap" type="text" /></td>
</tr>
<tr>
<td bgcolor="#CCCCCC">tempat_berlibur </td>
<td bgcolor="#CCCCCC">&nbsp;
<input name="tempat" type="text" /></td>
</tr>
<tr>
<td bgcolor="#CCCCCC">lama_berlibur</td>
<td bgcolor="#CCCCCC">&nbsp;
<input name="lama_berlibur" type="text" /></td>
</tr>
<tr>
<td bgcolor="#CCCCCC">bersama</td>
<td bgcolor="#CCCCCC"><p>
<label>
<input type="radio" name="bersama" value="keluarga" id="bersama_0" checked="checked" />
 keluarga</label>
<label>
<input type="radio" name="bersama" value="teman" id="bersama_1" />
 teman</label>
<br />
</p></td>
</tr>
<tr>
<td bgcolor="#CCCCCC">Kota</td>
<td bgcolor="#CCCCCC"><select name="kota">
<option>Jakarta</option>
<option>Bandung</option>
<option>Surabaya</option>
</select>&nbsp;</td>
</tr>
<tr>
<td height="28" bgcolor="#CCCCCC">&nbsp;</td>
<td bgcolor="#CCCCCC">
<input name="input" type="submit" value="simpan" />&nbsp;
<input name="reset" type="reset" value="Hapus" /></td>
</tr>
<?php
if (isset($_POST['input'])){
	$nama_lengkap=$_POST['nama_lengkap'];
	$tempat_berlibur=$_POST['tempat'];
	$lama_berlibur=$_POST['lama_berlibur'];
	$bersama=$_POST['bersama'];
	$kota=$_POST['kota'];	
	
	echo "<table border>
	<th>nama_lengkap</th>
	<th>tempat_berlibur</th>
	<th>lama_berlibur</th>
	<th>bersama</th>
	<th>kota</th>
	

	<tr>
	<td>$nama_lengkap</td>
	<td>$tempat_berlibur</td>
	<td>$lama_berlibur</td>
	<td>$bersama</td>
	<td>$kota</td>
	</tr>
	</table>";

}
?>
</table>
</form>
</div>
</body>
</html>