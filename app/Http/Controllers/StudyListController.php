<?php

namespace App\Http\Controllers;

use App\Models\StudyDay;
use App\Models\StudyList;
use Illuminate\Http\Request;

class StudyListController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($studyDayId)
    {
        $studyDay = StudyDay::where('study_days_id', $studyDayId)->first();

        return view('dashboard.study-list.form', compact('studyDay'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
        ]);

        StudyList::create([
            'title' => $request->title,
            'description' => $request->description,
            'study_days_id' => $request->study_days_id,
            'status' => false
        ]);

        return redirect("/study-list/$request->study_days_id");
    }

    /**
     * Display the specified resource.
     */
    public function show($studyDayId)
    {
        $study_lists = StudyList::where('study_days_id', $studyDayId)->get() ?? [];
        $studyDay = StudyDay::where('study_days_id', $studyDayId)->first();

        view('layout.layout', compact('study_lists'));

        return view('dashboard.study-list.index', compact('studyDay', 'study_lists'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(StudyList $studyList)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, StudyList $studyList)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(StudyList $studyList)
    {
        $studyList->delete();
        
        return redirect("/study-list/$studyList->study_days_id");
    }
}
