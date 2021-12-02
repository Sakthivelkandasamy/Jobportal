<div id="titlebar" class="gradient">
		<div class="container">
		  <div class="row">
			<div class="col-md-12">
			  <h2>CV Search</h2>
			  <nav id="breadcrumbs">
				<ul>
				  <li><a href="<?= base_url(); ?>">Home</a></li>
				  <li>CV Search</li>
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
		<div class="col-md-12">
		<?php $attributes = array('id' => 'search_job', 'method' => 'post');
             		 echo form_open('employers/cv/search',$attributes);?>
		  <div class="utf-intro-banner-search-form-block"> 
			<div class="utf-intro-search-field-item">
			  <i class="icon-feather-search"></i>
			  <input type="text" class="form-control" name="job_title" value="<?php if(isset($search_value['job_title'])) echo str_replace('-', ' ', $search_value['job_title']); ?>" placeholder="what are you looging for?">
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
			  <button class="button ripple-effect" type="submit" name="search"><i class="icon-material-outline-search"></i> Search</button>
			</div>
		  </div>
		  <?php echo form_close(); ?>
		</div>
	</div>	    
  </div>
  <!-- Search Jobs End -->
  
  <!-- Page Content -->
  <div class="container">
    <div class="row">
      <div class="col-xl-12 col-lg-12">
	  
	    <div class="utf-listings-container-part compact-list-layout margin-top-35"> 
				<?php if(empty($profiles)): ?>
		          <p class="alert alert-danger"><strong>Sorry,</strong> we could not find any profile for the keywords that you entered</p>
		        <?php endif; ?>
			<?php foreach($profiles as $row): ?>
			<span class="utf-job-listing"> 
			<a href="<?= base_url('employers/cv/make_shortlist/'.$row['id']); ?>"><span class="bookmark-icon"></span></a>
				<?php if(!empty($row['resume'])) :?>
				<a href="<?= base_url().$row['resume']; ?>" style="float:right;"><span class="paid">Download Resume</span></a>
				<?php endif; ?>
				<div class="utf-job-listing-details"> 
				<div class="utf-job-listing-company-logo"> <img src="<?= base_url()?>assets/img/user.png" alt=""></div>
				<div class="utf-job-listing-description">
				   <h2 class="utf-job-listing-title"><?= $row['firstname'].' '.$row['lastname']; ?></h2>
				  <h3 class="utf-job-listing-title"><?= $row['job_title']; ?> <span class="utf-verified-badge" title="Verified Employer" data-tippy-placement="top"></span></h3>
				  <p class="">Location: <?= get_city_name($row['city']).','. get_country_name($row['country']); ?></p>
						<p class="">Education: <?= get_education_level($row['education_level']); ?></p>
						<p class="">Experience: <?= $row['experience']; ?> Years</p>
						<p class="">Nationality: <?= get_country_name($row['nationality']); ?></p>
						<p class="">Current Salary: <?= $row['current_salary']; ?>$</p>
						<p class="">Expected Salary: <?= $row['expected_salary']; ?>$</p>
						<p class="">Category: <?= $row['category']; ?></p>
						<?php  $skills = explode("," , $row['skills']);?>
						
						Skills : 
				  <?php foreach($skills as $skill): ?>
				  <span class="dashboard-status-button utf-job-status-item green"><?= $skill; ?></span>
				  <?php endforeach; ?>
				 <p class="address">
							<?= $row['description']; ?>
						</p>
				  
				</div>
				
				
				
			  
			   </div>
			</span> 
			
			<?php endforeach; ?>			
		</div>
        
        <!-- Pagination -->
        <div class="clearfix"></div>
             
      </div>
    </div>
  </div>