<?php

require_once('libs/Smarty.class.php');

class login_view {
    
    function login_form() {

        $smarty = new Smarty();

        $smarty->display('templates/login_form.tpl');
    }

    function show_404() {
        
        $smarty = new Smarty();

        $smarty->display('templates/404.tpl');
    }

    function show_admin() {
        
        $smarty = new Smarty();

        $smarty->display('templates/admin_panel.tpl');
    }

    function show_user() {
        
        $smarty = new Smarty();

        $smarty->display('templates/user_page.tpl');
    }
    
    function show_login_error() {
        
        $smarty = new Smarty();

        $smarty->display('templates/login_error.tpl');
    }
	
}