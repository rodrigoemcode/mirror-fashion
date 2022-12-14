<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mirror Fashion</title>

    <link rel="stylesheet" href="/mirrorfashion/css/reset.css">
    <link rel="stylesheet" href="/mirrorfashion/css/produto.css">
    <link rel="stylesheet" href="/mirrorfashion/css/style.css">
    <link rel="stylesheet" href="/mirrorfashion/css/mobile.css" media="(max-width: 939px>">
</head>
<body>
    <?php include("cabecalho.php"); ?>

    <div class="container">
        <div class="produto">
            <h1>Fuzzy Cardigan</h1>
            <p>por apenas R$ 129,00</p>

            <form>
                <fieldset class="cores">
                    <legend>Escolha a cor:</legend>

                    <input type="radio" name="cor" value="verde" id="verde" checked>
                    <label for="verde">
                        <img src="img/produtos/foto2-verde.png" alt="verde">
                    </label>

                    <input type="radio" name="cor" value="rosa" id="rosa" checked>
                    <label for="rosa">
                        <img src="img/produtos/foto2-rosa.png" alt="rosa">
                    </label>

                    <input type="radio" name="cor" value="azul" id="azul" checked>
                    <label for="azul">
                        <img src="img/produtos/foto2-azul.png" alt="azul">
                    </label>

                </fieldset>

                <fieldset class="tamanhos">
                    <legend>Escolha o tamanho:</legend>

                    <input type="range" min="36" max="46" step="2"
                        name="tamanho" id="tamanho">
                </fieldset>

                <input type="submit" class="comprar" value="Comprar">

            </form>
        </div>

        <div class="detalhes">
            <h2>Detalhes do produto</h2>

            <p>Esse é o melhor casaco de Cardigã que você já viu. Excelente material italiano com estampa desenhada pelos artesãos da comunidade de Krotor nas ilhas gregas. Compre já e receba hoje mesmo pela nossa entrega ajato. </p>

            <table>
                <thead>
                    <tr>
                        <th>Característica</th>
                        <th>Detalhe</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Modelo</td>
                        <td>Cardigã 7845</td>
                    </tr>
                    <tr>
                        <td>Cores</td>
                        <td>Azul, Rosa e Verde</td>
                    </tr>
                    <tr>
                        <td>Lavagem</td>
                        <td>lavar a mão</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    
    <?php include("rodape.php"); ?>
</body>
</html>