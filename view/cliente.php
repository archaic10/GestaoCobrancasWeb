<?php  
    require_once '../layout/Global.php';
    $global = new GlobalApp();
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
                            $components ->form("", "", "", 
                                $components ->h1("cad_titulo", "Cadastro de cliente").
                                $components ->section("itens-cad", "",                           
                                    $components -> label("documento", "form_cad", "Documento")."<br>".
                                    $components -> input("text", "", "documento", 'Documento',  "",  "")
                                 ).                        
                                $components ->section("itens-cad", "",                           
                                    $components -> label("nome", "form_cad", "Nome")."<br>".
                                    $components -> input("text", "", "nome", 'Nome',  "",  "")
                                ).                                
                                 $components ->section("itens-cad", "",                           
                                    $components -> label("email", "form_cad", "E-mail")."<br>".
                                    $components -> input("text", "", "email", 'E-mail',  "",  "")
                                 ).
                                 $components ->section("itens-cad", "",                           
                                    $components -> label("telefone", "form_cad", "Telefone")."<br>".
                                    $components -> input("text", "", "telefone", 'Telefone',  "",  "")
                                 ).
                                 $components ->section("itens-cad", "",
                                 $components ->label("estado", "form_cad", "Estado")."<br>".   
                                    $components ->select('estado', 'estado',  $codEstado ,$descEstado ,  "", "")
                                 ).
                                 $components ->section("itens-cad", "",
                                    $components ->label("endereco", "form_cad", "Endereço")."<br>".   
                                    $components ->textArea("endereco", "endereco", "43", "5")
                                 )."<br>".
                                 $components ->button( "cadCliente", "cadCliente","Salvar" , "",  "")
                            )
                        ?>        
                </section>
        </div>
<?php     $global->import('layout/global', 'footer');  ?>

