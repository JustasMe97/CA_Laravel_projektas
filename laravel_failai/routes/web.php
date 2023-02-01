<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the 'web' middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/categories', function () {
    return Category::all();
});
Route::get('/new_cat', function () {
    return Category::firstOrCreate(
        [
            'id' => 12
        ],
        [
            'name' => 'Statybines Medžiagos',
            'slug' => 'statybines',
            'description' => 'Statybininkams, statybai',
            'image' => '/img/categories/category-1ę.jpg',
            'status_id' => 18,
            'parent_id' => null,
            'sort_order' => null,
            'created_at' => now(),
            'updated_at' => now()
        ]
    );
});

Route::get('/del_cat', function () {
    return Category::all()->map(function ($category) {
        $category->delete();
        //
        //
    });
});
