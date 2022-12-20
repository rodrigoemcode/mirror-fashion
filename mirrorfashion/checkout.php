<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout Mirror Fashion</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/checkout.css">
    </head>
<body>
    <div class="container">
        <div class="jumbotron">
            <div class="container">
                <h1>Ótima escolha!</h1>
                <p>Obrigado por comprar na Mirror Fashion!
                Preencha seus dados para efetivar a compra.
                </p>

                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h2 class="panel-title">Sua compra</h2>
                    </div>
                    <div class="panel-body">
                        <img src="/mirrorfashion/img/produtos/foto1-<?= $_POST["cor"] ?>.png"
                            class="img-thumbnail img-responsive">
                        <dl>
                            <dt>Cor</dt>
                            <dd><?= $_POST['cor'] ?></dd>

                            <dt>Tamanho</dt>
                            <dd><?= $_POST['tamanho'] ?></dd>

                            <dt>Produto</dt>
                            <dd><?= $_POST['nome'] ?></dd>

                            <dt>Preço</dt>
                            <dd><?= $_POST['preco'] ?></dd>
                        </dl>
                    </div>
                </div>

                <form>
                    <fieldset>
                        <legend>Dados Pessoais</legend>

                        <div class="form-group">
                            <label for="nome">Nome completo</label>
                            <input type="text" class="form-control" name="nome" id="nome" autofocus require>
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email"
                                placeholder="email@exemplo.com">
                        </div>

                        <div class="form-group">
                            <label for="cpf">CPF</label>
                            <input type="text" class="form-control" id="cpf" name="cpf"
                                placeholder="000.000.000-00" required>
                        </div>

                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="sim" name="spam" checked>
                                Quero receber spam da Mirror Fashion
                            </label>
                        </div>
                    </fieldset>

                    <fieldset>
                        <legend>Cartão de Crédito</legend>

                        <div class="form-group">
                            <label for="numero-cartao">Número - CVV</label>
                            <input type="text" class="form-control"
                                    id="numero-cartao" name="numero-cartao">
                        </div>

                        <div class="form-group">
                            <label for="bandeira-cartao">bandeira</label>
                            <select name="bandeira-cartao" id="bandeira-cartao"
                                class="form-control">
                                <option value="master">MasterCard</option>
                                <option value="visa">Visa</option>
                                <option value="amex">American Express</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="validade-cartao">Validade</label>
                            <input type="month" class="form-control" 
                                name="validade-cartao" id="validade-cartao">
                        </div>

                    </fieldset>

                    <button type="submit" class="btn btn-primary btn-lg pull-right">
                        <span class="glyphicon glyphicon-thumbs-up"></span>
                        Confirmar Pedido
                    </button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>