<div class="panel">

    <div class="pagination">
        <footer>
            <center>
                <?php 
            // PHẦN HIỂN THỊ PHÂN TRANG
            // BƯỚC 7: HIỂN THỊ PHÂN TRANG
 
            // nếu current_page > 1 và total_page > 1 mới hiển thị nút prev
            if ($page > 1 && $numberPage > 1){
                echo '<div class="p" style = "border: 1px solid;font-size: larger;
                font-weight: 700;"><a  href="?page='.($page-1).'"> Prev </a></div>';
            }
            // Lặp khoảng giữa
            for ($i = 1; $i <= $numberPage; $i++){
                // Nếu là trang hiện tại thì hiển thị thẻ span
                // ngược lại hiển thị thẻ a
                if ($i == $page){
                    echo '<div class="p" style = "border: 1px solid;font-size: larger;
                    font-weight: 700;"><span >'.$i.'</span></div>';
                }
                else{
                    echo '<div class="p" style = "border: 1px solid;font-size: larger;
                    font-weight: 700;"><a href="?page=' .$i.  '">'.$i.'</a></div>';
                }
            }
            // nếu current_page < $total_page và total_page > 1 mới hiển thị nút prev
            if ($page < $numberPage && $numberPage > 1){
                echo '<div class="p" style = "border: 1px solid;font-size: larger;
                font-weight: 700;"><a href="?page='.($page+1).'"> Next </a></div>';
            }
           ?>
            </center>
        </footer>
    </div>
</div>
<style>
footer {
    display: block;
}
.panel {
    width: auto;
    height: revert;
}
.pagination {
    float: left;
    position: relative;
    top: 146px;
    left: 93%;
}
</style>