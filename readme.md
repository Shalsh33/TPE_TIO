##Login system

### Model usuarios

users_model::__construct()

Instancia la clase y abre una conexión PDO con la db.

users_model::get($name)

- Si no se puede establecer conexiòn con la db devuelve false.
- Si el usuario no existe en la db, devuelve false.
- Devuelve la password encriptada con password_hash en caso de que el usuario exista.

### Login Controller

login_cotroller::__construct()

Instancia la clase, crea una instancia de users_model y de login_view.