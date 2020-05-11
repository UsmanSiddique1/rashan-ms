<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rashan;
use Auth;
use App\RashanItem;
use App\Needy;
use App\NeedyHistory;
use Carbon\Carbon;

class RashanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
	 public function needies(){

        $all_needies = Needy::where('user_id', Auth::id())->get();
        $all_rashan = Rashan::where('user_id', Auth::id())->get();
        return view('User.needies', compact('all_needies', 'all_rashan'));
    }


    public function rashan(){
    	$rashan = Rashan::where('user_id', Auth::id())->get();
        return view('User.rashan', compact('rashan'));
    }

    public function rashan_del($id){

        $rashan_del = Rashan::where('id', $id)->first();
        foreach($rashan_del->rashanitems as $items){
            $items->delete();
        } 
        $rashan_del->delete();
        return redirect()->back()->with('msg', 'Rashan has been Deleted');
    }
    public function rashan_list($id){
    	$rashan_list = RashanItem::where('rashan_id', $id)->get();
    	$rashan_id = $id;
    	return view('User.rashan_list', compact('rashan_list', 'rashan_id'));
    }

    public function edit_rashan_item(Request $request){

        $edit_rashan_item = RashanItem::where('id', $request['id'])->first();
        return $edit_rashan_item;
        if ($request['name'] != '') {
            $edit_rashan_item->name = $request['name'];
        }

         if ($request['unit'] != '') {
            $edit_rashan_item->phone = $request['unit'];
        }

         if ($request['qty'] != '') {
            $edit_rashan_item->cnic = $request['qty'];
        }


        $edit_rashan_item->save();

        return redirect()->back()->with('msg', 'Item details has been updated');
    }

    public function rashan_item_del($id){

        $rashan_item_del = RashanItem::where('id', $id)->first();
        $rashan_item_del->delete();

        return redirect()->back()->with('msg', 'Item Has Been Deleted');
    }

    public function add_needy(Request $request){

        $add_needy = new Needy;
        $add_needy->name = $request['name'];
        $add_needy->phone = $request['phone'];
        $add_needy->cnic = $request['cnic'];
        $add_needy->status = 'Pending';        
        $add_needy->user_id = Auth::id();
        $add_needy->save();

        return redirect()->back()->with('msg', 'New Needy has been added');

    	
    }

    public function update_needy(Request $request){

        $update_needy = Needy::where('id', $request['id'])->first();

        if ($request['name'] != '') {
            $update_needy->name = $request['name'];
        }

         if ($request['phone'] != '') {
            $update_needy->phone = $request['phone'];
        }

         if ($request['cnic'] != '') {
            $update_needy->cnic = $request['cnic'];
        }


        $update_needy->save();

        return redirect()->back()->with('msg', 'Needy details has been updated');

    }


    public function needy_del($id){

        $needy_del = Needy::where('id', $id)->first();

        
        if ($needy_del->rashan_id != null) {
            
            $needy_rashan = Rashan::where('id', $needy_del->rashan_id)->first();
            $needy_rashan->remaining += 1;
            $needy_rashan->save();

        }

        $needy_del->delete();

        return redirect()->back()->with('msg', 'Needy has been Deleted');
    }

    /////////// Give Rashan to Needy

    public function give_rashan(Request $request){

        $needy = Needy::where('id', $request['id'])->first();
        $days = $request['days'];
        $needy->status = 'Given';
        $needy->rashan_id = $request['rashan_id'];
        $needy->user_id = Auth::id();

        
        $rashan = Rashan::where('id', $request['id'])->first();
        $days = $rashan->days;
      
        $needy_history =new NeedyHistory;
        $needy_history->needy_id = $request['id'];
        $needy_history->status = 'Given';
        $needy_history->rashan_id = $request['rashan_id'];
        $needy_history->user_id = Auth::id();
        $needy_history->rashan_count += 1;
        $needy_history->start_date = Carbon::now();
        $needy_history->end_date = Carbon::now()->addDays($days);
       

        $needy->save();
        $needy_history->save(); 



        $remaining_rashan = Rashan::where('id', $request['rashan_id'])->first();
        $remaining_rashan->remaining -= 1;

        $remaining_rashan->save();


        return redirect()->back()->with('msg', 'Rashan Has been Given');




    }


    public function needies_rashan($id){

    	$needy_rashan = Needy::where('rashan_id', $id)->where('status', 'Given')->get();
    	return view('User.needies_rashan', compact('needy_rashan'));
    }

    public function del_needy_rashan($id){

        $del_needy_rashan = Needy::where('id', $id)->first();
        $del_needy_rashan->rashan_id = null;
        $del_needy_rashan->status = 'Pending';
        $del_needy_rashan->save();
        return redirect()->back()->with('msg', 'Needy has been removed from this rashan list');

    }


    public function add_rashan(Request $request){

    	$add_rashan = new Rashan;
    	$add_rashan->name = $request['name'];
    	$add_rashan->qty = $request['qty'];
        $add_rashan->remaining = $request['qty'];
        $add_rashan->days = $request['days'];
    	$add_rashan->user_id = Auth::id();
    	$add_rashan->save();

    	return redirect()->back();
    }



    public function add_rashan_item(Request $request){

    	$add_item = new RashanItem;
    	$add_item->name = $request['name'];
    	$add_item->qty = $request['qty'];
        $add_item->unit = $request['unit'];
    	$add_item->rashan_id = $request['rashan_id'];

    	$add_item->save();
    	return redirect()->back()->with('msg', 'Rashan Item Has Been Added');

    }
}
