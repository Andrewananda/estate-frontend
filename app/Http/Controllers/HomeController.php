<?php

namespace App\Http\Controllers;

use App\Ad;
use App\Property;
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
        $property = Property::all();
        return view('welcome',['ads'=>$ads, 'properties'=>$properties,'propertie'=>$property]);
    }
}
