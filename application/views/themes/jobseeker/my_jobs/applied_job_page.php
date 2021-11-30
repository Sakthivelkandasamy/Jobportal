<div class="utf-dashboard-container-aera"> 
    
    <!-- Dashboard Sidebar / End --> 
     <?php $this->load->view($leftsidebar); ?>
    <!-- Dashboard Content -->
    <div class="utf-dashboard-content-container-aera" data-simplebar>
	  <div id="dashboard-titlebar" class="utf-dashboard-headline-item">
		<div class="row">
			<div class="col-xl-12">	
				<h3>Applied Jobs</h3>
				<nav id="breadcrumbs">
					<ul>
					  <li><a href="<?= base_url(); ?>">Home</a></li>
					  <li><a href="<?= base_url(); ?>">Dashboard</a></li>
					  <li>Applied Jobs</li>
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
                <h3>Applied Jobs</h3>
              </div>
              <div class="content">
				<?php if(empty($jobs)): ?>
                  <p class="text-gray"><strong>Sorry,</strong> there is no job application at the moment</p>
                <?php endif; ?>
                <ul class="utf-dashboard-box-list">
				<?php foreach($jobs as $job): ?>
                  <li> 
                    <div class="utf-job-listing"> 
                      <div class="utf-job-listing-details"> 
                        <a href="<?= site_url('jobs/'.$job['id'].'/'.($job['job_slug'])); ?>" class="utf-job-listing-company-logo"> <img src="<?= base_url()?>assets/img/job_icon.png" alt=""> </a> 
                        <div class="utf-job-listing-description">
						  <span class="dashboard-status-button utf-job-status-item green"><i class="icon-material-outline-business-center"></i> <?= $job['job_type']; ?></span>
                          <h3 class="utf-job-listing-title"><a href="<?= site_url('jobs/'.$job['id'].'/'.($job['job_slug'])); ?>"><?= $job['company_name']; ?> - <?= text_limit($job['job_title'], 35); ?></a></h3>
                          <div class="utf-job-listing-footer">
                            <ul>
							  <li><i class="icon-feather-briefcase"></i> <?= get_industry_name($job['industry']); ?></li>							
                              <li><i class="icon-material-outline-location-on"></i> <?= get_city_name($job['city']); ?>, <?= get_country_name($job['country']); ?></li>
                              <li><i class="icon-material-outline-access-time"></i> <?= time_ago($job['created_date']); ?></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="utf-buttons-to-right"> <a href="#" class="button red" title="Remove" data-tippy-placement="top"><i class="icon-feather-trash-2"></i> Remove</a> </div>
                  </li>
                <?php endforeach; ?>
                </ul>				
              </div>
            </div>
			<!-- Pagination -->
			<div class="clearfix"></div>
			<div class="utf-pagination-container-aera margin-top-20 margin-bottom-0">
			  <nav class="pagination">
				<ul>
				  <li class="utf-pagination-arrow"><a href="#" class="ripple-effect"><i class="icon-material-outline-keyboard-arrow-left"></i></a></li> 
				  <li><a href="#" class="ripple-effect current-page">1</a></li>
				  <li><a href="#" class="ripple-effect">2</a></li>
				  <li><a href="#" class="ripple-effect">3</a></li>
				  <li class="utf-pagination-arrow"><a href="#" class="ripple-effect"><i class="icon-material-outline-keyboard-arrow-right"></i></a></li>
				</ul>
			  </nav>
			</div>
			<div class="clearfix"></div>
          </div>          
        </div>
        
        <!-- Footer -->
        <div class="utf-dashboard-footer-spacer-aera"></div>
        <div class="utf-small-footer margin-top-15">
          <div class="utf-small-footer-copyrights">Copyright &copy; 2021 All Rights Reserved.</div>                    
        </div>
      </div>
    </div>
    <!-- Dashboard Content / End -->     
  </div>
