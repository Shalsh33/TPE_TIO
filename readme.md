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

<<<<<<< HEAD
login_cotroller::login_form()

Llama a la vista y devuelve la pàgina del form.

=======

### Login View

Crea una instancia de Smarty, con el display correspondiente a la template que se solicite.

login_view::login_form()
- Carga el template del formulario de login

login_view::show_404()
- Carga el template 404

login_view::show_login_error()
- Carga el template para errores derivados del login

login_view::show_admin()
- Carga el template para el panel de administración

login_view::show_user()
- Carga el template para la página de usuarios


### router.php

Captura y redirecciona todas las actions a las url correspondientes
>>>>>>> 9fc77031b58608247f4b1100cbd7ca297f86ec0a
