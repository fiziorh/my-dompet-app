<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SavingPlanController extends Controller
{
    
    
    public function index(Request $request)
    {
        $active = 'savingplan';
        $title = 'Saving Plan';
        //$user = $request->user();
        //$savingPlans = $user->savingPlans;

        return view('savingplan.savingdashboard', compact('active','title'));
    }
    
}
