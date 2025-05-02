<?php

use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventController;


Route::get('/', HomeController::class);

Route::controller(EventController::class)->group(function(){
    Route::get('events', 'index')->name('events.index');
    Route::get('events/create', 'create')->name('events.create');
    Route::post('events', 'save')->name('events.save');
    Route::get('events/{event}', 'show')->name('events.show');
    Route::get('events/{event}/edit', 'edit')->name('events.edit');
    Route::put('events/{event}', 'update')->name('events.update');
});






// Route::get('news/{new}/{category?}', function($new, $category=null){
//     if($category){
//         return "Bienvenido a las noticias de $new, de la categoria $category";
//     } else {
//         return "Bienvenido a las noticias de $new";
//     }
// });
