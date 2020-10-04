<?php

function is_user_admin($user) {
    if ($user == 'admin') {
        return true;
    } else {
        return false;
    }
}

function user_exists($user, $password) {
    
    $lista_usuarios = ['agus', 'blas', 'admin'];
    
    if (in_array($user, $lista_usuarios)) {
        if ($password == '1234') {
            return true;
        } else {
            return false;
        }
    } else {
        return false;
    }
}

function check_user() {
    
    if (!empty($_POST['username']) && !empty($_POST['password'])) {

        $user = $_POST['username'];
        $pass = $_POST['password'];

        if (user_exists($user, $pass)) {

            if (is_user_admin($user)) {
                return 'admin';
            } else {
                return 'user';
            }

        } else {
            return 'no_user';
        }
    } else {
        return 'error';
    }
}