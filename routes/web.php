<?php

use App\Http\Controllers\{
  AdminController,
  AdminActionController
};
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Auth;




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


Route::get('/', [ClientController::class,"home"]);
Route::get('/artists', [ClientController::class,"artists"]);
Route::get('/single_artist/{id}', [ClientController::class,"single_artists"]);
Route::get('/contact', [ClientController::class,"contact"]);


////ADMIN

Route::middleware('auth')->group(function () {
    Route::group([
        'prefix' => 'admin',
      ], function () {
        Route::get("/",[AdminController::class,"index"]);

        //HOME PAGE
        Route::get("/homepage",[AdminController::class,"homepage"])->name("admin_home");
        Route::post("/homepage/create/{id}",[AdminActionController::class,"edited_homepage"])
        ->name("homepage_create");

        //ARTISTS
        Route::get("/artists",[AdminController::class,"artists"])->name("admin_artists");
        Route::get("/artists/create",[AdminController::class,"artists_create"])->name("artists_create");
        Route::post("/artists_create",[AdminActionController::class,"create_artist"])
        ->name("create_artist");
        Route::delete("/artists_delete/{id}",[AdminActionController::class,"remove_artist"])
        ->name("delete_artist");

        Route::get("/artists_edit/{id}",[AdminController::class,"artists_edit"])
        ->name("artists_edit");

        Route::put("/artists_update/{id}",[AdminActionController::class,"artists_edit"])
        ->name("artists_updated");

        Route::get("/label",[AdminController::class,"artists_label"])
        ->name("artists_label");

        Route::get("/create_label",[AdminController::class,"create_label"])
        ->name("create_label");

        
        Route::post("/label_create",[AdminActionController::class,"create_label"])
        ->name("label_create");

        Route::get("/label_edit/{id}",[AdminController::class,"edit_label"])
        ->name("edit_label");

      });



});

/*
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
*/

Auth::routes(['register' => false]);


require __DIR__.'/auth.php';