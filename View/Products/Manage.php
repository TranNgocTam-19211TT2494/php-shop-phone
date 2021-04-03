<br>
<div style="width: 966px; float: right; margin-right: 116px;padding-bottom: 70px;margin-top: -34px;">
    <center>
        <h2><a href="admin.php?mod=products&act=manage">Quản lý sản phẩm</a></h2>
    </center><br>
	
            <h5 style = "    border: 1px solid;
    width: 100%;
    text-align: center;
    text-transform: uppercase;
    font: initial;
    height: 23px;
    background: antiquewhite;"><span class="icon" style = "font-size: large;"><a href="admin.php?mod=products&act=insert" style = "text-decoration: none;
    color: black;
    font-weight: bold;"><i class="fas fa-plus-circle"></i>
                </a></span>Products</h5>
    <table width="100%" class="table table-bordered table-striped" >
        <thead>
          
            <tr class="title">
                <th>Tên sản phẩm</th>
                <th>Nhà cung cấp</th>
                <th>Thể loại</th>
                <th>Giá</th>
                <th>Số lượng</th>
                <th>Hình</th>
                <th>Xóa</th>
                <th>Sửa</th>
            </tr>
        </thead>
        <?php

	foreach($ret as $row)
	{
		echo "<tr><td>";
		echo $row['ProductName']."</td><td>";
		echo $row['ManufacturerName']."</td><td>";
		echo $row['CategoryName']."</td><td>";
		echo "Giá ".number_format($row["Price"],0)." VND</td><td>";
		echo $row['Quantity']."</td><td>";
		echo "<img src=\"Upload/$row[ImageUrl]\" width=\"30\" /></td><td>";
		echo "<a href=\"admin.php?mod=products&act=delete&id=$row[ProductID]\" onclick=\"return IsDelete()\"><img src=\"Images/Delete.gif\" /></a></td><td>";
		echo "<a href=\"admin.php?mod=products&act=edit&id=$row[ProductID]\"><img src=\"Images/Edit.gif\" /></a>";
		echo "</td></tr>"; 
	}
	?>
    </table>

    <!-- <p class="btn-more box noprint"><strong><a href="index-admin.php?mod=products&act=insert">Thêm</a></strong></p> -->
</div> <!-- /article -->