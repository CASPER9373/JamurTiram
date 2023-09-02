@extends('template_back.layout')
                @section ('title','halaman dashboard')
                @section ('content')
                <!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div>
						<h4 class="content-title mb-2">Hi, welcome back!</h4>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Dashboard</a></li>
								<li class="breadcrumb-item active" aria-current="page">Project</li>
							</ol>
						</nav>
					</div>
					
				</div>

			<div class="row row-sm">
				<div class="col-xl-8 col-lg-12 col-md-12 col-sm-12">
					<div class="card overflow-hidden">
						<div class="card-header bg-transparent pd-b-0 pd-t-20 bd-b-0">
							<div class="d-flex justify-content-between">
								<h4 class="card-title mg-b-10">Project Budget</h4>
								<i class="mdi mdi-dots-horizontal text-gray"></i>
							</div>
							<p class="tx-12 text-muted mb-2">The Project Budget is a tool used by project managers to estimate the total cost of a project. A project budget template includes a detailed estimate of all costs. <a href="">Learn more</a></p>
						</div>
						<div class="card-body pd-y-7">
							<div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
							<div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
								<div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0">
								</div>
							</div>
							<div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
								<div style="position:absolute;width:200%;height:200%;left:0; top:0">
								</div>
							</div>
						</div>
							<div class="area chart-legend mb-0">
								<div>
									<i class="mdi mdi-album text-primary mr-2"></i> Total Budget
								</div>

								<div>
									<i class="mdi mdi-album text-pink mr-2"></i>Amount Used
								</div>
							</div>
							 <canvas id="project-budget" class="ht-300 chartjs-render-monitor" width="487" height="243" style="display: block; width: 487px; height: 243px;"></canvas>
						</div>
					</div>
				</div>
			</div>

				

				
<!-- row -->
{{-- <div class="row row-sm ">
	<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
		<div class="card overflow-hidden">
			<div class="card-header bg-transparent pd-b-0 pd-t-20 bd-b-0">
				<div class="d-flex justify-content-between">
					<h4 class="card-title mg-b-10">Insight</h4>
					<i class="mdi mdi-dots-horizontal text-gray"></i>
				</div>
				<p class="tx-12 text-muted mb-2">The Project Budget is a tool used by project managers to estimate the total cost of a project. A project budget template includes a detailed estimate of all costs. <a href="">Learn more</a></p>
			</div>
			<div class="card-body pd-y-7">
				<div class="area chart-legend mb-0">
					<div>
						<i class="mdi mdi-album text-primary mr-2"></i> Total Insight
					</div>
					<div>
						<i class="mdi mdi-album text-pink mr-2"></i>Amount Used
					</div>
				</div>
				<canvas id="project-budget" class="ht-300 chartjs-render-monitor" width="1352" height="676" style="display: block; width: 676px; height: 338px;"></canvas>
			</div>
		</div>
	</div>
</div> --}}
<!-- /row -->


				<!-- /breadcrumb -->

<!-- main-content-body -->
{{-- 

					<!-- row -->
					<div class="row row-sm ">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
							<div class="card overflow-hidden">
								<div class="card-header bg-transparent pd-b-0 pd-t-20 bd-b-0">
									<div class="d-flex justify-content-between">
										<h4 class="card-title mg-b-10">Project Budget</h4>
										<i class="mdi mdi-dots-horizontal text-gray"></i>
									</div>
									<p class="tx-12 text-muted mb-2">The Project Budget is a tool used by project managers to estimate the total cost of a project. A project budget template includes a detailed estimate of all costs. <a href="">Learn more</a></p>
								</div>
								<div class="card-body pd-y-7">
									<div class="area chart-legend mb-0">
										<div>
											<i class="mdi mdi-album text-primary mr-2"></i> Total Budget
										</div>
										<div>
											<i class="mdi mdi-album text-pink mr-2"></i>Amount Used
										</div>
									</div>
									<canvas id="project-budget" class="ht-300"></canvas>
								</div>
							</div>
						</div>
					</div>
				<!-- /row -->

                @endsectiona --}}