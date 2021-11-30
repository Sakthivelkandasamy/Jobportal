<div class="utf-dashboard-container-aera"> 
    
    <!-- Dashboard Sidebar / End --> 
    <?php $this->load->view($leftsidebar); ?>
    <!-- Dashboard Content -->
    <div class="utf-dashboard-content-container-aera" data-simplebar>
	  <div id="dashboard-titlebar" class="utf-dashboard-headline-item">
		<div class="row">
			<div class="col-xl-12">	
				<h3>Company Details	</h3>
				<nav id="breadcrumbs">
					<ul>
					  <li><a href="<?= base_url(); ?>">Home</a></li>
					  <li><a href="<?= base_url(); ?>">Dashboard</a></li>
					  <li>Company Details	</li>
					</ul>
				</nav>
			</div>
		</div>		
      </div>
	  
      <div class="utf-dashboard-content-inner-aera"> 
	 <?php $attributes = array('id' => 'update_employers_form', 'method' => 'post' , 'class' => 'form_horizontal'); ?>
					<?php echo form_open_multipart('employers/company',$attributes);?>
        <div class="row"> 
          <div class="col-xl-6">
            <div class="dashboard-box margin-top-0 margin-bottom-30"> 
              <div class="headline">
                <h3>Company Details</h3>
              </div>
              <div class="content with-padding padding-bottom-0">
                <div class="row">
								<div class="col-md-12 col-sm-12">
									<div class="submit-field">
										<h5>Company Logo *</h5>
										<?php if(!empty($company_info['company_logo'])): ?>
											<p><img src="<?= base_url().$company_info['company_logo']; ?>" alt="Logo" height="50"></p>
										<?php endif; ?>
										<input type="file" name="userfile" class="form-control" placeholder="Company Name" />
										<input type="hidden" name="old_logo" value="<?= $company_info['company_logo']; ?>">
									</div>
								</div>
								<div class="col-md-12 col-sm-12">
									<div class="submit-field">
										<h5>Company Name *</h5>
										<input class="form-control" type="text" name="company_name" value="<?= $company_info['company_name']; ?>" placeholder="Company Name">
										<!-- Hidden input for company ID-->
										<input class="form-control" type="hidden" name="company_id" value="<?= $company_info['id']; ?>" placeholder="Company Name">
									</div>
								</div>
								<div class="col-md-12 col-sm-12">
									<div class="submit-field">
										<h5>Email *</h5>
										<input type="email" name="email" value="<?= $company_info['email']; ?>"  class="form-control" placeholder="example@example.com">
									</div>
								</div>
								<div class="col-md-12 col-sm-12">
									<div class="submit-field">
										<h5>Phone *</h5>
										<input class="form-control" type="tel" name="phone_no" value="<?= $company_info['phone_no']; ?>" placeholder="123456789">
									</div>
								</div>
								<div class="col-md-12 col-sm-12">
									<div class="submit-field">
										<h5>Website:</h5>
										<input class="form-control" type="text" name="website" value="<?= $company_info['website']; ?>" placeholder="www.example.com" >
									</div>
								</div>
								<div class="col-md-12 col-sm-12">
									<div class="submit-field">
										<h5>Category *</h5>
										<select class="form-control" name="category">
											<option value="">Select Category</option>
											<?php foreach($categories as $category):?>
												<?php if($company_info['category'] == $category['id']): ?>
													<option value="<?= $category['id']; ?>" selected> <?= $category['name']; ?> </option>
													<?php else: ?>
														<option value="<?= $category['id']; ?>"> <?= $category['name']; ?> </option>
													<?php endif; endforeach; ?>
												</select>
											</div>
										</div>
										<div class="col-md-12 col-sm-12">
											<div class="submit-field">
												<h5>Founded Date *</h5>
												<input type="date" name="founded_date" value="<?= $company_info['founded_date']; ?>" class="form-control" >
											</div>
										</div>
										<div class="col-md-12 col-sm-12">
											<div class="submit-field">
												<h5>Organization Type *</h5>
												<select name="org_type"  class="form-control" >
													<option value="Public" <?php if($company_info['org_type'] == 'Public'){ echo "selected";} ?>>Public</option>
													<option value="Private" <?php if($company_info['org_type'] == 'Private'){ echo "selected";} ?>>Private</option>
													<option value="Government" <?php if($company_info['org_type'] == 'Government'){ echo "selected";} ?>>Government</option>
													<option value="NGO" <?php if($company_info['org_type'] == 'NGO'){ echo "selected";} ?>>NGO</option>
												</select>
											</div>
										</div>
										<div class="col-md-12 col-sm-12">
											<div class="submit-field">
												<h5>No. of Employers *</h5>
												<select name="no_of_employers" class="form-control">
													<option value="1-10" <?php if($company_info['no_of_employers'] == '1-10'){ echo "selected";} ?>>1-10</option>
													<option value="10-20" <?php if($company_info['no_of_employers'] == '10-20'){ echo "selected";} ?>>10-20</option>
													<option value="20-30" <?php if($company_info['no_of_employers'] == '20-30'){ echo "selected";} ?>>20-30</option>
													<option value="30-50" <?php if($company_info['no_of_employers'] == '30-50'){ echo "selected";} ?>>30-50</option>
													<option value="50-100" <?php if($company_info['no_of_employers'] == '50-100'){ echo "selected";} ?>>50-100</option>
													<option value="100+" <?php if($company_info['no_of_employers'] == '100+'){ echo "selected";} ?>>100+</option>
												</select>
											</div>
										</div>
										<div class="col-md-12 col-sm-12">
											<div class="submit-field">
												<h5>Company Description *</h5>
												<textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="Nulla bibendum commodo rhoncus. Sed mattis magna nunc, ac varius quam pharetra vitae."><?= $company_info['description']; ?></textarea>
											</div>
										</div>
									</div>
				 </div>
            </div>			
          </div>
          
          <div class="col-xl-6">
		  
            <div id="test1" class="dashboard-box margin-top-0"> 
              <div class="headline">
                <h3>Address / Location</h3>
              </div>
              <div class="content with-padding">
               <div class="profile_job_content col-lg-12 mt-5">
              
              <div class="profile_job_detail">
                <div class="row">
										<div class="col-md-6 col-sm-12">
											<div class="submit-field">
												<h5>Country *</h5>
												<select name="country" class="form-control">
													<option>Select Country</option>
													<?php foreach($countries as $country):?>
														<?php if($company_info['country'] == $country['id']): ?>
															<option value="<?= $country['id']; ?>" selected> <?= $country['name']; ?> </option>
															<?php else: ?>
																<option value="<?= $country['id']; ?>"> <?= $country['name']; ?> </option>
															<?php endif; endforeach; ?>
														</select>
													</div>
												</div>
												<div class="col-md-6 col-sm-12">
													<div class="submit-field">
														<h5>City / Town *</h5>
														<select name="city" class="form-control">
															<option>Select City</option>
															<?php foreach($cities as $city):?>
																<?php if($company_info['city'] == $city['id']): ?>
																	<option value="<?= $city['id']; ?>" selected> <?= $city['name']; ?> </option>
																	<?php else: ?>
																		<option value="<?= $city['id']; ?>"> <?= $city['name']; ?> </option>
																	<?php endif; endforeach; ?>
																</select>
															</div>
														</div>
														<div class="col-md-6 col-sm-12">
															<div class="submit-field">
																<h5>Postcode </h5>
																<input type="text" name="postcode" value="<?= $company_info['postcode']; ?>" class="form-control" placeholder="50700">
															</div>
														</div>
														<div class="col-md-12 col-sm-12">
															<div class="submit-field">
																<h5>Full Address *</h5>
																<input type="text" name="address"  value="<?= $company_info['address']; ?>" class="form-control">
															</div>
														</div>
													</div>
              </div>
            </div>  

            <div class="profile_job_content col-lg-12 mt-5">
              
                <h3>Company Social</h3>
             
              <div class="profile_job_detail">
                <div class="row">
														<div class="col-md-6 col-sm-12">
															<div class="submit-field">
																<h5>Facebook</h5>
																<input type="text" name="facebook_link" value="<?= $company_info['facebook_link']; ?>"  class="form-control" placeholder="http://www.facebook.com">
															</div>
														</div>
														<div class="col-md-6 col-sm-12">
															<div class="submit-field">
																<h5>Twitter</h5>
																<input type="text" name="twitter_link" value="<?= $company_info['twitter_link']; ?>" class="form-control"  placeholder="http://www.twitter.com">
															</div>
														</div>
														<div class="col-md-6 col-sm-12">
															<div class="submit-field">
																<h5>Google Plus</h5>
																<input type="text" name="google_link" value="<?= $company_info['google_link']; ?>" class="form-control" placeholder="http://www.google-plus.com">
															</div>
														</div>
														<div class="col-md-6 col-sm-12">
															<div class="submit-field">
																<h5>Youtube</h5>
																<input type="text" name="youtube_link" value="<?= $company_info['youtube_link']; ?>" class="form-control"  placeholder="http://www.youtube.com">
															</div>
														</div>
														<div class="col-md-6 col-sm-12">
															<div class="submit-field">
																<h5>Vimeo</h5>
																<input type="text" name="vimeo_link" value="<?= $company_info['vimeo_link']; ?>" class="form-control"  placeholder="http://www.vimeo.com">
															</div>
														</div>
														<div class="col-md-6 col-sm-12">
															<div class="submit-field">
																<h5>Linkedin</h5>
																<input type="text" name="linkedin_link" value="<?= $company_info['linkedin_link']; ?>" class="form-control" placeholder="http://www.linkedin.com">
															</div>
														</div>
													</div>
              </div>
            </div> 
			
			<div class="add_job_btn col-lg-12 mt-5">
				<div class="submit-field">
					<input type="submit" name="update" value="Update" class="job_detail_btn">
				</div>
			</div>	
			</div>			  
            </div>
          </div>          
        </div>
         <?php echo form_close();?>    
        <!-- Footer -->
        <div class="utf-dashboard-footer-spacer-aera"></div>
        <div class="utf-small-footer margin-top-15">
          <div class="utf-small-footer-copyrights">Copyright &copy; 2021 All Rights Reserved.</div>
        </div>
      </div>
	  
    </div>
    <!-- Dashboard Content / End -->     
  </div>  