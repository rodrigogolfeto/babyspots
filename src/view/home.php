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
<!--                            <ul id="servicos-busca" class="servicos-busca">-->
<!--                                --><?php //foreach($servicos as $item){ ?>
<!--                                    <li><a href="?func=lista&servico=--><?php //echo $item->getClasse(); ?><!--"><div class="ico --><?php //echo $item->getClasse(); ?><!--"></div><h3>--><?php //echo $item->getNome(); ?><!--</h3></a></li>-->
<!--                                --><?php //} ?>
<!--                            </ul>-->
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
                        <img class="foto" src="view/images/<?php echo $item->getImagens()[0]->getEsfImagem(); ?>" alt="Foto do Estabelecimento">
                        <div class="infos">
                            <p><?php echo $item->getEstCidade()." - ".$item->getEstEstado(); ?></p>
                            <p><?php echo $item->getEstNome(); ?></p>
                            <p><?php echo $item->getEstRua().", ".$item->getEstNumero()." - ".$item->getEstBairro(); ?></p>
                            <div class="carrossel-servico">
                                <?php if(count($item->getServicos())>5){ ?><div class="btn anterior"><a>&nbsp;</a></div><?php } ?>
                                <div class="item-carrocel">
                                    <ul class="servicos-itens">
										<?php foreach($item->getServicos() as $servico){ ?>
                                            <li><a href=""><div class="ico <?php echo $servico->getSerClasse(); ?>"></div><h3><?php echo $servico->getSerNomeMin(); ?></h3></a></li>
										<?php } ?>
                                    </ul>
                                </div>
                                <?php if(count($item->getServicos())>5){ ?><div class="btn proximo"><a>&nbsp;</a></div><?php } ?>
                            </div><!-- carrossel-servico -->

                            <div class="avaliacao">
                                <span><?=$item->getQuantidadeAvaliacao();?> avaliações</span>
                                <p class="avali qt-strelas-<?=(int)$item->getQuantidadeAvaliacao();?>"></p> <!-- TODO COLOCAR A IMAGEM DA ESTRELA EQUIVALENTE -->
                            </div><!-- avaliacao -->
                            <a class="botao detalhes" href="?func=pagina-estabelecimento&id_est=<?php echo $item->getEstId(); ?>">detalhes</a>
                        </div>
                    </div><!-- item card -->
                    <?php } ?>
                </div>
            </section>
            <!-- FINAL TOP ESTABELECIMENTOS -->            
        </main>
        <!-- FINAL CONTEÚDO -->

        <?php include "view/footer.php"; ?>

    </body>
</html>