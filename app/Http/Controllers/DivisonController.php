<?php

namespace App\Http\Controllers;

use App\Models\Divison;
use Illuminate\Http\Request;

class DivisonController extends Controller
{
    public function index()
    {
        $divisons = Divison::latest()->get();
        return view('admin.pages.divisons.index', compact('divisons'));
    }


    public function create()
    {
        return view('admin.pages.divisons.create');
    }


    public function store(Request $request)
    {
        Divison::create([
            'name' => $request->name,
        ]);
        return redirect()->route('divisons.index')->withStatus('Divison Added Successfully');
    }

    public function destroy($id)
    {
        Divison::destroy($id);
        return redirect()->route('divisions.index')->withStatus('Divison Deleted Successfully');
    }
}
