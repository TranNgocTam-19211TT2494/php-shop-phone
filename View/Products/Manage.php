<div class="card mb-4">
    <div class="card-header">
        <strong><a href="admin.php?mod=products&act=insert"> <i class="fas fa-table me-1"></i> </a>
            Thêm
    </div>

    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                </a></strong></p>
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
foreach ($ret as $row) {
    echo "<tr><td>";
    echo $row['ProductName']."</td><td>";
    echo $row['ManufacturerName']."</td><td>";
    echo $row['CategoryName']."</td><td>";
    echo "Giá ".number_format($row["Price"], 0)." VND</td><td>";
    echo $row['Quantity']."</td><td>";
    echo "<img src=\"Upload/$row[ImageUrl]\" width=\"30\" /></td><td>";
    echo " <form method=\"post\" action=\"javascript:confirmDelete('admin.php?mod=products&act=delete&id=$row[ProductID]')\">
    <button class=\"btn btn-danger btn-sm dltBtn\" data-id=\"$row[ProductID]\" style='height:30px; width:30px;border-radius:50%' data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Delete\"><i class='fas fa-trash-alt'></i></button>
  </form></td><td>";
    echo"
    <form method=\"post\" action=\"admin.php?mod=products&act=edit&id=$row[ProductID]\">
    <button class=\"btn btn-danger btn-sm\" id=\"dltBtn\" style='height:30px; width:30px;border-radius:50%' > <i class=\"fas fa-edit\"></i></button>
  </form>";
    echo "</td></tr>";
   
}
?>

        </table>
    </div>
</div>
<script>
function confirmDelete(delUrl) {
  if (confirm("Sản phẩm hiện đang tồn tại - Bạn có chắc chắn muốn xóa")) {
   document.location = delUrl;
  }
}
</script>