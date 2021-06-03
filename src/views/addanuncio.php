<div class="container">
    <h1>Meus Anúncios - Adicionar Anúncio</h1>
    <!--Permite subir imagens-->
    <form action="<?php echo BASE_URL; ?>addanuncio/adicionar" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="categoria">Categoria:</label>
            <select name="categoria" id="categoria" class="form-control">
                <option value=""></option>
                <?php foreach ($categorias as $cat) : ?>
                    <option value="<?php echo $cat['id']; ?>" <?php echo ($cat['id'] == $filtros['categoria']) ? 'selected="selected"' : ''; ?>><?php echo utf8_encode($cat['nome']); ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label for="titulo">Título:</label>
            <input type="text" name="titulo" id="titulo" class="form-control">
        </div>
        <div class="form-group">
            <label for="valor">Valor:</label>
            <input type="text" name="valor" id="valor" class="form-control">
        </div>
        <div class="form-group">
            <label for="descricao">Descrição:</label>
            <textarea name="descricao" id="descricao" cols="30" rows="10" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="estado">Estado de conservação:</label>
            <select name="estado" id="estado" class="form-control">
                <option value=""></option>
                <option value="3">Ruim</option>
                <option value="1">Bom</option>
                <option value="2">Ótimo</option>
            </select>
        </div>
        <input type="submit" value="Adicionar" class="btn btn-default">
    </form>
    <br>
</div>