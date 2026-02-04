<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudyDayController;
use App\Models\StudyDay;

// Study Day Route

// show the dashboard thing
Route::get('/', [StudyDayController::class, 'index'])
->name('dashboard.index');

// show add schedule form
Route::get('/add-study-day', [StudyDayController::class, 'create'])
->name('dashboard.form-study-day');

// add new study day or schedule
Route::post('/add-study-day', [StudyDayController::class, 'store'])
->name('dashboard.store-study-day');

// show edit form
Route::get('/edit-study-day/{studyDay}', [StudyDayController::class, 'edit'])
->name('dashboard.form_edit-study-day');

// update the study day or schedule
Route::patch('update-study-day/{studyDay}', [StudyDayController::class, 'update'])
->name('dashboard.update-study-day');