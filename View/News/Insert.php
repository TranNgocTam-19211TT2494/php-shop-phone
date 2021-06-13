<div style="width: 80%; margin: 0 auto;">
  	<form class="form" method="post" action="admin.php?mod=news&act=insert" enctype="multipart/form-data">
        <p><label>Title (*)</label><input type="text" name="txtTitle" id="txtTitle" style="margin-left: 10px;" /></p>
        <p><label>Tác giả (*)</label>
        <select name="slUser" style="margin-left: 10px;">
        	<option value="0">Chọn tên tác giả</option>
            <?php
                foreach ($us as $row) {
                    echo "<option value=\"$row[UserID]\" >$row[FullName]</option>";
                }
            ?>
        </select></p>
        
        <p><label>Ảnh hiển thị</label><input type="file" name="txtImageUrl" id="txtImageUrl" value="Chọn file" style="margin-left: 125px;"/></p>
        <p><label>Mô tả</label></p>
        <textarea name="txtDescription"  id = "txtDescription" cols="60" ></textarea>
        <p>Chi tiết</p>
        <textarea id="txtBody" name="txtBody" cols="60" rows="5" ></textarea>
        <p><label>Status (*)</label><input type="text" name="txtQuantity" id="txtQuantity" value="0" style="margin-left: 44px;"/></p>
        <p><label>&nbsp;</label><input type="submit" value="Lưu" name="btnSave" id="btnSave"/></p>
        
        <p id="error" class="error"></p>
    </form>
</div>