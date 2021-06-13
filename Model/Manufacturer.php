<?php
include_once("DataProvider.php");
class Manufacturer
{
    private $da;
    public function __construct()
    {
        $this->da = new DataProvider();
    }
    public function GetManufacturerByID($id)
    {
        $sql="Select * from manufacturers where ManufacturerID='$id'";
        return $this->da->Fetch($sql);
    }
    public function getManuName($id)
    {
        $sql = "Select ManufacturerName from manufacturers where ManufacturerID = $id";
        return $this->da->Fetch($sql);
    }
      //đếm số sản phẩm
      public function CountManu()
      {
          $sql="Select ManufacturerID from manufacturers";
          return $this->da->NumRows($sql);
      }
    public function UpdateManufacturer($manufacturerID, $manufacturerName)
    {
        $sql="Update manufacturers set ManufacturerName='$manufacturerName' where ManufacturerID=$manufacturerID";
        return $this->da->ExecuteQuery($sql);
    }
    public function getManufacturerManage()
    {
        $sql = "Select * from manufacturers order by ManufacturerID desc";
        
        return $this->da->FetchAll($sql);
    }
    public function getManufacturer()
    {
        return $this->da->FetchAll("Select * from manufacturers");
    }
    public function DeleteManufacturer($manufacturerID)
    {
        $sql="Delete from manufacturers where ManufacturerID=$manufacturerID";
        return $this->da->ExecuteQuery($sql);
    }
    public function InsertManufacturer($manufacturerName)
    {
        $sql="Insert into manufacturers (ManufacturerName) Values('$manufacturerName')";
        return $this->da->ExecuteQuery($sql);
    }
    public function __destruct()
    {
        unset($this->da);
    }
    public function getManuNameById($id)
    {
        $sql = self::$connection->prepare("SELECT * FROM manufacturers WHERE ManufacturerID='$id'");
        $manu = $this->select($sql);
        foreach ($manu as $key => $value) {
            return $value['ManufacturerName'];
        }
    }
}