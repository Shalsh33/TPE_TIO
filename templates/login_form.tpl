{include file="header.tpl"}

<form action="router.php" method="POST">
    <div class="form-group">
        <label for="username">Nombre de usuario</label>
        <input type="text" class="form-control" id="username" placeholder="Usuario...">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Contraseña</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Contraseña...">
    </div>
    <button type="submit" class="btn btn-primary">Entrar</button>
</form>

{include file="footer.tpl"}