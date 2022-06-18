<?php
session_start();
require_once('./db/dbhelper.php');

$id = $_GET['id'];

if(!empty($_POST)){
	$fullname = $_POST['fullname'];
	$phoneNo = $_POST['phoneNo'];
	$note = $_POST['note'];
	$creted_at = date_create('now', timezone_open('Asia/Ho_Chi_Minh'))->format('Y-m-d h:m:s');
    $status = $_POST['status'];

	$sql = "insert into feedback(fullname, phoneNo, note, created_at, status)
            values
            ('$fullname', '$phone', '$note', '$creted_at', 'Unread')";
	execute ($sql);
	header('Location: feedback.php');

}

$sql = "select * from feedback where id = $id";
$feedback = executeResult($sql, true);



?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Feedback Detail</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <style type="text/css">
  	.form-group{
  		margin-bottom: 20px;
  	}
  </style>
</head>
<body>
<div class="card">
	<div class="card-header bg-info">
		<h1>FeedBack</h1>
	</div>
	<div class="card-body">
		<table class="table table-bordered">
			<thead>
				<tr>
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
	echo '
	<tr>
					<td>'.($feedback['fullname']).'</td>
					<td>'.($feedback['phoneNo']).'</td>
					<td>'.($feedback['note']).'</td>
					<td>'.($feedback['created_at']).'</td>
					<td>'.($feedback['status']).'</td>
					<td>
					<a href="feedback.php?id='.$feedback['id'].'"><button class="btn btn-danger"">Back</button></a>
			        </td>
				</tr>
	';

?>
			</tbody>
			
		</table>
	</div>
</div>
</body>
</html>