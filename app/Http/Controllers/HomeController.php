<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rashan;
use Auth;
use App\RashanItem;
use App\Needy;
use App\NeedyHistory;
use Carbon\Carbon;

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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $all_rashan = Rashan::where('user_id', Auth::id())->get();
        $all_needy = Needy::where('user_id', Auth::id())->count();
        $given_rashan_needy = Needy::where('user_id', Auth::id())->where('status', 'Given')->count();
        $pending_rashan_needy = Needy::where('user_id', Auth::id())->where('status', 'Pending')->count();

        return view('User.dashboard', compact('all_rashan', 'all_needy', 'given_rashan_needy', 'pending_rashan_needy'));
    }

    public function needies(){
        return view('User.needies');
    }
    public function rashan(){
        return view('User.rashan');
    }
}
