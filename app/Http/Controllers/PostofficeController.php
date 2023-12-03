<?php

namespace App\Http\Controllers;

use App\Models\Divison;
use App\Models\District;
use App\Models\PostOffice;
use App\Models\Upazilla;

use Illuminate\Http\Request;

class PostofficeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $postoffices = PostOffice::latest()->get();
        return view('admin.pages.postoffices.index', compact('postoffices'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $divisons = Divison::all();
        $districts = District::all();
        $upazillas = Upazilla::all();
        return view('admin.pages.postoffices.create', compact('divisons', 'districts', 'upazillas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        PostOffice::create([
            'name' => $request->name,
            'division_id' => $request->divison,
            'district_id' => $request->district,
            'upazillas_id' => $request->upazilla,
        ]);

        // dd($request->all());

        return redirect()->route('pso.index')->withStatus('PSO Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        PostOffice::destroy($id);
        return redirect()->route('pso.index')->withStatus('Deleted Successfully');
    }
}
