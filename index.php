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

		.shadow1 {
			box-shadow: 0 5px 10px rgba(0,0,0,0.25);
		}

		.gray{
			background-color: #d6d6d6;
		}
	</style>
</head>
<body>
	<?php 
		$con = mysqli_connect('127.0.0.1','root','','onlineshop');


		$query = mysqli_query($con, "SELECT * FROM product");

		$string1 = $query->fetch_assoc();
		$string2 = $query->fetch_assoc();
		$string3 = $query->fetch_assoc();
		$string4 = $query->fetch_assoc();
		$string5 = $query->fetch_assoc();
		$string6 = $query->fetch_assoc();

	 ?>
	<div style="background-color: #5c5096">
		<div class="col-10 mx-auto p-0 row">
			<div class="col-5">
			</div>
			<div class="col-7 py-3 p-0">
				<a href="" style="margin-left: 75px; font-size: 20px" class="text-white text-font">Товары</a>
				<a href="" style="margin-left: 75px; font-size: 20px" class="text-white text-font">Корзина</a>
				<a href="" style="margin-left: 75px; font-size: 20px" class="text-white text-font">Поддержка</a>
				<a href="" style="margin-left: 75px; margin-right: 75px; font-size: 20px" class="text-white text-font">Войти</a>
				<button class="btn btn-light"><a href="admin.php" style="font-size: 20px" class="text-dark text-font">Админ-панель</a></button>
			</div>
		</div>
	</div>
	<div>
		<div class="col-10 row p-0 mx-auto">
			<div class="col-5 py-5">
				<img src="banner.svg" class="w-100">
			</div>
			<div class="col-7">
				<h1 class="text-font text-center mt-5" style="font-size: 75px">Магазин для хобби и развлечений</h1>
				<h1 class="text-font text-center">Все для интереса</h1>
			</div>
		</div>
		
	</div>
	<hr class="col-10 mx-auto">
	<div style="height: 1000px">
		<div class="col-10 mx-auto p-0 mt-5">
			<div class="col-12 p-0 row mx-auto">
				<div class="col-4">
						<?php 
							if($string1["title"]!=null){
								echo "<div class='border'>";
								echo "<img src='".$string1["img"]."' class='w-100 text-font'>";
								echo "<h1 class='text-center mt-3 text-font'>".$string1["title"]."</h1>";
								echo "<p class='text-center text-font'>".$string1["descr"]."</p>";
								echo "<h3 class='text-center text-font'>".$string1["price"]."</h3>";
								echo "<button class='btn btn-success col-3 my-3' style='margin-left: 185px'>Купить</button>";
								echo "</div>";
							}
						 ?>
					
				</div>
				<div class="col-4">
						<?php 
							if($string2["title"]!=null){
								echo "<div class='border'>";
								echo "<img src='".$string2["img"]."' class='w-100 text-font'>";
								echo "<h1 class='text-center mt-3 text-font'>".$string2["title"]."</h1>";
								echo "<p class='text-center text-font'>".$string2["descr"]."</p>";
								echo "<h3 class='text-center text-font'>".$string2["price"]."</h3>";
								echo "<button class='btn btn-success col-3 my-3' style='margin-left: 185px'>Купить</button>";
								echo "</div>";
							}
						 ?>
				</div>
				<div class="col-4">
						<?php 
							if($string3["title"]!=null){
								echo "<div class='border'>";
								echo "<img src='".$string3["img"]."' class='w-100 text-font'>";
								echo "<h1 class='text-center mt-3 text-font'>".$string3["title"]."</h1>";
								echo "<p class='text-center text-font'>".$string3["descr"]."</p>";
								echo "<h3 class='text-center text-font'>".$string3["price"]."</h3>";
								echo "<button class='btn btn-success col-3 my-3' style='margin-left: 185px'>Купить</button>";
								echo "</div>";
							}
						 ?>
				</div>
			</div>
			<div class="col-12 row p-0 mx-auto mt-3">
				<div class="col-4">
						<?php 
							if($string4["title"]!=null){
								echo "<div class='border'>";
								echo "<img src='".$string4["img"]."' class='w-100 text-font'>";
								echo "<h1 class='text-center mt-3 text-font'>".$string4["title"]."</h1>";
								echo "<p class='text-center text-font'>".$string4["descr"]."</p>";
								echo "<h3 class='text-center text-font'>".$string4["price"]."</h3>";
								echo "<button class='btn btn-success col-3 my-3' style='margin-left: 185px'>Купить</button>";
								echo "</div>";
							}
						 ?>
				</div>
				<div class="col-4">
						<?php 
							if($string5["title"]!=null){
								echo "<div class='border'>";
								echo "<img src='".$string5["img"]."' class='w-100 text-font'>";
								echo "<h1 class='text-center mt-3 text-font'>".$string5["title"]."</h1>";
								echo "<p class='text-center text-font'>".$string5["descr"]."</p>";
								echo "<h3 class='text-center text-font'>".$string5["price"]."</h3>";
								echo "<button class='btn btn-success col-3 my-3' style='margin-left: 185px'>Купить</button>";
								echo "</div>";
							}
						 ?>
				</div>
				<div class="col-4">					
						<?php 
							if($string6["title"]!=null){
								echo "<div class='border'>";
								echo "<img src='".$string6["img"]."' class='w-100 text-font'>";
								echo "<h1 class='text-center mt-3 text-font'>".$string6["title"]."</h1>";
								echo "<p class='text-center text-font'>".$string6["descr"]."</p>";
								echo "<h3 class='text-center text-font'>".$string6["price"]."</h3>";							
								echo "<button class='btn btn-success col-3 my-3' style='margin-left: 185px'>Купить</button>";
								echo "</div>";
							}
						 ?>					
				</div>
			</div>
		</div>
	</div>
</body>
</html>