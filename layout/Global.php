<?php

class GlobalApp {
    public function import ($folder, $page){
        switch($folder){
            case 'layout/view':
                require_once '../layout/'.$page.'.php';
            break;
            case 'layout':
                require_once './layout/'.$page.'.php';
            break;
            case 'layout/global':
                require_once '../layout/global/'.$page.'.php';
            break;

            case 'model':
                require_once '../Model/'.$page.'.php';
            break;

            case 'controller':
                require_once '../Controller/'.$page.'.php';
            break;
        }
    }

    public function getInstance($instance){
        return  new $instance;
    }

    public function getProp($tipo, $objeto =null ,$atributo){
        switch($tipo){
            case 'request':
                return  $_REQUEST[$atributo];
            break;
            
            case 'get':
                return  $_GET[$atributo];
            break;

            case 'post':
                return  $_POST[$atributo];
            break;

            case 'prop':
                return  $objeto[$atributo];
            break;
        }
    }
}

?>