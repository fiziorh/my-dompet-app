<?php

namespace App\Http\Controllers;

use App\Models\SavingPlan;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class SavingPlanController extends Controller
{
    
    
    public function index(Request $request)
    {
        $active = 'savingplan';
        $title = 'Saving Plan';
        $saving = SavingPlan::all();
        return view('savingplan.savingdashboard', compact('active','title', 'saving'));
    }

    public function create() {
        return view('savingplan.createsaving', [
            'active' => 'savingplan',
            'title' => 'Saving Plan',
        ]);
        
    }
    
    public function store(Request $request) {
        $request->validate([
            'title' => 'required|string',
            'target_amount' => 'required',
            'target_date' => 'required|date',
        ]);

        $save = SavingPlan::create([
            'title' => $request->title,
            'target_amount' => $request->target_amount,
            'target_date' => $request->target_date,
        ]);

        if (!$save) {
            Alert::toast('Failed to save a Saving Plan!', 'error');
            return redirect()->back();
        }

        $save->save();
        Alert::toast('Success to save a saving plan', 'success');
        return redirect()->route('saving');
    }

    public function detail(Request $request, $id_saving) {
        $data = SavingPlan::find($id_saving);
        return view ('savingplan.detail', [
            'title' => 'Detail Saving Plan',
            'active' => 'savingplan',
        ], compact('data'));
    }

    public function update(Request $request, $id_saving) {
        $validatedData = $request->validate([
            'title' => 'required|string',
            'target_amount' => 'required',
            'target_date' => 'required|date',
        ]);

        $savingplan = SavingPlan::findOrFail($id_saving);

        $savingplan->title = $validatedData['title'];
        $savingplan->target_amount = $validatedData['target_amount'];
        $savingplan->target_date = $validatedData['target_date'];

        $savingplan->save();

        Alert::toast('Success to Update a saving plan', 'success');
        return redirect()->route('saving');
    }
}
