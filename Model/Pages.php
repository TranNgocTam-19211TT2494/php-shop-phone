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
        $offset = 10;
        $next_prev="";
        if ($currPage-1<=0) {
            $next_prev.="";
        } else {
            $next_prev.="<a  href=\"".$_SERVER['PHP_SELF'].$url."page=".($currPage-1)."\" style='font-size: 2.5rem;'><span>Pre</span></a> ";
        }
        $totalLinks = 9;
        $from = $currPage - $offset;
        $to = $currPage + $offset;
        if ($from <= 0) {
            $from = 1;
            $to = $offset * 2;
        }
        if ($to > $totalLinks) {
            $to = $totalLinks;
        }
        for($j=$from; $j <= $to ; $j++) 
        { 
            if ($j == $currPage){
                $next_prev.="<a href='#'style='color:red;font-size: 2.5rem;margin: 5px;' >".$j."</a>";
            }
            else{
                $next_prev.="<a href=\"".$_SERVER['PHP_SELF'].$url."page=".$j."\" style='font-size: 2.5rem;margin: 5px;'>".$j."</a>";
            }
          
        } 
        if (($currPage+1)>$limitPage) {
            $next_prev.="";
        } else {
            $next_prev.="<a href=\"".$_SERVER['PHP_SELF'].$url."page=".($currPage+1)."\" style='font-size: 2.5rem;'><span>Next</span></a> ";
        }
        return $next_prev;
    } 

    public static function PreNextSearch($currPage, $url, $limitPage,$product)
    {
        $offset = 10;
        $next_prev="";
        if ($currPage-1<=0) {
            $next_prev.="";
        } else {
            $next_prev.="<a  href=\"".$url."page=".($currPage-1)."&btnTimKiem=$product"."\" style='font-size: 2.5rem;'><span>Pre</span></a> ";
        }
        $totalLinks = ceil($currPage/$limitPage);
        $from = $currPage - $offset;
        $to = $currPage + $offset;
        if ($from <= 0) {
            $from = 1;
            $to = $offset * 2;
        }
        if ($to > $totalLinks) {
            $to = $totalLinks;
        }
        for($j=$from; $j <= $to ; $j++) 
        { 
            if ($j == $currPage){
                $next_prev.="<a  href=\"".$url."page=".$j."&btnTimKiem=$product"."\" style='color:red;font-size: 2.5rem;margin: 5px;' >".$j."</a>";
            }
            else{
                $next_prev.="<a href=\"".$url."page=".$j."&btnTimKiem=$product"."\" style='font-size: 2.5rem;margin: 5px;'>".$j."</a>";
            }
          
        } 
        if (($currPage+1)>$limitPage) {
            $next_prev.="";
        } else {
            $next_prev.="<a href=\"".$url."page=".($currPage+1)."&btnTimKiem=$product"."\" style='font-size: 2.5rem;'><span>Next</span></a> ";
        }
        return $next_prev;
    } 
   
}

?>
<style>

</style>