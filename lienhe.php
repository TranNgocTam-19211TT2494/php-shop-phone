<?php
    include_once("View/Header.php");
?>
<style>
* {
    margin: 0;
    padding: 0;
    font-family: 'Roboto', sans-serif;
    box-sizing: border-box;
}

section {
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background: #112d42;
}

section::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 50%;
    height: 100%;
    background: #03a9f4;
}

section .container .containerinfo {
    position: absolute;
    top: 40px;
    width: 350px;
    height: calc(100% - 80px);
    background: #0f3959;
    z-index: 1;
    padding: 40px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    box-shadow: 0 20px 20px rgba(0, 0, 0, 0.2);
}

section .container .containerinfo h2 {
    color: #fff;
    font-size: 24px;
    margin: 20px 0;
}

section .container .containerinfo li {
    position: relative;
    list-style: none;
    display: flex;
    margin: 20px 0;
    cursor: pointer;
    align-items: flex-start;
}



section .container .containerinfo li span {
    color: #fff;
    margin-left: 10px;
    font-weight: 300;
    opacity: 0.5;
    font-size: 20px;
}

/*Hiệu Ứng Hover Cho Thẻ Li*/
section .container .containerinfo li:hover span {
    opacity: 1;
}

section .container {
    position: relative;
    min-width: 1100px;
    min-height: 550px;
    display: flex;
    z-index: 100;
}

section .container .containerForm {
    position: absolute;
    padding: 70px 50px;
    background: #fff;
    margin-left: 150px;
    padding-left: 250px;
    width: calc(100% - 150px);
    height: 100%;
    box-shadow: 0 50px 50px rgba(0, 0, 0, 0.5);
}

section .container .containerForm h2 {
    color: #0f3959;
    font-size: 24px;
    font-weight: 500;
}

section .container .containerForm .formBox {
    position: relative;
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    padding-top: 30px;
}

section .container .containerForm .formBox .inputBox {
    position: relative;
    margin: 0 0 35px 0;
}

section .container .containerForm .formBox .inputBox.w50 {
    width: 47%;
}

section .container .containerForm .formBox .inputBox.w100 {
    width: 100%;
}

section .container .containerForm .formBox .inputBox span {
    position: absolute;
    left: 0;

    font-size: 18px;
    font-weight: 400;
    color: #333;
    transition: 0.5s;
    pointer-events: none;
}

section .container .containerForm .formBox .inputBox input:focus~span,
section .container .containerForm .formBox .inputBox textarea:focus~span,
section .container .containerForm .formBox .inputBox input:valid~span,
section .container .containerForm .formBox .inputBox textarea:valid~span {
    transform: translateY(-20px);
    font-size: 12px;
    font-weight: 400;
    letter-spacing: 1px;
    color: #ff568c
}

section .container .containerForm .formBox .inputBox textarea {
    width: 100%;
    padding: 5px 0;
    resize: none;
    font-size: 18px;
    font-weight: 400;
    color: #333;
    border: none;
    border-bottom: 1px solid #777;
    outline: none;
}

section .container .containerForm .formBox .inputBox textarea {
    min-height: 120px;
}

section .container .containerForm .formBox .inputBox input[type="submit"] {
    position: relative;
    cursor: pointer;
    background: #0f3959;
    color: #fff;
    border: none;
    max-width: 150px;
    padding: 12px;
}

section .container .containerForm .formBox .inputBox input[type="submit"]:hover {
    background: #ff568c;
}

.group img {
    width: 100px;
    height: 100px;
}
</style>

<section>
    <div class="container">
        <div class="containerinfo">
            <div>
                <h2>Thông Tin Liên Hệ</h2>
                <ul class="info">
                    <li>
                        <span><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                        <span>Đường 53 Võ Văn Ngân<br />
                            Phường Linh Chiểu,<br />
                            Thành Phố Thủ Đức
                        </span>
                    </li>
                    <li>
                        <span><i class="fa fa-envelope" aria-hidden="true"></i></span>
                        <span>ngoctam2303001@gmail.com</span>
                    </li>
                    <li>
                        <span><i class="fa fa-phone-square" aria-hidden="true"></i></span>
                        <span>0939461842</span>
                    </li>
                </ul>
            </div>
            <div class="group">
                <div class="row">
                    <div class="col-md-6">
                        <img src="images/team.jpg" alt="">
                        <a href="#" style="text-decoration: none;">
                            <h5 style="color:black;padding: 5px;">Trần Ngọc Tâm</h5>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <img src="images/tuyen.jpg" alt="" style="position: relative;
    left: 19%;
    bottom: 2px;">
                        <a href="#" style="position: relative;
    left: 19%;
    bottom: -2px;text-decoration: none;">
                            <h5 style="color:black;">Phan Hoàng Vũ</h5>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bắt đầu đoạn mã mới-->
        <div class="containerForm">
            <form action="#" method="get">
                <h2>Gửi Lời Nhắn</h2>
                <div class="formBox">
                    <div class="inputBox w50">
                        <input type="text" name="ho" required>
                        <span>Họ</span>
                    </div>
                    <div class="inputBox w50">
                        <input type="text" name="ten" required>
                        <span>Tên</span>
                    </div>
                    <div class="inputBox w50">
                        <input type="text" name="email" required>
                        <span>Email</span>
                    </div>
                    <div class="inputBox w50">
                        <input type="text" name="phone" required>
                        <span>Số Điện Thoại</span>
                    </div>
                    <div class="inputBox w100">
                        <textarea name="message" required></textarea>
                        <span>Lời Nhắn Của Bạn</span>
                    </div>
                    <div class="inputBox w100">
                        <input type="submit" value="Gửi">
                    </div>
                </div>

            </form>
        </div>
        <!-- Kết thúc đoạn mã mới-->
        <?php
                if (isset($_GET['ho']) && isset($_GET['ten']) && isset($_GET['email']) && isset($_GET['phone']) && isset($_GET['message'])) {
                    echo "<h4 style='color:red;'>Gửi Thành Công</h4>";
                }
            ?>
    </div>
</section>

<?php
    include_once("View/Footer.php");
    
?>