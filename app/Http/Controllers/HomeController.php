<?php

namespace App\Http\Controllers;

use App\Message;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Pusher\Pusher;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


     public function index()
    {
        $user = auth()->user();
        $data1 = User::all();
        //dd($data1);
        $data = DB::table('history')->where('user_id', $user->id)->get();

        return view('user.dashboard')->with('data', $data1);
    }

    public function admin()
    {
        $user = auth()->user();
        $data1 = User::all();
         // dd($user->role);
        $data = DB::table('history')->get();
         //dd('OKO');
        return view('admin.dashboard')->with('data', $data1);
    }

    public function user()
    {
        $user = auth()->user();
        // dd($user->id);
        $data = DB::table('history')->where('user_id', $user->id)->get();
        // dd('OKO');
        return view('user.dashboard')->with('data', $data);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function chat()
    {
        // select all users except logged in user
        // $users = User::where('id', '!=', Auth::id())->get();

        // count how many message are unread from the selected user
        if (Auth::user()->role === 'admin')
            $users = DB::select("select users.id, users.name, users.profile_image, users.email, count(is_read) as unread 
            from users LEFT  JOIN  messages ON users.id = messages.from and is_read = 0 and messages.to = " . Auth::id() . "
            where users.id != " . Auth::id() . " 
            group by users.id, users.name, users.profile_image, users.email");
        else
            $users = DB::select("select users.id, users.name, users.profile_image, users.email, count(is_read) as unread 
            from users LEFT  JOIN  messages ON users.id = messages.from and is_read = 0 and messages.to = " . Auth::id() . "
            where users.id = 16" . " 
            group by users.id, users.name, users.profile_image, users.email");

        return view('home', ['users' => $users]);
    }

    public function getMessage($user_id)
    {
        $my_id = Auth::id();

        //dd($user_id);

        // Make read all unread message
        Message::where(['from' => $user_id, 'to' => $my_id])->update(['is_read' => 1]);

        // Get all message from selected user
        $messages = Message::where(function ($query) use ($user_id, $my_id) {
            $query->where('from', $user_id)->where('to', $my_id);
        })->oRwhere(function ($query) use ($user_id, $my_id) {
            $query->where('from', $my_id)->where('to', $user_id);
        })->get();

        //dd($messages);
        return view('messages.index', ['messages' => $messages]);
    }

    public function sendMessage(Request $request)
    {
        $from = Auth::id();
        $to = $request->receiver_id;
        $message = $request->message;

        $data = new Message();
        $data->from = $from;
        $data->to = $to;
        $data->message = $message;
        $data->is_read = 0; // message will be unread when sending message
        $data->save();

        // pusher
        $options = array(
            'cluster' => 'ap1',
            'useTLS' => true
        );

        $pusher = new Pusher(
            env('PUSHER_APP_KEY'),
            env('PUSHER_APP_SECRET'),
            env('PUSHER_APP_ID'),
            $options
        );

        $data = ['from' => $from, 'to' => $to]; // sending from and to user id when pressed enter
        $pusher->trigger('my-channel', 'my-event', $data);
    }
}
