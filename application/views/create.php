<!-- HEADER -->
<?php
define('PAGE_TITLE','create');
include('C:\xampp\htdocs\curd_operaion\application\views\menu.php');
$string=exec('getmac');
$data['mac'] = substr($string, 0, 17); 
?>


<div class="column" style="background-color:lightgray;">
    <h2 class="title">Create Contact</h2>
    <form action="<?= base_url('Create/savingdata') ?>" method="POST">
        <div class="field">
            <label class="label">User Name</label>
            <div class="control">
                <input id="name" name="name" class="input" type="text" placeholder="Type the contact name">
            </div>
        </div>
        <div class="field">
            <label class="label">IP Address</label>
            <div class="control">
                <input id="ip" name="ip" class="input" type="text" value="<?php echo $this->input->ip_address(); ?>" readonly>
            </div>
        </div>
        <div class="field">
            <label class="label">Your MAC Address is</label>
            <div class="control">
                <input id="mac" name="mac" class="input" type="text" value="<?php echo $data['mac']; ?>" readonly>
            </div>
        </div>
        <div class="field">
            <label class="label">LAND & LONG</label>
            <div class="control">
              
                <input id="land" name="land" class="input" type="text" >                
                <input id="long" name="long" class="input" type="text" style="margin-top:10px ;">
            </div>
        </div>
        <div class="field is-grouped">
            <div class="control">
                <button class="button is-link" type="submit" name="save">Save Contact</button>
            </div>
        </div>
    </form>
    <!-- <button onclick="getLocation();">Get Position</button> -->
</div>




<!-- FOOTER -->
<?php
include('C:\xampp\htdocs\CodeIgniter4\ci-app\application\views\contacts\footer.php');

?>


<!-- 
<script>
    
    function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(position){
        console.log(position);
    });
  } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}
</script> -->