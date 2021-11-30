<div class="preloader">
    <div class="utf-preloader">
        <span></span>
        <span></span>
        <span></span>
		<span></span>		
    </div>
</div>
<!-- Preloader End -->

<!-- Wrapper -->
<div id="wrapper"> 
  <!-- Header Container -->
  <header id="utf-header-container-block"> 
    <div id="header">
      <div class="container"> 
        <div class="utf-left-side"> 
          <div id="logo">   <a href="<?= base_url(); ?>"><img src="<?= base_url(); ?>assets/img/logo.png" alt="" title="" /></a>
        </div>
          <nav id="navigation">
            <ul id="responsive">
			<?php if ($this->session->userdata('is_user_login')): ?>
              <li class="menu-has-children"><a href="">Jobs</a>
                <ul>
                  <li><a href="<?= base_url('jobs'); ?>">Search Job</a></li>
                  <li><a href="<?= base_url('jobs-by-category'); ?>">Jobs by Category</a></li>
                  <li><a href="<?= base_url('jobs-by-industry'); ?>">Jobs by Industry</a></li>
                  <li><a href="<?= base_url('jobs-by-location'); ?>">Jobs by Location</a></li>
                  <li><a href="<?= base_url('jobs'); ?>">Browse all Jobs</a></li>
                </ul>
              </li>
              <li class=""><a href="<?= base_url('about'); ?>">About</a></li>
              <li class=""><a href="<?= base_url('company'); ?>">Companies</a></li> 
              <li><a href="<?= base_url('employers') ?>"> For Employers</a> 
              </li>   
              
            <?php elseif ($this->session->userdata('is_employer_login')): ?> 
            <li><a href="<?= base_url('employers/profile') ?>"> Dashboard</a>
            <li><a href="<?= base_url('employers/job/listing') ?>"> Manage Jobs</a>
            <li><a href="<?= base_url('employers/cv/search') ?>"> CV Search</a>
            <li><a href="<?= base_url('employers/job/post') ?>"> Post a Job</a> 
            </li>
              
            <?php else: ?> 
            <li class=""><a href="<?= base_url(); ?>">Home</a></li>
            <li class="menu-has-children"><a href="">Jobs</a>
              <ul>
                <li><a href="<?= base_url('jobs'); ?>">Search Job</a></li>
                <li><a href="<?= base_url('jobs-by-category'); ?>">Jobs by Category</a></li>
                <li><a href="<?= base_url('jobs-by-industry'); ?>">Jobs by Industry</a></li>
                <li><a href="<?= base_url('jobs-by-location'); ?>">Jobs by Location</a></li>
                <li><a href="<?= base_url('jobs'); ?>">Browse all Jobs</a></li>
              </ul>
            </li>
            <li class=""><a href="<?= base_url('about'); ?>">About</a></li>
            <li class=""><a href="<?= base_url('company'); ?>">Companies</a></li> 
			
			<!---
            <li><a class="ticker-btn-nav btn_login mt-1" href="<?= ($this->uri->segment(1) == 'employers')?base_url('employers/auth/login'): base_url('auth/login') ?>"><i class="lnr lnr-user pr-1"></i> Login</a></li>
            --->
			<li><a class="nav_btn mt-1" href="<?= base_url('employers') ?>"><i class="lnr lnr-briefcase pr-1"></i> For Employers</a> </li>
            <?php endif; ?> 
              
            </ul>
          </nav>
          <div class="clearfix"></div>                    
        </div>
        
        <div class="utf-right-side"> 
		<?php if ($this->session->userdata('is_employer_login')){ ?>   
			<div class="utf-header-widget-item"> 
            <div class="utf-header-notifications user-menu">
              <div class="utf-header-notifications-trigger user-profile-title"> 
				<a href="#">
					<div class="user-avatar status-online"><img src="<?= base_url(); ?>assets/img/user.png" alt=""> </div>	
					<div class="user-name">Hi, <?= $this->session->userdata('username'); ?>!</div>	
                </a> 
			  </div>
              
			  <div class="utf-header-notifications-dropdown-block"> 
				<ul class="utf-user-menu-dropdown-nav">
				<!---
                  <li><a href="<?= base_url('profile'); ?>"><i class="icon-feather-user"></i> My Profile</a></li>
                  <li><a href="<?= base_url('myjobs'); ?>"><i class="icon-line-awesome-user-secret"></i> My Applications</a></li>
				  <li><a href="<?= base_url('myjobs/matching'); ?>"><i class="icon-material-outline-group"></i> Matching Jobs</a></li>
                  <li><a href="<?= base_url('setting/change_password'); ?>"><i class="icon-material-outline-star-border"></i>Change Password</a></li>
					----->
				 <li><a href="<?= base_url('auth/logout')?>"><i class="icon-material-outline-power-settings-new"></i> Logout</a></li>
                </ul>
              </div>
			 
            </div>
          </div>
		  
		<?php }else if ($this->session->userdata('is_user_login')){  ?> 
		  <div class="utf-header-widget-item"> 
            <div class="utf-header-notifications user-menu">
              <div class="utf-header-notifications-trigger user-profile-title"> 
				<a href="#">
					<div class="user-avatar status-online"><img src="<?= base_url(); ?>assets/img/user.png" alt=""> </div>	
					<div class="user-name">Hi, <?= $this->session->userdata('username'); ?>!</div>	
                </a> 
			  </div>
			  
              <div class="utf-header-notifications-dropdown-block"> 
				<ul class="utf-user-menu-dropdown-nav">
				<!----
                  <li><a href="<?= base_url('profile'); ?>"><i class="icon-feather-user"></i> My Profile</a></li>
                  <li><a href="<?= base_url('myjobs'); ?>"><i class="icon-line-awesome-user-secret"></i> My Applications</a></li>
				  <li><a href="<?= base_url('myjobs/matching'); ?>"><i class="icon-material-outline-group"></i> Matching Jobs</a></li>
                  <li><a href="<?= base_url('setting/change_password'); ?>"><i class="icon-material-outline-star-border"></i>Change Password</a></li>
				----->
				 <li><a href="<?= base_url('auth/logout')?>"><i class="icon-material-outline-power-settings-new"></i> Logout</a></li>
                </ul>
              </div>
			 
            </div>
          </div>
		<?php }else {  ?> 
		 <div class="utf-header-widget-item"> 
		  <a href="<?= base_url('auth/login') ?>" class="log-in-button"><i class="icon-feather-log-in"></i> <span>Sign In</span></a> 
		
		  </div>
		<?php } ?>   
          <span class="mmenu-trigger">
			<button class="hamburger utf-hamburger-collapse-item" type="button"> <span class="utf-hamburger-box-item"> <span class="utf-hamburger-inner-item"></span> </span> </button>
          </span> 
		</div>
      </div>
    </div>
  </header>
  <div class="clearfix"></div>
  <!-- Header Container / End -->