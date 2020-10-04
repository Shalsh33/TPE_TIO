<?php
function is_user_admin($user, $password) {
    if ($user == 'admin' && $password == '1234') {
        return true;
    } else {
        return false;
    }
}