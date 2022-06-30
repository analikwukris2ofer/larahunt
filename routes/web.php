<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//All Listings
Route::get('/', function () {
    return view('listings', [
        'heading' => 'Latest Listings',
        'listings' => Listing::all()//pulls in data from the listing.php in the models folder.
    ]);
});

Route::get('/listings/{id}', function ($id) {
    return view('listing', [
        'listing' => Listing::find($id)//pulls in data from the listing.php in the models folder.
    ]);
});

// Route::get('hello', function(){
//     return response('<h1>Hello World</h1>', 200)
//     ->header('Content-Type', 'text/plain')
//     ->header('foo', 'bar');
// });

// Route::get('/posts/{id}', function($id){
//     // ddd($id);
//     return response('Post '. $id);
// })->where('id', '[0-9]+');//allows only values from 0 till 9 for the id.

// Route::get('/search', function(Request $request){
//     dd($request->name . ' ' . $request->city);//pulls out the name and city from the request.
//     //search?name=Chris&city=hamm
// });