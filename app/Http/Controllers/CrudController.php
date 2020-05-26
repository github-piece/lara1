<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;

class CrudController extends Controller
{
    public function credit(Request $request){
    	// dd($request);
    	//$time = $request->time;
    	$user = auth()->user();
        $total_origin = auth()->user()->total;
    	$data = array(
    		'user_id' => $user->id,
            'name' => $user->name,
    		'currency' => $request->currency_unit,
    		'amount' => $request->money_amount,
    		'type' => 'Deposit',
    		'method' => 'Codepayment',
            'total' => $total_origin,
    	);

        // $total_current = $total_origin + $data['amount'];
        // $user->total = $total_current;
      
        $user->save();

	   	// $currency = $request->currency;
    	// $amount = $request->money_amount;
    	//dd($time);
    	DB::table('history')->insert($data);

        if ( $user->role == 'admin' ) {
            // dd('OKOK');
            $ddd = DB::table('history')->get();
            return view('admin.dashboard')->with('data', $ddd);
        }
    	$ddd = DB::table('history')->where('user_id', $user->id)->get();
    	return view('user.dashboard')->with('data', $ddd);
    }

    public function change_level(Request $request){

        $user = auth()->user();

        $user->level = $request->pay_level;

        $user->save();

        return view('user.levelpay');
    }

    public function withdraw(Request $request){
        // dd($request);
        //$time = $request->time;
        $user = auth()->user();
        $total_origin = auth()->user()->total;
        $data = array(
            'user_id' => $user->id,
            'name' => $user->name,
            'currency' => 'USD',
            'amount' => $request->withdraw_amount,
            'type' => 'Withdraw',
            'method' => $request->withdraw_option,
            'total' => $total_origin,
        );

        $total_current = $total_origin - $data['amount'];
        $user->total = $total_current;
      
        $user->save();
        // $currency = $request->currency;
        // $amount = $request->money_amount;
        // dd($time);
        DB::table('history')->insert($data);

        if ( $user->role == 'admin' ) {
            // dd('OKOK');
            $ddd = DB::table('history')->get();
            return view('admin.dashboard')->with('data', $ddd);
        }
        $ddd = DB::table('history')->where('user_id', $user->id)->get();
        return view('user.dashboard')->with('data', $ddd);
    }

    public function newtax(Request $request){
        // dd($request);
        //$time = $request->time;
        $user = auth()->user();
        $total_origin = auth()->user()->total;
        $data = array(
            'user_id' => $user->id,
            'name' => $user->name,
            'currency' => 'BTC',
            'amount' => $request->tax_amount,
            'type' => 'TAX',
            'method' => 'TaxPayment',
            'total' => $total_origin,
        );
        // $currency = $request->currency;
        // $amount = $request->money_amount;
        // dd($time);
        // $total_current = $total_origin - $data['amount'];
        // $user->total = $total_current;
      
        $user->save();
        DB::table('history')->insert($data);

        if ( $user->role == 'admin' ) {
            // dd('OKOK');
            $ddd = DB::table('history')->get();
            return view('admin.dashboard')->with('data', $ddd);
        }
        $ddd = DB::table('history')->where('user_id', $user->id)->get();
        return view('user.dashboard')->with('data', $ddd);
    }

    public function newlevel(Request $request){
        // dd($request);
        //$time = $request->time;
        $user = auth()->user();
        $total_origin = auth()->user()->total;
        $data = array(
            'user_id' => $user->id,
            'name' => $user->name,
            'currency' => 'BTC',
            'amount' => $request->tax_amount,
            'type' => 'Level',
            'method' => 'TaxPayment',
            'total' => $total_origin,
        );
        // $currency = $request->currency;
        // $amount = $request->money_amount;
        // dd($time);
        // $total_current = $total_origin - $data['amount'];
        // $user->total = $total_current;
      
        $user->save();
        DB::table('history')->insert($data);

        if ( $user->role == 'admin' ) {
            // dd('OKOK');
            $ddd = DB::table('history')->get();
            return view('admin.dashboard')->with('data', $ddd);
        }
        $ddd = DB::table('history')->where('user_id', $user->id)->get();
        return view('user.dashboard')->with('data', $ddd);
    }

    public function delHistory($id){

        $user = auth()->user();
        if ( $user->role == 'admin' ) {
            // dd('OKOK');
            DB::table('users')->where('id', '=', $id)->delete();

            $ddd = DB::table('users')->get();
            return view('admin.dashboard')->with('data', $ddd);
        }
        DB::table('history')->where('id', '=', $id)->delete();
        $ddd = DB::table('history')->where('id', $user->id)->get();
        return view('user.dashboard')->with('data', $ddd);
    }

    public function editHistory($id){

        $user = User::all();
        $data = DB::table('history')->where('id', '=', $id)->first();
        //$data1 = end($data);
       
        //dd($data);
        if ($data) {
            # code...
            return view('admin.edit')->with('data', $data);
        }
        return view('admin.dashboard')->with('data', $user);
    }

    public function userHistory($id){

        $data = DB::table('history')->where('user_id', '=', $id)->get();

        return view('admin.userhistory')->with('data', $data);
    }

   public function update(Request $request){

        $user = auth()->user();
        
        if ($request->pay_status=='Paid') {
            # code...
            $ddd = DB::table('users')->where('id', $request->user_id)->first();

            $data = array(
                'id' => $request->id,
                'currency' => $request->currency,
                'amount' => $request->amount,
                'type' => $request->type,
                'method' => $request->method,
                'pay_status' => $request->pay_status,
                'total' => $ddd->total - $request->amount,
            );
            DB::table('history')->where('id', $request->id)->update($data);

            $data1 = array(
                
                'total' => $ddd->total - $request->amount,
                
            );
            DB::table('users')->where('id', $request->user_id)->update($data1);
        }
        else {
            $ddd = DB::table('users')->where('id', $request->user_id)->first();

            $data = array(
                'id' => $request->id,
                'currency' => $request->currency,
                'amount' => $request->amount,
                'type' => $request->type,
                'method' => $request->method,
                'pay_status' => $request->pay_status,
                'total' => $ddd->total,
            );
            DB::table('history')->where('id', $request->id)->update($data);

        }
        $ddd = DB::table('users')->get();

        return view('admin.dashboard')->with('data', $ddd);
    }
}
