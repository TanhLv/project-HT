<?php
session_start();

require_once('./db/dbhelper.php');

if (!isset($_SESSION['cUser'])) {
	header("Location: login.php");
	die();
}

$sql = "select * from product";
$productList = executeResult($sql);

?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Product</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style type="text/css">
	.btn {
		width: 100%;
	}
</style>

<body>
	<div class="container">
		<div class="header">
			<nav class="navbar navbar-expand-lg bg-light">
				<div class="container-fluid">
					<a class="navbar-brand" href="#">Product</a>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav me-auto mb-2 mb-lg-0">
							<li class="nav-item">
								<a class="nav-link active" aria-current="page" href="feedback.php">Feedback</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
		<div class="content">
			<div class="card">
				<div class="card-header bg-info">
					<h1>Product</h1>
				</div>
				<div class="card-body">
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>No</th>
								<th>Title</th>
								<th>Thumbnail</th>
								<th>Description</th>
								<th>Price</th>
								<th></th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<?php
							$index = 0;
							foreach ($productList as $item) {
								echo '
			<tr>
							<td>' . (++$index) . '</td>
							<td>' . ($item['title']) . '</td>
							<td><img src="' . ($item['thumbnail']) . '" style="width:100px;" alt=""></td>
							<td>' . ($item['description']) . '</td>
							<td>' . ($item['price']) . '</td>
							<td>
							<a href="edit.php?id=' . $item['id'] . '"><button class="btn btn-success"">Edit</button></a>
							</td>
							<td>
							<a href="delete.php?id=' . $item['id'] . '"><button class="btn btn-danger">Detele</button></a>
							</td>
						</tr>
			';
							}
							?>
						</tbody>
		
					</table>
				</div>
			</div>
			<a href="add.php"><button class="btn btn-secondary">ADD</button></a>
		</div>
	</div>
</body>

</html>