<?php
/* Smarty version 3.1.33, created on 2019-05-31 01:42:39
  from '/home/testgs01/test-gs.xyz/www/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cf05c5f09cc49_63555534',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2c4ba01239c4d8df24b66c2e891b535d99dfd311' => 
    array (
      0 => '/home/testgs01/test-gs.xyz/www/templates/index.tpl',
      1 => 1559256150,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cf05c5f09cc49_63555534 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	</head>
	<body>

		<!-- Вызов модалки -->
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#couponModal">
			Add cupon
		</button>

		<!-- Модалка-->
		<div class="modal fade" id="couponModal" tabindex="-1" role="dialog" aria-labelledby="showAddCoupon" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="showAddCoupon">Add cupon</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<!-- ФОРМА-->
						<form class="sendData" id='sendData' action="" method="post">

							<label for="exampleFormControlInput1">Coupon code</label>
							<input type="text" class="form-control" name="code" id="code" placeholder="Coupon code">

							<label for="exampleFormControlInput2">Coupon rate</label>
							<input type="text" class="form-control" name="rate"   id="rate" placeholder="Coupon rate">

							<label for="exampleFormControlInput3">Commission rate</label>
							<input type="text" class="form-control" name="commission" id="commission" placeholder="Commission rate">

							<label for="exampleFormControlSelect1">Product</label>
							<select class="form-control" name="product" id="product">
								<option value="all">ALL</option>
							</select>
							<label for="exampleFormControlSelect2">Status</label>
							<select class="form-control" name="status" id="status">
								<option value="enable">Enable</option>
								<option value="disable">Disable</option>
							</select>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">
									Close
								</button>
								<button id="btn" type="submit" class="btn btn-info">
									Submit
								</button>
							</div>
						</form>
						Coupon
					</div>

				</div>
			</div>
		</div>

		<!-- отправляем форму в пост массив для index.php-->
		<?php echo '<script'; ?>
 type="text/javascript">
			$(document).ready(function() {
				$("#btn").click(function(e) {
					e.preventDefault();
					$.ajax({
						type : "POST",
						async : false,
						dataType : 'json',
						cache : false,
					});
				});
			});
		<?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"><?php echo '</script'; ?>
>
	<body>
</html><?php }
}
