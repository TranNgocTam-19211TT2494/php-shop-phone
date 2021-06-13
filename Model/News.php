<?php
    include_once("DataProvider.php");
    class News
    {
        private $da;
        public function __construct()
        {
            $this->da = new DataProvider();
        }
        public function getNewsByItems()
        {
            $sql = "SELECT * FROM news , users WHERE news.UserID = users.UserID ORDER BY news.UserID DESC LIMIT 4";
            return $this->da->FetchAll($sql);
        }
     
        public function getNewsByID($id)
        {
            $sql = "SELECT news.ReviewID,users.FullName , news.titile , news.intro,news.content,news.photo,news.status FROM news , users WHERE news.ReviewID=$id";
            return $this->da->Fetch($sql);
        }
        //Hiển thị tất cả tin tức lên quản trị
        public function getNewsManage()
        {
            $sql = "SELECT news.ReviewID,users.FullName , news.titile , news.intro,news.content,news.photo,news.status FROM `news`, users WHERE news.UserID = users.UserID ORDER BY news.ReviewID DESC";
            return $this->da->FetchAll($sql);
        }
        // Xóa tin tức sản phẩm trang quản trị
        public function DeleteNews($id)
        {
            $sql = "Delete from news where ReviewID=$id";
            return $this->da->ExecuteQuery($sql);
        }
        //Thêm tin tức
        public function InsertNews($UserID, $titile, $intro, $content, $photo, $status)
        {
            $sql = "Insert into news(UserID,titile,intro,content,photo,status) values ($UserID,'$titile','$intro','$content','$photo',$status)";
            return $this->da->ExecuteQuery($sql);
        }
        //Xóa tin tức sản phẩm
        public function UpdateNew($ReviewID,$UserID, $titile,  $imageUrl="" ,$intro, $content, $status)
        {
            if ($imageUrl=="") {
                $sql="Update news set UserID=$UserID,titile='$titile', intro='$intro', content='$content', status = '$status' where ReviewID=$ReviewID";
            } else {
                $sql="Update news set UserID=$UserID,titile='$titile', photo = '$imageUrl',intro='$intro', content='$content', status = '$status' where ReviewID=$ReviewID";
            }
            return $this->da->ExecuteQuery($sql);
        }
    }
    