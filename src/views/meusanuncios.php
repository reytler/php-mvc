<div class="container">
    <h1>Meus Anuncios</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Foto</th>
                <th>Título</th>
                <th>Valor</th>
                <th>Ações</th>
            </tr>
        </thead>
        <?php
        foreach ($anuncios as $anuncio) :
        ?>
            <tr>

                <?php if (!empty($anuncio['url'])) : ?>
                    <td><img src="assets/images/anuncios/<?php echo $anuncio['url']; ?>" height="100" border="0"></td>
                <?php else : ?>
                    <td><img src="assets/images/img.png" height="100" border="0"></td>
                <?php endif; ?>

                <td><?php echo $anuncio['titulo']; ?></td>

                <td>R$<?php echo number_format($anuncio['valor'], 2); ?></td>

                <td>
                    <a href="editar-anuncio.php?id=<?php echo $anuncio['id']; ?>" class="btn btn-default">Editar</a>
                    <a href="excluir-anuncio.php?id=<?php echo $anuncio['id']; ?>" class="btn btn-danger">Excluir</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>