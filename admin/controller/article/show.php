<?php  
	define("PAGE_CSS" , "beaute");
	include_once('model/article/index.php');
	$id = $_GET['id'];
	include_once('view/layout/header.admin.php');
	$show = show_id($id);
	$test = if_com_info_true($id);
	$nbr = count($test);
	$infocom = show_info_com($id);
	include_once('view/article/show.php');
	include_once('view/layout/footer.admin.php');
?>
