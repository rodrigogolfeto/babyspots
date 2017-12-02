<!DOCTYPE html>
<html>
    <head>
        <title><!--TODO puxar o nome do estabelecimento com php--></title>
        <meta charset="UTF-8">
        <link type="text/css" rel="stylesheet" href="css/css.css">
        <link type="text/css" rel="stylesheet" href="css/pagina-estabelecimento.css">
        <link rel="application/x-font-ttf" href="fonts/ubuntu/Ubuntu-B.ttf">
        <link rel="application/x-font-ttf" href="fonts/ubuntu/Ubuntu-R.ttf">
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="scripts/efeitos.js"></script>

    </head>

    <body>
        <?php include 'header.php'?>

        <div class="navegacao">
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="lista.php">Estabelecimentos</a></li>
                <li><a href="#"><!--TODO puxar o nome do estabelecimento com php--></a></li>
            </ul>
        </div>

        <main class="container">
            <section><!--inicio foto e infos-->
                <figure class="card">
                    <a class="btn-contribuir">contribuir</a>
                    <img src="../view/images/foto-estab-pg.png">
                    <figcaption>
                        <span><!--TODO puxar o nome do usuario que fez o uploade da foto--></span>
                        <span><!--TODO puxar a data de uploade da foto--></span>
                    </figcaption>
                </figure>
                <div class="info-estab">
                    <div class="infos card">
                        <div>
                            <p>Campo Grande-MS</p>
                            <p>Chalé lanches</p>
                            <p>Av. dos Cafezais, 1142 - Jardim Paulo Coelho Machado</p>
                        </div>
                        <div class="avaliacao">
                            <span>70 avaliações</span>
                            <p class="avali qt-strelas-5"></p> <!-- TODO COLOCAR A IMAGEM DA ESTRELA EQUIVALENTE -->
                        </div>
                    </div>
                    <a href="#avaliacoes" class="botao" id="ver-avaliacoes">ver avaliações</a>
                </div>
            </section><!--final foto e infos-->
            <section class="container" id="avaliacoes">
                <div class="comentarios">
                    <h2 class="card label">Avaliações Recentes</h2>
                    <section class="card container">
                        <div class="comentario"> <!-- inicio comentario-->
                            <div class="informacoes-commentario"> <!--inicio informações do usuario que comentou-->
                                <figure class="foto-usuario-comentario"> <!-- foto de perfim do usuario-->
                                    <img src="images/foto-perfil-usuario-exp.png">
                                    <figcaption>
                                        <p>Nome Do Usuario</p>
                                        <p>Data da avaliação</p>
                                    </figcaption>
                                </figure> <!-- final foto de perfil do usuario -->
                                <div class="nota">
                                    <p>Nota: <span class="avali qt-strelas-5"></span></p>
                                    <a class="ver-detalhes" src="#">esconder detalhes</a>
                                </div>
                            </div> <!--final informações do usuario que comentou-->
                            <div class="texto"> <!--avaliação textual do usuario-->
                                <p>O filme é RUIM! A primeira constatação é a de que o Tom Cruise está velho demais para fazer esse tipo de filme. Ele não combinava com o personagem. O filme tenta repetir a fórmula do filme do Brendan Frasier, sem sucesso. O humor, quando existiu, foi insignificante. A história é um absurdo difícil de engolir até em filmes de ficção: faltou colocar alienígenas e transformers na história. Lamento pelo papel ridículo que Tom Cruise e Russel Crowe tiveram nesse filme. Este último, NÃO SEI COMO ACEITOU ESSE PAPEL. Deve ter sido pelo dinheiro. Vc passa o tempo todo esperando "o filme decolar". Uma história sem pé nem cabeça em que se tem que absorver as resoluções absurdas e sem sentido das situações absurdas e sem sentido criadas no filme. Vergonhoso.</p>
                            </div>
                            <div class="detalhes">
                                <p>detalhes</p>
                                <ul>
                                    <li><span class="avali qt-strelas-1"></span>Serviço</li>
                                    <li><span class="avali qt-strelas-1"></span>Serviço</li>
                                    <li><span class="avali qt-strelas-1"></span>Serviço</li>
                                    <li><span class="avali qt-strelas-1"></span>Serviço</li>
                                    <li><span class="avali qt-strelas-1"></span>Serviço</li>
                                    <li><span class="avali qt-strelas-1"></span>Serviço</li>
                                </ul>
                            </div>
                        </div> <!-- final comentario-->

                        <a class="ver-mais-commentarios">ver mais</a>
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
                            <h2>Nome Estabelecimento</h2>
                            <div class="comment">
                                <p>Informe sua crítica aqui</p>
                                <textarea name="comentario"></textarea>
                                <p><span class="max-char">Mínimo de 100 caracteres</span><span class="digit"><span class="qt-chars">0</span> caractere.</span></p>
                            </div>
                            <div class="container">
                                <div class="detalhes">
                                    <p>detalhes</p>
                                    <ul>
                                        <li><span class="avali qt-strelas-1">
                                                <input type="hidden" name="Servico" value="">
                                            </span>Serviço</li>
                                        <li><span class="avali qt-strelas-1">
                                                <input type="hidden" name="Servico" value="">
                                            </span>Serviço</li>
                                        <li><span class="avali qt-strelas-1">
                                                <input type="hidden" name="Servico" value="">
                                            </span>Serviço</li>
                                        <li><span class="avali qt-strelas-1">
                                                <input type="hidden" name="Servico" value="">
                                            </span>Serviço</li>
                                        <li><span class="avali qt-strelas-1">
                                                <input type="hidden" name="Servico" value="">
                                            </span>Serviço</li>
                                        <li><span class="avali qt-strelas-1">
                                                <input type="hidden" name="Servico" value="">
                                            </span>Serviço</li>
                                    </ul>
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
    <script src="scripts/script-pagina-estabelecimento.js"></script>
</html>