<?php

namespace App\Http\Controllers;

use App\Ad;
use App\Bedroom;
use App\Contact;
use App\Enquiry;
use App\Location;
use App\Property;
use App\Property_category;
use App\Property_type;
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
        //Search Models
        $property_categories = Property_category::all();
        $property_types = Property_type::all();
        $locations = Location::all();

        return view('welcome',[
            'ads'=>$ads,
            'properties'=>$properties,
            'property_search'=>$property_search,
            'property_categories'=>$property_categories,
            'property_types'=>$property_types,
            'locations'=>$locations
        ]);
    }

    //Blog
    public function blog() {
        $property_search = Property::all();
        return view('blog',['property_search'=>$property_search]);
    }

    //Property
    public function property($id) {
        $property = Unit_group::where(['id'=>$id])->first();
        //get similar units
        $similar_properties = Unit_group::where(['property_category_id'=>$property->property_category_id])->get();

        return view('property',['property'=>$property,'similar_properties'=>$similar_properties]);
    }

    //Order
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

    public function contactCreate(Request $request) {
        $contact = new Contact();
        $contact->name = $request['name'];
        $contact->subject = $request['subject'];
        $contact->email = $request['email'];
        $contact->phone = $request['phone'];
        $contact->message = $request['message'];
        $contact->save();
        return redirect()->back()->with(['message'=>'Successfully sent, we will get back to you!']);
    }

    public function propertiesSearch(Request $request) {
        $properties = Unit_group::query()
            ->where('bedroom',$request['bedroom'])
            ->orWhere('property_category_id',$request['property-category'])
            ->orWhere('property_type_id',$request['property-type'])
            ->orWhere('location_id',$request['location'])
            ->orWhere('rent',$request['max_price'])
            ->get();

        return view('properties',['properties'=>$properties]);
    }
}
