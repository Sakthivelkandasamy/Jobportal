<div class="utf-dashboard-container-aera"> 
    
    <!-- Dashboard Sidebar / End --> 
    <?php $this->load->view($leftsidebar); ?>
    <!-- Dashboard Content -->
    <div class="utf-dashboard-content-container-aera" data-simplebar>
	  <div id="dashboard-titlebar" class="utf-dashboard-headline-item">
		<div class="row">
			<div class="col-xl-12">	
				<h3>Post a New Job</h3>
				<nav id="breadcrumbs">
					<ul>
					  <li><a href="<?= base_url(); ?>">Home</a></li>
					 					  <li>Post a New Job</li>
					</ul>
				</nav>
			</div>
		</div>		
      </div>
	  
      <div class="utf-dashboard-content-inner-aera"> 
	 <?php $attributes = array('id' => 'post_job', 'method' => 'post');
        			echo form_open('employers/job/post',$attributes);?>
        <div class="row"> 
          <div class="col-xl-12">
            <div class="dashboard-box margin-top-0 margin-bottom-30"> 
              <div class="headline">
                <h3>Post a New Job</h3>
              </div>
              <div class="content with-padding padding-bottom-0">
                <div class="row">
                  <div class="col">
                    <div class="row">
					<div class="col-12">
							<?php 
								if ($this->session->flashdata('post_job_success')) {
									echo '<div class="notification success closeable">' . $this->session->flashdata('post_job_success') . '</div>';
								}
								if($this->session->flashdata('post_job_error')){
									echo '<div class="notification error closeable">' . $this->session->flashdata('post_job_error') . '</div>';
								}
							?>
						</div>
								<div class="col-12">
									<div class="submit-field">
										<h5>Job Title*</h5>
										<input type="text" name="job_title" class="form-control">
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="submit-field">
										<h5>Job Type*</h5>
										<select name="job_type" class="form-control">
											<option>Select Job Type</option>
											<option value="full-time">Full Time</option>
											<option value="freelance">Freelance</option>
											<option value="part-time">Part Time</option>
											<option value="internship">Internship</option>
											<option value="temporary">Temporary</option>
										</select>
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="submit-field">
										<h5>Job Category*</h5>
										<select class="form-control" name="category">
										   <option>Select Category</option>
										   <?php foreach($categories as $category): ?>
										   		<option value="<?= $category['id']?>"><?= $category['name']?></option>
										   <?php endforeach; ?>
										</select>
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="submit-field">
										<h5>Job Indusry*</h5>
										<select class="form-control" name="industry">
										   <option>Select Indusry</option>
										   <?php foreach($industries as $industry):?>
										   		<option value="<?= $industry['id']?>"><?= $industry['name']?></option>
										   <?php endforeach; ?>
										</select>
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="submit-field">
										<h5>Working Experience*</h5>
										<select class="form-control" name="experience" >
											<option value="0-1">0-1 Years</option>
											<option value="1-2" >1-2 Years</option>
											<option value="2-5">2-5 Years</option>
											<option value="5-10">5-10 Years</option>
											<option value="10-15">10-15 Years</option>
											<option value="15+">15+ Years</option>
										</select>
									</div>
								</div>
								<div class="col-12">
									<div class="submit-field">
										<h5>Salary*</h5>
										<div class="row">
											<div class="col-md-6">
												<div class="input-group">
													<select name="min_salary" class="form-control">
														<?php for($i=500; $i<10000; $i=$i+500): ?>
												   			<option value="<?= $i; ?>"><?= $i; ?></option>
													    <?php endfor; ?>
													</select>
													<div class="input-group-append">
														<span class="input-group-text">$</span>
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="input-group">
													<select name="max_salary" class="form-control">
														<?php for($i=500; $i<10000; $i=$i+500): ?>
												   			<option value="<?= $i; ?>"><?= $i; ?></option>
													    <?php endfor; ?>
													</select>
													<div class="input-group-append">
														<span class="input-group-text">$</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-12">
									<div class="submit-field">
										<h5> Skills*</h5>
										<input type="text" name="skills" class="form-control" placeholder="e.g. job title, responsibilites">
									</div>
								</div>
								<div class="col-md-12 col-sm-12">
									<div class="submit-field">
										<h5>Job Description*</h5>
										<textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="submit-field"> 
										<h5>Position Available*</h5>
										<select name="total_positions" class="form-control">	
									  	    <?php for($i=1; $i<30; $i++): ?>
									   			<option value="<?= $i; ?>"><?= $i; ?></option>
										    <?php endfor; ?>
										</select>
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="submit-field"> 
										<h5>Gender Requirement*</h5>
										<select name="gender" class="form-control">	
									   		<option value="Male">Male</option>
									   		<option value="Female">Female</option>
									   		<option value="No Preference" selected="">No Preference</option>
										</select>
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="submit-field">
										<h5>Employment Type*</h5>
										<select class="form-control" name="employment_type" >
											<option value="">Select Employment Type</option>
											<option value="employee">Employee</option>
											<option value="internship">Internship</option>
											<option value="contractor">Contractor</option>
											<option value="temporary-employee">Temporary Employee</option>
										</select>
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="submit-field">
										<h5>Education*</h5>
										<select class="form-control" name="education">
											<option value="">Select Education</option>
											<?php foreach($educations as $row): ?>
												<option value="<?= $row['id']; ?>"> <?= $row['type']; ?></option>
											<?php endforeach; ?>
										</select>
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="submit-field">
										<h5>Country*</h5>
										<select class="form-control" name="country">
										   <option>Select Country</option>
										    <?php foreach($countries as $country):?>
										   		<option value="<?= $country['id']?>"><?= $country['name']?></option>
										    <?php endforeach; ?>
										</select>
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="submit-field">
										<h5>City*</h5>
										<select class="form-control" name="city">
										   <option>Select City</option>
									  	    <?php foreach($cities as $city):?>
									   			<option value="<?= $city['id']?>"><?= $city['name']?></option>
										    <?php endforeach; ?>
										</select>
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="submit-field">
										<h5>Location*</h5>
										<input type="text" name="location" class="form-control" placeholder="Type Address">
									</div>
								</div>
								<div class="add_job_btn col-lg-12 mt-3">
						<div class="submit-field"  style="float: right;">
							<input type="submit" class="job_detail_btn" name="post_job" value="Submit">
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