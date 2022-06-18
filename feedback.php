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
    	.container {
    		text-align: center;
    		width: 600px;
    	}
    </style></head>
<body>
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
</body>
</html>