<!DOCTYPE html>
<html>
    <head>
        <link type="text/css" rel="stylesheet" href="css/css.css" >
        <link type="text/css" rel="stylesheet" href="css/formulario_estabelecimento.css">
    </head>
    <body>

        <?php include 'header.php' ?>


            <div class="navegacao">
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="home.php">Cadastrar Estabelecimento</a></li>
                </ul>
            </div>

        <main class="container card">
            <form >
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
                            <li><img src="images/foto-estabelecimento-2.png" alt="uploading"></li>
                            <li><img src="images/foto-estabelecimento-2.png" alt="uploading"></li>
                            <li><img src="images/foto-estabelecimento-2.png" alt="uploading"></li>
                            <li><img src="images/foto-estabelecimento-2.png" alt="uploading"></li>
                        </ul>
                        <input class="botao" type="button" value="Adicionar">
                    </div>
                </fieldset>
                <input class="botao" type="submit" value="Salvar Alterações">
            </form>
        </main>


        <?php include "footer.php" ?>
    </body>
</html>