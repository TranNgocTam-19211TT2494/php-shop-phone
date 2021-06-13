<style>
#content {
    padding-bottom: 500px;
}
</style>
<h1 class="mt-4">Table Manufaceture</h1>
<div class="card mb-4">
    <div class="card-header">
        <strong><a href="admin.php?mod=manufacturer&act=insert"><i class="fas fa-plus-circle"></i> </a>
            Add Manufaceture
            </a></strong>
       
    </div>
    <div class="card-body">

        <table id="datatablesSimple">

            <thead>
                <tr class="title">
                    <th>Mã nhà cung cấp</th>
                    <th>Tên nhà cung cấp</th>
                    <th>Xóa</th>
                    <th>Sửa</th>
                </tr>
            </thead>
            <?php
    foreach ($ret as $row) {
        echo "<tr><td>";
        echo $row['ManufacturerID']."</td><td>";
        echo $row['ManufacturerName']."</td><td>";
        echo "<a href=\"javascript:confirmDeleteManufacture('admin.php?mod=manufacturer&act=delete&id=$row[ManufacturerID]')\" onclick=\"return IsDelete()\"><img src=\"Images/Delete.gif\" /></a></td><td>";
        echo "<a href=\"admin.php?mod=manufacturer&act=edit&id=$row[ManufacturerID]\"><img src=\"Images/Edit.gif\" /></a>";
        echo "</td></tr>";
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
function confirmDeleteManufacture(delUrl) {
  if (confirm("Bạn có chắc chắn muốn xóa?")) {
   document.location = delUrl;
  }
}
</script>