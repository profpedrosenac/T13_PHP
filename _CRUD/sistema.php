<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <?php include_once('autenticar.php');?>
    <div class="container bg-dark">
        <div class="row" id="topo">
            <?php include_once("_topo.php");?>
        </div>
        <div class="row" id="conteudo">
            <div class="col-sm-3">
                <?php include_once("_menu.php");?>
            </div>
            <div class="col-sm-9 mt-2">
                <?php
                if($_GET)
                {
                    if(isset($_GET['tela']))
                    {
                        $tela = $_GET['tela'];
                        if($tela == "usuario")
                        {
                            include_once('frm_usuario.php');
                        }
                        elseif($tela == "categoria")
                        {
                            echo'<h1> Categoria </h1>';
                            //nclude_once('frm_usuario.php');
                        }
                        elseif($tela == "produto")
                        {
                            echo'<h1> Produto </h1>';
                            //include_once('frm_usuario.php');
                        }
                        elseif($tela == "usuarioTabela")
                        {
                           include_once('usuario_tabela.php');
                        }
                    }
                    else
                    {
                        echo'
                        <h1> ERRO 404 </h1>
                        ';
                    }
                }
                else
                {
                     include_once("_home.php");
                }
                ?>
                     
            </div>
        </div>
        <div class="row" id="rodape">
            <?php include_once("_rodape.php");?>
        </div>
        
    </div>
    
    <script src="js/jquery-3.6.4.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#tabelaDados').DataTable();
        });
    </script>
</body>
</html>