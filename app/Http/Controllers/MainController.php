<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;

class MainController extends Controller{
   public function activity(){
       $activities = new Activity();
       return view('activity', ['activities' => $activities->all()]);
        // return view('activity');
   }
    public function activity_check(Request $request){

        $activity = new Activity();
        $activity->activity = $request->input('activity');
        $activity->duration = $request->input('duration');

        $activity->save();

        return redirect()->route('activity');
    }
    public function food(){
        return view('food');
   }
}
