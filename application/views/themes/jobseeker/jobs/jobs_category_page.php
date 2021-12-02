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
								<h4 style="color: #fff;"><?= get_category_name($category['category_id']); ?></h4>
								<div  style="color: #fff;">(<?= $category['total_jobs']; ?>) Openings</div>
							</a>
						</div>						
					</div>
				<?php endforeach; ?>
				</div>
			</div>
			<!-- Pagination -->
			<div class="clearfix"></div>
			
			<div class="clearfix"></div>
		</div>
	</div>
</div>
