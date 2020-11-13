<?php
    require_once 'Db.php';
    class ClienteDAO extends Db{
    
        public function __construct() {
            parent::__construct();
        }
    
        public function inserir($o){     
            return NULL;
        }
        public function alterar($o){
            return NULL;
        }
        public function excluir($o){
            return NULL;
        }
        public function obter($o = null){
            return $this->querySelector("SELECT * FROM CLIENTE ");     
        }
        public function obterPorPk($o){
            return NULL;  
        }

        public  function queryTransaction($query){
            try{
                 return $this->oConn->exec($query);
             }catch (Exception $ex) {
                 return false;
             }
        } 
        public  function querySelector($query){
         $res = $this->oConn->query($query);
         return $res->fetchAll();
        }
    }
?>