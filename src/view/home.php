<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <link type="text/css" rel="stylesheet" href="css/reset.css">
        <link type="text/css"rel="stylesheet" href="css/base.css">
        <link type="text/css" rel="stylesheet" href="css/home.css">
        <link rel="application/x-font-ttf" href="fonts/ubuntu/Ubuntu-B.ttf">
        <link rel="application/x-font-ttf" href="fonts/ubuntu/Ubuntu-R.ttf">
        <title>BabySpot's | O restaurante ideal para a sua família</title>
        <!-- APENAS O CSS PARA A SESSÃO DE TOP CIDADES-->
        <style type="text/css">

            .top-cidades .cidade img{
                border-radius: 5px;
            }

            .top-cidades .cidade{
                display: inline-block;
                background-color: white;
                padding: 10px;
            }

            .top-cidades .cidade p:nth-child(2){
                font-size: 12px;
                color: #5f5f5f;
                margin-top: 18px;
                box-sizing: border-box;
            }

            .top-cidades .cidade p:nth-child(3){
                font-size: 14px;
                color: #1e82f2;
                margin-bottom: 17px;
                box-sizing: border-box;
            }

        </style>
    </head>

    <body>

        <?php include "header.php"?>

        <!-- INÍCIO CONTEÚDO -->
        <main class="container">
            <!-- INÍCIO BUSCA -->
            <section class="buscar">
                <div class="container">
                    <h2>Descubra</h2>
                    <p>O restaurante ideal para a sua família</p>
                    <!-- INÍCIO FORMULÁRIO DE BUSCA -->
                    <div class="busca">
                        <form class="campo-busca">
                            <input type="search" name="busca botao" id="busca" placeholder="Buscar Estabelecimento">
                            <input type="submit" name="buscar botao" id="buscar" value="Buscar">
                        </form>
                    </div>
                    <!-- FINAL FORMULÁRIO DE BUSCA -->
                    <p>ou selecione o serviço que deseja procurar</p>
                    <!-- INÍCIO CARROSEL DE SERVIÇOS -->
                    <div class="carrossel">
                        <!--TODO-->
                    </div>
                    <!-- FINAL CARROSEL DE SERVIÇOS -->
                </div>
            </section>
            <!-- FINAL BUSCA -->
            <!-- INÍCIO TOP ESTABELECIMENTOS -->
            <section class="top-estabelecimentos">
                <h2 class="card label">Top Estabelecimentos</h2>
                <div class="container">
                    <div class="item card">
                        <img class="foto" src="images/foto-estabelecimento-1.png" alt="foto de um estabelecimento qualquer">
                        <div class="infos">
                            <p>Campo Grande-MS</p>
                            <p>Chalé lanches</p>
                            <p>Av. dos Cafezais, 1142 - Jardim Paulo Coelho Machado</p>
                            <div class="carrossel-servico">
                                <!-- TODO -->
                            </div>
                            <div class="avaliacao">
                                <span>70 avaliações</span>
                                <p class="avali qt-strelas-5"></p> <!-- TODO COLOCAR A IMAGEM DA ESTRELA EQUIVALENTE -->
                            </div>
                            <a class="botao detalhes" href="#">detalhes</a>
                        </div>
                    </div>
                    <div class="item card">
                        <img class="foto" src="images/foto-estabelecimento-1.png" alt="foto de um estabelecimento qualquer">
                        <div class="infos">
                            <p>Campo Grande-MS</p>
                            <p>Chalé lanches</p>
                            <p>Av. dos Cafezais, 1142 - Jardim Paulo Coelho Machado</p>
                            <div class="carrossel-servico">
                                <!-- TODO -->
                            </div>
                            <div class="avaliacao">
                                <span>70 avaliações</span>
                                <p class="avali qt-strelas-5"></p> <!-- TODO COLOCAR A IMAGEM DA ESTRELA EQUIVALENTE -->
                            </div>
                            <a class="botao detalhes" href="#">detalhes</a>
                        </div>
                    </div>
                    <div class="item card">
                        <img class="foto" src="images/foto-estabelecimento-1.png" alt="foto de um estabelecimento qualquer">
                        <div class="infos">
                            <p>Campo Grande-MS</p>
                            <p>Chalé lanches</p>
                            <p>Av. dos Cafezais, 1142 - Jardim Paulo Coelho Machado</p>
                            <div class="carrossel-servico">
                                <!-- TODO -->
                            </div>
                            <div class="avaliacao">
                                <span>70 avaliações</span>
                                <p class="avali qt-strelas-5"></p> <!-- TODO COLOCAR A IMAGEM DA ESTRELA EQUIVALENTE -->
                            </div>
                            <a class="botao detalhes" href="#">detalhes</a>
                        </div>
                    </div>
                    <div class="item card">
                        <img class="foto" src="images/foto-estabelecimento-1.png" alt="foto de um estabelecimento qualquer">
                        <div class="infos">
                            <p>Campo Grande-MS</p>
                            <p>Chalé lanches</p>
                            <p>Av. dos Cafezais, 1142 - Jardim Paulo Coelho Machado</p>
                            <div class="carrossel-servico">
                                <!-- TODO -->
                            </div>
                            <div class="avaliacao">
                                <span>70 avaliações</span>
                                <p class="avali qt-strelas-5"></p> <!-- TODO COLOCAR A IMAGEM DA ESTRELA EQUIVALENTE -->
                            </div>
                            <a class="botao detalhes" href="#">detalhes</a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- FINAL TOP ESTABELECIMENTOS -->
            <!-- INÍCIO TOP CIDADES -->
            <section class="top-cidades">
                <h2 class="card label">Top Cidades</h2>
                <div class="container">
                    <div class="cidade card">
                        <img src="images/foto-cidade.png" alt="nome da cidade">
                        <p>Mato Grosso do Sul</p>
                        <p>Campo Grande</p>
                    </div>
                    <div class="card cidade">
                        <img src="images/foto-cidade.png" alt="nome da cidade">
                        <p>Mato Grosso do Sul</p>
                        <p>Campo Grande</p>
                    </div>
                    <div class="card cidade">
                        <img src="images/foto-cidade.png" alt="nome da cidade">
                        <p>Mato Grosso do Sul</p>
                        <p>Campo Grande</p>
                    </div>
                    <div class="card cidade">
                        <img src="images/foto-cidade.png" alt="nome da cidade">
                        <p>Mato Grosso do Sul</p>
                        <p>Campo Grande</p>
                    </div>
                </div>
            </section>
            <!-- FINAL TOP CIDADES -->
        </main>
        <!-- FINAL CONTEÚDO -->

        <?php include "footer.php"?>

    </body>
</html>