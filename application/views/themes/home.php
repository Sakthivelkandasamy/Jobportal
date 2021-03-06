
  <style>
  .photo-category-box:before{
	  background: #ffffff !important;
  }
  .utf-opening-box-content-part h3 {
    color: #141313;
    font-size: 20px;
    line-height: 28px;
}
.photo-box:hover {
    box-shadow: 0 4px 12px rgb(157 154 151 / 25%);
}
  </style>
  <!-- Intro Banner  --> 
  <div class="intro-banner" data-background-image="<?= base_url(); ?>assets/new/images/home-background-01.jpg">
    <div class="container"> 
      <div class="row">
        <div class="col-md-12">
          <div class="utf-banner-headline-text-part">
            <h3>Find Nearby Jobs <span class="typed-words"></span></h3>
            <span>It is a Long Established Fact That a Reader Will be Distracted by The Readable.</span> 
          </div>
        </div>
      </div>
       <?php $attributes = array('id' => 'search_job1', 'method' => 'post');
       echo form_open('jobs/search',$attributes);?>
      <div class="row">
        <div class="col-md-12">
          <div class="utf-intro-banner-search-form-block margin-top-40"> 
            <div class="utf-intro-search-field-item">
			  <i class="icon-feather-search"></i>
			   <input  id="job_sort_id" type="hidden" name="sort">
              <input id="job_title" type="text" name="job_title" placeholder="Search Jobs Keywords...">
            </div>
			<div class="utf-intro-search-field-item">
              <select name="category" class="selectpicker default" data-live-search="true" data-selected-text-format="count" data-size="5" title="Select Category">
                <?php foreach($categories as $cate):?>
				<option value="<?= $cate['id']?>"><?= $cate['name']?></option>
                <?php endforeach; ?>
              </select>
            </div>
			<div class="utf-intro-search-field-item">
              <select name="city" class="selectpicker default" data-live-search="true" data-selected-text-format="count" data-size="5" title="Select Location">
                <?php foreach($cities as $city):?>
				<option value="<?= $city['id']?>"><?= $city['name']?></option>
                <?php endforeach; ?>
              </select>
            </div>
	
            <div class="utf-intro-search-button">
			<input type="submit" name="search" class="button ripple-effect" value="Search">
            </div>
          </div>
		  <p class="utf-trending-silver-item"><span class="utf-trending-black-item">Trending Jobs Keywords:</span> <a href="#">Web Designer</a>  <a href="#">Web Developer</a>  <a href="#">Graphic Designer</a>  <a href="#">PHP Developer</a>  <a href="#">IOS Developer</a>  <a href="#">Android Developer</a></p>
        </div>
      </div>
	   <?php echo form_close(); ?>
      <div class="row">
        <div class="col-md-12">
          <ul class="intro-stats margin-top-45 hide-under-992px">
            <li><i class="icon-material-outline-business-center"></i> <sub class="counter_item"><strong class="counter"><?php echo $category_counts['overalljobs_counts']; ?></strong> <span>Live Jobs Posted</span></sub> </li>
            <li><i class="icon-material-outline-assignment"></i> <sub class="counter_item"><strong class="counter">11,088</strong> <span>Jobs Candidate</span></sub> </li>
            <li><i class="icon-material-outline-library-books"></i> <sub class="counter_item"><strong class="counter">10,758</strong> <span>Companies Jobs</span></sub> </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- Jobs Category Boxes -->
 <div class="section margin-top-60 margin-bottom-70">
    <div class="container">
      <div class="row"> 
        <div class="col-xl-12">
          <div class="utf-section-headline-item centered margin-top-0 margin-bottom-40">
            <span>Featured Job Categories</span>
			<h3>Who are in extremely love with eco friendly system.</h3>
			<div class="utf-headline-display-inner-item">Jobs Categories</div>
			<p class="utf-slogan-text">Lorem Ipsum is simply dummy text printing and type setting industry Lorem Ipsum been industry standard dummy text ever since when unknown printer took a galley.</p>
          </div>
        </div>
		<div class="col-xl-3 col-md-6 col-lg-4" style="background: #ffffff !important;"> 
			<a href="<?= base_url('jobs/category/accounting'); ?>" class="photo-box photo-category-box small" >
			  <div class="utf-opening-position-counter-item"><?php echo $category_counts['accounting_counts']; ?> Openings</div>
			  <div class="utf-opening-box-content-part">
				<div class="utf-category-box-icon-item"> 
				<img src="<?= base_url(''); ?>assets/img/o1.png" alt="">
				</div>
				
				<h3>Accounting</h3>				
				<span><?php echo $category_counts['accounting_counts']; ?> Jobs</span> 
			  </div>
			</a> 
		</div>
        <div class="col-xl-3 col-md-6 col-lg-4"> 
			<a href="<?= base_url('jobs/search/category/construction'); ?>" class="photo-box photo-category-box small" >
			  <div class="utf-opening-position-counter-item"><?php echo $category_counts['construction_counts']; ?> Openings</div>	
			  <div class="utf-opening-box-content-part">
				<div class="utf-category-box-icon-item"> 
				<img src="<?= base_url(); ?>assets/img/o2.png" alt="">
				</div>
				<h3>Construction</h3>				
				<span><?php echo $category_counts['construction_counts']; ?> Jobs</span> 
			  </div>
			</a> 
		</div>
        
        <div class="col-xl-3 col-md-6 col-lg-4"> 
			<a href="<?= base_url('jobs/category/information-technology'); ?>" class="photo-box photo-category-box small" >
			  <div class="utf-opening-position-counter-item"><?php echo $category_counts['information_counts']; ?> Openings</div>
			  <div class="utf-opening-box-content-part">
				<div class="utf-category-box-icon-item"> 
				 <img src="<?= base_url(); ?>assets/img/o3.png" alt="">
				</div>
				<h3>Technology</h3>				
				<span><?php echo $category_counts['information_counts']; ?> Jobs</span> 
			  </div>
			</a> 
		</div>
        <div class="col-xl-3 col-md-6 col-lg-4"> 
			<a href="<?= base_url('jobs/category/sales'); ?>" class="photo-box photo-category-box small" >
			  <div class="utf-opening-position-counter-item"><?php echo $category_counts['sales_counts']; ?> Openings</div>
			  <div class="utf-opening-box-content-part">
				<div class="utf-category-box-icon-item">
				 <img src="<?= base_url(); ?>assets/img/o4.png" alt="">
				</div>
				<h3>Sales</h3>				
				<span><?php echo $category_counts['sales_counts']; ?> Jobs</span> 
			  </div>
			</a> 
		</div>
        <div class="col-xl-3 col-md-6 col-lg-4"> 
			<a href="<?= base_url('jobs/category/medical-healthcare'); ?>" class="photo-box photo-category-box small" >
			  <div class="utf-opening-position-counter-item"><?php echo $category_counts['medical_counts']; ?> Openings</div>
			  <div class="utf-opening-box-content-part">
				<div class="utf-category-box-icon-item"> 
				<img src="<?= base_url(); ?>assets/img/o5.png" alt="">
				</div>
				<h3>Medical</h3>				
				<span><?php echo $category_counts['medical_counts']; ?> Jobs</span>
			  </div>
			</a> 
		</div>
        <div class="col-xl-3 col-md-6 col-lg-4"> 
			<a href="<?= base_url('jobs/category/engineering'); ?>" class="photo-box photo-category-box small" >
			  <div class="utf-opening-position-counter-item"><?php echo $category_counts['engineering_counts']; ?> Openings</div>
			  <div class="utf-opening-box-content-part">
				<div class="utf-category-box-icon-item">
				<img src="<?= base_url(); ?>assets/img/o6.png" alt="">
				</div>
				<h3>Engineering</h3>				
				<span><?php echo $category_counts['engineering_counts']; ?> Jobs</span>
			  </div>
			</a> 
		</div>
       
		<div class="col-xl-12 utf-centered-button margin-top-10">
			<a href="<?= base_url('jobs-by-category'); ?>" class="button utf-ripple-effect-dark utf-button-sliding-icon margin-top-0">View All Categories <i class="icon-feather-chevron-right"></i></a> 
		</div>
      </div>
    </div>
  </div>
  <!-- Jobs Category Boxes / End --> 
  
  <!-- Latest Jobs -->
  <div class="section gray padding-top-60 padding-bottom-60">
    <div class="container">
      <div class="row">
        <div class="col-xl-12"> 
          <div class="utf-section-headline-item centered margin-top-0 margin-bottom-40">
            <span>Latest Jobs Post</span>
			<h3>Jobs You May Be Interested</h3>
			<div class="utf-headline-display-inner-item">Latest Jobs Post</div>
			<p class="utf-slogan-text">Lorem Ipsum is simply dummy text printing and type setting industry Lorem Ipsum been industry standard dummy text ever since when unknown printer took a galley.</p>
          </div>
          <div class="utf-listings-container-part compact-list-layout margin-top-35"> 
		  
            <?php foreach($jobs as $job): ?>
			
			<a href="<?= site_url('jobs/'.$job['id'].'/'.($job['job_slug'])); ?>" class="utf-job-listing utf-apply-button-item"> 
				<div class="utf-job-listing-details"> 
				  <div class="utf-job-listing-company-logo"> <img src="<?= base_url(); ?>assets/img/job_icon.png" alt=""> </div>
				  <div class="utf-job-listing-description">
				    <span class="dashboard-status-button utf-job-status-item green"><i class="icon-material-outline-business-center"></i> Full Time</span>
					<h3 class="utf-job-listing-title"><?= text_limit($job['job_title'], 35); ?>  <small><?= $job['company_name']; ?> </small></h3>
					<div class="utf-job-listing-footer">
					  <ul>
						<li><i class="icon-feather-briefcase"></i> <?= get_industry_name($job['industry']); ?></li>
						<!---
						<li><i class="icon-material-outline-account-balance-wallet"></i> $35000-$38000</li>
						---->
						<li><i class="icon-material-outline-location-on"></i> <?= get_city_name($job['city']); ?>, <?= get_country_name($job['country']); ?></li>
						<li><i class="icon-material-outline-access-time"></i><?= time_ago($job['created_date']); ?></li>
					  </ul>
					</div>
				  </div>
					
				  <span class="list-apply-button ripple-effect">Browse Job <i class="icon-line-awesome-bullhorn"></i></span> 
				</div>
            </a> 
			<?php endforeach; ?>
          </div>
		  <div class="utf-centered-button margin-top-10">
			<a href="<?= base_url('jobs'); ?>" class="button utf-ripple-effect-dark utf-button-sliding-icon margin-top-20">Browse All Jobs <i class="icon-feather-chevron-right"></i></a> 
		  </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Latest Jobs / End --> 
  
  <!-- Photo Section -->
	<div class="utf-photo-section-block" >
		<div class="text-content white-font">
			<div class="container">
				<div class="row">
        <div class="col-xl-12"> 
          <div class="utf-section-headline-item centered margin-top-0 margin-bottom-40">
            <span>Business Support Service</span>
			<h3>How It Works?</h3>
			<div class="utf-headline-display-inner-item">Business Support Service</div>
			<p  style="color:#fff;" class="utf-slogan-text">Lorem Ipsum is simply dummy text printing and type setting industry Lorem Ipsum been industry standard dummy text ever since when unknown printer took a galley.</p>
          </div>
        </div>
		<div class="col-xl-3 col-md-6 col-sm-12"> 
          <div class="icon-box with-line" style="background:#837e7e"> 
            <div class="utf-icon-box-circle">
              <div class="utf-icon-box-circle-inner"> <i class="icon-line-awesome-user-secret"></i></div>
            </div>
            <h3>User Register</h3>
            <p style="color:#fff;">Lorem Ipsum is simply dummy text the printing and type setting industry Lorem Ipsum has been industry.</p>
          </div>
        </div>
		<div class="col-xl-3 col-md-6 col-sm-12"> 
          <div class="icon-box with-line" style="background:#837e7e"> 
            <div class="utf-icon-box-circle">
              <div class="utf-icon-box-circle-inner"> <i class="icon-line-awesome-user-plus"></i></div>
            </div>
            <h3>Create Account</h3>
            <p style="color:#fff;">Lorem Ipsum is simply dummy text the printing and type setting industry Lorem Ipsum has been industry.</p>
          </div>
        </div>
		<div class="col-xl-3 col-md-6 col-sm-12"> 
          <div class="icon-box" style="background:#837e7e"> 
            <div class="utf-icon-box-circle">
              <div class="utf-icon-box-circle-inner"> <i class="icon-line-awesome-edit"></i></div>
            </div>
            <h3>Search Jobs</h3>
            <p style="color:#fff;">Lorem Ipsum is simply dummy text the printing and type setting industry Lorem Ipsum has been industry.</p>
          </div>
        </div>
		<div class="col-xl-3 col-md-6 col-sm-12"> 
          <div class="icon-box" style="background:#837e7e"> 
            <div class="utf-icon-box-circle">
              <div class="utf-icon-box-circle-inner"> <i class="icon-line-awesome-save"></i></div>
            </div>
            <h3>Save & Apply</h3>
            <p style="color:#fff;">Lorem Ipsum is simply dummy text the printing and type setting industry Lorem Ipsum has been industry.</p>
          </div>
        </div>
      </div>
			</div>
		</div>
	</div>
  <!-- Photo Section / End --> 
  
 
   <!-- Membership Plans -->
  <div class="section padding-top-65 padding-bottom-75">
    <div class="container">
      <div class="row">
        <div class="col-xl-12"> 
          <div class="utf-section-headline-item centered margin-bottom-30">
            <span>Pricing Plan</span>
			<h3>Pay For What You Use</h3>
			<div class="utf-headline-display-inner-item">Pricing Plan</div>
			<p class="utf-slogan-text">Lorem Ipsum is simply dummy text printing and type setting industry Lorem Ipsum been industry standard dummy text ever since when unknown printer took a galley.</p>
          </div>
        </div>
        <div class="col-xl-12">           
          <div class="utf-plan-radios-item margin-bottom-40">
            <div class="radio utf-monthly-radio-item">
              <input id="radio-5" name="radio-payment-type" type="radio" checked>
              <label for="radio-5" title="Monthly Plan" data-tippy-placement="top"><span class="radio-label"></span> Monthly Plan</label>
            </div>
            <div class="radio billed-yearly-radio">
              <input id="radio-6" name="radio-payment-type" type="radio">
              <label for="radio-6" title="Annually Plan" data-tippy-placement="top"><span class="radio-label"></span> Annually Plan</label>
            </div>
          </div>
          <div class="utf-pricing-plans-container-block"> 
            <div class="pricing-plan recommended">
			  <div class="utf-pricing-plan-title-block">	
				<div class="utf-recommended-badge">Basic Jobs Plan</div>	
				<div class="utf-pricing-plan-label utf-pricing-monthly-label"><strong>$29</strong>/ Month</div>
				<div class="utf-pricing-plan-label utf-pricing-yearly-label"><strong>$399</strong>/ Years</div>
			  </div>
              <p>One of our jobs has some kind of flexibility option - such as telecommuting, a part-time schedule.</p>
              <div class="utf-pricing-plan-features-item"> 
                <ul>
				  <li>Unlimited Reservations</li>
				  <li><div class="utf-verified-badge"></div> 10 Manage Jobs Posting</li>
				  <li>Monthly Reports and Analytics</li>
				  <li><div class="utf-verified-badge"></div> Job Displayed for 30 Days</li>
				  <li>Data Security and Backups</li>
				  <li><div class="utf-verified-badge"></div> Unlimited Staff Accounts</li>
				  <li>Premium Support 24/7</li>
                </ul>
              </div>
              <a href="checkout-page.html" class="button utf-ripple-effect-dark utf-button-sliding-icon full-width margin-top-20">Purchase Now <i class="icon-feather-chevron-right"></i></a>			   
			</div>
            
            <div class="pricing-plan recommended">
			  <div class="utf-pricing-plan-title-block">	
				<div class="utf-recommended-badge">Standard Jobs Plan</div>
				<div class="utf-pricing-plan-label utf-pricing-monthly-label"><strong>$59</strong>/ Month</div>
                <div class="utf-pricing-plan-label utf-pricing-yearly-label"><strong>$699</strong>/ Years</div>
			  </div>
              <p>One of our jobs has some kind of flexibility option - such as telecommuting, a part-time schedule.</p>
              <div class="utf-pricing-plan-features-item"> 
                <ul>
				  <li>Unlimited Reservations</li>
				  <li><div class="utf-verified-badge"></div> 10 Manage Jobs Posting</li>
				  <li>Monthly Reports and Analytics</li>
				  <li><div class="utf-verified-badge"></div> Job Displayed for 30 Days</li>
				  <li>Data Security and Backups</li>
				  <li><div class="utf-verified-badge"></div> Unlimited Staff Accounts</li>
				  <li>Premium Support 24/7</li>
                </ul>
              </div>
              <a href="checkout-page.html" class="button utf-ripple-effect-dark utf-button-sliding-icon full-width margin-top-20">Purchase Now <i class="icon-feather-chevron-right"></i></a>			  
			</div>
            
            <div class="pricing-plan recommended">
			  <div class="utf-pricing-plan-title-block">
				<div class="utf-recommended-badge">Extended Jobs Plan</div>
				<div class="utf-pricing-plan-label utf-pricing-monthly-label"><strong>$79</strong>/ Month</div>
                <div class="utf-pricing-plan-label utf-pricing-yearly-label"><strong>$999</strong>/ Years</div>	
			  </div>
              <p>One of our jobs has some kind of flexibility option - such as telecommuting, a part-time schedule.</p>
              <div class="utf-pricing-plan-features-item"> 
                <ul>
				  <li>Unlimited Reservations</li>
				  <li><div class="utf-verified-badge"></div> 10 Manage Jobs Posting</li>
				  <li>Monthly Reports and Analytics</li>
				  <li><div class="utf-verified-badge"></div> Job Displayed for 30 Days</li>
				  <li>Data Security and Backups</li>
				  <li><div class="utf-verified-badge"></div> Unlimited Staff Accounts</li>
				  <li>Premium Support 24/7</li>
                </ul>
              </div>
              <a href="checkout-page.html" class="button utf-ripple-effect-dark utf-button-sliding-icon full-width margin-top-20">Purchase Now <i class="icon-feather-chevron-right"></i></a>			   
			</div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Membership Plans / End--> 
  
  <!-- Icon Boxes -->
  
  <!-- Icon Boxes / End --> 
   <!-- Start Need Any Help -->
  
  <!-- End Need Any Help -->
  <!-- Testimonials -->
  <div class="section gray padding-top-65 padding-bottom-65">
    <div class="container">
      <div class="row">
        <div class="col-xl-12"> 
          <div class="utf-section-headline-item centered margin-top-0 margin-bottom-30">
            <span>Clients Say About Us</span>
			<h3>Candidates Testimonials</h3>
			<div class="utf-headline-display-inner-item">Clients Say About Us</div>
			<p class="utf-slogan-text">Lorem Ipsum is simply dummy text printing and type setting industry Lorem Ipsum been industry standard dummy text ever since when unknown printer took a galley.</p>
          </div>
        </div>
      </div>
    </div>
    <!-- Categories Carousel -->
    <div class="utf-carousel-container-block">
      <div class="utf-testimonial-carousel-block testimonials"> 
        <div class="utf-carousel-review-item">
          <div class="utf-testimonial-box">
            <div class="utf-testimonial-avatar-photo"> <img src="<?= base_url(); ?>assets/new/images/user_small_1.jpg" alt=""> </div>
            <div class="utf-testimonial-author-utf-detail-item">
              <h4>John Williams</h4>
              <span>Graphics Designer</span> 
			</div>
            <div class="testimonial">Lorem Ipsum is simply dummy text of printing and type setting industry. Lorem Ipsum been industry standard dummy text ever since, when an unknown printer took a galley of type and laboris nisi ut aliquip ex minim veniam scrambled it to make a type specimen book. It has survived not only five into electronic type setting popularised.</div>
          </div>
        </div>
        <div class="utf-carousel-review-item">
          <div class="utf-testimonial-box">
            <div class="utf-testimonial-avatar-photo"> <img src="<?= base_url(); ?>assets/new/images/user_small_2.jpg" alt=""> </div>
            <div class="utf-testimonial-author-utf-detail-item">
              <h4>John Williams</h4>
              <span>IOS Developer</span> 
			</div>
            <div class="testimonial">Lorem Ipsum is simply dummy text of printing and type setting industry. Lorem Ipsum been industry standard dummy text ever since, when an unknown printer took a galley of type and laboris nisi ut aliquip ex minim veniam scrambled it to make a type specimen book. It has survived not only five into electronic type setting popularised.</div>
          </div>
        </div>
        <div class="utf-carousel-review-item">
          <div class="utf-testimonial-box">
            <div class="utf-testimonial-avatar-photo"> <img src="<?= base_url(); ?>assets/new/images/user_small_3.jpg" alt=""> </div>
            <div class="utf-testimonial-author-utf-detail-item">
              <h4>John Williams</h4>
              <span>Android Developer</span> 
			</div>
            <div class="testimonial">Lorem Ipsum is simply dummy text of printing and type setting industry. Lorem Ipsum been industry standard dummy text ever since, when an unknown printer took a galley of type and laboris nisi ut aliquip ex minim veniam scrambled it to make a type specimen book. It has survived not only five into electronic type setting popularised.</div>
          </div>
        </div>
        <div class="utf-carousel-review-item">
          <div class="utf-testimonial-box">
            <div class="utf-testimonial-avatar-photo"> <img src="<?= base_url(); ?>assets/new/images/user_small_1.jpg" alt=""> </div>
            <div class="utf-testimonial-author-utf-detail-item">
              <h4>John Williams</h4>
              <span>Web Developer</span> 
			</div>
            <div class="testimonial">Lorem Ipsum is simply dummy text of printing and type setting industry. Lorem Ipsum been industry standard dummy text ever since, when an unknown printer took a galley of type and laboris nisi ut aliquip ex minim veniam scrambled it to make a type specimen book. It has survived not only five into electronic type setting popularised.</div>
          </div>
        </div>
        <div class="utf-carousel-review-item">
          <div class="utf-testimonial-box">
            <div class="utf-testimonial-avatar-photo"> <img src="<?= base_url(); ?>assets/new/images/user_small_2.jpg" alt=""> </div>
            <div class="utf-testimonial-author-utf-detail-item">
              <h4>John Williams</h4>
              <span>UI/UX Designer</span> 
			</div>
            <div class="testimonial">Lorem Ipsum is simply dummy text of printing and type setting industry. Lorem Ipsum been industry standard dummy text ever since, when an unknown printer took a galley of type and laboris nisi ut aliquip ex minim veniam scrambled it to make a type specimen book. It has survived not only five into electronic type setting popularised.</div>
          </div>
        </div>
      </div>
    </div>    
  </div>
  <!-- Testimonials / End --> 
  
  <!-- Start Section Callout -->
  <div class="jbm-section-callout">
	<div class="container-fluid">
		<div class="row">
			<div class="col-xl-6 col-md-6 col-xs-12 callout-bg-1 callout-section-left pos-relative">
				<div class="callout-bg"></div>
				<div class="jbm-callout-in jbm-callout-in-padding pull-right">
					<div class="jbm-section-title margin-top-80 margin-bottom-80">
						<h2>Find Your Browse Companies</h2>
						<span class="section-tit-line"></span>
						<p>Lorem Ipsum is simply dummy text of printing and type setting industry. Lorem Ipsum been industry standard dummy text ever since, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
						<a href="<?= base_url('company'); ?>" class="button utf-ripple-effect-dark utf-button-sliding-icon margin-top-10">Browse Companies <i class="icon-feather-chevrons-right"></i></a>
					</div>
				</div>
			</div>
			<div class="col-xl-6 col-md-6 col-xs-12 callout-bg-2 callout-section-right pos-relative">
				<div class="callout-bg"></div>
				<div class="jbm-callout-in jbm-callout-in-padding pull-left">
					<div class="jbm-section-title margin-bottom-80 margin-top-80">
						<h2>Find Your Browse Jobs</h2>
						<span class="section-tit-line"></span>
						<p>Lorem Ipsum is simply dummy text of printing and type setting industry. Lorem Ipsum been industry standard dummy text ever since, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
						<a href="<?= base_url('jobs'); ?>" class="button utf-ripple-effect-dark utf-button-sliding-icon margin-top-10">Browse Jobs <i class="icon-feather-chevrons-right"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
  </div>
  <!-- End Section Callout -->
  
 
  
  <!-- Counters -->
 
  <!-- Counters / End --> 
  
  
  <!-- Logo Carousel -->
  <div class="col-xl-12"> &nbsp;</div>
    <div class="col-xl-12"> &nbsp;</div>
	    <div class="col-xl-12"> &nbsp;</div>
  <div class="section gradient_item_area padding-top-60 padding-bottom-50"> 
    <div class="container">
      <div class="row">
        <div class="col-xl-12"> 
		  <div class="utf-section-headline-item centered margin-top-0 margin-bottom-40">
            <span>Popular Companies</span>
			<h3>Our Best Partners</h3>
			<div class="utf-headline-display-inner-item">Popular Companies</div>
			<p class="utf-slogan-text">Lorem Ipsum is simply dummy text printing and type setting industry Lorem Ipsum been industry standard dummy text ever since when unknown printer took a galley.</p>
          </div>	
          <div class="col-md-12">
            <div class="utf-logo-carousel-block">
			<?php foreach($companies as $company): ?>
              <div class="utf-carousel-logo-item"> <a href="<?= base_url('company/'.$company['company_slug']); ?>" target="_blank" title="javascript:void(0)"><img src="<?= base_url().$company['company_logo']; ?>" alt="company-img" /></a> </div>
            <?php endforeach; ?>
			</div>
          </div>
        </div>
      </div>
    </div>
  </div>
  