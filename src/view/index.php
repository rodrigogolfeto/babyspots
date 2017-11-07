<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="css/reset.css">
    <link type="text/css" rel="stylesheet" href="css/flex.css">
    <title>BabySpot's</title>
</head>
<body>
<header class="cabecalho-principal"> <!-- inicio do cabeçalho de navegação-->
    <nav class="container"> <!-- inicio toolbar-->
        <div class="local"> <!-- inicio locacalizacão-->
            <select class="localizacoes">
                <option value="">Campo Grande, MS</option>
                <option value="">São Paulo, SP</option>
                <option value="">Rio de Janeiro, RS</option>

            </select>
        </div><!-- final locacalizacão-->
        <div class="logo-home">
            <img src="images/logo-home.png" alt="Logo do site, está escrito: BabySpot's">
        </div>
        <div class="conta">
            <a class="botao entrar" href="#">entrar</a>
            <a class="botao cadastrar" href="#">cadastrar</a>
        </div>
    </nav> <!--fim toolbar-->
</header> <!-- fim do cabeçalho de navegação-->
<main class="container"> <!-- inicio conteudo -->
    <section class="buscar"> <!-- inicio busca -->
        <div class="container">
            <h2>Descubra</h2>
            <p>O restaurante ideal para a sua família</p>
            <div class="busca"> <!-- inicio formulario de busca -->
                <form class="campo-busca">
                    <input type="search" name="busca botao" id="busca" placeholder="Buscar Estabelecimento">
                    <input type="submit" name="buscar botao" id="buscar" value="Buscar">
                </form>
            </div> <!-- final formulario de busca -->
            <p>ou selecione o serviço que deseja procurar</p>
            <div class="carrossel"> <!-- inicio carrossel de serviços -->
                <!--TODO-->
            </div> <!-- final carrossel de serviços -->
        </div>
    </section> <!-- final busca -->
    <section class="top-estabelecimentos"> <!-- inicio top estabelecimentos -->
        <div class="container">
            <h2 class="card">Top Estabelecimentos</h2>
            <div class="item card">
                <img class="foto" src="images/foto-estabelecimento-1.png" alt="foto de um estabelecimento qualquer">
                <div class="infos">
                    <p class="cidade-estabelecimento">Campo Grande-MS</p>
                    <p class="nome-estabelecimento">Chalé lanches</p>
                    <p class="endereco-estabelecimento">Av. dos Cafezais, 1142 - Jardim Paulo Coelho Machado</p>
                    <div class="carrossel-servico">
                        <!-- TODO -->
                    </div>
                </div>
                <hr>
                <div class="avaliacao">
                    <span>70 avaliações</span>
                    <img src="" alt="quantidade de estrelas"> <!--Colocar a imagem da estrela equivalente-->
                    <a class="botao detalhes" href="#">detalhes</a>
                </div>
            </div><div class="item card">
                <img class="foto" src="images/foto-estabelecimento-1.png" alt="foto de um estabelecimento qualquer">
                <div class="infos">
                    <p class="cidade-estabelecimento">Campo Grande-MS</p>
                    <p class="nome-estabelecimento">Chalé lanches</p>
                    <p class="endereco-estabelecimento">Av. dos Cafezais, 1142 - Jardim Paulo Coelho Machado</p>
                    <div class="carrossel-servico">
                        <!-- TODO -->
                    </div>
                </div>
                <hr>
                <div class="avaliacao">
                    <span>70 avaliações</span>
                    <img src="" alt="quantidade de estrelas"> <!--Colocar a imagem da estrela equivalente-->
                    <a class="botao detalhes" href="#">detalhes</a>
                </div>
            </div>
            <div class="item card">
                <img class="foto" src="images/foto-estabelecimento-1.png" alt="foto de um estabelecimento qualquer">
                <div class="infos">
                    <p class="cidade-estabelecimento">Campo Grande-MS</p>
                    <p class="nome-estabelecimento">Chalé lanches</p>
                    <p class="endereco-estabelecimento">Av. dos Cafezais, 1142 - Jardim Paulo Coelho Machado</p>
                    <div class="carrossel-servico">
                        <!-- TODO -->
                    </div>
                </div>
                <hr>
                <div class="avaliacao">
                    <span>70 avaliações</span>
                    <img src="" alt="quantidade de estrelas"> <!--Colocar a imagem da estrela equivalente-->
                    <a class="botao detalhes" href="#">detalhes</a>
                </div>
            </div>
            <div class="item card">
                <img class="foto" src="images/foto-estabelecimento-1.png" alt="foto de um estabelecimento qualquer">
                <div class="infos">
                    <p class="cidade-estabelecimento">Campo Grande-MS</p>
                    <p class="nome-estabelecimento">Chalé lanches</p>
                    <p class="endereco-estabelecimento">Av. dos Cafezais, 1142 - Jardim Paulo Coelho Machado</p>
                    <div class="carrossel-servico">
                        <!-- TODO -->
                    </div>
                </div>
                <hr>
                <div class="avaliacao">
                    <span>70 avaliações</span>
                    <img src="" alt="quantidade de estrelas"> <!--Colocar a imagem da estrela equivalente-->
                    <a class="botao detalhes" href="#">detalhes</a>
                </div>
            </div>
        </div>
    </section> <!-- final top estabelecimentos -->
    <section class="top-cidades"> <!--inicio top cidade -->
        <h2 class="card">Top Cidades</h2>
        <div class="container">
            <div class="card cidade">
                <img src="images/foto-cidade.png" alt="nome da cidade">
                <p class="estado-cidade">Mato Grosso do Sul</p>
                <p class="nome-cidade">Campo Grande</p>
            </div>
            <div class="card cidade">
                <img src="images/foto-cidade.png" alt="nome da cidade">
                <p class="estado-cidade">Mato Grosso do Sul</p>
                <p class="nome-cidade">Campo Grande</p>
            </div>
            <div class="card cidade">
                <img src="images/foto-cidade.png" alt="nome da cidade">
                <p class="estado-cidade">Mato Grosso do Sul</p>
                <p class="nome-cidade">Campo Grande</p>
            </div>
            <div class="card cidade">
                <img src="images/foto-cidade.png" alt="nome da cidade">
                <p class="estado-cidade">Mato Grosso do Sul</p>
                <p class="nome-cidade">Campo Grande</p>
            </div>
        </div>
    </section> <!-- final top cidades -->
</main> <!-- final conteudo -->

<footer>
    <div class="container">
        <div class="info">
            <img src="images/logo-home.png">
            <p>
                Onde você quer ir hoje?<br>Encontre o estabelecimento que forneça uma infraestrutura adequada para a recepção de sua familia.
            </p>
        </div>
        <div class="fac">
            <ul>
                <li>
                <li>Anunciar</li>
                <li>Contato</li>
                <li>Ajuda</li>
                <li>Sobre</li>
                </li>
            </ul>
        </div>
        <div class="legal">
            <ul>
                <li>Condições de uso</li>
                <li>Informação legal</li>
                <li>Política de Privacidade</li>
                <li>Mapa do site</li>
                <li>Política de Cookies</li>
            </ul>
        </div>
        <div class="newsletter">
            <h2>newsletter</h2>
            <form>
                <input type="email" name="email" placeholder="Informe o seu E-mail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                <input class="botao" type="submit" name="pedidoDeNewletter" value="enviar">
            </form>
            <ul>
                <li><a class="icone-social" href="https://www.facebook.com/"></a></li>
                <li><a class="icone-social" href="https://twitter.com"></a></li>
                <li><a class="icone-social" href="https://plus.google.com/u/0/"></a></li>
                <li><a class="icone-social" href="https://www.instagram.com/?hl=pt-br"></a></li>
            </ul>
        </div>
    </div>
</footer>
</body>
</html>