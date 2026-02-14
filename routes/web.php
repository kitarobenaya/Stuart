<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudyDayController;
use App\Http\Controllers\StudyListController;
use App\Models\StudyDay;

// Study Day Route

// show the dashboard thing (index)
Route::get('/', [StudyDayController::class, 'index'])
->name('dashboard.index');

// show add study day form (create)
Route::get('/add-study-day', [StudyDayController::class, 'create'])
->name('dashboard.form-study-day');

// add new study day (store)
Route::post('/add-study-day', [StudyDayController::class, 'store'])
->name('dashboard.store-study-day');

// show edit study day form (edit)
Route::get('/edit-study-day/{studyDay}', [StudyDayController::class, 'edit'])
->name('dashboard.form_edit-study-day');

// update the study day (update)
Route::patch('update-study-day/{studyDay}', [StudyDayController::class, 'update'])
->name('dashboard.update-study-day');

// delete the study day (destroy)
Route::delete('/delete-study-day/{studyDay}', [StudyDayController::class, 'destroy'])
->name('dashboard.delete-study-day');


// study list route

// show study list (index)
Route::get('/study-list/{studyDayId}', [StudyListController::class, 'show'])
->name('dashboard.study-list'); 

// show add study list form (create)
Route::get('/study-list/add-study-list/{studyDayId}', [StudyListController::class, 'create'])
->name('dashboard.form-study-list');

// add new study list (store)
Route::post('/study-list/add-study-list', [StudyListController::class, 'store'])
->name('dashboard.store-study-list');

// show edit study list form (edit)
Route::get('/study-list/edit-study-list/{studyDayId}', [StudyListController::class, 'edit'])
->name('dashboard.form_edit-study-list');

// update the study list (update)
Route::patch('/study-list/update-study-list/{studyDayId}', [StudyListController::class, 'update'])
->name('dashboard.update-study-list');

// delete the study list (destroy)
Route::delete('/study-list/delete-study-list/{studyList}', [StudyListController::class, 'destroy'])
->name('dashboard.delete-study-list');