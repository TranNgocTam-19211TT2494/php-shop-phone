<div style="width: 320px; margin: 0 auto;">
	<center><h2>Thông tin cá nhân</h2></center>
	<table>
	  <?php
	  	echo "<tr><td>Họ tên:</td><td>". $row['FullName']. "</td></tr>";
		echo "<tr><td>Tên đăng nhập:</td><td>".$row['UserName']."</td></tr>";
		echo "<tr><td>Email:</td><td>".$row['Email']."</td></tr>";
	  ?>
  	</table>
  	  <?php
  	echo "<p><span class=\"btn\"><a href=\"index.php?mod=user&act=changepassword\">Đổi mật khẩu</a></span>";
	echo "<span class=\"btn\"><a href=\"index.php?mod=user&act=update\">Đổi thông tin</a></span></p>";
	?>
</div>
<hr/>