<?php
    namespace App\DB;

    use Config\DBConnect;
    use PDOStatement;
    
    class DB extends DBConnect {
        protected $table;
        protected $primary = 'id';
        private $filter = '';
        private $param = array();
    
        public function __construct($table){
            $this->table = $table;
            //$this->filter = $filter;
        }
        public function where($where = array(), $param = array()){
            if (isset($where)) {
                $this->fileter .= ' WHERE ';
                $this->filter .= \implode(' ', $where);
                $this->param = $param;
            }
            return $this;
        }
        public function order($order = array()){
            if (isset($order)){
                $this->filter .= ' ORDER BY ';
                $this->filter .= \implode(',', $order);
            }
            return $this;
        }
        public function add($data){
            $sql = \sprintf("insert into `%s` %s",$this->table, $this->formatInsert($data));
            $sth = DBConnect::pdo()->prepare($sql);
            $sth = $this->formatParam($sth, $data);
            $sth = $this->formatParam($sth, $this->param);
            $th->execute();
    
            return $sth->rowCount();
        }
        public function update($data){
            $sql = \sprintf("update `%s` set %s %s", $this->table, $this->formatUpdate($data), $this->filter);
            $sth = DBConnect::pdo()->prepare($sql);
            $sth = $this->formatParam($sth, $data);
            $sth = $this->formatParam($sth, $this->param);
            $th->execute();
    
            return $sth->rowCount();
        }
        public function fetchAll(){
            $sql = \sprintf("select * from `%s` %s", $this->table, $this->filter);
            $sth = DBConnect::pdo()->prepare($sql);
            //var_dump(($sth));
            $sth = $this->formatParam($sth, $this->param);
            $sth->execute();
    
            return $sth->fetchAll();
        }
        public function fetch(){
            $sql = \sprintf("select * from `%s` %s", $this->table, $this->filter);
            $sth = DBConnect::pdo()->prepare($sql);
            $sth = $this->formatParam($sth, $this->param);
            $sth->execute();
    
            return $sth->fetch();
        }
        public function delete($id){
            $sql = \sprintf("delete from `%s` where `%s` = :%s", $this->table, $this->primary, $this->primary);
            $sth = DBConnect::pdo()->prepare($sql);
            $sth = $this->formatParam($sth, [$this->primary => $id]);
            $sth->execute();
    
            return $sth->rowCount();
        }
        private function formatParam(PDOStatement $sth, $params = array()){
            foreach ($params as $param => &$value) {
                $param = is_int($param) ? $param + 1 : ':' . ltrim($param, ':');
                $sth->bindParam($param, $value);
            }
            return $sth;
        }
        private function formatInsert($data){
            $fields = array();
            $names = array();
            foreach ($data as $key => $value) {
                $fields[] = \sprintf("`%s`", $key);
                $names[] = \sprintf(":%s", $key);
            }
            $field = implode(',' ,$fields);
            $name = implode(',', $names);
    
            return \sprintf("(%s) values (%s)", $field, $name);
        }
        private function formatUpdate($data){
            $fields = array();
            foreach ($data as $key => $value) {
                $fields[] = \sprintf("`%s` = :%s", $key, $key);
            }
            return implode(',', $fields);
        }
    }
?>