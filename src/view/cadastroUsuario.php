<!DOCTYPE html>
<html>
    <head>
        <link type="text/css" rel="stylesheet" href="view/css/css.css" >
        <link type="text/css" rel="stylesheet" href="view/css/cadastroDeUsaurio.css">
        <script src="view/js/jquery-3.2.1.min.js" type="application/javascript"></script>
    </head>
    <body>

        <?php include 'view/header.php' ?>

        <div class="navegacao">
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="home.php">Cadastrar Estabelecimento</a></li>
            </ul>
        </div>

        <main class="container card">
            <form>
                <h3>Cadastrar Estabelecimento</h3>
                <fieldset id="dados">
                    <label>Nome<input type="text" name="nome" required></label>
                    <label>E-mail
                        <input id="email" type="text" name="email" required>
                    </label>
                    <label>Repetir e-mail
                        <input id="email-r" type="text" name="email-r" required>
                    </label>
                    <label>Senha<span id="ss"></span>
                        <input id="senha" type="password" name="senha" required>
                    </label>
                    <label>Repetir senha<span id="ss-r"></span>
                        <input id="senha-r" type="password" name="senha-r" required>
                    </label>

                </fieldset>
                <div>
                    <fieldset id="foto">
                        <div id="foto-perfil">
                            <img src="view/images/icone-user.png" alt=" ">
                            <input class="botao" type="button" value="selecionar">
                        </div>
                    </fieldset>
                    <input class="botao" type="submit" value="criar conta">
                </div>
            </form>
        </main>

        <?php include "view/footer.php" ?>


    </body>
</html>