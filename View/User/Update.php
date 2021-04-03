<div style="width: 350px; margin: 0 auto;">
<h2><span><a href="index.php?mod=user&act=login">Đổi thông tin cá nhân</a></span></h2>
     <p>
<form action="index.php?mod=user&act=update" method="post" class="form" onsubmit="return IsUpdateUser()">
	<p><label>Họ tên</label><input type="text" name="txtFullName" id="txtFullName" value="<?php echo $row['FullName']; ?>" size="30" style="margin-left: 20px;"/></p>
    <p><label>Email</label><input type="text" name="txtEmail" id="txtEmail" value="<?php echo $row['Email'] ?>" size="30" style="margin-left: 27px;"/></p>
    <p><label>&nbsp;</label><input type="submit" name="btnChange" id="btnChange" value="Đổi thông tin" style="margin-left: 90px;"/></p>
    <p id="error" class="error"></p>
</form>
</p>
</div>