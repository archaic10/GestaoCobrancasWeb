<?php  
    require_once '../layout/Global.php';
    $global = new GlobalApp();
    $global->import('layout/global', 'index');
    $global->import('layout/global', 'menu'); 
    $global->import('layout/global', 'Components'); 
    $components = new Components();
    $descCredor = array("Vitor França", "Diego Figueiredo", "Ítalo Ribeiro");
    $codCredor = array("1", "2", "3");
    $descDevedor = array("Leila Sanches", "Carolina Cruz", "Francine Araújo");
    $codDevedor = array("1", "2", "3");
?>
        <div id="page-process">
            <div id="conteudo">
                <header>          
                    <h1 id="tituloIni">Sistema de cobranças</h1>
       
                </header>          
                <section id="painel">
                    <?=                       
                            $components ->form("", "", "",                                 
                                $components ->h1("cad_titulo", "Cadastro de Dívida").                   
                                $components ->section("itens-cad", "",
                                    $components ->label("cod_credor", "form_cad", "Credor")."<br>".   
                                    $components ->select('cod_credor', 'estado',  $codCredor ,$descCredor ,  "", "")
                                ).     
                                $components ->section("itens-cad", "",
                                    $components ->label("cod_devedor", "form_cad", "Devedor")."<br>".   
                                    $components ->select('cod_devedor', 'estado',  $codDevedor ,$descDevedor ,  "", "")
                                ).                   
                                $components ->section("itens-cad", "",                           
                                    $components -> label("divida", "form_cad", "Dívida")."<br>".
                                    $components -> input("text", "", 'divida', 'Dívida',  "",  "")
                                ).                                
                                 $components ->section("itens-cad", "",                           
                                    $components -> label("data_atualizacao", "form_cad", "Data Atualização")."<br>".
                                    $components -> input("text", "", "data_atualizacao", 'E-mail',  "",  "")
                                 )."<br>".
                                 $components ->button( "cadCliente", "cadCliente","Salvar" , "",  "")
                            )
                        ?>        
                </section>
        </div>
<?php     $global->import('layout/global', 'footer');  ?>