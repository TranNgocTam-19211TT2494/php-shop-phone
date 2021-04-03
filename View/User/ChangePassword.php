<div style="width: 350px; margin: 0 auto;">
<h2><span><a href="index.php?mod=user&act=login">Đổi mật khẩu</a></span></h2>
     <p>
<form action="index.php?mod=user&act=changepassword" method="post" class="form" onSubmit="return IsChangePass()">
	<p><label>Mật khẩu cũ</label><input type="password" name="txtOldPass" id="txtOldPass" style="margin-left:55px;"/></p>
    <p><label>Mật khẩu mới</label><input type="password" name="txtPass" id="txtPass" style="margin-left:45px;"/></p>
    <p><label>Mật khẩu xác nhận</label><input type="password" name="txtPrePass" id="txtPrePass" style="margin-left:10px;"/></p>
    <p><label>&nbsp;</label><input type="submit" name="btnChange" id="btnChange" value="Đổi thông tin" style="margin-left:100px;"/></p>
    <p id="error" class="error"></p>
</form>
</p>
</div>