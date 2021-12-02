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
  <?php $attributes = array('id' => 'search_job', 'method' => 'post');
             		 echo form_open('jobs/search',$attributes);?>
  <div class="inner_search_block_section padding-top-0 padding-bottom-40">
	<div class="container">
	
		<div class="col-md-12">
		  <div class="utf-intro-banner-search-form-block"> 
			<div class="utf-intro-search-field-item">
			  <i class="icon-feather-search"></i>
			  <input  id="job_title" type="text" name="job_title" placeholder="Search Jobs Keywords...">
			  <input  id="job_type_id" type="hidden" name="job_type">
			  <input  id="period_id" type="hidden" name="experience">
			  <input  id="job_sort_id" type="hidden" name="sort">
			</div>
			
			<div class="utf-intro-search-field-item">
			  <select name="category" class="selectpicker default" data-live-search="true" data-selected-text-format="count" data-size="5" title="Select Category">
				 <option value="">Select Category</option>
				<?php foreach($categories as $cate):?>
				  <?php if($search_value['category'] == $cate['id']): ?>
					<option value="<?= $cate['id']; ?>" selected> <?= $cate['name']; ?> </option>
				  <?php else: ?>
					<option value="<?= $cate['id']; ?>"> <?= $cate['name']; ?> </option>
				<?php endif; endforeach; ?>
			  </select>
			</div>
			<div class="utf-intro-search-field-item">
			  <select name="city" class="selectpicker default" data-live-search="true" data-selected-text-format="count" data-size="5" title="Select Location">
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
			<input type="submit" name="search" class="button ripple-effect" value="Search">
             </div>
		  </div>
		  <p class="utf-trending-silver-item"><span class="utf-trending-black-item">Trending Jobs Keywords:</span> Web Designer,  Web Developer,  Graphic Designer,  PHP Developer,  IOS Developer,  Android Developer</p>
		</div>
		
	</div>	    
  </div>
  <?php echo form_close(); ?>
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
					<a href="<?= base_url('auth/login')?>" class="button utf-ripple-effect-dark utf-button-sliding-icon margin-top-0">Create Account <i class="icon-feather-chevron-right"></i></a>
				</div>
			</div>
		  </div>
		 
		  <div class="utf-sidebar-widget-item">
            <h3>Job Type</h3>
            <div class="utf-radio-btn-list" onclick="getjobtype()">
				<div class="checkbox">
				  <input type="radio" name="jobtype" id="chekcbox1" value="full-time" <?php if(isset($search_value['job_type'])) { if ($search_value['job_type'] == "full-time") { echo "checked='checked'"; } } ?>>
				  <label for="chekcbox1"><span class="checkbox-icon"></span> Full Time Jobs</label>
				</div>
				<div class="checkbox">
				  <input type="radio" name="jobtype" id="chekcbox2" value="part-time" <?php if(isset($search_value['job_type'])) { if ($search_value['job_type'] == "part-time") { echo "checked='checked'"; } } ?>>
				  <label for="chekcbox2"><span class="checkbox-icon"></span> Part Time Jobs</label>
				</div>
				<div class="checkbox">
				  <input type="radio" name="jobtype" id="chekcbox3" value="freelance" <?php if(isset($search_value['job_type'])) { if ($search_value['job_type'] == "freelance") { echo "checked='checked'"; } } ?>>
				  <label for="chekcbox3"><span class="checkbox-icon"></span> Freelancer Jobs</label>
				</div>
				<div class="checkbox">
				  <input type="radio" name="jobtype" id="chekcbox4" value="internship" <?php if(isset($search_value['job_type'])) { if ($search_value['job_type'] == "internship") { echo "checked='checked'"; } } ?>>
				  <label for="chekcbox4"><span class="checkbox-icon"></span> Internship Jobs</label>
				</div>
				<div class="checkbox">
				  <input type="radio" name="jobtype" id="chekcbox5" value="temporary" <?php if(isset($search_value['job_type'])) { if ($search_value['job_type'] == "temporary") { echo "checked='checked'"; } }?>>
				  <label for="chekcbox5"><span class="checkbox-icon"></span> Temporary Jobs</label>
				</div>				
            </div>
          </div>
		  <div class="clearfix"></div>
		  <div class="utf-sidebar-widget-item">
            <h3>Experince</h3>
            <div class="utf-radio-btn-list" onclick="getperiods()">
				<div class="checkbox">
				  <input type="radio" name="period" id="chekcbox01" value="0-1" <?php if(isset($search_value['experience'])) { if ($search_value['experience'] == "0-1") { echo "checked='checked'"; }} ?>>
				  <label for="chekcbox01"><span class="checkbox-icon"></span> 0 To 1 Years</label>
				</div>
				<div class="checkbox">
				  <input type="radio" name="period" id="chekcbox02" value="1-2" <?php  if(isset($search_value['experience'])) { if ($search_value['experience'] == '1-2') { echo "checked='checked'"; }} ?>>
				  <label for="chekcbox02"><span class="checkbox-icon"></span> 1 To 2 Years</label>
				</div>
				<div class="checkbox">
				  <input type="radio" name="period" id="chekcbox03" value="2-5" <?php if(isset($search_value['experience'])) { if ($search_value['experience'] == '2-5') { echo "checked='checked'"; }} ?>>
				  <label for="chekcbox03"><span class="checkbox-icon"></span> 2 To 5 Years</label>
				</div>
				<div class="checkbox">
				  <input type="radio" name="period" id="chekcbox04" value="5-10" <?php if(isset($search_value['experience'])) { if ($search_value['experience'] == '5-10') { echo "checked='checked'"; }} ?>>
				  <label for="chekcbox04"><span class="checkbox-icon"></span>5 To 10 Years</label>
				</div>
				<div class="checkbox">
				  <input type="radio" name="period" id="chekcbox04" value="10-15" <?php if(isset($search_value['experience'])) { if ($search_value['experience'] == '10-15') { echo "checked='checked'"; }} ?>>
				  <label for="chekcbox04"><span class="checkbox-icon"></span>10 To 15 Years</label>
				</div>
				<div class="checkbox">
				  <input type="radio" name="period" id="chekcbox04" value="15+" <?php if(isset($search_value['experience'])) { if ($search_value['experience'] == '15+') { echo "checked='checked'"; }} ?>>
				  <label for="chekcbox04"><span class="checkbox-icon"></span>15+ Years</label>
				</div>				
            </div>
          </div>
		  <div class="clearfix"></div>
		  
		 
          
         
          
         
		  
		  
        </div>
      </div>
	  <?php 
	  $total_count ='';
	  if(!empty($jobs)){
		 $total_count = count($jobs);
	  }
	  ?>
      <div class="col-xl-9 col-lg-8">
        <div class="utf-inner-search-section-title">
			<h4><i class="icon-material-outline-search"></i> Search Jobs Listing Results</h4>
		</div>
        <div class="utf-notify-box-aera margin-top-15">
          <div class="utf-switch-container-item">
            <span>Showing <?php echo $total_count; ?> Jobs Results :</span>			
          </div>          
		  <div class="sort-by">
				<span>Sort By:</span>
				<select id="id_of_select_element" class="selectpicker hide-tick" onchange="getsorting();">
					<option value="1" <?php if(isset($search_value['sort'])) { if ($search_value['sort'] == 1) { echo "selected='selected'"; } } ?>>A to Z</option>
					<option value="2" <?php if(isset($search_value['sort'])) { if ($search_value['sort'] == 2) { echo "selected='selected'"; } } ?>>Z to A</option>
					<option value="3" <?php if(isset($search_value['sort'])) { if ($search_value['sort'] == 3) { echo "selected='selected'"; } } ?>>Newest</option>
					<option value="4" <?php if(isset($search_value['sort'])) { if ($search_value['sort'] == 4) { echo "selected='selected'"; } } ?>>Oldest</option>
					
				</select>
			</div>
        </div>
		
        <div class="utf-listings-container-part compact-list-layout margin-top-35"> 
			<?php if(empty($jobs)): ?>
			<div class="notification error closeable">
			  <p><strong>Sorry,</strong> we could not find any job for the keywords that you entered</p>
			  <a class="close"></a> </div>
		 	<?php endif; ?>
			<?php foreach($jobs as $job): ?>
			<a href="<?= site_url('jobs/'.$job['id'].'/'.($job['job_slug'])); ?>" class="utf-job-listing"> 
			  <div class="utf-job-listing-details"> 
				<div class="utf-job-listing-company-logo"> <img src="<?= base_url()?>assets/img/job_icon.png" alt=""> </div>
				<div class="utf-job-listing-description">
				  <span class="dashboard-status-button utf-job-status-item green"><i class="icon-material-outline-business-center"></i> <?= $job['job_type']; ?></span>
				  <h3 class="utf-job-listing-title"><?= text_limit($job['job_title'], 35); ?> - <small><?= $job['company_name']; ?></small><span class="utf-verified-badge" title="Verified Employer" data-tippy-placement="top"></span></h3>
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
              
      </div>
    </div>
  </div>
  <script>
	function getjobtype(){
		var test = new Array();
		$("input[name='jobtype']:checked").each(function() {
			test.push($(this).val());
		});
		$('#job_type_id').val(test);
	}
	function getperiods(){
		var test = new Array();
		$("input[name='period']:checked").each(function() {
			test.push($(this).val());
		});
		$('#period_id').val(test);
	}
	function getsorting(){
		var sort_id = $("select#id_of_select_element option").filter(":selected").val();
		$('#job_sort_id').val(sort_id);
	}
	window.onload = function() {
	 getsorting();
	 getperiods();
	 getjobtype();
	}
  </script>