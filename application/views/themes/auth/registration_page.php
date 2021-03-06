<div id="titlebar" class="gradient">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2>Register</h2>
          <nav id="breadcrumbs">
            <ul>
              <li><a href="<?= base_url('')?>">Home</a></li>
              <li>Register</li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Page Content -->
  <div class="container">
    <div class="row">
      <div class="col-xl-6 offset-xl-3">
        <div class="utf-login-register-page-aera margin-bottom-50"> 
          <div class="utf-welcome-text-item">
            <h3>Create Your New Account!</h3>
            <span>Don't Have an Account? <a href="<?= base_url('auth/login')?>">Log In!</a></span> 
		  </div>
          <?php $attributes = array('id' => 'registeration_form', 'method' => 'post',  'class' => 'login100-form validate-form'); ?>

        <?php echo form_open('auth/registration',$attributes); ?>
		  <?php 
              if($this->session->flashdata('validation_errors')){

                echo '<div class="alert alert-danger">' . $this->session->flashdata('validation_errors') . '</div>';
              }
          ?>
           <div class="wrap-input100 mb-3" data-validate = "Valid name is required: johnny">
            <input class="input100" type="text" name="firstname" placeholder="First Name">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <span class="lnr lnr-user"></span>
            </span>
          </div>

          <div class="wrap-input100 mb-3" data-validate = "Valid name is required: smith">
            <input class="input100" type="text" name="lastname" placeholder="Last Name">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <span class="lnr lnr-user"></span>
            </span>
          </div>

          <div class="wrap-input100 mb-3" data-validate = "Valid email is required: ex@abc.xyz">
            <input class="input100" type="text" name="email" placeholder="Email">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <span class="lnr lnr-envelope"></span>
            </span>
          </div>

          <div class="wrap-input100 mb-3" data-validate = "Password is required">
            <input class="input100" type="password" name="password" placeholder="Password">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <span class="lnr lnr-lock"></span>
            </span>
          </div>

          <div class="wrap-input100 mb-3" data-validate = "Password is required">
            <input class="input100" type="password" name="confirmpassword" placeholder="Confirm Password">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <span class="lnr lnr-lock"></span>
            </span>
          </div>

         
			<div class="checkbox margin-top-10">
				<input type="checkbox" id="two-step0" name="termsncondition">
				<label for="two-step0"><span class="checkbox-icon"></span> I Have Read and Agree to the <a href="#">Terms &amp; Conditions</a></label>
		    </div>
			<input type="submit" class="login100-form-btn button full-width utf-button-sliding-icon ripple-effect margin-top-10" name="submit" value="Create An Account ">
         <?php echo form_close(); ?>
         </div>
      </div>
    </div>
  </div>