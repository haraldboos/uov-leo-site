<?php

use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use App\Models\Announsment;
use App\Models\Events;
use App\Models\Members;
use App\Models\projects;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $announcements = Announsment::latest()->take(6)->get();
    $projects = Projects::latest()->take(6)->get();
    $events = Events::latest()->take(6)->get();

    return view('welcome',compact('announcements','projects','events'));
})->name('home');
Route::get('/members/{selectedYear?}', function ($selectedYear='2023/34') {
    // $selectedYear = ;
    $executiveMembers = Members::where('category', 'Executive Committee')
                          ->where('year', $selectedYear)
                          ->orderBy('order_number')
                          ->get();

    $boardMembers = Members::where('category', 'Board of Directors')
                      ->where('year', $selectedYear)
                      ->orderBy('order_number')
                      ->get();
    $years = Members::select('year')
                ->distinct()
                ->orderBy('year', 'desc') // or 'asc' if you prefer
                ->pluck('year');


    return view('members',compact('executiveMembers','boardMembers','selectedYear','years'));
})->name('members');
Route::get('/project', function () {
    return view('projects');
})->name('projects');

Route::get('/projects/{id}', function ($id) {
    $project = projects::findOrFail($id); // Finds by ID and throws 404 if not found
    return view('insprojects', compact('project'));
})->name('insprojects.show');




require __DIR__.'/auth.php';
