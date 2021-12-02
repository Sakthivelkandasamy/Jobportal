<div class="utf-dashboard-container-aera"> 
    
    <!-- Dashboard Sidebar / End --> 
    <?php $this->load->view($leftsidebar); ?>
    <!-- Dashboard Content -->
    <div class="utf-dashboard-content-container-aera" data-simplebar>
	  <div id="dashboard-titlebar" class="utf-dashboard-headline-item">
		<div class="row">
			<div class="col-xl-12">	
				<h3>Shortlisted Resumes</h3>
				<nav id="breadcrumbs">
					<ul>
					  <li><a href="<?= base_url('employers'); ?>">Home</a></li>
					 					  <li>Shortlisted Resumes</li>
					</ul>
				</nav>
			</div>
		</div>		
      </div>
	  
      <div class="utf-dashboard-content-inner-aera"> 
	 
        <div class="row"> 
          <div class="col-xl-12">
            <div class="dashboard-box margin-top-0"> 
              <div class="headline">
                <h3>Shortlisted Resumes</h3>
              </div>
              <div class="content">
                <ul class="utf-dashboard-box-list">
				  <?php if(empty($applicants)): ?>
          <p class="text-gray"><strong>Sorry,</strong> there is no shortlisted application.</p>
        <?php endif; ?>

                 <?php foreach($applicants as $applicant): ?>
                  <li> 
                    <div class="col-md-6 col-sm-12 mb-20">
					  <div class="onjob-employer-resumes-wrap">
						<figure class="pp">
						  <figcaption>
							<h2 class="title"><a href="#"><?= $applicant['firstname']; ?> <?= $applicant['lastname']; ?></a> <a href="#" class="onjob-resumes-download"><i class="lnr lnr-download"></i> Download CV</a></h2>
							<span class="onjob-resumes-subtitle"><?= $applicant['job_title']; ?></span>
							<ul>
							  <li>
								<span>Location:</span>
								<?= get_city_name($applicant['city']); ?>, <?= get_country_name($applicant['country']); ?>
							  </li>
							  <li>
								<span>Current Salary:</span>
								$<?= $applicant['current_salary']; ?>/<small>p.a minimum</small>
							  </li>
							</ul>
						  </figcaption>
						</figure>
						<ul class="onjob-resumes-options">
						  <li><a href="#" data-toggle="modal" data-target="#emailModal" data-whatever="<?= $applicant['email']; ?>"><i class="lnr lnr-envelope"></i> Message</a></li>
						  <li><a href="#" data-toggle="modal" data-target="#emailModal" data-whatever="<?= $applicant['email']; ?>"><i class="lnr lnr-user"></i> Interview</a></li>
						</ul>
					  </div>
					</div>                    
                  </li>

				<?php endforeach; ?>
                
                </ul>
              </div>
            </div>
			<!-- Pagination -->
			
          </div>
        </div>
        
        <!-- Footer -->
        <div class="utf-dashboard-footer-spacer-aera"></div>
       
      </div>
	  
    </div>
    <!-- Dashboard Content / End -->     
  </div>  