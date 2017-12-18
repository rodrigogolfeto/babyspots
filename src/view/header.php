<header class="cabecalho-principal"> <!-- inicio do cabeçalho de navegação-->
    <nav class="container"> <!-- inicio toolbar-->
        <!--<div class="local">  inicio locacalizacão<select class="localizacoes"><option value="">Campo Grande, MS</option><option value="">São Paulo, SP</option><option value="">Rio de Janeiro, RS</option></select></div><!-- final locacalizacão-->
        <div class="logo-home">
            <a href="?func=home"><img src="view/images/logo-home.png" alt="Logo do site, está escrito: BabySpot's"></a>
        </div>
		<?php if(isset($usuarioLogado)){ ?>
            <div  class="usuario-logado">
                <img src="uploads/<?php echo $usuarioLogado[0]->getUsuImagem(); ?>" alt="<?php echo $usuarioLogado[0]->getNomeSobrenome(); ?>" title="<?php echo $usuarioLogado[0]->getNomeSobrenome(); ?>" />
                <span class="abrir-menu" data-id="ms"><?php echo $usuarioLogado[0]->getNomeSobrenome(); ?></span>
                <div class="acessar-opcoes abrir-menu" data-id="ms"></div><!-- acessar-opcoes -->
            </div><!-- usuario-logado -->
            <div class="menu-suspenso" data-id="ms">
                <div class="menu-suspenso-seta" data-id="ms"></div><!-- menu-suspenso-seta -->
                <ul data-id="ms">
                    <a href="" data-id="ms"><li class="sbt" data-id="ms">Dados Cadastrais</li></a>
                    <a href="" data-id="ms"><li data-id="ms" data-id="ms">Novo Estabelecimento</li></a>
                    <a href="?sys=deslogar" data-id="ms"><li class="ult" data-id="ms">Encerrar Sessão</li></a>
                </ul>
            </div><!-- menu-suspenso -->
		<?php }else{ ?>
            <div class="conta">
                <a class="botao entrar abrir-login-suspenso" href="javascript:;" data-id="ns">entrar</a>
                <a class="botao cadastrar" href="?sys=cadastro-usuario">cadastrar</a>
            </div>
            <div class="login-suspenso" data-id="ns">
                <div class="login-suspenso-seta" data-id="ns"></div><!-- login-suspenso-seta -->
                <form class="formulario-entrar" name="" method="" action="" data-id="ns">
                    <input type="text" name="login-email" id="login-email" placeholder="E-mail" data-id="ns">
                    <input type="password" name="login-senha" id="login-senha" placeholder="Senha" data-id="ns">
                    <div class="divisao" data-id="ns"></div>
                    <div class="acoes" data-id="ns">
                        <a href="javascript:;" class="link-recuperar-senha" data-id="link-recuperar-senha">recuperar senha?</a>
                        <div class="btn entrar" data-id="ns" onmouseup="usuarioLogin();">entrar</div>
                    </div>
                    <div class="login-callback"></div>
                </form>
                <form class="formulario-recuperar" name="" method="" action="" data-id="ns">
                    <input type="text" name="login-email" placeholder="E-mail" data-id="ns">
                    <div class="divisao" data-id="ns"></div>
                    <div class="acoes" data-id="ns">
                        <a href="javascript:;" class="link-voltar" data-id="link-voltar">voltar</a>
                        <div class="btn entrar" data-id="ns">enviar</div>
                    </div>
                </form>
            </div><!-- login-suspenso -->
        <? } ?>
    </nav> <!--fim toolbar-->
</header> <!-- fim do cabeçalho de navegação-->