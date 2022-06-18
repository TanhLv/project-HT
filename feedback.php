<?php
session_start();

require_once('./db/dbhelper.php');

if(!isset($_SESSION['cUser'])){
	header("Location: login.php");
	die();
}

$sql="select * from feedback";
$productList = executeResult($sql);

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feed back page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <style type="text/css">
    	.form-group{
    		margin-bottom: 20px;
    	}
    	
    </style>
    </head>
<body>
<div class="container">
<div class="header">
			<nav class="navbar navbar-expand-lg bg-light">
				<div class="container-fluid">
					<a class="navbar-brand" href="product.php">Product</a>
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
		<h1>FeedBack</h1>
	</div>
	<div class="card-body">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>No</th>
					<th>Fullname</th>
					<th>Phone No</th>
					<th>Note</th>
					<th>Feedback date</th>
					<th>Status</th>
                    <th></th>
				</tr>
			</thead>
			<tbody>
<?php
$index = 0;
foreach ($productList as $item) {
	echo '
	<tr>
					<td>'.(++$index).'</td>
					<td>'.($item['fullname']).'</td>
					<td>'.($item['phoneNo']).'</td>
					<td>'.($item['note']).'</td>
					<td>'.($item['created_at']).'</td>
					<td>'.($item['status']).'</td>
					<td>
					<a href="feedbackDetail.php?id='.$item['id'].'"><button class="btn btn-success"">Detail</button></a>
			        </td>
				</tr>
	';
}
?>
			</tbody>
			
		</table>
	</div>
</div>
</div>
</div>
</body>
</html>