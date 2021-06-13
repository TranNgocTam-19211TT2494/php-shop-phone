<style>
    #content {
        padding-bottom: 500px;
    }
</style>
<h1 class="mt-4">Orders</h1>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        DataTable Orders
    </div>
    <div class="card-body">

        <table id="datatablesSimple">

            <thead>
                <tr class="title">
                    <th style="text-align: center;">Mã đơn hàng</th>
                    <th style="text-align: center;">Tên khách hàng</th>
                    <th style="text-align: center;">Tên sản phẩm</th>
                    <th style="text-align: center;">Số lượng</th>
                    <th style="text-align: center;">Giá</th>
                    <th style="text-align: center;">Tổng giá tiền</th>
                    <th style="text-align: center;">Ngày đặt hàng</th>
                    <th style="text-align: center;">Xóa đơn hàng</th>
                    <th style="text-align: center;">Xác nhận đơn</th>
                </tr>
            </thead>
            <?php
                foreach ($order as $row) {
                    $item = $oi->GetOrderItemByOrder($row['OrderID']);
                    $sum=0;
                    foreach ($item as $rowitem) {
                        $sum+=$rowitem['Quantity']*$rowitem['Price'];

                        echo "<tr><td style='text-align: center;'>";
                        echo $row['OrderID']."</td><td style='text-align: center;'>";
                        echo $row['FullName']."</td><td style='text-align: center;'>";
                        echo $rowitem['ProductName']."</td><td style='text-align: center;'>";
                        echo $rowitem['Quantity']."</td><td style='text-align: center;'>";
                        echo $rowitem['Price']."</td><td style='text-align: center;'>";
                        echo $sum."</td><td style='text-align: center;'>";
                        echo $row['AddedDate']."</td><td style='text-align: center;'>";
                        echo "<a href=\"javascript:confirmDeleteOrder('admin.php?mod=order&act=delete&id=$row[OrderID]')\"  onclick=\"return IsDelete()\" ><img src=\"Images/Delete.gif\" /></a></td><td style='text-align: center;'>";
                        if ($row['Status'] == 0) {
                            echo "<a href=\"admin.php?mod=order&act=update&id=$row[OrderID]\" style = 'border: 2px solid;'>Xác nhận<img src=\"Images/Edit.gif\" /></a>";
                        } else {
                            echo "Đã Xác Nhận Đơn";
                        }
                        echo "</td></tr>";
                        
                    }
                }
             ?>
        </table>

    </div>
</div>
<script>
$(document).ready(function() {
    
    $('.container-fluid').remove();

});
</script>
<script>
function confirmDeleteOrder(delUrl) {
  if (confirm("Bạn có chắc chắn muốn xóa đơn hàng?")) {
   document.location = delUrl;
  }
}
</script>