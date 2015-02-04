<?php

mysql_connect("localhost","root","xu3m4vu06");
mysql_select_db("LOUISA");
mysql_query("set names utf8");
if(isset($_POST['Kind']) && ($_POST['Kind'] != "All")){
	$data = mysql_query("select * from menu where Type = '$_POST[Kind]'");
}else
	$data = mysql_query("select * from menu");

?>

<!DOCTYPE <!DOCTYPE html>
<html>
<head>
	<meta charset="utf8">
	<title>LOUISA's Menu</title>
</head>
<body>
	<form action="edit.php" method="post" border="1">
	<label>管理者登入</label>
	帳號：<input type="text" name="username" required><br>
	密碼：<input type="password" name="password" required><br>
	<input type="submit" value="登入">
	<input type="reset" value="重置">
	</form>
	<form action="menu.php" method="post" border="1">
		<label>想要查詢的種類</label>
		<select name="Kind">
			<option value="All">全部</option>
			<option value="COFFEE">COFFEE</option>
			<option value="TAYLORS">TAYLORS TEA</option>
			<option value="FRUIT">FRUIT TEA</option>
			<option value="FRAPPE">FRAPPE</option>
			<option value="TEA">TEA</option>
		</select> 
		<input type="submit" name="submit">
	</form>
	<table width="700" border="1" align="center">
  <tr>
    <td>商品名稱</td>
    <td>價格</td>
  </tr>
  <?php 
  for($i = 0; $i < mysql_num_rows($data); $i++){
  	$info = mysql_fetch_row($data) ?>
  
  <tr>
    <td><?php echo $info[1]; ?></td>
    <td><?php echo $info[2]; ?></td>
  </tr>
  
  <?php } ?>
</table>



</body>
</html>

