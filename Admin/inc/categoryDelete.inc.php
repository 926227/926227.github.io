<?

$files->deleteCategory($_GET['id_del_category']);
header ("Location: {$_SERVER['PHP_SELF']}?id=categoryadd");

?>