<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <link type="text/css" rel="stylesheet" href="view/css/css.css">
        <link type="text/css" rel="stylesheet" href="view/css/home.css">
        <link type="text/css" rel="stylesheet" href="view/css/lista.css">
        <link rel="application/x-font-ttf" href="view/fonts/ubuntu/Ubuntu-B.ttf">
        <link rel="application/x-font-ttf" href="view/fonts/ubuntu/Ubuntu-R.ttf">
        <title>Listagem - BabySpot's</title>
    </head>
    <body>
        <?php include "header.php"; ?>

        <div class="buscar"> <!-- inicio busca -->
            <div class="container">
                <div class="busca"> <!-- inicio formulario de busca -->
                    <form class="campo-busca">
                        <input type="search" name="busca botao" id="busca" placeholder="Buscar Estabelecimento">
                        <input type="submit" name="buscar botao" id="buscar" value="Buscar">
                    </form>
                </div> <!-- final formulario de busca -->
            </div>
        </div> <!-- final busca -->

        <div class="navegacao">
            <ul>
                <li><a href="?">Home</a></li>
                <li><a href="home.php">Estabelecimentos</a></li>
                <li><a href="home.php">Busca</a></li>
            </ul>
        </div>

        <main class="container"> <!-- inicio conteudo -->

            <aside class="filtro"> <!-- incio do filtro -->
                <form class="container" method="GET">
                    <h3>Filtro</h3>
                    <fieldset>
                        <fieldset class="avaliacao">
                            <legend>Avaliação</legend>
                            <label><input type="checkbox" value="5 estrelas"><span class="avali qt-strelas-5"></span></label>
                            <label><input type="checkbox" value="4 estrelas"><span class="avali qt-strelas-4"></span></label>
                            <label><input type="checkbox" value="3 estrelas"><span class="avali qt-strelas-3"></span></label>
                            <label><input type="checkbox" value="2 estrelas"><span class="avali qt-strelas-2"></span></label>
                            <label><input type="checkbox" value="1 estrelas"><span class="avali qt-strelas-1"></span></label>
                        </fieldset>
                        <fieldset class="servicos">
                            <legend>Serviços</legend>
                            <label><input type="checkbox" value="<!-- TODO -->">Música Ambiente</label>
                            <label><input type="checkbox" value="<!-- TODO -->">Música Ao Vivo</label>
                            <label><input type="checkbox" value="<!-- TODO -->">Comida Vegana</label>
                            <label><input type="checkbox" value="<!-- TODO -->">Comida p/ Lacto Intolerantes</label>
                            <label><input type="checkbox" value="<!-- TODO -->">Comida p/ Pessoas Celíacas</label>
                            <label><input type="checkbox" value="<!-- TODO -->">Banheiro p/ deficientes</label>
                            <label><input type="checkbox" value="<!-- TODO -->">Banheiro familiar</label>
                            <label><input type="checkbox" value="<!-- TODO -->">Opção p/ reserva</label>
                            <label><input type="checkbox" value="<!-- TODO -->">Faixa de Preço</label>
                            <label><input type="checkbox" value="<!-- TODO -->">Estacionamento Próprio</label>
                            <label><input type="checkbox" value="<!-- TODO -->">Berçário</label>
                            <label><input type="checkbox" value="<!-- TODO -->">Cadeirão</label>
                        </fieldset>
                    </fieldset>

                    <input type="submit" value="Filtrar" class="botao">
                </form>
            </aside> <!-- final do filtro -->

            <div class="lista"> <!-- inicio top estabelecimentos -->
                <div class="container">
                    <div class="item card">
                        <img class="foto" src="view/images/foto-estabelecimento-1.png" alt="foto de um estabelecimento qualquer">
                        <div class="infos">
                            <p>Campo Grande-MS</p>
                            <p>Chalé lanches</p>
                            <p>Av. dos Cafezais, 1142 - Jardim Paulo Coelho Machado</p>
                            <div class="carrossel-servico">
                                <!-- TODO -->
                            </div>
                            <div class="avaliacao">
                                <span>70 avaliações</span>
                                <p class="avali qt-strelas-5"></p> <!--Colocar a imagem da estrela equivalente-->
                            </div>
                            <ul class="utimas-avaliacoes">
                                <li><img src="view/images/foto-perfil-usuario-exp.png"></li>
                                <li><img src="view/images/foto-perfil-usuario-exp.png"></li>
                                <li><img src="view/images/foto-perfil-usuario-exp.png"></li>
                                <li><img src="view/images/foto-perfil-usuario-exp.png"></li>
                                <li><img src="view/images/foto-perfil-usuario-exp.png"></li>
                            </ul>
                            <a class="botao detalhes" href="#">detalhes</a>
                        </div>
                    </div>
                    <a href="#" class="botao ">Ver mais</a>
                    <div class="card" id="msg-erro">
                        <div>
                            <span>Ohh :((</span>
                            <span>Nenhuma informação foi encontrada.</span>
                            <span>Tente novamente!</span>
                        </div>
                    </div>
                </div>

            </div> <!-- final top estabelecimentos -->

        </main> <!-- final conteudo -->

        <?php include "footer.php"; ?>

    </body>
</html>