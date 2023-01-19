<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<style>
    table, th, td {
        border: 1px solid black;
        border-collapse: collapse;        
		text-align-last: center;
        }
        </style>
</head>
<body>
<?php
define('PAGE_TITLE','dashboard');
include('C:\xampp\htdocs\curd_operaion\application\views\menu.php');
?>

<div class="column">
	<h2 class="title">USERS</h2>

	<br><br>

	<table style="width:100%;">
		<tr style="align-items: center;">
			<th>MAC</th>
			<th>USER</th>
			<th>IP ADDRESS</th>
			<th>LANDITUDE</th>
			<th>LOGITUDE</th>
		</tr>

		<?php
    foreach($data as $all){
        ?>
		<tr>
			<td><?php echo $all->mac; ?></td>
			<td><?php echo $all->name; ?></td>
			<td><?php echo $all->ip ?></td>
			<td><?php echo $all->landitude; ?></td>
			<td><?php echo $all->longitude; ?></td>
		</tr>




		<?php
    }


    ?>
	</table>
	<br>
	<br><br>

</div>


</body>
</html>
