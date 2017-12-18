<!DOCTYPE html>
<html>
    <head>
        <link type="text/css" rel="stylesheet" href="view/css/css.css" >
        <link type="text/css" rel="stylesheet" href="view/css/css_form_user.css">
        <script src="view/scripts/jquery-3.2.1.min.js" type="application/javascript"></script>
    </head>
    <body>

        <?php include 'view/header.php' ?>

        <div class="navegacao">
            <ul>
                <li><a href="?">Home</a></li>
                <li><a href="#">Cadastrao de Usuário</a></li>
            </ul>
        </div>

        <main class="container card">
            <form method="post" action="">
                <h3>Cadastro de Usuário</h3>
                <fieldset id="dados">
                    <input type= "hidden" name="func" value="cadastrar-usuario" />
                    <label>Nome<input type="text" name="nome" required></label>
                    <label>E-mail
                        <input id="email" type="email" name="email" required>
                    </label>
                    <label>Repetir e-mail
                        <input id="email-r" type="email" name="email-r" required>
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