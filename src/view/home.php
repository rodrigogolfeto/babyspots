<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <link type="text/css" rel="stylesheet" href="css/css.css">
        <link type="text/css" rel="stylesheet" href="css/home.css">
        <link rel="application/x-font-ttf" href="fonts/ubuntu/Ubuntu-B.ttf">
        <link rel="application/x-font-ttf" href="fonts/ubuntu/Ubuntu-R.ttf">
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script type="text/javascript" src="scripts/efeitos.js"></script> 
        <title>BabySpot's | O restaurante ideal para a sua família</title>       
    </head>

    <body>

        <?php include "header.php"; ?>

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
                            <input type="submit" name="buscar botao" id="buscar" value="buscar">
                        </form>
                    </div>
                    <!-- FINAL FORMULÁRIO DE BUSCA -->
                    <p>ou selecione o serviço que deseja procurar</p>
                    <!-- INÍCIO CARROSEL DE SERVIÇOS -->
                    <div class="carrossel">
                        <div class="btn anterior"><a href="javascript:;" id="anterior-servicos">&nbsp;</a></div>
                        <div class="item">
                            <ul id="servicos-busca" class="servicos-busca">
                                <li><a href="javascript:;"><div class="ico bercario"></div><h3>berçário</h3></a></li>
                                <li><a href="javascript:;"><div class="ico trocador"></div><h3>trocador</h3></a></li>
                                <li><a href="javascript:;"><div class="ico playground"></div><h3>playground</h3></a></li>
                                <li><a href="javascript:;"><div class="ico estacionamento"></div><h3>estacionamento próprio</h3></a></li>
                                <li><a href="javascript:;"><div class="ico papinha"></div><h3>papinhas<br>04 a 12 meses</h3></a></li>
                                <li><a href="javascript:;"><div class="ico bercario"></div><h3>berçário</h3></a></li>
                            </ul>
                        </div>
                        <div class="btn proximo"><a href="javascript:;" id="proximo-servicos">&nbsp;</a></div>
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
                            <?php $idItem = 1; ?>
                            <div class="carrossel-servico">
                                <div class="btn anterior"><a href="javascript:;">&nbsp;</a></div>
                                <div class="item-carrocel">
                                    <ul class="servicos-itens">
                                        <li><a href="javascript:;"><div class="ico bercario"></div><h3>berçário</h3></a></li>
                                        <li><a href="javascript:;"><div class="ico trocador"></div><h3>trocador</h3></a></li>
                                        <li><a href="javascript:;"><div class="ico playground"></div><h3>playground</h3></a></li>
                                        <li><a href="javascript:;"><div class="ico estacionamento"></div><h3>estacion.</h3></a></li>
                                        <li><a href="javascript:;"><div class="ico papinha"></div><h3>papinhas</h3></a></li>
                                    </ul>
                                </div>
                                <div class="btn proximo"><a href="javascript:;">&nbsp;</a></div>
                            </div><!-- carrossel-servico -->

                            <div class="avaliacao">
                                <span>70 avaliações</span>
                                <p class="avali qt-strelas-5"></p> <!-- TODO COLOCAR A IMAGEM DA ESTRELA EQUIVALENTE -->
                            </div><!-- avaliacao -->
                            <a class="botao detalhes" href="#">detalhes</a>
                        </div>
                    </div>
                    <div class="item card">
                        <img class="foto" src="images/foto-estabelecimento-2.png" alt="foto de um estabelecimento qualquer">
                        <div class="infos">
                            <p>Campo Grande-MS</p>
                            <p>Chalé lanches</p>
                            <p>Av. dos Cafezais, 1142 - Jardim Paulo Coelho Machado</p>
                            
                            <?php $idItem++; ?>
                            <div class="carrossel-servico">
                                <div class="btn anterior"><a href="javascript:;">&nbsp;</a></div>
                                <div class="item-carrocel">
                                    <ul class="servicos-itens">
                                        <li><a href="javascript:;"><div class="ico bercario"></div><h3>berçário</h3></a></li>
                                        <li><a href="javascript:;"><div class="ico trocador"></div><h3>trocador</h3></a></li>
                                        <li><a href="javascript:;"><div class="ico playground"></div><h3>playground</h3></a></li>
                                        <li><a href="javascript:;"><div class="ico estacionamento"></div><h3>estacion.</h3></a></li>
                                        <li><a href="javascript:;"><div class="ico papinha"></div><h3>papinhas</h3></a></li>
                                    </ul>
                                </div>
                                <div class="btn proximo"><a href="javascript:;">&nbsp;</a></div>
                            </div><!-- carrossel-servico -->

                            <div class="avaliacao">
                                <span>70 avaliações</span>
                                <p class="avali qt-strelas-5"></p> <!-- TODO COLOCAR A IMAGEM DA ESTRELA EQUIVALENTE -->
                            </div>
                            <a class="botao detalhes" href="#">detalhes</a>
                        </div>
                    </div>
                    <div class="item card">
                        <img class="foto" src="images/foto-estabelecimento-3.png" alt="foto de um estabelecimento qualquer">
                        <div class="infos">
                            <p>Campo Grande-MS</p>
                            <p>Chalé lanches</p>
                            <p>Av. dos Cafezais, 1142 - Jardim Paulo Coelho Machado</p>
                            
                            <?php $idItem++; ?>
                            <div class="carrossel-servico">
                                <div class="btn anterior"><a href="javascript:;">&nbsp;</a></div>
                                <div class="item-carrocel">
                                    <ul class="servicos-itens">
                                        <li><a href="javascript:;"><div class="ico bercario"></div><h3>berçário</h3></a></li>
                                        <li><a href="javascript:;"><div class="ico trocador"></div><h3>trocador</h3></a></li>
                                        <li><a href="javascript:;"><div class="ico playground"></div><h3>playground</h3></a></li>
                                        <li><a href="javascript:;"><div class="ico estacionamento"></div><h3>estacion.</h3></a></li>
                                        <li><a href="javascript:;"><div class="ico papinha"></div><h3>papinhas</h3></a></li>
                                    </ul>
                                </div>
                                <div class="btn proximo"><a href="javascript:;">&nbsp;</a></div>
                            </div><!-- carrossel-servico -->

                            <div class="avaliacao">
                                <span>70 avaliações</span>
                                <p class="avali qt-strelas-5"></p> <!-- TODO COLOCAR A IMAGEM DA ESTRELA EQUIVALENTE -->
                            </div>
                            <a class="botao detalhes" href="#">detalhes</a>
                        </div>
                    </div>
                    <div class="item card">
                        <img class="foto" src="images/foto-estabelecimento-4.png" alt="foto de um estabelecimento qualquer">
                        <div class="infos">
                            <p>Campo Grande-MS</p>
                            <p>Chalé lanches</p>
                            <p>Av. dos Cafezais, 1142 - Jardim Paulo Coelho Machado</p>
                            
                            <?php $idItem++; ?>
                            <div class="carrossel-servico">
                                <div class="btn anterior"><a href="javascript:;">&nbsp;</a></div>
                                <div class="item-carrocel">
                                    <ul class="servicos-itens">
                                        <li><a href="javascript:;"><div class="ico bercario"></div><h3>berçário</h3></a></li>
                                        <li><a href="javascript:;"><div class="ico trocador"></div><h3>trocador</h3></a></li>
                                        <li><a href="javascript:;"><div class="ico playground"></div><h3>playground</h3></a></li>
                                        <li><a href="javascript:;"><div class="ico estacionamento"></div><h3>estacion.</h3></a></li>
                                        <li><a href="javascript:;"><div class="ico papinha"></div><h3>papinhas</h3></a></li>
                                    </ul>
                                </div>
                                <div class="btn proximo"><a href="javascript:;">&nbsp;</a></div>
                            </div><!-- carrossel-servico -->

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
        </main>
        <!-- FINAL CONTEÚDO -->

        <?php include "footer.php"; ?>

    </body>
</html>