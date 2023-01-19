<!-- HEADER -->
<?php
define('PAGE_TITLE','delete');
include('C:\xampp\htdocs\curd_operaion\application\views\menu.php');
?>

<style>
    table, th, td {
        border: 1px solid black;
        border-collapse: collapse;        
		text-align-last: center;
        }
        </style>

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
			<th>Action</th>
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
            <?php echo "<td><a href='deletedata?id=".$all->id."'>Delete</a></td>"; ?>
		</tr>




		<?php
    }


    ?>
	</table>
	<br>
	<br><br>

</div>


<!-- FOOTER -->
<?php
include('C:\xampp\htdocs\CodeIgniter4\ci-app\application\views\contacts\footer.php');

?>