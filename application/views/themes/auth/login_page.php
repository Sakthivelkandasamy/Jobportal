<div id="titlebar" class="gradient">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2>Log In</h2>
          <nav id="breadcrumbs">
            <ul>
              <li><a href="<?= base_url(); ?>">Home</a></li>
              <li>Log In</li>
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
            <h3>Welcome Back Sign in to Continue</h3>
            <span>Don't Have an Account? <a href="<?= base_url(); ?>auth/registration">Sign Up!</a></span> 
		  </div>
		  <?php    
			if ($this->session->flashdata('registration_success')) {

			  echo  $this->session->flashdata('registration_success');
			}
			if($this->session->flashdata('error_login')){

			  echo '<div class="alert alert-danger" style="color: #ff8a00;">' . $this->session->flashdata('error_login') . '</div>';
			}
			if($this->session->flashdata('success')){

			  echo '<div class="alert alert-success" style="color: #ff8a00;">' . $this->session->flashdata('success') . '</div>';
			}
		  ?> 
          <?php $attributes = array('id' => 'login_form', 'method' => 'post' , 'class' => '');
			echo form_open('auth/login',$attributes);?>
            <div class="utf-no-border">
              <input type="text" class="utf-with-border" name="email" id="email" placeholder="Email Address" required/>
            </div>
            <div class="utf-no-border">
              <input type="password" class="utf-with-border" name="password" id="password" placeholder="Password" required/>
            </div>
			<div class="checkbox margin-top-10">
				<input type="checkbox" id="two-step">
				<label for="two-step"><span class="checkbox-icon"></span> Remember Me</label>
			</div>
            <a href="<?= base_url(); ?>auth/forgot_password" class="forgot-password">Forgot Password?</a>
           
          <button class="button full-width utf-button-sliding-icon ripple-effect margin-top-10" type="submit" name="submit">Log In <i class="icon-feather-chevron-right"></i></button>
          <div class="utf-social-login-separator-item"><span>Or Login in With</span></div>
          <div class="utf-social-login-buttons-block">
            <button class="facebook-login ripple-effect"><i class="icon-brand-facebook-f"></i> Facebook</button>
			<button class="google-login ripple-effect"><i class="icon-brand-google"></i> Google+</button>
			<button class="twitter-login ripple-effect"><i class="icon-brand-twitter"></i> Twitter</button>
          </div>
		  <?php echo form_close(); ?>
        </div>
      </div>
    </div>
  </div>

  <!-- Subscribe Block Start -->
  <section class="utf_cta_area_item utf_cta_area2_block">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="utf_subscribe_block">
                    <div class="col-xl-8 col-md-7">
                        <div class="section-heading">
                            <h2 class="utf_sec_title_item utf_sec_title_item2">Subscribe to Our Newsletter!</h2>
                            <p class="utf_sec_meta">Subscribe to get latest updates and information.</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-5">
                        <div class="contact-form-action">
                            <form method="post">
                                <i class="icon-material-baseline-mail-outline"></i>
                                <input class="form-control" type="email" placeholder="Enter your email" required="">
                                <button class="utf_theme_btn" type="submit">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>