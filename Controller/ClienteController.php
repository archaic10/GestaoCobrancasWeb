<?php
    require_once 'Controller.php';
    require '../Model/ClienteDAO.php';
    class ClienteController extends Controller{
    
        public function __constructor( ){
            $this->idCliente = $_REQUEST['idCliente'];
            $this->nomeCliente = $_REQUEST['nomeCliente'];
            $this->endereco = $_REQUEST['endereco'];
            $this->uf = $_REQUEST['uf'];
            $this->telefone = $_REQUEST['telefone'];
            $this->documento = $_REQUEST['documento'];
            $this->email = $_REQUEST['email'];
        } 

        public function find (){     
            $clienteDAO = new ClienteDAO();
            return $clienteDAO->obter();
        }   
    }
?>