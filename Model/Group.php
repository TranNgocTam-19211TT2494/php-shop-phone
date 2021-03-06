<?php
include_once("DataProvider.php");
class Group
{
    private $da;
    public function __construct()
    {
        $this->da = new DataProvider();
    }
    public function getGroupManage()
    {
        $sql = "Select * from groups";
        return $this->da->FetchAll($sql);
    }
    public function GetGroupByID($groupID)
    {
        $sql="Select GroupID,GroupName from groups where GroupID=$groupID";
        return $this->da->Fetch($sql);
    }
    public function GetGroups()
    {
        $sql="Select GroupID,GroupName from groups";
        return $this->da->FetchAll($sql);
    }
    public function DeleteGroup($groupID)
    {
        $sql="Delete from groups where GroupID=$groupID";
        return $this->da->ExecuteQuery($sql);
    }
    public function InsertGroup($groupName)
    {
        $sql="Insert into groups (GroupName) values('$groupName')";
        return $this->da->ExecuteQuery($sql);
    }
    public function UpdateGroup($groupID, $groupName)
    {
        $sql="Update groups set GroupName='$groupName' where GroupID=$groupID";
        return $this->da->ExecuteQuery($sql);
    }
    
    public function __destruct()
    {
        unset($this->da);
    }
}
