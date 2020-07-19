<?php

class Users {
    const USERS_FILE_PATH = 'inc/.htpasswd';

    function getHash($password)
    {
        $hash = password_hash($password, PASSWORD_BCRYPT);
        return $hash;
    }
    
    function checkHash($password, $hash)
    {
        return password_verify($password, $hash);
    }
    
    function saveUser($login, $hash)
    {
        $str = "$login:$hash\n";
        if (file_put_contents(self::USERS_FILE_PATH, $str, FILE_APPEND)) {
            return true;
        } else {
            return false;
        }
    
    }
    
    function userExists($login)
    {
        if (!is_file(self::USERS_FILE_PATH)) {
            return false;
        }
    
        $users = file(self::USERS_FILE_PATH);
        foreach ($users as $user) {
            if (strpos($user, $login . ':') !== false) {
                return trim($user);
            }
        }
        return false;
    }
    
    function logOut()
    {
     session_destroy();
     header('Location: /index.php');
     exit;
    }
    




}
