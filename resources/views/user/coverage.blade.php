@extends('layouts.master')

@section('content')
<div class="content">
	<div class="container-fluid">
		<div class="row mr-1">
			<div class="col-md-3">
				<div class="card card-stats" style="background: #212832">
					<div class="card-body ">
						<div class="row">
							<div class="col-5">
								<div class="icon-big text-center">
									<i class="fab fa-bitcoin"></i>
								</div>
							</div>
							<div class="col-7 d-flex align-items-center">
								<div class="numbers">
									<p class="card-category">BTC</p>
									<h4 class="card-title">$ 1,294</h4>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="card card-stats" style="background: #212832">
					<div class="card-body ">
						<div class="row">
							<div class="col-5">
								<div class="icon-big text-center">
									<i class="la la-bar-chart"></i>
								</div>
							</div>
							<div class="col-7 d-flex align-items-center">
								<div class="numbers">
									<p class="card-category">ETH</p>
									<h4 class="card-title">$ 1,345</h4>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="card card-stats" style="background: #212832">
					<div class="card-body">
						<div class="row">
							<div class="col-5">
								<div class="icon-big text-center">
									<i class="la la-newspaper-o"></i>
								</div>
							</div>
							<div class="col-7 d-flex align-items-center">
								<div class="numbers">
									<p class="card-category">LTC</p>
									<h4 class="card-title">$ 1303</h4>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="card card-stats" style="background: #212832">
					<div class="card-body ">
						<div class="row">
							<div class="col-5">
								<div class="icon-big text-center">
									<i class="la la-check-circle"></i>
								</div>
							</div>
							<div class="col-7 d-flex align-items-center">
								<div class="numbers">
									<p class="card-category">BCH</p>
									<h4 class="card-title">$ 576</h4>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="mt-1 mr-3 mb-3">
			<div style="width: 100%; height:40px; background-color: #2d2d2d; overflow:hidden; box-sizing: border-box; border-radius: 4px; text-align: right; line-height:14px; block-size:40px; font-size: 12px; box-sizing:content-box; font-feature-settings: normal; text-size-adjust: 100%; box-shadow: inset 0 -20px 0 0 #2d2d2d;padding:1px;padding: 0px; margin: 0px;"><div style="height:40px;"><iframe src="https://widget.coinlib.io/widget?type=horizontal_v2&theme=light&pref_coin_id=1505&invert_hover=" width="100%" height="36" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;border-radius: 4px; "></iframe></div></div>
		</div>

		<div class="row mr-1 mt-5">
    		<div class="col-md">
        		<div class="card bg-dark">
          			<div class="card-header">
	                    <h4 class="card-title">World Map</h4>
	                    <p class="card-category">
	                    The distribution of our services around the world</p>
          			</div>
              	<div class="card-body">
                <div class="mapcontainer">
                  <div class="map bg-dark">
                    <span>Alternative content for the map</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
	</div>
</div>
@endsection