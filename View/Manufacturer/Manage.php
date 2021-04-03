<br>
<div style="width: 950px; float: right; margin-right: 124px;padding-bottom: 68px;">
    <center>
        <h2><a href="admin.php?mod=manufacturer&act=manage">Quản lý nhà cung cấp</a></h2>
    </center>
    <h5 style="border: 1px solid;width: 100%;text-align: center;text-transform: uppercase;
    font: initial;
    height: 30px;background: antiquewhite;"><span class="icon" style="font-size: large;"><a
                href="admin.php?mod=manufacturer&act=insert" style="    text-decoration: none;
    color: black;
    font-weight: bold;
    font-size: 2rem;"><i class="fas fa-plus-circle"></i>
            </a></span>Manufacture</h5>
    <table width="100%" class="table table-bordered table-striped">
        <tr class="title">
            <th>Mã nhà cung cấp</th>
            <th>Tên nhà cung cấp</th>
            <th>Xóa</th>
            <th>Sửa</th>
        </tr>
        <?php
	foreach($ret as $row)
	{
		echo "<tr><td>";
		echo $row['ManufacturerID']."</td><td>";
		echo $row['ManufacturerName']."</td><td>";
		echo "<a href=\"admin.php?mod=manufacturer&act=delete&id=$row[ManufacturerID]\" onclick=\"return IsDelete()\"><img src=\"Images/Delete.gif\" /></a></td><td>";
		echo "<a href=\"admin.php?mod=manufacturer&act=edit&id=$row[ManufacturerID]\"><img src=\"Images/Edit.gif\" /></a>";
		echo "</td></tr>"; 
	}
	?>
    </table>


</div>