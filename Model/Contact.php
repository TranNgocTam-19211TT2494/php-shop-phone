<?php
    include_once("Model/DataProvider.php");
    class Category
    {
        private $da; //biến kết nối dữ liệu
        public function __construct()
        {
            $this->da=new DataProvider();
        }
        public function getContactManage()
        {
            $sql = "Select * from contacts o join groups u on o.GroupID = u.GroupID";
            return $this->da->FetchAll($sql);
        }
        
       
    }
