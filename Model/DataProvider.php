<?php
    class DataProvider
    {
        private $link;//bien ket noi csdl
        public function __construct()
        {
            $this->link=mysqli_connect("localhost", "root", "", "nhom11");
        }
        public function ExecuteQuery($sql)
        {
            mysqli_query($this->link, "set names utf8");
            return mysqli_query($this->link, $sql);
        }
        public function ExecuteQueryInsert($sql)
        {
            $result=$this->ExecuteQuery($sql);
            if ($result >0) {
                return mysqli_insert_id($this->link);// tra ve id vua moi insert
            } else {
                return 0;
            }
        }
        public function Fetch($sql)
        {
            $rs = $this->ExecuteQuery($sql);
            return mysqli_fetch_assoc($rs);
        }
        public function FetchAll($sql)
        {
            $arr=array();
            $r = $this->ExecuteQuery($sql);
            while ($row = mysqli_fetch_assoc($r)) {
                $arr[]=$row;
            }
            mysqli_free_result($r);
            return $arr;
        }
        public function NumRows($sql)
        {
            $result=$this->ExecuteQuery($sql);
            return mysqli_num_rows($result);
        }
        public function __destruct()
        {
            mysqli_close($this->link);
        }
        public function select($sql)
        {
            $items = array();
            $sql->execute();
            $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $items;
        }
    }
