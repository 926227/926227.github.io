<?

$s=$files->saveCategory($_POST['new_category_name']);
header ("Location: {$_SERVER['PHP_SELF']}?id=categoryadd");

?>