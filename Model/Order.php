<?php
include_once("DataProvider.php");
include_once("OrderItem.php");
class Order
{
    private $da;
    public function __construct()
    {
        $this->da = new DataProvider();
    }
    public function getOrders()
    {
        $sql = "Select * from orders o join users u on o.UserID = u.UserID";
        return $this->da->FetchAll($sql);
    }
    public function InsertOrder($userID, $address, $phone)
    {
        $sql="Insert into orders(UserID,AddedDate,Address,Phone) values('$userID',now(),'$address','$phone')";
        return $this->da->ExecuteQueryInsert($sql);
    }
    public function CountOrder()
    {
        $sql="Select OrderID from orders";
        return $this->da->NumRows($sql);
    }
    public function UpdateSum($orderID, $sum)
    {
        $sql = "Update orders set Sum = $sum where OrderID = $orderID";
        return $this->da->ExecuteQuery($sql);
    }
    public function DeleteOrder($orderID)
    {
        $item = new OrderItem();
        $item->DeleteOrderItem($orderID);
        $sql="Delete from orders where OrderID=$orderID";
        return $this->da->ExecuteQuery($sql);
    }
    public function UpdateOrder($orderID)
    {
        $sql="Update `orders` SET Status = 1 WHERE OrderID = $orderID";
        return $this->da->ExecuteQuery($sql);
    }
    public function __destruct()
    {
        unset($this->da);
    }
}
