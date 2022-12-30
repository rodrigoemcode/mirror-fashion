<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href='http://fonts.googleapis.com/css?family=PT+Sans|Bad+Scrpit' rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/mirrorfashion/css/reset.css">
    <link rel="stylesheet" href="/mirrorfashion/css/style.css">
    <link rel="stylesheet" href="/mirrorfashion/css/mobile.css" media="(max-width: 939px">
    <title>Mirror Fashion</title>
</head>
<body>
    
    <?php include("cabecalho.php"); ?>
    
    <div class="container destaque">
        <section class="busca">
            <h2>Busca</h2>

            <form>
                <input type="search">
                <input type="image" src="/mirrorfashion/img/busca.png" alt="Busca">
            </form>
        </section> <!-- fim .busca -->

        <section class="menu-departamentos">
            <h2>Departamentos</h2>

            <nav>
                <ul>
                    <li><a href="#">Blusas e Camisas</a>
                        <ul>
                            <li><a href="#">Manga curta</a></li>
                            <li><a href="#">Manga comprida</a></li>
                            <li><a href="#">Camisa social</a></li>
                            <li><a href="#">Camisa casual</a></li>
                        </ul>
                    </li>

                    <li><a href="#">Calças</a></li>
                    <li><a href="#">Saias</a></li>
                    <li><a href="#">Vestidos</a></li>
                    <li><a href="#">Sapatos</a></li>
                    <li><a href="#">Bolsas e Carteiras</a></li>
                    <li><a href="#">acessórios</a></li>
                </ul>
            </nav>
        </section> <!--fim .menu-departamentos-->

        <img src="/mirrorfashion/img/destaque-home.png" alt="Promoção: Big City Night">
    </div> <!--fim .container .destaque-->

    <div class="container paineis">
        <!--Os paineis de novidades e mais vendidos entrarão aqui dentro-->
        <section class="painel novidades">
            <h2>novidades</h2>
            <ol>

                <!--primeiro produto-->
                <li>
                    <a href="produto.html">
                        <figure>
                            <img src="/mirrorfashion/img/produtos/miniatura1.png">
                            <figcaption>Fuzz Cardigan por R$129,90</figcaption>
                        </figure>
                    </a>
                </li>
                <li>
                    <a href="produto.html">
                        <figure>
                            <img src="/mirrorfashion/img/produtos/miniatura2.png">
                            <figcaption>Fuzz Cardigan por R$129,90</figcaption>
                        </figure>
                    </a>
                </li>
                <li>
                    <a href="produto.html">
                        <figure>
                            <img src="/mirrorfashion/img/produtos/miniatura3.png">
                            <figcaption>Fuzz Cardigan por R$129,90</figcaption>
                        </figure>
                    </a>
                </li>
                <li>
                    <a href="produto.html">
                        <figure>
                            <img src="/mirrorfashion/img/produtos/miniatura4.png">
                            <figcaption>Fuzz Cardigan por R$129,90</figcaption>
                        </figure>
                    </a>
                </li>
                <li>
                    <a href="produto.html">
                        <figure>
                            <img src="/mirrorfashion/img/produtos/miniatura5.png">
                            <figcaption>Fuzz Cardigan por R$129,90</figcaption>
                        </figure>
                    </a>
                </li>
                <li>
                    <a href="produto.html">
                        <figure>
                            <img src="/mirrorfashion/img/produtos/miniatura6.png">
                            <figcaption>Fuzz Cardigan por R$129,90</figcaption>
                        </figure>
                    </a>
                </li>
            </ol>
            <button type="button">Mostra mais</button>
        </section>

        <section class="painel mais-vendidos">
            <h2>Mais Vendidos</h2>
            <ol>
                <li>
                    <a href="produto.html">
                        <figure>
                            <img src="/mirrorfashion/img/produtos/miniatura7.png">
                            <figcaption>Fuzz Cardigan por R$129,90</figcaption>
                        </figure>
                    </a>
                </li>
                <li>
                    <a href="produto.html">
                        <figure>
                            <img src="/mirrorfashion/img/produtos/miniatura8.png">
                            <figcaption>Fuzz Cardigan por R$129,90</figcaption>
                        </figure>
                    </a>
                </li>
                <li>
                    <a href="produto.html">
                        <figure>
                            <img src="/mirrorfashion/img/produtos/miniatura9.png">
                            <figcaption>Fuzz Cardigan por R$129,90</figcaption>
                        </figure>
                    </a>
                </li>
                <li>
                    <a href="produto.html">
                        <figure>
                            <img src="/mirrorfashion/img/produtos/miniatura10.png">
                            <figcaption>Fuzz Cardigan por R$129,90</figcaption>
                        </figure>
                    </a>
                </li>
                <li>
                    <a href="produto.html">
                        <figure>
                            <img src="/mirrorfashion/img/produtos/miniatura11.png">
                            <figcaption>Fuzz Cardigan por R$129,90</figcaption>
                        </figure>
                    </a>
                </li>
                <li>
                    <a href="produto.html">
                        <figure>
                            <img src="/mirrorfashion/img/produtos/miniatura12.png">
                            <figcaption>Fuzz Cardigan por R$129,90</figcaption>
                        </figure>
                    </a>
                </li>
            </ol>
            <button type="button">Mostra mais</button>
        </section>
    </div>
    <script src="js/jquery.js"></script>
    <script src="js/home.js"></script>
    <script src="js/converteMoeda.js"></script>
    <script src="js/testaConversao.js"></script>
    
    <?php include("rodape.php"); ?>

</body>
</html>