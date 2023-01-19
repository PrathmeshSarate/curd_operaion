<style>
    table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  text-align: center;
}
</style>
<!-- HEADER -->
<?php
define('PAGE_TITLE','edit');
include('C:\xampp\htdocs\curd_operaion\application\views\menu.php');

foreach($data as $a){
 
?>
<div class="column">
	<h2 class="title">USERS</h2>

	<br><br>
	<div class="column">
		<h2 class="title">Update</h2>
		<form action="<?php base_url('Create/updatedata') ?>" method="POST">
			<div class="field">
				<label class="label">User Name</label>
				<div class="control">
					<input id="name" name="name" class="input" type="text" value="<?php echo $a->name;?>">
				</div>
			</div>
			<div class="field">
				<label class="label">IP Address</label>
				<div class="control">
					<input id="ip" name="ip" class="input" type="text" value="<?php echo $this->input->ip_address(); ?>"
						readonly>
				</div>
			</div>
			<div class="field">
				<label class="label">Your MAC Address is</label>
				<div class="control">
					<input id="mac" name="mac" class="input" type="text" value="<?php echo $a->mac; ?>" readonly>
				</div>
			</div>
			<div class="field">
				<label class="label">LAND & LONG</label>
				<div class="control">

					<input id="land" name="land" class="input" type="text" value="<?php echo $a->landitude; ?>">
					<input id="long" name="long" class="input" type="text" style="margin-top:10px ;"
						value="<?php echo $a->longitude; ?>">
				</div>
			</div>
			<div class="field is-grouped">
				<div class="control">
					<button class="button is-link" type="submit" name="update">Save Contact</button>
				</div>
			</div>
		</form>
	</div>

	<br>
	<br><br>

</div>

<?php
}
?>


<!-- FOOTER -->
<?php
include('C:\xampp\htdocs\CodeIgniter4\ci-app\application\views\contacts\footer.php');
?>
