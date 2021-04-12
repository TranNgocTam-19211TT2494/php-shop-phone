<?php
class Pages
{
    public static function findStart($limit)
    {
        $start=-1;
        if ((!isset($_GET["page"])) || ($_GET["page"]=="1")) {
            $_GET['page']=1;
            $start=0;
        } else {
            $start = ($_GET["page"]-1)*$limit;
        }
        return $start;
    }
    public static function findPages($countProducts, $limit)
    {
        $page = ($countProducts%$limit==0)? $countProducts/$limit : floor($countProducts/$limit)+1;
        return $page;
    }
    public static function PreNext($currPage, $url, $limitPage)
    {
        $next_prev="";
        if ($currPage-1<=0) {
            $next_prev.="";
        } else {
            $next_prev.="<a href=\"".$_SERVER['PHP_SELF'].$url."page=".($currPage-1)."\"><span><</span></a> ";
        }
        $next_prev.="<big
		>".$currPage."</big>";
        if (($currPage+1)>$limitPage) {
            $next_prev.="";
        } else {
            $next_prev.="<a href=\"".$_SERVER['PHP_SELF'].$url."page=".($currPage+1)."\"><span>></span></a> ";
        }
        return $next_prev;
    }
    public function Pagination_Search($page, $num)
    {
        ?>
	<center>
		<div aria-label="Page navigation">
			<ul class="pagination">
				<li>
					<a aria-label="Previous" href="?page=<?php if (isset($page) == 1 || isset($page) == "") {
            echo 1;
        } ?>">
						<span aria-hidden="true">«</span>
					</a>
				</li>
				<li>
					<a aria-label="Previous" href="?page=<?php if ($page <= 1) {
            echo 1;
        } else {
            echo $page - 1;
        } ?>">
						<span aria-hidden="true">←</span>
					</a>
				</li>
				<?php
                            for ($i = 1;$i <= $num;$i++) {
                                ?>
				<li class=""><a href="?page=<?php echo $i ?>"><?php echo $i ?></a>
				</li>
				<?php
                            } ?>
				<li>
					<a aria-label="Previous" href="?page=<?php if ($page >= $num) {
                                echo $num;
                            } else {
                                echo $page + 1;
                            } ?>">
						<span aria-hidden="true">→</span>
					</a>
				</li>
				<li>
					<a href="?page=<?php echo $num ?>" aria-label="Next">
						<span aria-hidden="true">»</span>
					</a>
				</li>
			</ul>
		</div>
	</center>
	<?php
    }
}
?>
<style>
a span {
	border: 2px solid black;
    margin: 27px;
    font-size: 2.5rem;
	background: #5bc0de;
    color: white;
}
big {
	border: 2px solid;
    margin: 10px;
    font-size: 2.5rem;
}

</style>