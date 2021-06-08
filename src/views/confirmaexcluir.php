<div class="container-fluid">
<div class="jumbotron">
  <h1 class="display-4">Olá, <?php echo $nome ?> </h1>
  <p class="lead">Confirma a exclusão do anúncio: <?php echo $anuncio['titulo'];?> ?</p>
  <hr class="my-4">
  <p class="lead">
    <a class="btn btn-success btn-md" href="<?php echo  BASE_URL;?>/deleteanuncio/excluir/?id=<?php echo $anuncio['id']; ?>" role="button">Sim</a>
    <a class="btn btn-danger btn-md" href="<?php echo  BASE_URL;?>/meusanuncios" role="button">Não</a>
  </p>
</div>
</div>