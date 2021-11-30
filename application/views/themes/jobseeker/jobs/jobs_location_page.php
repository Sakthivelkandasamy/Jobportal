<style>
.utf-company-inner-alignment{
background: #ff8a00;
    width: 80%;
    height: 72%;
}
</style>
<!-- Titlebar -->
<div id="titlebar" class="gradient">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2>Jobs By Location</h2>
          <nav id="breadcrumbs">
            <ul>
              <li><a href="<?= base_url(); ?>">Home</a></li>
              <li>Jobs By Location</li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
</div>
<!-- Titlebar End -->
  
<!-- Page Content-->
<div class="container">
	<div class="row">
	     <div class="utf-companies-list-aera">
			<div class="col-xl-12">
				<div class="row">
				
				<?php foreach($cities as $city): ?>
				
					<div class="col-xl-4 col-md-6 col-sm-12">
						<div class="utf-company-inner-alignment" style="background: #ff8a00;">
							<a href="<?= base_url('jobs/location/'.get_city_slug($city['city_id'])); ?>" class="company">
								<span class="company-logo"><img src="<?= base_url(''); ?>assets/img/o1.png" alt=""></span>
								<h4 style="color: #fff;"><?= get_city_name($city['city_id']); ?></h4>
								<div style="color: #fff;">(<?= $city['total_jobs']; ?>) Openings</div>
							</a>
						</div>						
					</div>
				<?php endforeach; ?>
				</div>
			</div>
			<!-- Pagination -->
			<div class="clearfix"></div>
			<div class="utf-pagination-container-aera margin-top-20 margin-bottom-40">
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
</div>
