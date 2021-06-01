<div class="container">
    <h1>Fazer Login</h1>
    <form action="<?php echo BASE_URL; ?>login/logar" method="post">
        <div class="form-group">
            <label for="email">E-mail:</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="senha">Senha:</label>
            <input type="password" name="senha" id="senha" class="form-control" required>
        </div>
        <input type="submit" value="Fazer Login" class="btn btn-default">
    </form>
</div>