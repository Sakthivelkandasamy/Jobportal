<!-- Titlebar -->
<style>
.utf-company-inner-alignment{
background: #ff8a00;
    width: 80%;
    height: 72%;
}
</style>
<div id="titlebar" class="gradient">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2>Jobs By Industry</h2>
          <nav id="breadcrumbs">
            <ul>
              <li><a href="<?= base_url(); ?>">Home</a></li>
              <li>Jobs By Industry</li>
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
				
				<?php foreach($industries as $industry): ?>
				
					<div class="col-xl-4 col-md-6 col-sm-12">
						<div class="utf-company-inner-alignment" style="background: #ff8a00;">
							<a href="<?= base_url('jobs/industry/'.get_industry_slug($industry['industry_id'])); ?>" class="company">
								<span class="company-logo"><img src="<?= base_url(''); ?>assets/img/o1.png" alt=""></span>
								<h4 style="color: #fff;"><?= get_industry_name($industry['industry_id']); ?></h4>
								<div style="color: #fff;">(<?= $industry['total_jobs']; ?>) Openings</div>
							</a>
						</div>						
					</div>
				<?php endforeach; ?>
				</div>
			</div>
			<!-- Pagination -->
			
			<div class="clearfix"></div>
		</div>
	</div>
</div>
