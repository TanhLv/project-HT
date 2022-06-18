<?php
session_start();
require_once('./db/dbhelper.php');

if(!empty($_POST)){
	$title = $_POST['title'];
	$image = $_FILES ['img']['name'];
	$image_tmp_name = $_FILES['img']['tmp_name'];
	$image_folder = './asstes/img/product/'. $image;
	$description = $_POST['description'];
	$price = $_POST['price'];

	if ($_FILES['img']['error']>0){
		$this ->error = 'Upload file failed';
		header('Location: product.php');
		die();
	}

	if (!is_file($image_folder)){
		move_uploaded_file($image_tmp_name, $image_folder);
	}


	$sql = "insert into product( title, thumbnail, description, price) values('$title', '$image_folder', '$description', '$price')";
	execute ($sql);

	header('Location: product.php');

}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ADD</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <style type="text/css">
  	.form-group{
  		margin-bottom: 20px;
  	}
  </style>
</head>
<body>
<form method="post" enctype="multipart/form-data" >
	<div class="card">
		<div class="card-header bg-info">
			<h1>ADD LIST</h1>
		</div>
		<div class="card-body">
			<div class="form-group">
				<label>Title: </label>
				<input required type="text" name="title" class="form-control">
			</div>
			<div class="form-group">
				<label>Thumbail: </label>
				<input required type="file" accept="image/png, image/jpg, image/jpeg" name="img" class="form-control">
			</div>
			<div class="form-group">
				<label>Description: </label>
				<input required type="text" name="description" class="form-control">
			</div>
			<div class="form-group">
				<label>Price: </label>
				<input required type="text" name="price" class="form-control">
			</div>
			<div class="form-group">
				<button class="btn btn-success">ADD</button>
				<button class="btn btn-danger" type="reset">Reset</button>
			</div>
		</div>
	</div>
</form>
</body>
</html>