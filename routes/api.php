<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\ProductController;

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



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//protected route
Route::middleware(['auth:sanctum'])->group(function () {
    Route::get(
        '/test',
        function (Request $request) {
            switch ($request->query('language')) {
                case 'it':
                    $message = 'sei autorizzato';
                    break;
                case 'fr':
                    $message = 'tu es autorisé';
                    break;
                case 'en':
                    $message = 'you are authorized';
                    break;
                default:
                    $message = 'sei autorizzato';
                    break;
            }
            $response = [
                'status' => 'OK',
                'message' => $message
            ];
            return response()->json($response, 200);
        }
    );

    Route::get('/infos', [InfoController::class, 'fetch']);

    Route::get('/products', [ProductController::class, 'fetch']);
    Route::get('/products/prodotto/{product}', [ProductController::class, 'fetchOne']);
});


// Route::prefix('media')->group(function () {
//     Route::get('/{media}', 'MediaController@show');
// });
