<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use App\Models\Divison;
use App\Models\Profile;
use App\Models\District;
use App\Models\Upazilla;
use App\Models\BloodGroup;
use App\Models\PostOffice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Database\QueryException;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $profiles = Profile::latest()->get();
        return view('admin.pages.profiles.index', compact('profiles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::all();
        $roles = Role::all();
        $divisons = Divison::all();
        $districts = District::all();
        $upazillas = Upazilla::all();
        $bloods = BloodGroup::all();
        $postOffices = PostOffice::all();
        return view('admin.pages.profiles.create', compact('users', 'roles', 'divisons', 'districts', 'upazillas', 'bloods', 'postOffices'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $image = time() . '-' . $request->title . '.' . $request->image->extension();
        $request->image->storeAs('public/images', $image);
        Profile::create([
            'user_id' => $request->name,
            'gender' => $request->gender,
            'age' => $request->age,
            'dob' => $request->dob,
            'image' => $image,
            'last_donate' => $request->last_donate,
            'donation_count' => $request->donation_count,
            'blood_group_id' => $request->group,
            'division_id' => $request->divison,
            'district_id' => $request->district,
            'upazillas_id' => $request->upazilla,
            'post_office_id' => $request->post_office,
            'village' => $request->village,
        ]);

        return redirect()->route('profiles.index')->withStatus('New Profile Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $profile = Profile::findOrFail($id);
        return view('admin.pages.profiles.show', compact('profile'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $profile = Profile::findOrFail($id);
        $roles = Role::pluck('name', 'id')->toarray();
        $divisons = Divison::pluck('name', 'id')->toarray();
        $districts = District::pluck('name', 'id')->toarray();
        $upazillas = Upazilla::pluck('name', 'id')->toarray();
        $bloods = BloodGroup::pluck('group', 'id')->toarray();
        $postOffices = PostOffice::pluck('name', 'id')->toarray();
        return view('admin.pages.profiles.edit', compact('profile', 'roles', 'divisons', 'districts', 'upazillas', 'bloods', 'postOffices'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $profile = Profile::findOrFail($id);
        try {

            if ($request->hasFile('image')) {
                $image = time() . '-' . $request->title . '.' . $request->image->extension();
                $request->image->storeAs('public/images', $image);
            }
            // dd($request->all());
            $profile->update([
                // 'user_id' => $request->userId,
                // 'gender' => $request->gender,
                // 'age' => $request->age,
                'image' => $image ?? $profile->image,
                'last_donate' => $request->last_donate,
                'dob' => $request->dob,
                'donation_count' => $request->donation_count,
                // 'blood_group_id' => $request->group,
                'division_id' => $request->divison,
                'district_id' => $request->district,
                'upazillas_id' => $request->upazilla,
                'post_office_id' => $request->postOffice,
                'village' => $request->village,
            ]);
            return redirect()->route('profiles.index')->withStatus('Profile Updated Successfully');
        } catch (QueryException $e) {
            Log::error($e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Profile::destroy($id);
        return redirect()->route('profiles.index')->withStatus('Profile Deleted Successfully');
    }
}
