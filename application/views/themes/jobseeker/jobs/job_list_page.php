<div id="titlebar" class="gradient">
		<div class="container">
		  <div class="row">
			<div class="col-md-12">
			  <h2>Jobs Listing</h2>
			  <nav id="breadcrumbs">
				<ul>
				  <li><a href="<?= base_url(''); ?>">Home</a></li>
				  <li>Jobs Listing</li>
				</ul>
			  </nav>
			</div>
		  </div>
		</div>
	</div>
  <!-- Titlebar End -->
  
  <!-- Search Jobs Start -->
  <div class="inner_search_block_section padding-top-0 padding-bottom-40">
	<div class="container">
	<?php $attributes = array('id' => 'search_job', 'method' => 'post');
             		 echo form_open('jobs/search',$attributes);?>
		<div class="col-md-12">
		  <div class="utf-intro-banner-search-form-block"> 
			<div class="utf-intro-search-field-item">
			  <i class="icon-feather-search"></i>
			  <input id="intro-keywords" type="text" placeholder="Search Jobs Keywords...">
			</div>
			<div class="utf-intro-search-field-item">
			  <select class="selectpicker default" data-live-search="true" data-selected-text-format="count" data-size="5" title="Select Location">
				 <option value="">Select Location</option>
				<?php foreach($cities as $city):?>
				  <?php if($search_value['city'] == $city['id']): ?>
					<option value="<?= $city['id']; ?>" selected> <?= $city['name']; ?> </option>
				  <?php else: ?>
					<option value="<?= $city['id']; ?>"> <?= $city['name']; ?> </option>
				<?php endif; endforeach; ?>
			  </select>
			</div>
			<div class="utf-intro-search-button">
			<button type="submit" name="search" class="button ripple-effect"><i class="icon-material-outline-search"></i> Search</button>
			</div>
		  </div>
		  <p class="utf-trending-silver-item"><span class="utf-trending-black-item">Trending Jobs Keywords:</span> Web Designer,  Web Developer,  Graphic Designer,  PHP Developer,  IOS Developer,  Android Developer</p>
		</div>
		<?php echo form_close(); ?>
	</div>	    
  </div>
  <!-- Search Jobs End -->
  
  <!-- Page Content -->
  <div class="container">
    <div class="row">
      <div class="col-xl-3 col-lg-4">
        <div class="utf-sidebar-container-aera">
		  <div class="utf-sidebar-widget-item">
			<div class="utf-quote-box utf-jobs-listing-utf-quote-box">
				<div class="utf-quote-info">
					<h4>Make a Difference with Online Resume!</h4>
					<p>Your Resume in Minutes with Jobs Resume Assistant is Ready!</p>
					<a href="register.html" class="button utf-ripple-effect-dark utf-button-sliding-icon margin-top-0">Create Account <i class="icon-feather-chevron-right"></i></a>
				</div>
			</div>
		  </div>
		  
		  <div class="utf-sidebar-widget-item">
            <h3>Search Keywords</h3>
            <div class="utf-input-with-icon">
                <input type="text" placeholder="Search Keywords...">
                <i class="icon-material-outline-search"></i> 
			</div>
          </div>
		  
          <div class="utf-sidebar-widget-item">
            <h3>Category</h3>
            <select class="selectpicker" data-live-search="true" data-selected-text-format="count" data-size="7" title="All Categories">
              <option>Web Design</option>
              <option>Accountant</option>
              <option>Data Analytics</option>
              <option>Marketing</option>
              <option>Software Developing</option>
              <option>IT & Networking</option>
              <option>Translation</option>
              <option>Sales & Marketing</option>
            </select>
          </div>
		  
		  
          
          <div class="utf-sidebar-widget-item">
            <h3>Job Type</h3>
            <div class="utf-radio-btn-list">
				<div class="checkbox">
				  <input type="checkbox" id="chekcbox1" checked>
				  <label for="chekcbox1"><span class="checkbox-icon"></span> Full Time Jobs</label>
				</div>
				<div class="checkbox">
				  <input type="checkbox" id="chekcbox2">
				  <label for="chekcbox2"><span class="checkbox-icon"></span> Part Time Jobs</label>
				</div>
				<div class="checkbox">
				  <input type="checkbox" id="chekcbox3">
				  <label for="chekcbox3"><span class="checkbox-icon"></span> Freelancer Jobs</label>
				</div>
				<div class="checkbox">
				  <input type="checkbox" id="chekcbox4">
				  <label for="chekcbox4"><span class="checkbox-icon"></span> Internship Jobs</label>
				</div>
				<div class="checkbox">
				  <input type="checkbox" id="chekcbox5">
				  <label for="chekcbox5"><span class="checkbox-icon"></span> Temporary Jobs</label>
				</div>				
            </div>
          </div>
		  <div class="clearfix"></div>
		  
		  <div class="utf-sidebar-widget-item">
            <h3>Experince</h3>
            <div class="utf-radio-btn-list">
				<div class="checkbox">
				  <input type="checkbox" id="chekcbox01" checked>
				  <label for="chekcbox01"><span class="checkbox-icon"></span> 1Year to 2Year</label>
				</div>
				<div class="checkbox">
				  <input type="checkbox" id="chekcbox02">
				  <label for="chekcbox02"><span class="checkbox-icon"></span> 2Year to 3Year</label>
				</div>
				<div class="checkbox">
				  <input type="checkbox" id="chekcbox03">
				  <label for="chekcbox03"><span class="checkbox-icon"></span> 3Year to 4Year</label>
				</div>
				<div class="checkbox">
				  <input type="checkbox" id="chekcbox04">
				  <label for="chekcbox04"><span class="checkbox-icon"></span> 4Year to 5Year</label>
				</div>				
            </div>
          </div>
		  <div class="clearfix"></div>
		  
		 
          
         
          
         
		  
		  
        </div>
      </div>
	  
      <div class="col-xl-9 col-lg-8">
        <div class="utf-inner-search-section-title">
			<h4><i class="icon-material-outline-search"></i> Search Jobs Listing Results</h4>
		</div>
        <div class="utf-notify-box-aera margin-top-15">
          <div class="utf-switch-container-item">
            <span>Showing 1–10 of 50 Jobs Results :</span>			
          </div>          
		  <div class="sort-by">
				<span>Sort By:</span>
				<select class="selectpicker hide-tick">
					<option>A to Z</option>
					<option>Newest</option>
					<option>Oldest</option>
					<option>Random</option>
				</select>
			</div>
        </div>
		
        <div class="utf-listings-container-part compact-list-layout margin-top-35"> 
			<?php if(empty($jobs)): ?>
				<div class="alert alert-danger"><strong>Sorry,</strong> we could not find any job for the keywords that you entered</div>
			<?php endif; ?>
			<?php foreach($jobs as $job): ?>
			<a href="<?= site_url('jobs/'.$job['id'].'/'.($job['job_slug'])); ?>" class="utf-job-listing"> 
			  <div class="utf-job-listing-details"> 
				<div class="utf-job-listing-company-logo"> <img src="<?= base_url()?>assets/img/job_icon.png" alt=""> </div>
				<div class="utf-job-listing-description">
				  <span class="dashboard-status-button utf-job-status-item green"><i class="icon-material-outline-business-center"></i> <?= $job['job_type']; ?></span>
				  <h3 class="utf-job-listing-title"><?= $job['company_name']; ?> - <?= text_limit($job['job_title'], 35); ?><span class="utf-verified-badge" title="Verified Employer" data-tippy-placement="top"></span></h3>
				  <div class="utf-job-listing-footer">
					<ul>
					  <li><i class="icon-feather-briefcase"></i> <?= get_industry_name($job['industry']); ?></li>
					  <li><i class="icon-material-outline-location-on"></i><?= get_city_name($job['city']); ?>, <?= get_country_name($job['country']); ?></li>
					  <li><i class="icon-material-outline-access-time"></i> <?= time_ago($job['created_date']); ?></li>
					</ul>
				  </div>
				</div>
				<span class="bookmark-icon"></span> 
			   </div>
			</a> 
			<?php endforeach; ?>
	
		</div>
        
        <!-- Pagination -->
        <div class="clearfix"></div>
        <div class="row">
          <div class="col-md-12"> 
            <div class="utf-pagination-container-aera margin-top-30 margin-bottom-60">
              <nav class="pagination">
                <ul>
                  <li class="utf-pagination-arrow"><a href="#"><i class="icon-material-outline-keyboard-arrow-left"></i></a></li>
                  <li><a href="#" class="current-page">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li class="utf-pagination-arrow"><a href="#"><i class="icon-material-outline-keyboard-arrow-right"></i></a></li>
                </ul>
              </nav>
            </div>
          </div>
        </div>        
      </div>
    </div>
  </div>