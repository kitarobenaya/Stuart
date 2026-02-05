<?php

namespace App\Http\Controllers;

use App\Models\StudyDay;
use Illuminate\Http\Request;

class StudyDayController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allSchedules = StudyDay::all();
        
        return view('dashboard.index', compact('allSchedules'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'date' => ['required', 'date'],
            'description' => 'required'
        ]);

        StudyDay::create([
            'date' => $request->date,
            'description' => $request->description
        ]);

        return redirect("/");
    }

    /**
     * Display the specified resource.
     */
    public function show(StudyDay $studyDay)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(StudyDay $studyDay)
    {
        return view('dashboard.form_edit', compact('studyDay'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, StudyDay $studyDay)
    {
        $studyDay->update([
            'date' => $request->date,
            'description' => $request->description
        ]);

        return redirect("/");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(StudyDay $studyDay)
    {
        $studyDay->delete();
        
        return redirect("/");
    }
}
