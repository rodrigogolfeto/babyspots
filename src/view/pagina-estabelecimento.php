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
                    <a href="#" class="botao">ver avaliações</a>
                </div>
            </section><!--final foto e infos-->
            <section class="container" id="avaliacoes">
                <div class=" comentarios">
                    <h2 class="card label">Avaliações Recentes</h2>
                    <section class="card container">
                        <div class="comentario">
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
                            <div class="texto"> <!--avaliação testual do usuario-->
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
                        </div>
                    </section>
                </div>

                <section id="servicos">
                    <h2 class="card label">Serviços</h2>
                    <div class="card servicos">
                        <section class="container card">
                            <!--TODO-->
                        </section>
                    </div>
                </section>

            </section>


        </main>


        <?php include 'footer.php'?>

        <script type="application/javascript">
            var nodes = document.querySelectorAll(".comentario");
            nodes.forEach(function (t) {
                t.addEventListener("click", function (event) {
                    event.preventDefault();
                    if (event.target.classList.contains("ver-detalhes")) {
                        var divDetalhes = this.querySelector(".detalhes");
                        if (divDetalhes.classList.contains("hidden-element")){
                            divDetalhes.classList.remove("hidden-element");
                            event.target.textContent = "esconder detalhes";
                        } else {
                            divDetalhes.classList.add("hidden-element");
                            event.target.textContent = "mostrar detalhes";
                        }
                    }
                })
            });

        </script>
    </body>
</html>