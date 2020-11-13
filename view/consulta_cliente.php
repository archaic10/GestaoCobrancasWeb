<?php  
    require_once '../layout/Global.php';
    $global = new GlobalApp();
    $global->import('layout/global', 'index');
    $global->import('layout/global', 'menu'); 
    $global->import('layout/global', 'Components'); 
    $global->import('controller', 'ClienteController'); 
    $components = new Components();
    $colunas = array("Código", "Nome", "Endereço", "UF", "Telefone", "Documento", "E-mail", "Ações" );
    $indices = array("cod_cliente", "nome", "endereco", "uf", "telefone", "documento", "email", );
    $dados = new ClienteController();

?>
        <div id="page-process">
            <div id="conteudo">
                <header>          
                    <h1 id="tituloIni">Sistema de cobranças</h1>       
                </header>          
                <section id="painel">
                    <?=                             
                            $components ->form("", "", "", 
                                $components ->h1("cad_titulo", "Consultar de cliente").
                                $components ->section("itens-cad", "",           
                                $components -> label("documento", "form_cad", "Documento")."<br>".
                                     $components ->section("container linha", "",     
                                     $components -> input("text", "elemento", "documento", 'documento',  "",  "")."<br>".
                                     $components ->buttonPesquisa( "search", "search","Pesquisar" , "onclick='pesquisa()'",  "", "elemento")."<br>"
                                     )."<br>".                  
                                    
                                  
                                    $components ->table("csc",$colunas, $dados->find(), $indices)
                                 )
                            )
                        ?>        
                </section>
        </div>
<?php     $global->import('layout/global', 'footer');  ?>
