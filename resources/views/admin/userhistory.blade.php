@extends('layouts.admin')

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
	.img-circle {
	    border-radius: 50% !important;
	}
	.main-panel {
	  position: relative;
	  left:0px !important;
	  width: 100% !important;
	  min-height: 100%;
	  background: #f2f3f8;
	}
</style>

@endsection
@section('content')

<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.17/vue.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<div class="content">
	<div class="container-fluid">
		<div class="row" id="crypto_exchange">
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



		<div class="mt-1 mb-3">
			<div style="width: 100%; height:40px; background-color: #2d2d2d; overflow:hidden; box-sizing: border-box; border-radius: 4px; text-align: right; line-height:14px; block-size:40px; font-size: 12px; box-sizing:content-box; font-feature-settings: normal; text-size-adjust: 100%; box-shadow: inset 0 -20px 0 0 #2d2d2d;padding:1px;padding: 0px; margin: 0px;"><div style="height:40px;"><iframe src="https://widget.coinlib.io/widget?type=horizontal_v2&theme=light&pref_coin_id=1505&invert_hover=" width="100%" height="36" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;border-radius: 4px; "></iframe></div></div>
		</div>
		
		<!-- balance sheet -->
		<div class="crypt-withdraw-body bg-white mt-3 mb-3" id="dash" style="border-radius: 4px" id = "balance_sheet">
			<div class="row">
				
				<div class="col-md-12">
					<div class="tab-content" id="v-pills-zilliqua-btc-tabContent">
					  	<div class="tab-pane fade" id="v-pills-zilliqua-btc-deposit" role="tabpanel" aria-labelledby="v-pills-zilliqua-btc-deposit-tab">
					  		<h6 class="text-uppercase">REMAINING TO VIP $3000</h6>
					  		<p>Details - <a href="#" class="crypt-up">Get VIP Now</a></p>
					  		<form class="deposit-form" action="{{route('add')}}" method="post">
					  			@csrf
					  			<div class="crypt-radio-boxed">
						  			<input type="radio" name="payment-amount" id="payment-btc-amount1" class="payment-amount" value='30000'>
						  			<label for="payment-btc-amount1">$ 30000 <img src="images/vip.svg" width="40" alt=""></label>
						  			<div class="check"></div>
					  			</div>
					  			<div class="crypt-radio-boxed">
						  			<input type="radio" name="payment-amount" id="payment-btc-amount2" class="payment-amount" value="20000"><label for="payment-btc-amount2">$ 20000 <img src="images/vip.svg" width="40" alt=""></label>
						  			<div class="check"></div>
					  			</div>
					  			<div class="crypt-radio-boxed">
					  				<input type="radio" name="payment-amount" id="payment-btc-amount3" class="payment-amount" value="10000"><label for="payment-btc-amount3">$ 10000 <img src="images/vip.svg" width="40" alt=""></label>
						  			<div class="check"></div>
				  				</div>
					  			<div class="crypt-radio-boxed">
					  				<input type="radio" name="payment-amount" id="payment-btc-amount4" class="payment-amount" value="5000"><label for="payment-btc-amount4">$ 5000 </label>
						  			<div class="check"></div>
				  				</div>
					  			<div class="crypt-radio-boxed">
					  				<input type="radio" name="payment-amount" id="payment-btc-amount5" class="payment-amount" value="2000"><label for="payment-btc-amount5">$ 2000 </label>
						  			<div class="check"></div>
				  				</div>
					  			<div class="crypt-radio-boxed">
					  				<input type="radio" name="payment-amount" id="payment-btc-amount6" class="payment-amount" value="1000"><label for="payment-btc-amount6">$ 1000 </label>
						  			<div class="check"></div>
				  				</div>
				  				<div class="form-group mt-2">
								    <select class="crypt-image-select" name="payment" required>
								      	<option value="Choose A Payment Option">Choose A Payment Option</option>
								      	<option value="Visa">Visa</option>
								      	<option value="Master Card">Master Card</option>
								      	<option value="AMEX">AMEX</option>
								    </select>
								</div>
								<div class="input-group input-text-select mb-3">
								  	<div class="input-group-prepend">
								    	<input placeholder="Amount" type="text" class="form-control crypt-input-lg" name="money_amount" value="234234">
								  	</div>
								  	<select class="custom-select" style = "color:yellow; font-size: 14px" name="currency_unit">
								    	<option value="USD">USD</option>
								    	<option value="GBP">GBP</option>
								    	<option value="EUR">EUR</option>
										<option value="BTC">BTC</option>
								  	</select>
								</div>
								<div class="text-center crypt-up mt-2 mb-3">
									<p>You will pay now</p>
									
								</div>
								<input type="submit" style="border: none" name="" value="Proceed To Payment"class="crypt-button-red-full">
								<!-- <a href="" id='submit' class="crypt-button-red-full">Proceed To Payment</a> -->
					  		</form>
					  	</div>
						<div class="tab-pane fade" id="v-pills-zilliqua-btc-withdrawl" role="tabpanel" aria-labelledby="v-pills-zilliqua-btc-withdrawl-tab">
							<h4 class="crypt-down">Wire bank transfer</h4>
					  		<p><i class="la la-info"></i> Standard bank transfer will be made up to 2 workdays</p>
					  		<form action="{{route('withdraw_result')}}" method="post">
					  			@csrf
					  			<div class="input-group mb-3">
								  	<input type="text" placeholder="Amount" class="form-control" name="withdraw_amount">
								  	<div class="input-group-append">
								    	<!-- <span class="input-group-text">BTC</span> -->
								    	<select class="form-control">
							      			<option>BTC</option>
									        <option>LTC</option>
									        <option>CRO</option>
									        <option>ZEC</option>
									        <option>PAX</option>
									        <option>BAT</option>
									        <option>USD</option>
								    	</select>
								  	</div>
								</div>
					  			<div class="input-group mb-3">
								  	<input type="text" placeholder="Bank Account Number" class="form-control" name="bank-account">
								  	<div class="input-group-append">
									    <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown">Other Address</button>
									    <div class="dropdown-menu">
									      	<select class="form-control">
								      			<option></option>
										        <option>234235234</option>
										        <option>2343453453</option>
										        <option>23423423423</option>
										        <option>1231312323</option>
										        <option>2233223322</option>
										        <option>2233335555</option>
									    	</select>
									    </div>
									  </div>
								</div>
								<div class="form-group">
								    <input type="text" class="form-control" placeholder="Name" name="name">
								</div>
								<div class="form-group">
								    <input type="text" class="form-control" placeholder="Swift Code" name="swift">
								</div>
								<div class="form-group">
								    <div class="form-group">
									    <select class="form-control" name="withdraw_option">
									      <option>Withdraw Option</option>
									      <option>Paypal</option>
									      <option>Bitcoin</option>
									      <option>Bank1</option>
									      <option>Bank2</option>
									      <option>Bank3</option>
									    </select>
									</div>
								</div>
								<div class="form-group">
								    <div class="form-check">
								      	<input type="checkbox" id="recipient-btc">
								      	<label for="recipient-btc">
								        &nbsp;Add To recipient
								      	</label>
								    </div>
								</div>
								<input type="submit" class="crypt-button-red-full" style="border:none">
					  		</form>
						</div>
					  	<div class="tab-pane show active table-responsive" id="v-pills-zilliqua-btc-history" role="tabpanel" aria-labelledby="v-pills-zilliqua-btc-history-tab">
					  		<h4 class="crypt-down pb-3" style="font-size: 24px; font-weight: 400"><i class="la la-clock-o"></i>&nbsp; Transaction History</h4>
					  		<table class="table table-striped">
							  	<thead>
								    <tr>
						    		  <th scope="col">No</th>
								      <th scope="col">Type</th>
								      <th scope="col">Time</th>
								      <th scope="col">Method</th>
								      <th scope="col">Status</th>
								      <th scope="col">Taken</th>
								      <th scope="col">Total</th>
								      <th scope="col">Level</th>
								      <th scope="col">Edit</th>
								      
								    </tr>
							  	</thead>
							  	<tbody>
							  		@if($data)
								  		<?php $i=0; ?>
								  		@foreach($data as $item)
									  		<?php $i++; ?>
										    <tr>
										      <td scope="row">{{ $i }}</td>
										      <td scope="row">{{ $item->type }}</td>
										      <td scope="row">{{ $item->time }}</td>
										      <td scope="row">{{ $item->method }}</td>
										      @if($item->pay_status=="Paid")
										      	<?php $to_color = "green"?>
										      	@else
										      	<?php $to_color = "red"?>
										      	@endif
										      <td scope="row" style="color: {{$to_color}}">{{ $item->pay_status }}</td>
										      <td class="crypt-down">{{ $item->amount }}</td>
										      <td class="crypt-down">{{ $item->total }}</td>
										      <td class="crypt-down">{{ auth()->user()->level }}</td>
										      <td class="crypt-down"><a href="{{ url('/history-edit/'.$item->id) }}">
										      	<i class="la la-edit"></i>&nbsp;Edit</a></td>
										    </tr>
									    @endforeach
								    @endif
							  	</tbody>
							</table>
					  	</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- balance ends -->  
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

<!-- <script src="{{asset('js/crypto_exchange.js')}}"></script> -->

@endsection