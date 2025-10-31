<?php

use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use App\Models\Announsment;
use App\Models\Events;
use App\Models\Newsletter;
use App\Models\Members;
use App\Models\projects;
use App\Models\Slide;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $announcements = Announsment::latest()->take(6)->get();
    $projects = Projects::latest()->take(6)->get();
    $events = Events::latest()->take(6)->get();
$slides = Slide::where('status', true)->pluck('image_path'); // Get full objects

    return view('welcome',compact('announcements','projects','events','slides'));
})->name('home');
Route::get('/members/{selectedYear?}', function ($selectedYear='2023/34') {
    // $selectedYear = ;
    $executiveMembers = Members::where('category', 'Executive Committee')
                          ->where('year', $selectedYear)
                          ->orderBy('order_number','asc')
                          ->get();

    $boardMembers = Members::where('category', 'Board of Directors')
                      ->where('year', $selectedYear)
                      ->orderBy('order_number','asc')
                      ->get();
    $years = Members::select('year')
                ->distinct()
                ->orderBy('year', 'desc') // or 'asc' if you prefer
                ->pluck('year');


    return view('members',compact('executiveMembers','boardMembers','selectedYear','years'));
})->name('members');

Route::get('/projects', function () {
        $projects = Projects::latest()->paginate(6);

    return view('projects',compact('projects'));

})->name('projects');

Route::get('/events', function () {
        $events = Events::latest()->paginate(6);

    return view('events',compact('events'));

})->name('projects');

Route::get('/projects/{id}', function ($id) {
    $project = Projects::findOrFail($id); 
    return view('insprojects', compact('project'));
})->name('insprojects.show');

Route::get('/events/{id}', function ($id) {
    $event = Events::findOrFail($id); 
    return view('insevents', compact('event'));
})->name('insevent.show');


Route::get('/anous', function () {
    $announcements = Announsment::orderBy('date_created', 'asc')->paginate(10); 
    return view('anunusments', compact('announcements'));

})->name('all.anon.show');

Route::get('/anous/{id}', function ($id) {
    $announsment = Announsment::findOrFail($id); 
    return view('insanunusment', compact('announsment'));

})->name('insanno.show');

Route::get('/news-letters',function (){
        $newsletters = Newsletter::orderBy('created_at', 'desc')->get();
    return view('newsleters',compact('newsletters'));
});

Route::get('/news-letters/{slug}', function ($slug) {
    $newsletter = Newsletter::where('slug', $slug)->firstOrFail();
    return view('newsletter', compact('newsletter'));
});

Route::get('/contact',function (){
    return view('contact_us');
});


require __DIR__.'/auth.php';
