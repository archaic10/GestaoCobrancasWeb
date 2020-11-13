<?php
    require_once 'Controller.php';
    require '../Model/ClienteDAO.php';
    class ClienteController extends Controller{

        private  $idCliente;
        private $nomeCliente;
        private $endereco;
        private $uf;
        private $telefone;
        private $documento;
        private $email;
    
        public function __constructor($idCliente = null, $nomeCliente = null, $endereco = null, $uf = null, $telefone = null, $documento = null, $email = null){
            $this->idCliente = $idCliente;
            $this->nomeCliente = $nomeCliente;
            $this->endereco = $endereco;
            $this->uf = $uf;
            $this->telefone = $telefone;
            $this->documento = $documento;
            $this->email = $email;
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

        public function find (){     
            $clienteDAO = new ClienteDAO();
            return $clienteDAO->obter();
        }   
    }
?>