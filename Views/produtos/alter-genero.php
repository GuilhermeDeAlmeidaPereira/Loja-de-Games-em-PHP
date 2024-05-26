<?php
/*remover o warning do include e da session**/
if (!defined('SITE_URL')) {
    include_once '../../config.php';
}

include SITE_PATH . '/Controllers/c_valida_usuario.php';

$cod_genero = $_GET['genero'];
$nome_genero = $_GET['nome'];
// echo $cod_genero;
// $linha = [];

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="<?php echo SITE_URL ?>/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo SITE_URL ?>/css/styles.css">

  <title>Alterar Gênero</title>
</head>
<?php include SITE_PATH . '/includes/menu-adm.php';?>

<body>
  <div class="container mt-5 min-h-50">
    <div class="row justify-content-md-center text-center">
      <h1>Alterar Gênero: <?php echo $cod_genero; ?></h1>
    </div>
    <div class="row justify-content-md-center mt-3">
      <div class="col-md-6">
        <form class="" action='<?php echo SITE_URL ?>/Controllers/c_produto.php' method="post">
          <div class="form-group mb-3">
            <label class="sr-only" for="nome_genero">Gênero:</label>
            <input class="form-control" type="text" name="nome_genero" value="<?php echo $linha['nome_genero']; ?>">
            <p class="text-muted text-center"><?php echo $nome_genero; ?></p>
            <input class="form-control" type="hidden" name="cod_genero" value="<?php echo $cod_genero ?>">
          </div>
          <div class="input-group d-flex justify-content-center">
            <input type="hidden" class="btn btn-dark btn-block">
            <input class="btn btn-dark btn-block btn-comprar mx-2 col-2" type="submit" value="Atualizar" name="alterar-genero" id="alterar-genero">
            <input class="btn btn-dark btn-block btn-comprar mx-2 col-2" type="reset" value="Limpar" id="limpar">
            <a class="btn btn-dark btn-block btn-comprar mx-2 col-2" href="./genero-index.php">Cancelar</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
<?php include SITE_PATH . '/includes/footer-adm.php';?>

</html>