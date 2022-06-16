<?php
require_once('./db/dbhelper.php');

$id = $_GET['id'];

$sql = "delete from product where id = $id";
execute($sql);

header('Location: product.php');