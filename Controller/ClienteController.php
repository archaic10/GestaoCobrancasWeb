<?php
    require_once 'Controller.php';
    require '../Model/ClienteDAO.php';
    class ClienteController extends Controller{

        private $idCliente;
        private $nomeCliente;
        private $endereco;
        private $uf;
        private $telefone;
        private $documento;
        private $email;

        public function __constructor( ){
            parent::__construct();
        } 
        

        public function save(){
            $this->idCliente = $_REQUEST['idCliente'];
            $this->nomeCliente = $_REQUEST['nomeCliente'];
            $this->endereco = $_REQUEST['endereco'];
            $this->uf = $_REQUEST['uf'];
            $this->telefone = $_REQUEST['telefone'];
            $this->documento = $_REQUEST['documento'];
            $this->email = $_REQUEST['email'];
            echo   json_encode("EUYEUYEYEUYEUYEUYEUYE");
            exit;
        }

        public function find (){     
            $clienteDAO = new ClienteDAO();
            return $clienteDAO->obter();
        }   
    }
?>