<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>bitoptionstrade</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.17/vue.js"></script>
	<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
	<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script src="{{asset('assets/js/core/jquery.3.2.1.min.js')}}"></script>
	
	@include('includes.backend.styles')
	@yield('admin_style')
</head>
<body class = "crypt-dark">
	<!-- <div class="preloader" ><img src="{{asset('assets/img/904 .gif')}}" /></div> -->
	<div class="wrapper row">
		<div class="main-header">
			<div class="logo-header bg-header">
				<a href="{{route('admindash')}}" class="logo">
          			<i class="la la-bitcoin mr-2 logo-color"></i><span class="text-white">bitoptionstrade</span>
				</a>
				
			</div>
			<nav class="navbar navbar-header navbar-expand-lg navbar-dark bg-header">
				<div class="container-fluid">
                    
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
						
						
						<li class="nav-item dropdown hidden-caret">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<span class="text-white">Support</span>
								<i class="far fa-comments" style="font-size: 22px; color: white;"></i>
								<span class="notification logo-bg color-dark">3</span>
							</a>
							<ul class="dropdown-menu notif-box bg-header" aria-labelledby="navbarDropdown">
								<li>
									<div class="dropdown-title text-white">You have 4 new notification</div>
								</li>
								<li>
									<div class="notif-center">
										<a href="#">
											<div class="notif-icon notif-primary"> <i class="la la-user-plus"></i> </div>
											<div class="notif-content">
												<span class="block">
													The support team sent you message
												</span>
												<span class="time">5 minutes ago (Click to read)</span> 
											</div>
										</a>
									</div>
								</li>
								<li>
									<div class="notif-center">
										<a href="{{route('go_chat')}}">
											<div class="notif-icon notif-primary"> <i class="la la-user-plus"></i> </div>
											<div class="notif-content">
												<span class="block">
													Start to chat!
												</span>
											</div>
										</a>
									</div>
								</li>
							</ul>
						</li>
						<li>&nbsp;&nbsp;&nbsp;</li>
						<li class="nav-item dropdown">
							<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
								
						            <img src="{{asset(auth()->user()->profile_image)}}" style="width: 40px; height:40px" class="img-circle">
						            
								<span class="text-white">{{ Auth::user()->name }}</span>
							</a>
							<ul class="dropdown-menu dropdown-user bg-header">
								<li>
									<div class="user-box">
										<div class="u-img"><a href="{{ route('profile') }}">
											<img src="{{asset(auth()->user()->profile_image)}}" alt="user" id="user_profile"></a></div>

										<div class="u-text text-white my-2">
											<h4 style="text-align: center; font-size: 24px">{{ Auth::user()->name }}</h4>
											<p style="text-align: center; font-size: 14px">{{ Auth::user()->email }}</p>
										</div>
									</div>
								</li>
								
								
								<li><div class="dropdown-divider"></div></li>
								<li>
									<a class="dropdown-item logo-color" href="{{ route('logout') }}"
                                       	onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="la la-power-off"></i>&nbsp; Logout
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </li>

							</ul>
								<!-- /.dropdown-user -->
						</li>
					</ul>
				</div>
			</nav>
		</div>


		<div class="main-panel bg-secondary">
			@yield('content')

			<footer class="footer bg-secondary">
				<div class="container-fluid">
					<nav class="pull-left">
						<ul class="nav">
							<li class="nav-item">
								<a class="nav-link" href="index.php">
									bitoptionstrade
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">
									Help
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">
									Licenses
								</a>
							</li>
							<li class="nav-item">
								<a id="timetrackfooter" class="nav-link" style="color:white !important">
								</a>
							</li>
						</ul>
					</nav>
					<div class="copyright ml-auto">
						2019, Powered by <a href="">bitoptionstrade</a>
					</div>				
				</div>
			</footer>
		</div>

		</div>
	</div>

	</div>

	@include('includes.backend.scripts')

	@yield('admin_script')
</body>
</html>