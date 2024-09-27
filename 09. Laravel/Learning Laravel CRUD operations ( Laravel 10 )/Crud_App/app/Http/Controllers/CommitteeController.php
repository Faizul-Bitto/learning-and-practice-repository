<?php

namespace App\Http\Controllers;

use App\Models\Committee;
use Illuminate\Http\Request;

class CommitteeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $committee_members_list = Committee::latest()->paginate(3);

        // return view('CommitteeMembers.index', compact('committee_members_list'))->with('i',(request()->input('page', 1) - 1 ) * 3);

        $committee_members_list = Committee::orderBy('id', 'asc')->paginate(2); // Order by ID in ascending order
        return view('CommitteeMembers.index', compact('committee_members_list'));


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('CommitteeMembers.add'); //viewfile -> CommitteeMembers and that blade file -> add.blade.php
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated_data = $request->validate([
            'name'=>'required',
            'email' => 'required',
            'phone' => 'required|unique:committee',
            'designation' => 'required'
        ]);

        Committee::create($validated_data);

        return redirect()->route('committee.index')->with('success', 'Member Added Successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(Committee $committee)
    {
        return view('CommitteeMembers.show', compact('committee'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Committee $committee)
    {
        return view('CommitteeMembers.update', compact('committee'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Committee $committee)
    {
        $validated_data = $request->validate([
            'name'=>'required',
            'email' => 'required',
            'phone' => 'required|unique:committee,phone,' . $committee->id,
            'designation' => 'required'
        ]);

        $committee->update($validated_data);

        return redirect()->route('committee.index')->with('success', 'Information Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Committee $committee)
    {
        $committee->delete();

        return redirect()->route('committee.index')->with('success', 'Member Deleted Successfully');

    }
}
