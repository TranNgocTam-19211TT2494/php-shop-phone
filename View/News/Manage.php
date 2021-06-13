<style>
#content {
    padding-bottom: 500px;
}
</style>
<div class="card mb-4">
    <div class="card-header">
       <strong><a href="admin.php?mod=news&act=insert"> <i class="fas fa-table me-1"></i> </a>
                Thêm
    </div>
   
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                </a></strong></p>
                <tr class="title">
                    <th>Mã tin tức</th>
                    <th>Tên Người dùng</th>
                    <th>Title</th>
                    <th>Intro</th>
                    <th>Hình</th>
                    <th>Xóa</th>
                    <th>Sửa</th>
                </tr>
            </thead>
            <?php
foreach ($ret as $row) {
    echo "<tr><td>";
    echo $row['ReviewID']."</td><td>";
    echo $row['FullName']."</td><td>";
    echo $row['titile']."</td><td>";
    echo $row['intro']."</td><td>";
    echo "<img src=\"Upload/$row[photo]\" width=\"30\" /></td><td>";
    echo "<a href=\"javascript:confirmDeleteNews('admin.php?mod=news&act=delete&id=$row[ReviewID]')\" onclick=\"return IsDelete()\"><img src=\"Images/Delete.gif\" /></a></td><td>";
    echo "<a href=\"admin.php?mod=news&act=edit&id=$row[ReviewID]\"><img src=\"Images/Edit.gif\" /></a>";
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
function confirmDeleteNews(delUrl) {
  if (confirm("Bạn có chắc chắn muốn xóa?")) {
   document.location = delUrl;
  }
}
</script>