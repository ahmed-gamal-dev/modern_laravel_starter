<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MailController;


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

/* routes are orgnized perectly with best paractice work, to make your work clearly */
/*
* ALL web routes roganized here in seperate files according to namespace and prefix
* They are arranged perfectly to accommodate large projects
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    /* your protected routes must be here */

    Route::get('/dashboard', function () {  return view('dashboard'); })->name('dashboard');

    Route::group(['namespace' => 'Backend'], function () {
    /* put here routes that them controllers are in the controllers/Api/Backend namespace */
                
                Route::name('admin')->prefix('admin')->group(__DIR__ . '/web/Backend/admin.php');
                     /* routes  prefixed with admin or any prefix put them here */
        });
    
    Route::namespace('Frontend')->group(__DIR__ . '/web/Frontend/user.php');
    /* put here routes that them controllers are in the controllers/Api/Frontend namespace */

});

/* this route fot testing Notification and using of routes */
Route::get('/send-email', [MailController::class, 'sendTestEmail'])->name('send-email');

