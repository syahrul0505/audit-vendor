<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\VendorController;


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

// =================================================================================================================================
// =====================================================FRONTEND ROUTE==============================================================
// =================================================================================================================================


Route::get('/', function () {
    return view('frontend.vendor.create');
})->name('vendor');

// tentang jelantah
// Route::resource('vendor', VendorController::class);
Route::get('/vendor-create', [VendorController::class, 'create'])->name('vendor.create');
Route::post('/vendor-store', [VendorController::class, 'store'])->name('vendor.store');


// =================================================================================================================================
// ======================================================BACKEND ROUTE==============================================================
// =================================================================================================================================
Route::get('yakesma/admin/login', function () {
    $data['page_title'] = "Login";
    return view('backend.auth.login', $data);
})->name('user.login');

Route::middleware('auth:web')->group(function () {

    Route::prefix('yakesma/admin')->name('backend.')->group(function () {

        // Dashboard
        Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('dashboard.index');

        // Master Data Prefix
        Route::prefix('master-data')->group(function () {

            // Master Data
            Route::get('/', function () {
                $data['page_title'] = 'Master Data';
                $data['breadcumb'] = 'Master Data';
                return view('backend.master-data.index', $data);
            })->name('master-data.index');

            // Departement
            Route::resource('departements', DepartementController::class);

            // Users
            Route::patch('change-password', [UserController::class, 'changePassword'])->name('users.change-password');
            Route::resource('users', UserController::class)->except([
                'show'
            ]);;
        });
        
        // History Log
        Route::resource('history-log', HistoryLogController::class)->except([
            'show', 'create', 'store', 'edit', 'update'
        ]);;
    });
});
// =================================================================================================================================
// ==================================================END BACKEND ROUTE==============================================================
// =================================================================================================================================

// ---------------------------------------------------------------------------------------------------------------------------------
