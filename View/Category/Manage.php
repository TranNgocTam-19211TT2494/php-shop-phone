<style>
#content {
    padding-bottom: 500px;
}
</style>
<h1 class="mt-4">Table Categories</h1>
<div class="card mb-4">
    <div class="card-header">
        <strong><a href="admin.php?mod=category&act=insert"><i class="fas fa-plus-circle"></i> </a>
            Add Categories
            </a></strong>
        
    </div>
    <div class="card-body">

        <table id="datatablesSimple">

            <thead>

                <tr class="title">
                    <th>Mã thể loại</th>
                    <th>Tên thể loại</th>
                    <th>Xóa</th>
                    <th>Sửa</th>
                </tr>
            </thead>
            <?php
    foreach ($ret as $row) {
        echo "<tr><td>";
        echo $row['CategoryID']."</td><td>";
        echo $row['CategoryName']."</td><td>";
        echo "<a href=\"javascript:confirmDeleteCategory('admin.php?mod=category&act=delete&id=$row[CategoryID]')\" onclick=\"return IsDelete()\"><img src=\"Images/Delete.gif\" /></a></td><td>";
        echo "<a href=\"admin.php?mod=category&act=edit&id=$row[CategoryID]\"><img src=\"Images/Edit.gif\" /></a>";
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
function confirmDeleteCategory(delUrl) {
  if (confirm("Bạn có chắc chắn muốn xóa?")) {
   document.location = delUrl;
  }
}
</script>