<?php
ini_set('display_errors', '1');
header('Content-type: text/html; charset=utf-8');
date_default_timezone_set('America/Bahia');

class Controller{
    public function __construct(){ 
        if (array_key_exists('comando', $_REQUEST) && $_REQUEST['comando'] != "") {     
            $acao = $_REQUEST['comando'];
            if (method_exists($this, $acao)) {
                $this->{$acao}();
            }
        }
    }
 
}
?>