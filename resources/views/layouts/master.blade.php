<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>bitoptionstrade</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
	
	
	@include('includes.backend.styles')
	@yield('admin_style')
</head>
<body class = "crypt-dark">
	<div class="wrapper row">
		<div class="main-header">
			<div class="logo-header bg-header">
				<a href="index.php" class="logo">
          			<i class="la la-bitcoin mr-2 logo-color"></i><span class="text-white">bitoptionstrade</span>
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<button class="topbar-toggler more"><i class="la la-ellipsis-v"></i></button>
				<button class="navbar-toggler1 sidenav-toggler1 mr-auto" type="button" data-toggle="collapse" data-target="collapse" aria-controls="sidebar_right" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler1-icon"></span>
				</button>
			</div>
			<nav class="navbar navbar-header navbar-expand-lg navbar-dark bg-header">
				<div class="container-fluid">
                    
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
						<li class="nav-item dropdown hidden-caret">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<p class="text-success mt-1 mb-0 pb-0">Real Account </p>
								<span style="font-size: 20px" class="text-success">${{Auth::user()->total}}</span>
								<span style="font-size: 20px; color: white"><i class="la la-chevron-circle-down text-success"></i></span>
							</a>
							<div class="dropdown-menu bg-header" aria-labelledby="navbarDropdown">
								<a class="dropdown-item logo-color" href="#v-pills-zilliqua-btc-history" id="history-in-logo"><i class="la la-clock-o"></i>&nbsp; History</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item text-success" href="#v-pills-zilliqua-btc-deposit" id="item-credit">Credit</a>
								<a class="dropdown-item text-danger" href="#v-pills-zilliqua-btc-withdrawl" id="item-withdraw">Withdraw</a>
							</div>
						</li>
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

										<div class="u-text text-white my-0">
											<h4 style="text-align: center; font-size: 24px">{{ Auth::user()->name }}</h4>
											<p style="text-align: center; font-size: 14px">{{ Auth::user()->email }}</p>
											<p style="text-align: center; font-size: 12px">Level : {{ Auth::user()->level }}</p>
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

      	<!-- sidenav -->
		<div class="sidebar">
			<div class="scrollbar-inner sidebar-wrapper">
				<ul class="nav">
					<li class="nav-item active">
						<a href="{{route('userdash')}}">
							<i class="la la-dashboard"></i>
							<p class="logo-color">Dashboard</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="{{route('market')}}">
							<i class="la la-dollar"></i>
							<p class="logo-color">Market</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="{{route('bigchart')}}">
							<i class="la la-line-chart"></i>
							<p class="logo-color">Analytic</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="{{route('coverage')}}">
							<i class="la la-user"></i>
							<p class="logo-color">Coverage</p>
						</a>
					</li>
					<div class="line"></div>
					<div class="dropdown-divider"></div>
					<li class="nav-item">
						<a href="{{ route('taxpay') }}">
							<i class="la la-eur"></i>
							<p class="text-white">Tax Payment</p>
						</a>
					</li>
					<li class="nav-item">
					<a href="{{ route('signalpay') }}">
						<i class="la la-bolt"></i>
						<p class="text-white">Signal Payment</p>
					</a>
					</li>
					<li class="nav-item">
					<a href="{{ route('levelpay') }}">
						<i class="la la-arrow-circle-o-up"></i>
						<p class="text-white">Level Payment</p>
					</a>
					</li>
				</ul>
			</div>
		</div>
      	<!-- ends sidenav -->

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

		<div class = "sidebar_right">
			<div class="scrollbar-inner sidebar-wrapper">
			<div class="tab-pane" id="v-pills-zilliqua-btc-buysell" role="tabpanel" aria-labelledby="v-pills-zilliqua-btc-buysell-tab">
		  		<div class="crypt-boxed-area">
					<h6 class="crypt-bg-head"><b class="crypt-up">BUY</b> / <b class="crypt-down">SELL</b></h6>
					<div class="col no-gutters">
						<div class="crypt-buy-sell-form">
							<p><i class="la la-refresh"></i><span class="crypt-up"> Buy </span> /<span class="crypt-down"> Sell</span><span class="fright">Available: <b class="crypt-up">20 BTC</b></span></p>
							<div class="dropdown-divider"></div>
							<div class="crypt-buy">
								<div class="input-group mb-3">
								  	<div class="input-group-prepend">
								    	<span class="input-group-text"><i class="la la-bitcoin"></i>&nbsp;Price</span>
								  	</div>
								  	<input type="text" class="form-control" placeholder="0.02323476" readonly>
								  	<div class="input-group-append">
								   	 	<span class="input-group-text">BTC</span>
								  	</div>
								</div>
								<div class="input-group mb-3">
								  	<div class="input-group-prepend">
								    	<span class="input-group-text"><i class="la la-dollar"></i>&nbsp;Amt</span>
								  	</div>
								  	<!-- <input type="number" class="form-control" value="50"> -->
								  	<select type="number" class="form-control" required>
								      	<option value="">50</option>
								      	<option value="1">100</option>
								      	<option value="2">200</option>
								      	<option value="3">300</option>
								      	<option value="4">400</option>
								      	<option value="5">500</option>
									</select>
								  	<div class="input-group-append">
								   	 	<span class="input-group-text">USD</span>
								  	</div>
								</div>
								<div class="input-group mb-3">
								  	<div class="input-group-prepend">
								    	<span class="input-group-text"><i class="la la-bitbucket"></i>&nbsp;Total</span>
								  	</div>
								  	<input type="text" class="form-control" readonly>
								  	<div class="input-group-append">
								   	 	<span class="input-group-text">BTC</span>
								  	</div>
								</div>
								<div class="input-group mb-3">
								  	<div class="input-group-prepend">
								    	<span class="input-group-text"><i class="la la-clock-o"></i>&nbsp;Time</span>
								  	</div>
								  	<!-- <input type="number" class="form-control" value="50"> -->
								  	<select type="number" class="form-control" id="counter_init" required>
								      	<option value="1">1</option>
								      	<option value="5">5</option>
								      	<option value="10">10</option>
								      	<option value="15">15</option>
								      	<option value="20">20</option>
								      	<option value="25">25</option>
									</select>
								  	<div class="input-group-append">
								   	 	<span class="input-group-text">MIN</span>
								  	</div>
								</div>
								
							</div>
							<div style="position: relative; color: white" id="time_left" class="">
								Time left
							</div>
							<div class="dropdown-divider pb-1"></div>
							<div class="row">
								<span id="datetime" class="col-6"></span>
								<div style="border-right: 1px solid white" class="col-3">
							    	<div class="input-group-text pl-1" style="border: none; text-align: center;" id="counter_min">0 0</div>
							  	</div>
							  	<div class="col-3">
							   	 	<div class="input-group-text pl-1" style="border: none; text-align: center;" id="counter_sec">0 0</div>
							  	</div>
							</div>
							<div class="dropdown-divider"></div>
							<div class="row" id="confirm_divider">
								<div class="col-6">
									<button id="onconfirm" class="crypt-button-green-full"
									style="border:none; font-size: 18px; height:40px">OK</button>
								</div>
								<div class="col-6">
									<button id="oncancel" class="crypt-button-red-full"
									style="border:none; font-size: 18px; height:40px">CANCEL</button>
								</div>
							</div>
							<div class="menu-green mb-3 mt-4">
								<button class="crypt-button-green-full" style="border:none" id="onbuy">Buy</button>
								
							</div>
							<div class="menu-red mb-3">
								<button class="crypt-button-red-full" style="border:none" id="onsell">Sell</button>
								
							</div>
							
						</div>
						
					</div>
				</div>
		  	</div>
		</div>
	</div>

	</div>

	@include('includes.backend.scripts')

	@yield('admin_script')
</body>
</html>