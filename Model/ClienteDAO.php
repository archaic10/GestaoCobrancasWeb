<?php
    require_once 'Db.php';
    class ClienteDAO extends Db{

        private  $idCliente;
        private $nomeCliente;
        private $endereco;
        private $uf;
        private $telefone;
        private $documento;
        private $email;
        
        public function __construct() {
            parent::__construct();
        }

        public function getNomeCliente() {
            return $nomeCliente;
        }
    
        public function setNomeCliente($nomeCliente) {
            $this->nomeCliente = $nomeCliente;
        }
    
        public function getEndereco() {
            return $endereco;
        }
    
        public function setEndereco($endereco) {
            $this->endereco = $endereco;
        }
    
        public function getUf() {
            return $uf;
        }
    
        public function setUf($uf) {
            $this->uf = $uf;
        }
    
        public function getTelefone() {
            return $telefone;
        }
    
        public function setTelefone($telefone) {
            $this->telefone = $telefone;
        }
    
        public function getDocumento() {
            return $documento;
        }
    
        public function setDocumento($documento) {
            $this->documento = $documento;
        }
    
        public function getEmail() {
            return $email;
        }
    
        public function setEmail($email) {
            $this->email = $email;
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