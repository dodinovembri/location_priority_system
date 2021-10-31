<?php $this->load->view('components/header') ?>
<!-- Page -->
<div class="page">
	<div class="page-content container-fluid">
		<div class="row" data-plugin="matchHeight" data-by-row="true">
			<div class="col-xl-3 col-md-6">
				<!-- Widget Linearea One-->
				<div class="card card-shadow" id="widgetLineareaOne">
					<a href="<?php echo base_url('alternative') ?>">
						<div class="card-block p-20 pt-10">
							<div class="clearfix">
								<div class="grey-800 float-left py-10">
									<i class="icon md-chart grey-600 font-size-24 vertical-align-bottom mr-5"></i> Alternatif
								</div>
								<span class="float-right grey-700 font-size-30"><?php echo $alternatives ?></span>
							</div>
							<div class="ct-chart h-50"></div>
						</div>
					</a>
				</div>
				<!-- End Widget Linearea One -->
			</div>
			<div class="col-xl-3 col-md-6">
				<!-- Widget Linearea Two -->
				<div class="card card-shadow" id="widgetLineareaTwo">
					<a href="<?php echo base_url('criteria') ?>">
						<div class="card-block p-20 pt-10">
							<div class="clearfix">
								<div class="grey-800 float-left py-10">
									<i class="icon md-flash grey-600 font-size-24 vertical-align-bottom mr-5"></i> Kriteria
								</div>
								<span class="float-right grey-700 font-size-30"><?php echo $criterias ?></span>
							</div>
							<div class="ct-chart h-50"></div>
						</div>
					</a>
				</div>
				<!-- End Widget Linearea Two -->
			</div>
			<div class="col-xl-3 col-md-6">
				<!-- Widget Linearea Three -->
				<div class="card card-shadow" id="widgetLineareaThree">
					<a href="<?php echo base_url('user') ?>">
						<div class="card-block p-20 pt-10">
							<div class="clearfix">
								<div class="grey-800 float-left py-10">
									<i class="icon md-account grey-600 font-size-24 vertical-align-bottom mr-5"></i> User
								</div>
								<span class="float-right grey-700 font-size-30"><?php echo $users ?></span>
							</div>
							<div class="ct-chart h-50"></div>
						</div>
					</a>
				</div>
				<!-- End Widget Linearea Three -->
			</div>
			<div class="col-xl-3 col-md-6">
				<!-- Widget Linearea Four -->
				<div class="card card-shadow" id="widgetLineareaFour">
					<a href="<?php echo base_url('ranking') ?>">
						<div class="card-block p-20 pt-10">
							<div class="clearfix">
								<div class="grey-800 float-left py-10">
									<i class="icon md-view-list grey-600 font-size-24 vertical-align-bottom mr-5"></i> Ranking
								</div>
								<span class="float-right grey-700 font-size-30"></span>
							</div>
							<div class="ct-chart h-50"></div>
						</div>
					</a>
				</div>
				<!-- End Widget Linearea Four -->
			</div>

		</div>
	</div>
</div>
<!-- End Page -->