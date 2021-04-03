<style>
body {
     background-image: url(images/hhh.jpg);
     background-repeat: round;
}
.error {
    color : red;
}
label {
    color : white;
    font-weight: bold;
}
</style>
<div style="width: 300px; margin: 0 auto;padding-top: 75px;">
	<h2><span><a href=""style = "color: yellow;
    text-decoration: none;
    margin-left: 42px;">Đăng nhập Admin</a></span></h2>
     <p>
     <form method="post" action="" onsubmit="return IsLogin();" class="form">
        <p><label>Tên đăng nhập</label><input style = "margin: 12px;" type="text" name="txtUserName" id="txtUserName" /></p>
        <p><label>Mật khẩu</label><input type="password" name="txtPassWord" id="txtPassWord"  style="margin-left: 46px;" /></p>
        <p><label>&nbsp;</label> <input type="submit" name="btnLogin" id="btnLogin" value="Đăng nhập" style="margin-left: 100px;
    width: 100px;
    height: 35px;"/></p>
        <p id="error"></p>
    </form>
     </p>
</div> 
</div> 

