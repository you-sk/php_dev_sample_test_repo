<?php

require_once 'smarty/Smarty.class.php';

$smarty = new Smarty();
$smarty->template_dir = 'templates/';
$smarty->compile_dir  = 'templates_c/';

$smarty->assign('test1', 'テスト1です。');
$smarty->assign('test2', 'テスト2です。');
$smarty->assign('test3', 'テスト3です。');

$smarty->display('test.html');

?>