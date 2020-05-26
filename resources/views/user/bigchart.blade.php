@extends('layouts.master')

@section('admin_style')
<style type="text/css">
	.time_left_class_buy{
		color: #309145 !important;
		font-size: 16px !important;
		font-weight: 400 !important;
	}
	.time_left_class_sell{
		color: #db4931 !important;
		font-size: 16px !important;
		font-weight: 400 !important;
	}
</style>
@endsection
@section('content')

<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.17/vue.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<div class="content">
	<div class="container-fluid">
		
		<div class="row mr-1" id="crypto_exchange">
			<div class="col-md-3" v-for="(result, index) in results">
				<div class="card card-stats" style="background: #212832">
					<div class="card-body ">
						<div class="row" >
							<div class="col-5">
								<div class="icon-big text-center">
									<i class="la la-bitcoin"></i>
								</div>
							</div>
							<div class="col-7 d-flex align-items-center">
								<div class="numbers">
									<p class="card-category" style="font-weight: bold; font-size: 24px">@{{index}}</p>
									<h4 class="card-title">$ @{{result.USD}}</h4>
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

		<div id="containered" style="min-width: 310px" class="lead py-1 mx-0 bg-secondary">
			<div class="container-fluid" style = "padding-left: 0; padding-right: 0">
					<div class="col" style = "padding-left: 0">	
						<div style="height:560px; background-color: #2d2d2d; overflow:hidden; box-sizing: border-box; border: 1px solid #2d2d2d; border-radius: 4px; text-align: right; line-height:14px; font-size: 12px; box-sizing:content-box; font-feature-settings: normal; text-size-adjust: 100%; box-shadow: inset 0 -20px 0 0 #2d2d2d;padding:1px;padding: 0px; margin: 0px;"><div style="height:540px;padding:0px;margin:0px;"><iframe src="https://widget.coinlib.io/widget?type=chart&theme=dark&coin_id=859&pref_coin_id=1505" width="100%" height="536" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;line-height:14px;box-sizing:content-box;"></iframe></div><div style="color: #ffffff; line-height: 14px; font-weight: 400; font-size: 11px; box-sizing:content-box; margin: 3px 6px 10px 0px; font-family: Verdana, Tahoma, Arial, sans-serif;">powered by&nbsp;<a href="https://coinlib.io" target="_blank" style="font-weight: 500; color: #ffffff; font-size: 11px; text-decoration:none;">bitoptionstrade</a></div>
						</div>
					</div>

			</div>
		</div>

		
	</div>
</div>
@endsection
@section('admin_script')
<script type="text/javascript">

	const url = "https://min-api.cryptocompare.com/data/pricemulti?fsyms=BTC,ETH,LTC,BCH&tsyms=USD,EUR,GBP";

	const vm = new Vue({
	    el: '#crypto_exchange',   
	    data: {
	     results: []
	        },

	     mounted() {

	      this.upDate();
	      this.timer = setInterval(this.upDate, 1000)
	      }, 

	      methods:{
	      upDate: function() {
	            axios.get(url).then(response => {
	              this.results = response.data
	            })
	       }, 
	      cancelAutoUpdate: function(){
	            clearInterval(this.timer)
	       },

	       beforeDestroy() {
	         clearInterval(this.timer)
	       }
	    }
	});

	$('#onbuy').click( function () {
		$('#time_left').removeClass('time_left_class_sell');
		$('#time_left').addClass('time_left_class_buy');

		$('#confirm_divider').show();
		var x;
		$('#onconfirm').click( function () {

			var dis = document.getElementById('counter_init').value;
			document.getElementById('time_left').innerHTML = 'Time limit: '+dis+' min';
			$('#confirm_divider').hide();

			clearInterval(x);
			
			var distance = 60*dis;
			//document.getElementById('counter_min').innerHTML = distance;
				
			x = setInterval(function() {
			  var minutes = parseInt( distance / 60);
			  var seconds = parseInt( distance %  60);

			  // Display the result in the element with id="demo"
			  document.getElementById('counter_min').innerHTML = minutes+'min';
			  document.getElementById('counter_sec').innerHTML = seconds+'sec';

			  distance = distance - 1;

			  // If the count down is finished, write some text
			  if (distance < 0) {
			    clearInterval(x);
			    document.getElementById('counter_min').innerHTML = '0 0';
			    document.getElementById('counter_sec').innerHTML = '0 0';
			  }
			}, 1000);
		});
		$('#oncancel').click(function(){
			$('#confirm_divider').hide();
		});
	});
	$('#onsell').click( function () {

		$('#time_left').removeClass('time_left_class_buy');
		$('#time_left').addClass('time_left_class_sell');
		$('#confirm_divider').show();

		var y;
		$('#onconfirm').click( function () {

			var dis = document.getElementById('counter_init').value;
			document.getElementById('time_left').innerHTML = 'Time limit: '+dis+' min';

			$('#confirm_divider').hide();

			clearInterval(y);
			var distance = 0;
			var minutes = 0;
			var seconds = 0;
			//document.getElementById('counter_min').innerHTML = distance;
				
			y = setInterval(function() {

			  // Display the result in the element with id="demo"
			  document.getElementById('counter_min').innerHTML = minutes+'min';
			  document.getElementById('counter_sec').innerHTML = seconds+'sec';

			  distance++;
			  seconds++;

			  if (seconds > 59) {
			  	minutes++; seconds = 0;
			  }

			  // If the count down is finished, write some text
			  if (distance > 60*dis) {
			    clearInterval(y);
			    document.getElementById('counter_min').innerHTML = '0 0';
			    document.getElementById('counter_sec').innerHTML = '0 0';
			  }
			}, 1000);
		});
		$('#oncancel').click(function(){
			$('#confirm_divider').hide();
		});
	});
</script>
@endsection