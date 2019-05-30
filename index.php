<?
require_once('setup.php');

$title = "Test";

$smarty = new Smarty();

$smarty -> assign('title', $title);


$smarty -> display('index.tpl');

$code = $_POST['code'];
$rate = $_POST['rate'];
$commission = $_POST['commission'];
$product = $_POST['product'];
$status = $_POST['status'];


var_dump($code, $rate, $commission, $product,  $status); //удабно было бы массивом

//Дальше все просто... отправляем в базу
				
?>