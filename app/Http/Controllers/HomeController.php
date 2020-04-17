<?php

namespace App\Http\Controllers;

use App\Ad;
use App\Enquiry;
use App\Property;
use App\Property_category;
use App\Unit_group;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //Get ads to be displayed
    public function load_home_page() {
        //get adds-section available for display
        $ads = Ad::query()
            ->where(['ads.deleted'=>0])
            ->orderBy('ads.id','DESC')
            ->join('unit_groups','ads.unit_group_id','unit_groups.id')
            ->get();

        //Display properties-section take from unit-groups
        $properties = Unit_group::query()
            ->where(['deleted'=>0])
            ->orderBy('id','DESC')
            ->get();

        //get property
        $property_search = Property::all();
        return view('welcome',['ads'=>$ads, 'properties'=>$properties,'property_search'=>$property_search]);
    }

    public function blog() {
        $property_search = Property::all();
        return view('blog',['property_search'=>$property_search]);
    }

    public function property($id) {
        $property = Unit_group::where(['id'=>$id])->first();
        //get similar units
        $similar_properties = Unit_group::where(['property_category_id'=>$property->property_category_id])->get();

        return view('property',['property'=>$property,'similar_properties'=>$similar_properties]);
    }

    public function order($id) {
        $order = Unit_group::where(['id'=>$id])->first();
        return view('order',['order'=>$order]);
    }

    public function orderComplete(Request $request) {
        $order = new Enquiry();
        $order->name = $request['name'];
        $order->phone = $request['phone'];
        $order->email = $request['email'];
        $order->property_id = $request['property_id'];
        $order->is_verified = 0;
        $order->is_website = 1;
        $order->enquiry_date = date('Y-m-d H:i:s');

        $order->save();
        return redirect()->back()->with(['message'=>'Submitted Successfully']);
    }
}