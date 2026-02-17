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
        $all_schedules = StudyDay::all() ?? [];

        view('layout.layout', compact('all_schedules'));
        
        return view('dashboard.study-day.index', compact('all_schedules'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.study-day.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       try {
            $request->validate([
                'date' => ['required', 'date'],
            ]);

            StudyDay::create([
                'date' => $request->date,
            ]);

            return redirect("/")
                ->with('success', 'Schedule created successfully.');
       }
       catch (\Throwable $th) {
           return redirect()
                ->back()
                ->with('error', $th->getMessage());
       }
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
        return view('dashboard.study-day.form_edit', compact('studyDay'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, StudyDay $studyDay)
    {
        try {
            $request->validate([
                'date' => ['required', 'date'],
            ]);

            $studyDay->update([
                'date' => $request->date,
            ]);

            return redirect("/")
                ->with('success', 'Schedule updated successfully.');
        }
        catch (\Throwable $th) {
            return redirect()
                ->back()
                ->with('error', $th->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(StudyDay $studyDay)
    {
        try{
            $studyDay->delete();
        
            return redirect("/")
                ->with('success', 'Schedule deleted successfully.');
        }
        catch (\Throwable $th) {
            return redirect()
                ->back()
                ->with('error', $th->getMessage());
        }
    }
}
