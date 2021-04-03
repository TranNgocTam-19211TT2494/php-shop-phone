<?php
	include_once("View/User/Login.php");
	if(isset($_POST["btnLogin"]))
	{
		$userName=trim($_POST["txtUserName"]);
		$passWord=trim($_POST["txtPassWord"]);
		if($userName!="" && $passWord!="")
		{
			include_once("Model/User.php");
			$user = new User();
			$row=$user->Login($userName,$passWord);
			if($row)
			{
				session_start();
				$_SESSION["lgUserName"]=$userName;
				$_SESSION["lgUserID"]=$row["UserID"];
				$_SESSION["lgGroupID"]=$row["GroupID"];
				header("location:index.php");
			
			}
			else
			{
				echo "<p class=\"error\" style = 'color: red;
				text-align: center;'>Tên đăng nhập hoặc mật khẩu không đúng</p>";
			}
		}
	}
?>