<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Income;
use App\Models\History;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class IncomeController extends Controller
{
    public function index(Request $request)
    {
        $id_user = $request->session()->get('id_user');
        return view('admin.income', [
            'title' => 'Income',
            'active' => 'income',
        ], compact('id_user'));
    }

    public function store(Request $request)
    {

        DB::beginTransaction();
        try {
            $id_user = $request->session()->get('id_user');
            $request->validate([
                'id_user' => 'required',
                'title' => 'required',
                'category' => 'required',
                'nominal' => 'required',
                'description' => 'nullable'
            ]);

            $income = Income::create([
                'id_user' => $request->id_user,
                'title' => $request->title,
                'category' => $request->category,
                'nominal' => $request->nominal,
                'description' => $request->description,
            ]);

            if (!$income) {
                Alert::toast('Failed to Post a Income!', 'error');
                return redirect()->back();
            }

            $id_income = $income->id_income;

            $history = History::create([
                'id_user' => $id_user,
                'id_income' => $id_income,
            ]);

            if (!$history) {
                Alert::toast('Failed to Post a Income!', 'error');
                DB::rollBack();
                return redirect()->back();
            }

            DB::commit();

            Alert::toast('Success to Post a Income!', 'success');
            return redirect()->route('income');
        } catch (\Exception $e) {
            DB::rollBack();
            Alert::toast('An error occurred. Please try again later.', 'error');
            return redirect()->back();
        }
    }
}
