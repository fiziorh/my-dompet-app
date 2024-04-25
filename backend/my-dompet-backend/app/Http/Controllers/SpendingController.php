<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Spending;
use App\Models\History;

class SpendingController extends Controller
{
    public function index(Request $request)
    {
        $active = 'spending';
        $title = 'Spending';
        $id_user = $request->session()->get('id_user');
        return view('admin.spending', compact('active', 'title', 'id_user'));
    }

    public function store(Request $request)
    {
        DB::beginTransaction();
        $id_user = $request->session()->get('id_user');
        $request->validate([
            'title' => 'required|string',
            'category' => 'required|string',
            'nominal' => 'required|numeric',
            'description' => 'nullable|string'
        ]);

        $spending = Spending::create([
            'id_user' => $id_user,
            'title' => $request ->title,
            'category' => $request ->category,
            'nominal' => $request ->nominal,
            'description' => $request ->description
        ]);

        if(!$spending){
            Alert::toast('Failed to Post the Spending!', 'error');
            return redirect() ->back();
        }

        $id_spending = $spending->id_spending;

        $history = History::create([
            'id_user' => $id_user,
            'id_spending' => $id_spending
        ]);

        if(!$history) {
            Alert::toast('Failed to Post the Spending!', 'error');
            DB::rollBack();
            return redirect()->back();
        }
        DB::commit();
        Alert::toast('Success to Post a Spending!', 'success');
        return redirect()->route('spending');

    }


}
