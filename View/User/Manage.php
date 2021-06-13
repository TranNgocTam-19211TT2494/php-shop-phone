<style>
    #content {
        padding-bottom: 500px;
    }
</style>
<h1 class="mt-4">Table Users</h1>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        DataTable Users
    </div>
    <div class="card-body">
    
        <table id="datatablesSimple">
        
        <thead>
            <tr class="title">
                <td>Họ tên</td>
                <td>Tên đăng nhập</td>
                <td>Nhóm</td>
                <td>Email</td>
                <td>Xóa</td>
                <td>Sửa</td>
            </tr>
        </thead>
            <?php

    foreach ($ret as $row) {
        echo "<tr><td>";
        echo $row['FullName']."</td><td>";
        echo $row['UserName']."</td><td>";
        echo $row['GroupName']."</td><td>";
        echo $row['Email']."</td><td>";
        echo "<a href=\"javascript:confirmDeleteUser('admin.php?mod=user&act=delete&id={$row["UserID"]}')\" onclick=\"return IsDelete()\"><img src=\"Images/Delete.gif\" /></a></td><td>";
        echo "<a href=\"admin.php?mod=user&act=edit&id={$row["UserID"]}\"><img src=\"Images/Edit.gif\" /></a>";
        echo "</td></tr>";
    }
    ?>
        </table>
      
    </div>
</div>
<script>
$(document).ready(function (){
    $('.container-fluid').remove();
    $('.col-xl-3').remove();
    $('.col-xl-6').remove();
});

</script>
<script>
function confirmDeleteUser(delUrl) {
  if (confirm("Bạn có chắc chắn muốn xóa?")) {
   document.location = delUrl;
  }
}
</script>