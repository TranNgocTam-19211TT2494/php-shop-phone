<?php
    include_once("Model/DataProvider.php");
    class Category
    {
        private $da; //biến kết nối dữ liệu
        public function __construct()
        {
            $this->da=new DataProvider();
        }
        public function getCategoryManage()
        {
            $sql = "Select * from categories order by CategoryID desc";
            return $this->da->FetchAll($sql);
        }
        public function getCategory()
        {
            $sql= "Select * from categories";
            return $this->da->FetchAll($sql);
        }
        public function GetCategoryByID($id)
        {
            $sql="Select * from categories where CategoryID='$id' order by Position";
            return $this->da->Fetch($sql);
        }
        public function InsertCategory($categoryName, $position)
        {
            $sql="Insert into categories (CategoryName,Position) Values('$categoryName',$position)";
            return $this->da->ExecuteQuery($sql);
        }
        public function UpdateCategory($id, $categoryName, $position)
        {
            $sql="Update categories set CategoryName='$categoryName',Position=$position where CategoryID=$id";
            return $this->da->ExecuteQuery($sql);
        }
        public function DeleteCategory($id)
        {
            $sql="Delete from categories where CategoryID=$id";
            return $this->da->ExecuteQuery($sql);
        }
        public function getCateName($cateID)
        {
            $sql = "SELECT CategoryName FROM categories WHERE CategoryID=$cateID";
            return $this->da->Fetch($sql);
        }
        public function __destruct()
        {
            unset($this->da);
        }
    }
