<br>	
<div style="width: 900px; float: right; margin-right: 50px;">
<center><h2><a href="admin.php?mod=category&act=manage">Quản lý thể loại</a></h2></center>
<!-- <h5 style = "border: 1px solid;width: 100%;text-align: center;text-transform: uppercase;
    font: initial;
    height: 30px;background: antiquewhite;"><span class="icon" style = "font-size: large;"><a href="admin.php?mod=category&act=insert" style = "    text-decoration: none;
    color: black;
    font-weight: bold;
    font-size: 2rem;"><i class="fas fa-plus-circle"></i>
                </a></span>Category</h5> -->
	<table width="100%" class="table table-bordered table-striped">
    <tr class="title"><th>Mã thể loại</th><th>Tên thể loại</th><th>Xóa</th><th>Sửa</th></tr>
    <?php
    foreach ($ret as $row) {
        echo "<tr><td>";
        echo $row['CategoryID']."</td><td>";
        echo $row['CategoryName']."</td><td>";
        echo "<a href=\"admin.php?mod=category&act=delete&id=$row[CategoryID]\" onclick=\"return IsDelete()\"><img src=\"Images/Delete.gif\" /></a></td><td>";
        echo "<a href=\"admin.php?mod=category&act=edit&id=$row[CategoryID]\"><img src=\"Images/Edit.gif\" /></a>";
        echo "</td></tr>";
    }
    ?>
    </table>
    <p class="btn-more box noprint"><strong><a href="admin.php?mod=category&act=insert"><i class="fas fa-plus-circle"></i> </a>
        Thêm Manufacture
    </a></strong></p>
</div> 