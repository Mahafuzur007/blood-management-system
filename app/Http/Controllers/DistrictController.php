<?php

namespace App\Http\Controllers;

use App\Models\District;
use App\Models\Divison;
use Illuminate\Http\Request;

class DistrictController extends Controller
{
    public function index()
    {
        $districts = District::latest()->get();
        return view('admin.pages.districts.index', compact('districts'));
    }


    public function create()
    {
        $divisons = Divison::all();
        return view('admin.pages.districts.create', compact('divisons'));
    }

    public function store(Request $request)
    {

        District::create([
            'name' => $request->name,
            'division_id' => $request->divison,
        ]);

        return redirect()->route('districts.index')->withStatus('District Added Successfully');
    }

    public function destroy($id)
    {

        District::destroy($id);
        return redirect()->route('districts.index')->withStatus('District Deleted Successfully');
    }
}
