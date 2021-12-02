<div class="utf-dashboard-container-aera"> 
    
    <!-- Dashboard Sidebar / End --> 
    <?php $this->load->view($leftsidebar); ?>
    <!-- Dashboard Content -->
    <div class="utf-dashboard-content-container-aera" data-simplebar>
	  <div id="dashboard-titlebar" class="utf-dashboard-headline-item">
		<div class="row">
			<div class="col-xl-12">	
				<h3>Company Profile	</h3>
				<nav id="breadcrumbs">
					<ul>
					  <li><a href="<?= base_url(); ?>">Home</a></li>
					  <li><a href="<?= base_url(); ?>">Dashboard</a></li>
					  <li>Company Profile</li>
					</ul>
				</nav>
			</div>
		</div>		
      </div>
	  
      <div class="utf-dashboard-content-inner-aera"> 
		<?php
			if ($this->session->flashdata('update_success')) {
					echo '<div class="alert alert-success">' . $this->session->flashdata('update_success') . '</div>';
				}
			if($this->session->flashdata('error_update')){
					echo '<div class="alert alert-danger col-md-8">' . $this->session->flashdata('error_update') . '</div>';
			  }
		?>
	  <?php $attributes = array('id' => 'update_employers_form', 'method' => 'post' , 'class' => 'form_horizontal'); ?>
    				<?php echo form_open('employers/profile',$attributes);?>
        <div class="row"> 
          <div class="col-xl-12">
            <div class="dashboard-box margin-top-0 margin-bottom-30"> 
              <div class="headline">
                <h3>Personal Info	</h3>
              </div>
              <div class="content with-padding padding-bottom-0">
                <div class="row">
                  <div class="col">
                    <div class="row">
								<div class="col-md-12 col-sm-12">
				                    <div class="submit-field">
				                      <h5>First Name *</h5>
				                      <input class="form-control" type="text" name="firstname" value="<?= $emp_info['firstname']; ?>" placeholder="John Wick">
				                    </div>
				                  </div>
				                  <div class="col-md-12 col-sm-12">
				                    <div class="submit-field">
				                      <h5>Last Name *</h5>
				                      <input class="form-control" type="text" name="lastname" value="<?= $emp_info['lastname']; ?>" placeholder="John Wick">
				                    </div>
				                  </div>
				                 <div class="col-md-12 col-sm-12">
				                    <div class="submit-field">
				                      <h5>Email *</h5>
				                      <input class="form-control" type="email" name="email" value="<?= $emp_info['email']; ?>" placeholder="example@example.com">
				                    </div>
				                  </div>
				                  <div class="col-md-12 col-sm-12">
				                    <div class="submit-field">
				                      <h5>Designation *</h5>
				                      <input class="form-control" type="text" name="designation" value="<?= $emp_info['designation']; ?>" placeholder="CEO">
				                    </div>
				                  </div>
				                  <div class="col-md-12 col-sm-12">
				                    <div class="submit-field">
				                      <h5>Date of Birth:</h5>
				                      <input class="form-control" type="date" name="dob" value="<?= $emp_info['dob']; ?>">
				                    </div>
				                  </div>
				                  <div class="col-md-12 col-sm-12">
				                    <div class="submit-field">
				                      <h5>Phone Number *</h5>
				                      <input class="form-control" type="tel" name="mobile_no" value="<?= $emp_info['mobile_no']; ?>" placeholder="11 333 444">
				                    </div>
				                  </div>
				                  <div class="col-md-12 col-sm-12">
				                    <div class="submit-field">
				                      <h5>Country *</h5>
				                      <select name="country" class="form-control">
				                        <option>Select Country</option>
				                         <?php foreach($countries as $country):?>
				                            <?php if($emp_info['country'] == $country['id']): ?>
				                              <option value="<?= $country['id']; ?>" selected> <?= $country['name']; ?> </option>
				                            <?php else: ?>
				                              <option value="<?= $country['id']; ?>"> <?= $country['name']; ?> </option>
				                          <?php endif; endforeach; ?>
				                      </select>
				                    </div>
				                  </div>
				                  <div class="col-md-12 col-sm-12">
				                    <div class="submit-field">
				                      <h5>City *</h5>
				                      <select name="city" class="form-control">
				                        <option>Select City</option>
				                        <?php foreach($cities as $city):?>
				                            <?php if($emp_info['city'] == $city['id']): ?>
				                            <option value="<?= $city['id']; ?>" selected> <?= $city['name']; ?> </option>
				                          <?php else: ?>
				                            <option value="<?= $city['id']; ?>"> <?= $city['name']; ?> </option>
				                        <?php endif; endforeach; ?>
				                      </select>
				                    </div>
				                  </div>
				                  <div class="col-md-12 col-sm-12">
				                    <div class="submit-field">
				                      <h5>Description *</h5>
				                      <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="Nulla bibendum commodo rhoncus. Sed mattis magna nunc, ac varius quam pharetra vitae. Praesent vitae ipsum eu magna pretium aliquam. Curabitur interdum quis velit non tincidunt.Donec pretium gravida erat, a faucibus velit egestas eget."><?= $emp_info['description']; ?></textarea>
				                    </div>
				                  </div>
								  <div class="add_job_btn col-lg-12 mt-5">
						<div class="submit-field">
							<input type="submit" class="job_detail_btn" name="update" value="Update">
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