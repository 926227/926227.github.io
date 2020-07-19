<?
$login = $_POST['new_login'];
if(!$user->userExists($login)){
    $password = trim($_POST['new_password']);
    $hash = $user->getHash($password);
    if($user->saveUser($login, $hash)) {
        $contentHeader = 'Пользователь '. $login. ' успешно добавлен в файл';
    }
    else
        $contentHeader = 'Произошла ошибка';
}else{
    $contentHeader = "Пользователь $login уже существует. Выберите другое имя.";
}
header ("Refresh: 2; {$_SERVER["REQUEST_URI"]}");
exit;
?>
