<div class="utf-dashboard-sidebar-item">
      <div class="utf-dashboard-sidebar-item-inner" data-simplebar>
        <div class="utf-dashboard-nav-container"> 
          <!-- Responsive Navigation Trigger --> 
          <a href="#" class="utf-dashboard-responsive-trigger-item"> <span class="hamburger utf-hamburger-collapse-item" > <span class="utf-hamburger-box-item"> <span class="utf-hamburger-inner-item"></span> </span> </span> <span class="trigger-title">Dashboard Navigation Menu</span> </a> 
          <!-- Navigation -->
          <div class="utf-dashboard-nav">
            <div class="utf-dashboard-nav-inner">
			  <div class="dashboard-profile-box">
				  <span class="avatar-img">
					<img alt="" src="images/user-avatar-placeholder.png" class="photo">
				  </span>
				  
			  </div>
			  <div class="clearfix"></div>
			  
              <ul>
			  
			  <?php
			  $activePage = basename($_SERVER['PHP_SELF'], ".php");
			  ?>
			  <!---
                <li><a href="dashboard.html"><i class="icon-material-outline-dashboard"></i> Dashboard</a></li>
				--->
				<?php if ($this->session->userdata('is_employer_login')){ ?>   
				<li class="<?= ($activePage == 'matching') ? 'active':''; ?>"><a href="<?= base_url('myjobs/matching'); ?>"><i class="icon-line-awesome-user-secret"></i> Manage Jobs Post</a></li>
				<li class="<?= ($activePage == 'myjobs') ? 'active':''; ?>"><a href="<?= base_url('myjobs'); ?>"><i class="icon-feather-heart"></i>My Applications</a></li>
				<li  class="<?= ($activePage == 'profile') ? 'active':''; ?>"><a href="<?= base_url('employers/profile'); ?>"><i class="icon-feather-user"></i>Personal Info</a></li>
                <li  class="<?= ($activePage == 'company') ? 'active':''; ?>"><a href="<?= base_url('employers/company'); ?>"><i class="icon-feather-user"></i>Company Info</a></li>
               <li class="<?= ($activePage == 'change_password') ? 'active':''; ?>"><a href="<?= base_url('employers/setting/change_password'); ?>"><i class="icon-material-outline-rate-review"></i> Change Password</a></li>
				
				<li><a href="<?= base_url('auth/logout')?>"><i class="icon-material-outline-power-settings-new"></i> Logout</a></li>
             <?php }else if ($this->session->userdata('is_user_login')){  ?> 
			 <li class="<?= ($activePage == 'matching') ? 'active':''; ?>"><a href="<?= base_url('myjobs/matching'); ?>"><i class="icon-line-awesome-user-secret"></i> Manage Jobs Post</a></li>
				<li class="<?= ($activePage == 'myjobs') ? 'active':''; ?>"><a href="<?= base_url('myjobs'); ?>"><i class="icon-feather-heart"></i>My Applications</a></li>
				<li  class="<?= ($activePage == 'profile') ? 'active':''; ?>"><a href="<?= base_url('profile'); ?>"><i class="icon-feather-user"></i> My Profile</a></li>
                <li class="<?= ($activePage == 'change_password') ? 'active':''; ?>"><a href="<?= base_url('setting/change_password'); ?>"><i class="icon-material-outline-rate-review"></i> Change Password</a></li>
				<li><a href="<?= base_url('auth/logout')?>"><i class="icon-material-outline-power-settings-new"></i> Logout</a></li>
             
			 <?php }?>
			 </ul>
			  
            </div>
          </div>
        </div>
      </div>
    </div>