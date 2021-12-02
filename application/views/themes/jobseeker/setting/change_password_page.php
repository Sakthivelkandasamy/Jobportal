<div class="utf-dashboard-container-aera"> 
    
    <!-- Dashboard Sidebar / End --> 
    <?php $this->load->view($leftsidebar); ?>
    <!-- Dashboard Content -->
    <div class="utf-dashboard-content-container-aera" data-simplebar>
	  <div id="dashboard-titlebar" class="utf-dashboard-headline-item">
		<div class="row">
			<div class="col-xl-12">	
				<h3>My Profile</h3>
				<nav id="breadcrumbs">
					<ul>
					  <li><a href="<?= base_url(); ?>">Home</a></li>
					  <li><a href="<?= base_url(); ?>">Dashboard</a></li>
					  <li>My Profile</li>
					</ul>
				</nav>
			</div>
		</div>		
      </div>
	  
      <div class="utf-dashboard-content-inner-aera"> 
	  
         
         <?php if ($this->session->flashdata('error_update_password')) {
            echo '<div class="alert alert-danger">' . $this->session->flashdata('error_update_password') . '</div>';
          } ?>
          
         <?php if ($this->session->flashdata('update_password_success')) {
            echo '<div class="alert alert-success">' . $this->session->flashdata('update_password_success') . '</div>';
          } ?>

          <?php if ($this->session->flashdata('update_password_failed')) {
            echo '<div class="alert alert-danger">' . $this->session->flashdata('update_password_failed') . '</div>';
          } ?> 
	  <?php $attributes = array('id' => 'Change_Password_form', 'method' => 'post'); ?>
        <?php echo form_open(base_url('employers/setting/change_password'), $attributes);?>

        <div class="row"> 
          <div class="col-xl-12">
            <div class="dashboard-box margin-top-0 margin-bottom-30"> 
              <div class="headline">
                <h3>Change Password</h3>
              </div>
              <div class="content with-padding padding-bottom-0">
                <div class="row">
                  <div class="col">
                    <div class="row">
					  <div class="col-xl-12">
						 <?php if ($this->session->flashdata('file_error')) {
							  echo '<div class="alert alert-danger">' . $this->session->flashdata('file_error') . '</div>';
							} ?>

							<?php if ($this->session->flashdata('error_update')) {
							  echo '<div class="alert alert-danger">' . $this->session->flashdata('error_update') . '</div>';
							} ?>

							<?php if ($this->session->flashdata('update_success')) {
							  echo '<div class="alert alert-success">' . $this->session->flashdata('update_success') . '</div>';
							} ?>
						
					  </div>	
                      <div class="col-xl-12 col-md-6 col-sm-6">
                        <div class="utf-submit-field">
                           <h5>Old Password *</h5>
							<input type="Password" name="old_password" class="form-control"></div>
                      </div>
					   <div class="col-xl-12 col-md-6 col-sm-6">
                        <div class="utf-submit-field">
                           <h5>New Password *</h5>
						  <input type="Password" name="new_password" class="form-control"></div>
                      </div>
					 <div class="col-xl-12 col-md-6 col-sm-6">
						<div class="submit-field">
						  <h5>Confirm New Password *</h5>
                  <input type="Password" name="confirm_password" class="form-control"></div>
					  </div>  
                    
					    <div class="col-12">
                <div class="submit-field">
                   <input class="btn btn-info px-5 btn-md" value="Update" type="submit" name="submit">
                 </div>
              </div>
					  					  
                    </div>
                  </div>
                </div>
				 </div>
            </div>			
          </div>
          
                
        </div>
         <?php echo form_close();?>    
        <!-- Footer -->
        <div class="utf-dashboard-footer-spacer-aera"></div>
        
      </div>
	  
    </div>
    <!-- Dashboard Content / End -->     
  </div>  