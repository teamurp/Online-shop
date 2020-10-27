<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<meta charset="utf-8">
	<style type="text/css">
		.text-font{
			font-family: Bahnschrift Light;
		}
	</style>
</head>
<body>
	<div style="background-color: #5c5096">
		<div class="col-10 mx-auto p-0 row">
			<div class="col-5">
			</div>
			<div class="col-7 py-3 p-0">
				<a href="" style="margin-left: 75px; font-size: 20px" class="text-white text-font">Товары</a>
				<a href="" style="margin-left: 75px; font-size: 20px" class="text-white text-font">Корзина</a>
				<a href="" style="margin-left: 75px; font-size: 20px" class="text-white text-font">Поддержка</a>
				<a href="" style="margin-left: 75px; margin-right: 75px; font-size: 20px" class="text-white text-font">Войти</a>
				<button class="btn btn-light"><a href="admin.php" style="font-size: 20px" class="text-dark text-font">Главная страница</a></button>
			</div>
		</div>
	</div>
	<div class="pt-5 bg-dark" style="height: 1000px">
		<div class="rounded col-7 mx-auto p-4" style="background-color: #5c5096">
			<h1 class="text-center text-white text-font">Админ-панель</h1>
			<form method="GET" action="insert.php">
				<div class="col-12 mx-auto mt-4">
					<div class="form-group">
						<input type="" name="title" placeholder="Название товара" class="form-control">
						<textarea type="" name="desc" placeholder="Описание" class="form-control mt-3" style="height: 250px"></textarea>
						<input type="" name="img" placeholder="Картинка" class="form-control mt-3">
						<input type="" name="price" placeholder="Цена" class="form-control mt-3">
					</div>
					<button class="btn btn-primary">Добавить</button>
				</div>
			</form>
		</div>
		
	</div>
	
	
	<?php

	 ?>
</body>
</html>