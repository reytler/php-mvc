<div class="container-fluid">
    <?php
    if (isset($_SESSION['cLogin'])) {
        echo '<h1>Olá, ' . $nome . '<h1><br>';
    }
    ?>


    <div class="row">
        <div class="col-sm-4">
            <div class="carousel slide" data-ride="carousel" id="meuCarousel">
                <div class="carousel-inner" role="listbox">
                    <?php foreach ($info['fotos'] as $chave => $foto) : ?>
                        <div class="item <?php echo ($chave == '0') ? 'active' : ''; ?>">
                            <img src="<?php echo BASE_URL; ?>assets/images/anuncios<?php echo $foto['url']; ?>">
                        </div>
                    <?php endforeach; ?>
                </div>
                <a href="#meuCarousel" class="left carousel-control" role="button" data-slide="prev"><span><</span></a>
                <a href="#meuCarousel" class="right carousel-control" role="button" data-slide="next"><span>></span></a>
            </div>
        </div>

        <div class="col-sm-8">
            <h1><?php echo $info['titulo']; ?></h1>
            <h4><?php echo utf8_encode($info['categoria']); ?></h4>
            <p><?php echo $info['descricao']; ?></p>
            <br>
            <h3>R$<?php echo number_format($info['valor'], 2); ?></h3>
            <h4>Telefone: <?php echo $info['telefone']; ?></h4>
        </div>

    </div>
</div>