<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <link type="text/css" rel="stylesheet" href="view/css/css.css">
        <link type="text/css" rel="stylesheet" href="view/css/home.css">
        <link rel="application/x-font-ttf" href="view/fonts/ubuntu/Ubuntu-B.ttf">
        <link rel="application/x-font-ttf" href="view/fonts/ubuntu/Ubuntu-R.ttf">
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script type="text/javascript" src="view/scripts/efeitos.js"></script>
        <title>BabySpot's | O restaurante ideal para a sua família</title>       
    </head>

    <body>
        <?php include "view/header.php"; ?>

        <!-- INÍCIO CONTEÚDO -->
        <main class="container">
            <!-- INÍCIO BUSCA -->
            <section class="buscar">
                <div class="container">
                    <h2>Descubra</h2>
                    <p>O restaurante ideal para a sua família</p>
                    <!-- INÍCIO FORMULÁRIO DE BUSCA -->
                    <div class="busca">
                        <form class="campo-busca" method="get" action="">
                            <input type= "hidden" name="func" value="lista" />
                            <input type="hidden" name="servico" value=""/>
                            <input type="search" name="busca" id="busca" placeholder="Buscar Estabelecimento" required>
                            <input type="submit" name="btn-buscar" id="btn-buscar" value="buscar">
                        </form>
                    </div>
                    <!-- FINAL FORMULÁRIO DE BUSCA -->
                    <p>ou selecione o serviço que deseja procurar</p>
                    <!-- INÍCIO CARROSEL DE SERVIÇOS -->
                    <div class="carrossel">
                        <div class="btn anterior"><a id="anterior-servicos">&nbsp;</a></div>
                        <div class="item">
                            <ul id="servicos-busca" class="servicos-busca">
								<?php foreach($servicos as $item){ ?>
                                    <li><a href="?func=<?php echo $item->getClasse(); ?>"><div class="ico <?php echo $item->getClasse(); ?>"></div><h3><?php echo $item->getNome(); ?></h3></a></li>
                                <?php } ?>
                            </ul>
                        </div>
                        <div class="btn proximo"><a id="proximo-servicos">&nbsp;</a></div>
                    </div>
                    <!-- FINAL CARROSEL DE SERVIÇOS -->
                </div>
            </section>
            <!-- FINAL BUSCA -->

            <!-- INÍCIO TOP ESTABELECIMENTOS -->
            <section class="top-estabelecimentos">
                <h2 class="card label">Top Estabelecimentos</h2>
                <div class="container">
                    <?php foreach ($result as $item) { ?>
                    <div class="item card">
                        <img class="foto" src="view/images/<?php echo $item->getUrlImagem(); ?>" alt="Foto do Estabelecimento">
                        <div class="infos">
                            <p><?php echo $item->getCidade()." - ".$item->getEstado(); ?></p>
                            <p><?php echo $item->getNomeEstabelecimento(); ?></p>
                            <p><?php echo $item->getRua().", ".$item->getNumero()." - ".$item->getBairro(); ?></p>
                            <div class="carrossel-servico">
                                <div class="btn anterior"><a>&nbsp;</a></div>
                                <div class="item-carrocel">
                                    <ul class="servicos-itens">
                                        <li><a><div class="ico bercario"></div><h3>berçário</h3></a></li>
                                        <li><a><div class="ico trocador"></div><h3>trocador</h3></a></li>
                                        <li><a><div class="ico playground"></div><h3>playground</h3></a></li>
                                        <li><a><div class="ico estacionamento"></div><h3>estacion.</h3></a></li>
                                        <li><a><div class="ico papinha"></div><h3>papinhas</h3></a></li>
                                    </ul>
                                </div>
                                <div class="btn proximo"><a>&nbsp;</a></div>
                            </div><!-- carrossel-servico -->

                            <div class="avaliacao">
                                <span>70 avaliações</span>
                                <p class="avali qt-strelas-5"></p> <!-- TODO COLOCAR A IMAGEM DA ESTRELA EQUIVALENTE -->
                            </div><!-- avaliacao -->
                            <a class="botao detalhes" href="?func=pagina_estabelecimento&id_est=<?php echo $item->getIdEst(); ?>">detalhes</a>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </section>
            <!-- FINAL TOP ESTABELECIMENTOS -->            
        </main>
        <!-- FINAL CONTEÚDO -->

        <?php include "view/footer.php"; ?>

    </body>
</html>