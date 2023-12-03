<?php

namespace App\Http\Controllers;

use App\Models\BloodGroup;
use Illuminate\Http\Request;

class BloodGroupController extends Controller
{
    public function index()
    {
        $bloods = BloodGroup::latest()->get();
        return view('admin.pages.bloodgroup.index', compact('bloods'));
    }


    public function create()
    {
        return view('admin.pages.bloodgroup.create');
    }


    public function store(Request $request)
    {
        BloodGroup::create([
            'group' => $request->group,
        ]);
        return redirect()->route('bloodgroups.index')->withStatus('Blood Group Added Successfully');
    }

    public function destroy($id)
    {
        BloodGroup::destroy($id);
        return redirect()->route('bloodgroups.index')->withStatus('Blood Group Deleted Successfully');
    }
}
