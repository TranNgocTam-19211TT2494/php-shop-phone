<?php
include_once("DataProvider.php");
class User
{
    private $da;
    public function __construct()
    {
        $this->da = new DataProvider();
    }
    
    public function Login($user, $pass)
    {
        $sql = "SELECT * FROM users WHERE  UserName = '".$user."' AND PassWord = '". md5($pass)."'";
        return $this->da->Fetch($sql);
    }
    public function getLogin()
    {
        $sql = "SELECT * FROM users";
        return $this->da->Fetch($sql);
    }
    public function CountUser()
    {
        $sql="Select UserID from users";
        return $this->da->NumRows($sql);
    }
    public function Login2($user, $pass, $user1)
    {
        foreach ($user1->getLogin() as $key) {
            if (isset($_GET['txtUsername']) && isset($_GET['txtPassword'])) {
                if ($user == $key['UserName'] && $pass == $key['PassWord']) {
                    return true;
                }
            }
        }
        return false;
    }
    public function createNewUser($fullName, $userName, $passWord, $email)
    {
        $sql = "Insert into users(GroupID,FullName,UserName,PassWord,Email) values (3,'$fullName','$userName',md5('$passWord'),'$email')";
        return $this->da->ExecuteQuery($sql);
    }
    public function getUserById($id)
    {
        $sql = "SELECT * FROM users WHERE UserID = $id";
        return $this->da->Fetch($sql);
    }
    public function getUserManage()
    {
        $sql = "Select UserID, FullName, UserName, Email, GroupName from users u join groups g on u.GroupID = g.GroupID";
        return $this->da->FetchAll($sql);
    }
    public function DeleteUser($id)
    {
        $sql = "Delete from users where UserID=$id";
        return $this->da->ExecuteQuery($sql);
    }
    public function EditUser($userID, $groupID)
    {
        $sql="Update users set GroupID=$groupID where UserID=$userID";
        return $this->da->ExecuteQuery($sql);
    }
    public function UpdateUser($userID, $fullName, $email)
    {
        $sql="Update users set FullName='$fullName',Email='$email' where UserID=$userID";
        return $this->da->ExecuteQuery($sql);
    }
    public function ChangePassWord($userID, $newPassWord, $oldPassWord)
    {
        $sql="Select UserID from users where UserID=$userID and PassWord=md5('$oldPassWord')";
        $ret = $this->da->NumRows($sql);
        if ($ret==0) {
            return 0;
        }
        $sql="Update users set PassWord=md5('$newPassWord') where UserID=$userID";
        return $this->da->ExecuteQuery($sql);
    }
    public function __destruct()
    {
        unset($this->da);
    }
}
