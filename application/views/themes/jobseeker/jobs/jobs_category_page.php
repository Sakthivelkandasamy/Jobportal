<!-- Titlebar -->
<div id="titlebar" class="gradient">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2>Jobs By Category</h2>
          <nav id="breadcrumbs">
            <ul>
              <li><a href="<?= base_url(); ?>">Home</a></li>
              <li>Jobs By Category </li>
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
				
				<?php foreach($categories as $category): ?>		
				
					<div class="col-xl-4 col-md-6 col-sm-12">
						<div class="utf-company-inner-alignment" style="background: #ff8a00;">
							<a href="<?= base_url('jobs/category/'.get_category_slug($category['category_id'])); ?>" class="company">
								<span class="company-logo"><img src="<?= base_url(''); ?>assets/img/o1.png" alt=""></span>
								<h3 style="color: #fff;"><?= get_category_name($category['category_id']); ?></h3>
								<div  style="color: #fff;">(<?= $category['total_jobs']; ?>) Openings</div>
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
