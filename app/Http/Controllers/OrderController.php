<?php

namespace App\Http\Controllers;
use App\Models\Activity;
use App\Models\Provider;
use App\Models\Region;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function home(){
        return view('site.home');
    }
    
    public function recherche(){ 
        $activities=Activity::all();
        $regions=Region::all();
        $providers = Provider::all();;

        //$query=Activity::query();
        //$filteredActivities = $query->where('nom', 'marwen');

        return view('site.recherche',compact('activities','regions', 'providers'));
     }

     public function search(Request $request) {
        $activityId = $request->input('Activity_id');
        $regionId = $request->input('Region_id');
        $activities=Activity::all();
        $regions=Region::all();
        $providers = Provider::where('Activity_id', $activityId)->where('Region_id', $regionId)->get();
        return view('site.recherche',compact('activities','regions', 'providers'));
     }
}
