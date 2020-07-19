<?
$title = 'Авторизация';
$login = '';
session_start();
header("HTTP/1.0 401 Unauthorized");
require_once "inc/Users.class.php";
$user = new Users;


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $login = trim(strip_tags($_POST["login"]));
    $pw = trim(strip_tags($_POST["password"]));
    $ref = trim(strip_tags($_GET["ref"]));
    // if (!$ref) {
    //     $ref = '/admin/';
    // }
    if ($login and $pw) {
        if ($result = $user->userExists($login)) {
            list($_, $hash) = explode(':', $result);
            if ($user->checkHash($pw, $hash)) {
                $_SESSION['admin'] = true;
                $title = "OK";
                header("Location: admin.index.php");
                exit;
            } else {
                $title = 'Неправильное имя пользователя или пароль!';
            }
        } else {
            $title = 'Неправильное имя пользователя или пароль!';}
    } else {
        $title = 'Заполните все поля формы!';}
}

?>
<!DOCTYPE HTML>
<html>
<head>
	<title>Авторизация</title>
	<meta charset="utf-8">
    <style type="text/css">
    form{
        position:absolute;
        top:30%;
        left:30%;
    }
    
    </style>
</head>
<body>
	
	<form action="<?=$_SERVER['REQUEST_URI'] ?>" method="post">
    <h1><?=$title ?></h1>
		<div>
			<label for="txtUser">Логин</label>
			<input id="txtUser" type="text" name="login" value="<?=$login ?>" />
		</div>
		<div>
			<label for="txtString">Пароль</label>
			<input id="txtString" type="password" name="password" />
		</div>
		<div>
			<button type="submit">Войти</button>
		</div>
	</form>
</body>
</html>