<?php
require_once 'Db.php';
class EnqueteDAO extends Db{

    public function __construct() {
        parent::__construct();
    }

    public function inserir($o){     
        return queryTransaction("INSERT INTO ENQUETE (TITULO, DATA_INICIO, DATA_FIM ) VALUES('$o->TITULO','$o->DATA_INICIO', '$o->DATA_FIM')");
    }
    public function alterar($o){
        return queryTransaction("UPDATE ENQUETE SET TITULO='$o->TITULO', DATA_INICIO ='$o->DATA_INICIO', DATA_FIM='$o->DATA_FIM' WHERE ID ='$o->ID'");
    }
    public function excluir($o){
        return queryTransaction( "DELETE FROM ENQUETE WHERE ID ='$o->ID'");
    }
    public function obter($o = null){
        return querySelector("SELECT * FROM ENQUETE ");     
    }
    public function obterPorPk($o){
        return querySelector( " SELECT * FROM ENQUETE WHERE ID ='$o->ID' ");   
    }
}
?>