<div class="login-form">
	<form action="<?= base_url('Register/f_register');?>" method="post">
		<h2 class="text-center">Register</h2>    		  		
		<div class="form-group">			
			<?= $this->session->flashdata('message'); ?>
		</div>		
		<div class="form-group">
			<input type="text" name="username" class="form-control" placeholder="Username" required="required">
		</div>
		<div class="form-group">
			<input type="password" name="password" class="form-control" placeholder="Password" required="required" id="txtPassword">
		</div>
		<div class="form-group">
			<input type="password" name="retype-password" class="form-control" placeholder="retype-password" required="required" id="txtConfirmPassword">
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-primary btn-block" id="btnSubmit">Register</button>
		</div>
		<div class="clearfix">
			<label class="pull-left checkbox-inline"><input type="checkbox"> Remember me</label>
		</div>        
	</form>
	<p class="text-center"><a href="#">Login</a></p>
</div>

<script type="text/javascript">
    window.onload = function () {
        document.getElementById("txtPassword").onchange = validatePassword;
        document.getElementById("txtConfirmPassword").onchange = validatePassword;
    }

    function validatePassword(){
    var pass2=document.getElementById("txtPassword").value;
    var pass1=document.getElementById("txtConfirmPassword").value;
    if(pass1!=pass2)
        document.getElementById("txtPassword").setCustomValidity("Passwords Tidak Sama, Coba Lagi");
    else
        document.getElementById("txtConfirmPassword").setCustomValidity('');
    }
</script>