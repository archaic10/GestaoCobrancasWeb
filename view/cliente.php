<?php  
    require_once '../layout/Global.php';
    $global = new GlobalApp();
    $global->import('controller', 'ClienteController'); 
    $dados = new ClienteController();
    $global->import('layout/global', 'index');
    $global->import('layout/global', 'menu'); 
    $global->import('layout/global', 'Components'); 

    $components = new Components();
    $descEstado = array("Bahia", "São Paulo", "Rio de Janeiro");
    $codEstado = array("ba", "sp", "rj");


?>
        <div id="page-process">
            <div id="conteudo">
                <header>          
                    <h1 id="tituloIni">Sistema de cobranças</h1>
       
                </header>          
                <section id="painel">
                    <?=                       
                            $components ->form("", "", "cadastro", 
                                $components ->h1("cad_titulo", "Cadastro de cliente").
                             
                                $components -> input("hidden", "", "idCliente ", 'idCliente ',  "",  "").
                                $components ->section("itens-cad", "",                           
                                    $components -> label("documento", "form_cad", "Documento").
                                    $components -> input("text", "", "documento", 'Documento',  "",  "")
                                 ).                        
                                $components ->section("itens-cad", "",                           
                                    $components -> label("nomeCliente", "form_cad", "Nome").
                                    $components -> input("text", "", "nomeCliente", 'nomeCliente',  "",  "")
                                ).                                
                                 $components ->section("itens-cad", "",                           
                                    $components -> label("email", "form_cad", "E-mail").
                                    $components -> input("text", "", "email", 'E-mail',  "",  "")
                                 ).
                                 $components ->section("itens-cad", "",                           
                                    $components -> label("telefone", "form_cad", "Telefone").
                                    $components -> input("text", "", "telefone", 'Telefone',  "",  "")
                                 ).
                                 $components ->section("itens-cad", "",
                                 $components ->label("uf ", "form_cad", "Estado").   
                                    $components ->select('uf ', 'uf ',  $codEstado ,$descEstado ,  "", "")
                                 ).
                                 $components ->section("itens-cad", "",
                                    $components ->label("endereco", "form_cad", "Endereço").   
                                    $components ->textArea("endereco", "endereco", "43", "5")
                                 ).
                                 $components ->button( "cadCliente", "cadCliente","Salvar" , "onclick='save()'",  "")
                            )
                        ?>        
                </section>
        </div>
<?php     $global->import('layout/global', 'footer');  ?>

