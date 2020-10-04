{include file="header.tpl"}
<div class="row">
    <div class="col-sm-12 main-title">
        <h1>Bienvenido al sistema de Login</h1>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">

        <form action="/TPE_TIO/user_page" method="POST" class="login-form">
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
    </div>
</div>

{include file="footer.tpl"}