<div class="utf-dashboard-container-aera"> 
    
    <!-- Dashboard Sidebar / End --> 
    <?php $this->load->view($leftsidebar); ?>
    <!-- Dashboard Content -->
    <div class="utf-dashboard-content-container-aera" data-simplebar>
	  <div id="dashboard-titlebar" class="utf-dashboard-headline-item">
		<div class="row">
			<div class="col-xl-12">	
				<h3>Manage Jobs </h3>
				<nav id="breadcrumbs">
					<ul>
					  <li><a href="<?= base_url('employers'); ?>">Home</a></li>
					 					  <li>Manage Jobs </li>
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
            <div class="dashboard-box margin-top-0"> 
              <div class="headline">
                <h3>Manage Jobs</h3>
              </div>
              <div class="content">
                <ul class="utf-dashboard-box-list">
				  <?php if(empty($job_info)): ?>
                  <p class="text-gray"><strong>Sorry,</strong> you didn't posted any job yet!</p>
                <?php endif; ?>

                <?php foreach ($job_info as $job): ?>
                  <li> 
                    <div class="utf-job-listing">                       
                      <div class="utf-job-listing-details"> 
                        <div class="utf-job-listing-description">
						 
						  <h3 class="utf-job-listing-title"><a href=""><?= $job['job_title']; ?></a></h3>
						   <a href="<?= base_url('employers/applicants/view/'.$job['id']); ?>"><span class="dashboard-status-button utf-status-item green">Applied (<?= $job['cand_applied']?>)</span></a>&nbsp;<a href="<?= base_url('employers/applicants/shortlisted/'.$job['id']); ?>"><span class="dashboard-status-button utf-status-item green">Shortlisted (<?= $job['total_shortlisted']?>)</span></a>	
						  <div class="utf-job-listing-footer">
                            <ul>
							  <li><i class="icon-feather-briefcase"></i>  <?= get_industry_name($job['industry']); ?></li>
                              <li><i class="icon-material-outline-date-range"></i> <?= $job['created_date']; ?></li>
                              <li><i class="icon-material-outline-location-on"></i> <?= get_city_name($job['city']); ?>, <?= get_country_name($job['country']); ?></li>
                            </ul>
							<div class="utf-buttons-to-right"> 
								<a href="<?= base_url('employers/job/edit/'.$job['id']); ?>" class="button green ripple-effect ico" data-tippy-placement="top" data-tippy="" data-original-title="Edit"><i class="icon-feather-edit"></i></a>
								<a href="<?= base_url('employers/job/delete/'.$job['id']); ?>" class="button red ripple-effect ico" data-tippy-placement="top" data-tippy="" data-original-title="Remove"><i class="icon-feather-trash-2"></i></a> 
							</div>
                          </div>
                        </div>
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
         <?php echo form_close();?>    
        <!-- Footer -->
        <div class="utf-dashboard-footer-spacer-aera"></div>
       
      </div>
	  
    </div>
    <!-- Dashboard Content / End -->     
  </div>  