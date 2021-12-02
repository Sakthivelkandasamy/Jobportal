<!-- Titlebar -->
<style>
.btn-primary{
	background: #ff8a00;
    color: #fff;
    padding: 9px;

}
.applied{
	color: #fff !important;
    background: #ff8a00 !important;
	border: 1px solid #ff8a00 !important;
}
</style>
  <div class="single-page-header" data-background-image="images/single-job.jpg">
    <div class="container">
      <div class="row">
	  
        <div class="col-md-12">
          <div class="utf-single-page-header-inner-aera">
            <div class="utf-left-side">
             
              <div class="utf-header-details">
				<span class="dashboard-status-button utf-job-status-item green"><i class="icon-material-outline-business-center"></i> <?= $job_detail['job_type']; ?></span>
				<ul>
                  <li><?= $job_detail['company_name']; ?> <img class="flag" src="images/flags/af.svg" alt="" title="Afghanistan" data-tippy-placement="top"></li>				  
                </ul>
                <h3><?= $job_detail['job_title']; ?><span class="utf-verified-badge" title="Verified" data-tippy-placement="top"></span></h3>
                <h5>
				<i class="icon-feather-briefcase"></i><?= get_industry_name($job_detail['industry']); ?></h5>
				<h5>
				
				<i class="icon-material-outline-account-balance-wallet"></i>$<?= $job_detail['min_salary']; ?> - $<?= $job_detail['max_salary']; ?> </h5>
				<h5>
				
				<i class="icon-material-outline-location-on"></i><?= get_city_name($job_detail['city']); ?>, <?= get_country_name($job_detail['country']); ?></h5>
				
                
              </div>
            </div>
			
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Page Content -->
  <div class="container">
    <div class="row"> 
      <div class="col-xl-8 col-lg-8 utf-content-right-offset-aera">
        <div class="utf-single-page-section-aera">
		  	
		  <div class="utf-boxed-list-headline-item">
            <h3><i class="icon-material-outline-description"></i> Jobs Description</h3>
          </div>
          <p><?= $job_detail['description']; ?></p>
          <ul class="utf-job-deatails-content-item margin-bottom-30">
			<li><i class="icon-feather-arrow-right"></i> <strong>Industry:</strong> <?= get_industry_name($job_detail['industry']); ?></li>
		   <li><i class="icon-feather-arrow-right"></i> <strong>Total Positions:</strong> <?= $job_detail['total_positions']; ?></li>
		   
		   <li><i class="icon-feather-arrow-right"></i> <strong>Job Type:</strong> <?= $job_detail['job_type']; ?></li>
		   
		   <li><i class="icon-feather-arrow-right"></i> <strong>Salary:</strong> $<?= $job_detail['min_salary']; ?> - $<?= $job_detail['max_salary']; ?></li>
		   
		   <li><i class="icon-feather-arrow-right"></i> <strong>Education:</strong> <?= get_education_level($job_detail['education']); ?></li>
		   <li><i class="icon-feather-arrow-right"></i> <strong>Location:</strong> <?= get_city_name($job_detail['city']); ?>, <?= get_country_name($job_detail['country']); ?></li>
		   
		  
		   
		   </ul>
		   <div class="utf-single-page-section-aera">
		  <div class="utf-boxed-list-headline-item">
            <h3><i class="icon-material-outline-business-center"></i> Required Skills and Abilities</h3>
          </div>
          <ul class="utf-job-deatails-content-item">
			<?php  $skills = explode("," , $job_detail['skills']);?>
			<?php foreach($skills as $skill): ?>
			<li><i class="icon-feather-arrow-right"></i><?= $skill; ?></li>
			<?php endforeach; ?>
			</ul>		  
        </div>
		 
		
        </div>
		<?php if (!$this->session->userdata('is_user_login')){ ?>   
            
			
				<a href="<?= base_url('auth/login'); ?>" class="apply-now-button">Apply For Jobs <i class="icon-feather-chevron-right"></i></a> 
				
			<?php } ?>
		<?php if ($this->session->userdata('is_user_login')){ ?>   
			
				<?php if($this->session->flashdata('applied_success')): ?>
		          <div class="notification success closeable">
		            <?=$this->session->flashdata('applied_success')?>
		          </div>
		        <?php  endif; ?>
		        <?php if($already_applied == true && $this->session->flashdata('applied_success') == null): ?>
		          <div class="notification success closeable applied">
		            You have already applied for this application
		          </div>
		        <?php  endif; ?>
		        <?php if($this->session->flashdata('validation_errors')): ?>
		         <div class="notification error closeable">
		          <?= $this->session->flashdata('validation_errors') ?>
		        </div>
		      <?php endif; ?>
			
			<div id="apply-block">
					<div class="collapse" id="collapseExample">
						<div class="card card-body">
							<h4 class="card-title">Apply for this job</h4>
						    <?php $attributes = array('id' => 'job-form', 'method' => 'post');
		        			echo form_open(base_url('jobs/apply_job'),$attributes);
		        			?>	
						      	<div class="form-group">
							       <textarea name="cover_letter" class="form-control" rows="5" placeholder="Your message / cover letter sent to the employer"></textarea>
							    </div> 

							    <!-- Hidden Inputs -->
							    <input type="hidden" name="username" value="<?= $user_detail['firstname']; ?>">
							    <input type="hidden" name="email" value="<?= $user_detail['email']; ?>" >
							    <input type="hidden" name="job_id" value="<?= $job_detail['id']; ?>" >
							    <input type="hidden" name="emp_id" value="<?= $job_detail['employer_id']; ?>" >
							    <input type="hidden" name="job_title" value="<?= $job_detail['job_title']; ?>" >
							    <!-- current url for redirect to same job detail page  -->
							    <input type="hidden" name="job_actual_link" value="<?= $job_actual_link ?>" >
								
								<?php
								    $last_request_page = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
								    $this->session->set_userdata('last_request_page', $last_request_page); 
								 ?>

								<?php if($this->session->userdata('is_user_login') == true): ?>
								    <button type="submit" name="submit" value="submit" class="btn btn-primary btn-block ">Send Application</button>

								<?php elseif($this->session->userdata('is_employer_login') == true): ?>
								    <a href="<?= base_url('auth/login'); ?>" class="btn btn-primary btn-block">Please login as JobSeeker</a>
								<?php else: ?>
								    <a href="<?= base_url('auth/login'); ?>" class="btn btn-primary btn-block">Please login as JobSeeker</a> 
								<?php endif; ?>    

							<?php echo form_close(); ?>
						</div>
					</div>
				</div>
		<?php } ?>
		
		
		
		
       
		
      </div>
      
      <!-- Sidebar -->
      <div class="col-xl-4 col-lg-4">
        <div class="utf-sidebar-container-aera"> 
		 
		  
          <div class="utf-sidebar-widget-item">
            <div class="utf-job-overview">
              <div class="utf-job-overview-headline">Jobs by Location</div>
              <div class="utf-job-overview-inner">
                <ul>
                   <?php foreach($cities_job as $city):?>
				  <li style="padding: 12px 54px;"> 
				    <a class="justify-content-between d-flex" href="<?= base_url('jobs/location/'.get_city_slug($city['city_id'])); ?>"><i class="icon-material-outline-location-on"></i> <span><?= get_city_name($city['city_id']); ?></span><span><?= $city['total_jobs']; ?></span></a>
                   
                  </li>
				 <?php endforeach; ?>
                </ul>
              </div>			  
            </div>			
          </div>
          
         
		  
		 
		  
		 
        </div>
      </div>
    </div>
  </div>
  