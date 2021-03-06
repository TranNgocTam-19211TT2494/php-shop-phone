<?php
    include_once("DataProvider.php");
    class Products
    {
        private $da;
        public function __construct()
        {
            $this->da = new DataProvider();
        }
        public function getProductById($id)
        {
            $sql = "Select CategoryID,ProductID,ProductName,ImageUrl,Price,Quantity, Description, Body from products where ProductID = $id";
            return $this->da->Fetch($sql);
        }
        public function getProductsByCateID($cateID)
        {
            $sql = "SELECT * FROM products WHERE CategoryID=$cateID";
            return $this->da->FetchAll($sql);
        }
        public function getProductsByManuID($ManuID)
        {
            $sql = "Select * from products where ManufacturerID = $ManuID";
            return $this->da->FetchAll($sql);
        }
        public function GetProducts($start, $end)
        {
            $sql="SELECT ProductID,ProductName,ImageUrl,Price,Quantity FROM products ORDER BY ProductID DESC LIMIT $start,$end";
            return $this->da->FetchAll($sql);
        }
        public function getManufacturer()
        {
            return $this->da->FetchAll("Select * from manufacturers");
        }
        //Sản phẩm mới nhất 
        public function getProducts1()
        {
            $sql="SELECT * FROM products ORDER BY ProductID DESC";
            return $this->da->FetchAll($sql);
        }
        //Sản bán chạy nhất
        public function getProductByOrderItem()
        {
            $sql="SELECT * FROM products , orderitems WHERE products.ProductID = orderitems.ProductID GROUP BY products.ProductID";
            return $this->da->FetchAll($sql);
        }
        public function getProductsByPrice($type)
        {
            if ($type=="asc") {
                $sql="Select * from products order by Price";
            } else {
                $sql="Select * from products order by Price desc";
            }
            return $this->da->FetchAll($sql);
        }
        //đếm số sản phẩm
        public function CountProducts()
        {
            $sql="Select ProductID from products";
            return $this->da->NumRows($sql);
        }
        public function Search($txtSearch,$start,$end)
        {
            $sql = "SELECT ProductID,ProductName,ImageUrl,Price,Quantity FROM products WHERE ProductName LIKE '%$txtSearch%' OR Price LIKE '%$txtSearch%' ORDER BY ProductID DESC LIMIT $start,$end";
            return $this->da->FetchAll($sql);
        }
        //tìm kiếm admin:
        public function SearchProducts($txtSearch)
        {
            $sql = "Select ProductID,ProductName,ImageUrl,Price,Quantity from products where ProductName like '%$txtSearch%' or Price like '%$txtSearch%'";
            return $this->da->FetchAll($sql);
        }
        
        public function getAllOther()
        {
            $sql = "Select ProductID,ProductName,ImageUrl,Price,Quantity from products where CategoryID =2 or (CategoryID>3 and CategoryID <>5)";
            return $this->da->FetchAll($sql);
        }
        public function detailProduct($id)
        {
            $sql = "Select CategoryID,ProductID,ProductName,ImageUrl,Price,Quantity, Description, Body from products where ProductID = $id";
            return $this->da->Fetch($sql);
        }
        public function getCategoryOther($id, $CategoryID)
        {
            $sql = "Select ProductID,ProductName,ImageUrl,Price,Quantity, Description, Body from products where ProductID <> $id and CategoryID = $CategoryID";
            return $this->da->FetchAll($sql);
        }

        //Phân trang tìm kiếm
        
        public function getProductsManage()
        {
            $sql = "Select ProductID, ProductName, ImageUrl, Price, Quantity, ManufacturerName, CategoryName from products p join Categories c on p.CategoryID=c.CategoryID join Manufacturers m on p.ManufacturerID=m.ManufacturerID order by p.ProductID desc";
            return $this->da->FetchAll($sql);
        }
        public function DeleteProducts($id)
        {
            $sql = "Delete from products where ProductID=$id";
            return $this->da->ExecuteQuery($sql);
        }
        public function InsertProduct($manuID, $cateID, $proName, $Image="", $Price, $Quantity, $Description, $Body)
        {   if($Image == "") {
                $sql = "Insert into products(ManufacturerID,CategoryID,ProductName,ImageUrl,Price,Quantity,Description,Body) values ($manuID,$cateID,'$proName',NULL,$Price,$Quantity,'$Description','$Body')";
            } else{
                $sql = "Insert into products(ManufacturerID,CategoryID,ProductName,ImageUrl,Price,Quantity,Description,Body) values ($manuID,$cateID,'$proName','$Image',$Price,$Quantity,'$Description','$Body')";
            }
           
            return $this->da->ExecuteQuery($sql);
        }
        public function UpdateProduct($productID, $manufacturerID, $categoryID, $productName, $price, $quantity, $description, $body, $imageUrl="")
        {
            if ($imageUrl=="") {
                $sql="Update products set ManufacturerID=$manufacturerID, CategoryID=$categoryID,ProductName='$productName',Price=$price,Quantity=$quantity, Description='$description', Body='$body' where ProductID=$productID";
            } else {
                $sql="Update products set ManufacturerID=$manufacturerID, CategoryID=$categoryID,ProductName='$productName', ImageUrl='$imageUrl', Price=$price, Quantity=$quantity, Description='$description', Body='$body' where ProductID=$productID";
            }
            return $this->da->ExecuteQuery($sql);
        }
        public function __destruct()
        {
            unset($this->da);
        }

        public function Star($num)
        {
            $page = 0;
            if (isset($_GET['page'])) {
                $page = $_GET['page'];
            }
            if (isset($page)) {
                if ($page <= 1) {
                    $star = 0;
                } else {
                    $star = ($page * $num) - $num;
                }
            } else {
                $star = 0;
            }
            return $star;
        }
        public function counPagetByNumProduct_Search($timkiem, $star, $num)
        {
            $product = count($this->search($timkiem, $star, $num));
            $page = ceil($product/$num);
            return $page;
        }
        //lấy ra số trang
        public function counPagetByNumProduct($num, $select)
        {
            $sql = self::$connection->prepare("SELECT * FROM $select");
            $product = count($this->select($sql));
            $page = ceil($product/$num);
            return $page;
        }
        
        public function Pagination($page, $num, $select)
        {
            ?>
<center>
    <div aria-label="Page navigation">
        <ul class="pagination">
            <li>
                <a aria-label="Previous" href="?page=<?php if (isset($page) == 1 || isset($page) == "") {
                echo 1;
            } ?>">
                    <span aria-hidden="true">«</span>
                </a>
            </li>
            <li>
                <a aria-label="Previous" href="?page=<?php if ($page <= 1) {
                echo 1;
            } else {
                echo $page - 1;
            } ?>">
                    <span aria-hidden="true">←</span>
                </a>
            </li>
            <?php
                        $product = new Product();
            $num = $product->counPagetByNumProduct($num, $select);
            for ($i = 1;$i <= $num;$i++) {
                ?>
            <li class=""><a href="?page=<?php echo $i ?>"><?php echo $i ?></a>
            </li>
            <?php
            } ?>
            <li>
                <a aria-label="Previous" href="?page=<?php if ($page >= $num) {
                echo $num;
            } else {
                echo $page + 1;
            } ?>">
                    <span aria-hidden="true">→</span>
                </a>
            </li>
            <li>
                <a href="?page=<?php echo $num ?>" aria-label="Next">
                    <span aria-hidden="true">»</span>
                </a>
            </li>
        </ul>
    </div>
</center>
<?php
        }
    }
?>