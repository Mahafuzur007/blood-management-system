<?php

namespace App\Http\Controllers;

use App\Models\District;
use App\Models\Divison;
use App\Models\Upazilla;
use Illuminate\Http\Request;

class UpazillaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $upazillas = Upazilla::latest()->get();
        return view('admin.pages.upazillas.index', compact('upazillas'));
    }

    public function create()
    {
        $divisons = Divison::all();
        $districts = District::all();
        return view('admin.pages.upazillas.create', compact('divisons', 'districts'));
    }

    public function store(Request $request)
    {

        Upazilla::create([
            'name' => $request->name,
            'division_id' => $request->divison,
            'district_id' => $request->district,
        ]);

        return redirect()->route('upazillas.index')->withStatus('Upazillas Added Successfully');
    }

    public function destroy($id)
    {
        Upazilla::destroy($id);
        return redirect()->route('upazillas.index')->withStatus('Deleted Successfully');
    }
}
