<?php
/*
echo '<pre>';
print_r($item[0]);
echo '</pre>';
*/
?>
<!DOCTYPE html>
<html>
    <head>
        <title>BabySpot's | <?php echo $item[0]->getEstNome() ?></title>
        <meta charset="UTF-8">
        <link type="text/css" rel="stylesheet" href="view/css/css.css">
        <link type="text/css" rel="stylesheet" href="view/css/pagina-estabelecimento.css">
        <link rel="application/x-font-ttf" href="view/fonts/ubuntu/Ubuntu-B.ttf">
        <link rel="application/x-font-ttf" href="view/fonts/ubuntu/Ubuntu-R.ttf">

        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript">if (typeof jQuery == 'undefined') { document.write(unescape("%3Cscript src='view/scripts/jquery-min.js' type='text/javascript'%3E%3C/script%3E"));}</script>
        <!--[if lt IE 10]><script type="text/javascript" src="Scripts/no-ie9.js"></script><![endif]-->
        <script type="text/javascript" src="view/scripts/efeitos.js?0111"></script>
    </head>

    <body>
        <?php include 'header.php'?>

        <div class="navegacao">
            <ul>
                <li><a href="?">Home</a></li>
                <li><a href="?func=lista&busca=">Estabelecimentos</a></li>
                <li><a href="#"><?php echo $item[0]->getEstNome(); ?></a></li>
            </ul>
        </div>

        <main class="container">
            <section><!--inicio foto e infos-->
                <figure class="card">
                    <a class="btn-contribuir">contribuir</a>
                    <img src="view/images/foto-estab-pg.png">
                    <figcaption>
<!--                        <span>--><?php //echo $item[0]->getUsuario()->getNomeCompleto(); ?><!--</span>-->
                        <span><!--TODO puxar a data de uploade da foto--></span>
                    </figcaption>
                </figure>
                <div class="info-estab">
                    <div class="infos card">
                        <div>
                            <p><?php echo $item[0]->getEstCidade()." - ".$item[0]->getEstEstado(); ?></p>
                            <p><?php echo $item[0]->getEstNome(); ?></p>
                            <p><?php echo $item[0]->getEstRua().", ".$item[0]->getEstNumero()." - ".$item[0]->getEstBairro(); ?></p>
                        </div>
                        <div class="avaliacao">
                            <span><?=$item[0]->getQuantidadeAvaliacao();?> avaliações</span>
                            <p class="avali qt-strelas-<?=(int)$item[0]->getQuantidadeAvaliacao();?>"></p> <!-- TODO COLOCAR A IMAGEM DA ESTRELA EQUIVALENTE -->
                        </div><!-- avaliacao -->
                    </div>
                    <a href="#avaliacoes" class="botao" id="ver-avaliacoes">ver avaliações</a>
                </div>
            </section><!--final foto e infos-->
            <section class="container" id="avaliacoes">
                <div class="comentarios">
                    <h2 class="card label">Avaliações Recentes</h2>
                    <section class="card container">
						<?php foreach ($item[0]->getAvaliacoes() as $avaliacao){ ?>
                        <div class="comentario"><!-- inicio comentario-->
                            <div class="informacoes-commentario"> <!--inicio informações do usuario que comentou-->
                                <figure class="foto-usuario-comentario"> <!-- foto de perfim do usuario-->
                                    <img src="uploads/<?php echo $avaliacao->getUsuario()->getUsuImagem(); ?>">
                                    <figcaption>
                                        <p><?php echo $avaliacao->getUsuario()->getUsuNome(); ?></p>
                                        <p><?php echo $avaliacao->getAvaCadastro(); ?></p>
                                    </figcaption>
                                </figure> <!-- final foto de perfil do usuario -->
                                <div class="nota">
                                    <p class="avaliacao-estrela">Nota: <span class="avali qt-strelas-<?php echo $avaliacao->getNota(); ?>"></span></p>
									<?php if(count($avaliacao->getServicos())>0){ ?><a class="ver-detalhes" src="#">mostrar detalhes</a><?php } ?>
                                </div>
                            </div> <!--final informações do usuario que comentou-->
                            <div class="texto"> <!--avaliação textual do usuario-->
                                <p><?php echo $avaliacao->getAvaDescricao(); ?></p>
                            </div>
                            <?php if(count($avaliacao->getServicos())>0){ ?>
                            <div class="detalhes" style="display:none">
                                <p>detalhes</p>
                                <ul>
                                    <?php foreach ($avaliacao->getServicos() as $servico) { ?>
                                        <li><span class="avali qt-strelas-<?=(int)$servico->getNota();?>"></span><?php echo $servico->getSerNome(); ?></li>
                                    <?php } ?>
                                </ul>
                            </div>
                            <?php } ?>
                        </div> <!-- final comentario-->
						<?php }
                        // TODO : CHAMAR ESSA PARTE CASO TENHA UMA QUANTIDADE GRANDE DE COMENTÁRIOS
                        // <a class="ver-mais-commentarios">ver mais</a>
                        ?>
                    </section>
                    <a class="btn-avaliar botao">avaliar estabelecimento</a>
                </div>

                <section id="servicos"> <!-- inicio servicos-->
                    <h2 class="card label">Serviços</h2>
                    <div class="card servicos">
                        <!-- TODO. Carrossel na pagina de um estabelecimento-->
                    </div>
                </section> <!-- final serviços -->

            </section>
        </main>

        <section class="popoup-critica"> <!--inicio popup com o formulario e avaliação e a msg de sucesso-->
            <div class="card">
                <span></span>
                <div class="conteudo">
                    <a class="btn-close"></a>
                    <form> <!--inicio formulario de avaliação-->
                        <h2><?php echo $item[0]->getEstNome(); ?></h2>
                        <div class="comment">
                            <p>Informe sua crítica aqui</p>
                            <textarea name="comentario"></textarea>
                            <p><span class="max-char">Mínimo de 100 caracteres</span><span class="digit"><span class="qt-chars">0</span> caractere.</span></p>
                        </div>
                        <div class="container">
                            <div class="detalhes">
                                <p>serviço<?php if(count($item[0]->getServicos())>1){ ?>s<?php } ?></p>
                                <?php
                                if(count($item[0]->getServicos())>8){
                                    ?><ul class="coluna-1"><?php
                                    for($i=0;$i<count($item[0]->getServicos());$i++){
                                        if($i==8){ ?></ul><ul class="coluna-2"><?php }
                                        ?><li><span class="avali qt-strelas-1"><input type="hidden" name="Servico" value=""></span><i title="<?php echo $item[0]->getServicos()[$i]->getSerNome(); ?>"><?php echo $item[0]->getServicos()[$i]->getSerNomeReduzido(); ?></i></li><?php
                                    }
                                    ?></ul><?php
                                }else{
                                    ?><ul>
										<?php foreach($item[0]->getServicos() as $servico){ ?>
                                            <li><span class="avali qt-strelas-1"><input type="hidden" name="Servico" value=""></span><?php echo $servico->getSerNome(); ?></li>
										<?php } ?>
                                    </ul><?php
                                }
                                ?>
                            </div>
                            <button class="botao" src="#">Publicar sua Crítica</button>
                        </div>

                    </form> <!--final formulario de avaliação-->
                    <p>
                        Gostaríamos de lembrar que quaisquer observações violentas, caluniosas ou discriminatórias não serão toleradas. Todas as críticas que não estiverem de acordo com nossas <a href="">condições de uso</a> serão removidas.
                        <br>Agradecemos pela compreensão<br><br>
                        Ao clicar no botão "Publicar sua crítica", você aceita nossos <a href="">termos de uso</a>.
                    </p>
                </div>
            </div>
            <div class="msg-status-avaliacao">
                <div class="card conteudo">
                    <a class="btn-close"></a>
                    <div><p>PARABÉNS</p></div>
                    <p>As alterações foram salvas com sucesso!</p>
                </div>
            </div>
        </section> <!--final popup com o formulario e avaliação e a msg de sucesso-->
        <?php include 'footer.php'?>
    </body>

</html>