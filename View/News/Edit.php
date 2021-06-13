<div style="width: 80%; margin: 0 auto;">
    <div style="min-height: 420px;margin-top:30px;">
        <form action="admin.php?mod=news&act=edit&id=<?php echo $id; ?>" method="post" class="form"
            enctype="multipart/form-data">
            <table cellpadding="10">
                <tr>
                    <td>Title</td>
                    <td><input type="text" name="txtTitle" id="txtTitle"
                            value="<?php echo $row['titile']; ?>" /></td>
                </tr>
                <tr>
                    <td>Tác giả (*)</td>
                    <td>
                        <select name="slUser">
                            <?php
                                foreach ($us as $rowmanu) {
                                    echo "<option value=\"$rowmanu[UserID]\" >$rowmanu[FullName]</option>";
                                }
                            ?>
                        </select>
                    </td>
                </tr>
               

                <tr>
                    <td>Ảnh</td>
                    <td><img src="Upload/<?php echo $row['photo'] ?>" width="100" /></td>
                </tr>
                <tr>
                    <td><input type="file" name="txtImageUrl" id="txtImageUrl" /></td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>Mô tả</td>
                    <td><textarea name="txtIntro" id="txtDescription"><?php echo $row['intro']; ?></textarea></td>
                </tr>
                <tr>
                    <td>Chi tiết</td>
                    <td><textarea name="txtContent" id="txtBody"><?php echo $row['content']; ?></textarea></td>
                </tr>
                <tr>
                    <td>Status (*)</td>
                    <td><input type="text" name="txtStatus" id="txtStatus"
                            value="<?php echo $row['status']; ?>" /></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td><input type="submit" name="btnChange" id="btnChange" value="Đổi thông tin" /></td>
                </tr>
            </table>
        </form>
    </div>
</div>