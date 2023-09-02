			<!-- main-header -->
			<div class="main-header  side-header">
				<div class="container-fluid">
					<div class="main-header-left ">
						<div class="app-sidebar__toggle mobile-toggle" data-toggle="sidebar">
							<a class="open-toggle" href="#"><i class="header-icons" data-eva="menu-outline"></i></a>
							<a class="close-toggle" href="#"><i class="header-icons" data-eva="close-outline"></i></a>
						</div>
						<div class="responsive-logo">
							<a href="index.html"><img src="{{ asset('') }}assets/img/brand/logo-white.png" class="logo-1"></a>
							<a href="index.html"><img src="{{ asset('') }}assets/img/brand/logo.png" class="logo-11"></a>
							<a href="index.html"><img src="{{ asset('') }}assets/img/brand/favicon-white.png" class="logo-2"></a>
							<a href="index.html"><img src="{{ asset('') }}assets/img/brand/favicon.png" class="logo-12"></a>
						</div>

							
					</div>
					<div class="main-header-right">
						<div class="nav nav-item nav-link" id="bs-example-navbar-collapse-1">
							<form class="navbar-form" role="search">
								<div class="input-group">
									<input type="text" class="form-control" placeholder="Search">
									<span class="input-group-btn">
										<button type="reset" class="btn btn-default">
											<i class="fas fa-times"></i>
										</button>
										<button type="submit" class="btn btn-default nav-link">
											<i class="fe fe-search"></i>
										</button>
									</span>
								</div>
							</form>
						</div>
						<div class="nav nav-item  navbar-nav-right ml-auto">
							<div class="nav-item full-screen fullscreen-button">
								<a class="new nav-link full-screen-link" href="#"><i class="fe fe-maximize"></i></span></a>
							</div>
							<div class="dropdown main-profile-menu nav nav-item nav-link">

								<a class="profile-user d-flex" href=""><img src="{{ asset('') }}assets/img/faces/6.jpg" alt="user-img" class="rounded-circle mCS_img_loaded"><span></span></a>

								<div class="dropdown-menu">

									<form action="{{ route ('logout') }}" method="post">
									@csrf
									<button class="dropdown-item" type="submit"><i class="fas fa-sign-out-alt"></i>Logout</
									</form>
								</div>
							</div>
							<div class="dropdown main-header-message right-toggle">
								<a class="nav-link pr-0" data-toggle="sidebar-right" data-target=".sidebar-right">
									<i class="ion ion-md-menu tx-20 bg-transparent"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /main-header -->