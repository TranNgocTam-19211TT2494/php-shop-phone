<style>
body {
    background-image: url(images/hhh.jpg);
    background-position: center;

}

.error {
    color: red;
}

label {
    color: white;
    font-weight: bold;
}

.back {
    text-decoration: none;
    
}
.anmm {
    width: 200px;
    height: 100px;
    background-color: white;
    position: relative;
    animation-name: example;
    animation-duration: 4s;
    animation-iteration-count: infinite;
}
.back h1 {
    color: black;
    padding: 10px;
}

@keyframes example {
    0% {
        background-color: red;
        left: 0px;
        top: 0px;
    }

    25% {
        background-color: yellow;
        left: 200px;
        top: 0px;
    }

    50% {
        background-color: blue;
        left: 0;
        right: 0;
        top: 0;
    }

    75% {
        background-color: green;
        right: 0px;
        top: 0;
    }

    100% {
        background-color: red;
        right: 200px;
        top: 0px;
    }
}
</style>


<div style="text-align: center;padding:70px;">
    <h2><span><a href="" style="color: yellow;
    text-decoration: none;
    margin-left: 42px;">Đăng nhập Admin</a></span></h2>
    <p>
    <form method="post" action="" onsubmit="return IsLogin();" class="form">
        <p><label>Tên đăng nhập</label><input style="margin: 12px;" type="text" name="txtUserName" id="txtUserName" />
        </p>
        <p><label>Mật khẩu</label><input type="password" name="txtPassWord" id="txtPassWord"
                style="margin-left: 33px;" /></p>
        <p><label>&nbsp;</label> <input type="submit" name="btnLogin" id="btnLogin" value="Đăng nhập" style="margin-left: 21px;
        width: 100px;
        height: 35px;" /></p>
        <p id="error"></p>
    </form>
    </p>
    <center>
        <div class="anmm">

            <a href="index.php" class="back">
                <h1>
                    TRANG CHỦ
                </h1>
            </a>
        </div>
    </center>
</div>
</div>