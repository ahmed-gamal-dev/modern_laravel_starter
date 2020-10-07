<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*
* ALL api routes roganized here in seperate files according to namespace and prefix
* They are arranged perfectly to accommodate large projects
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::namespace('Api')->group(function() {
/* put here routes that them controllers are in the controllers/Api namespace */

    Route::group(['namespace' => 'Backend'], function () {
/* put here routes that them controllers are in the controllers/Api/Backend namespace */
        
            Route::namespace('Auth')->group(__DIR__ . '/api/Backend/auth.php');

            Route::name('admin')->prefix('admin')->group(__DIR__ . '/api/Backend/admin.php');
    });

    Route::namespace('Frontend')->group(__DIR__ . '/api/Frontend/user.php');
/* put here routes that them controllers are in the controllers/Api/Frontend namespace */


}); // end of namespace('Api'


