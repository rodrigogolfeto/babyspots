<!DOCTYPE html>
<html>
    <head>
        <link type="text/css" rel="stylesheet" href="view/css/css.css" >
        <link type="text/css" rel="stylesheet" href="view/css/formulario-estabelecimento.css">

        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript">if (typeof jQuery == 'undefined') { document.write(unescape("%3Cscript src='view/scripts/jquery-min.js' type='text/javascript'%3E%3C/script%3E"));}</script>
        <!--[if lt IE 10]><script type="text/javascript" src="Scripts/no-ie9.js"></script><![endif]-->
        <script type="text/javascript" src="view/scripts/efeitos.js?0111"></script>

        <title>BabySpot's | Cadastrar Estabelecimento</title>
    </head>
    <body>

        <?php include 'view/header.php' ?>

        <div class="navegacao">
            <ul>
                <li><a href="?func=home">Home</a></li>
                <li><a href="">Cadastrar Estabelecimento</a></li>
            </ul>
        </div>

        <main class="container card">
            <form>
                <h3>Cadastrar Estabelecimento</h3>
                <fieldset id="dados">
                    <label>Nome do Estabelecimento<input type="text" name="nome_estabelecimento"></label>
                    <label>Serviços<input type="text" name="servicos"></label>
                    <fieldset id="endereco">
                        <label>CEP<input type="text" name="endereco_cep"></label>
                        <label>Rua<input type="text" name="endereco_rua"></label>
                        <label>Número<input type="number" name="endereco_numero"></label>
                        <label>Bairro<input type="text" name="endereco_bairro"></label>
                        <label>Estado<input type="text" name="endereco_estado"></label>
                        <label>Cidade<input type="text" name="endereco_cidade"></label>
                    </fieldset>
                </fieldset>
                <fieldset id="fotos">
                    <div id="fotos-galeria">
                        <ul>
                            <li><img src="view/images/foto-estabelecimento-2.png" alt="uploading"></li>
                            <li><img src="view/images/foto-estabelecimento-2.png" alt="uploading"></li>
                            <li><img src="view/images/foto-estabelecimento-2.png" alt="uploading"></li>
                            <li><img src="view/images/foto-estabelecimento-2.png" alt="uploading"></li>
                        </ul>
                        <input class="botao" type="button" value="Adicionar">
                    </div>
                </fieldset>
                <input class="botao" type="submit" value="Salvar Alterações">
            </form>
        </main>

        <?php include "view/footer.php" ?>
    </body>
</html>