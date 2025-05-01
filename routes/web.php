<?php

use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewController;


Route::get('/', HomeController::class);

Route::controller(NewController::class)->group(function(){
    Route::get('news', 'index');
    Route::get('news/create', 'create');
    Route::get('news/{new}', 'show');
});





// Route::get('news/{new}/{category?}', function($new, $category=null){
//     if($category){
//         return "Bienvenido a las noticias de $new, de la categoria $category";
//     } else {
//         return "Bienvenido a las noticias de $new";
//     }
// });
