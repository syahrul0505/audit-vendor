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
    return view('frontend.vendor.create')->except([
        'show','index','edit','delete']);
})->name('vendor');

// tentang jelantah
Route::resource('vendor', VendorController::class);


Route::get('/minyak', function () {
    return view('frontend.tentang-jelantah.minyak');
})->name('minyak');

Route::get('/dampak', function () {
    return view('frontend.tentang-jelantah.dampak');
})->name('dampak');

Route::get('/regulasi', function () {
    return view('frontend.tentang-jelantah.regulasi');
})->name('regulasi');

// produk
Route::get('/produk', function () {
    return view('frontend.produk.index');
})->name('produk');

// jelantah heroes
Route::get('/not-login', function () {
    return view('frontend.jelantah-heroes.jelantah-heroes-not-login');
})->name('not-login');

Route::get('/heroes-login', function () {
    return view('frontend.jelantah-heroes.jelantah-heroes-login');
})->name('heroes-login');

// about

Route::get('/about', function () {
    return view('frontend.about.index');
})->name('about');

// Tentang Kami

Route::get('/tentang-kami', function () {
    return view('frontend.tentang-kami.index');
})->name('tentang-kami');

// login
Route::get('/login', function () {
    return view('frontend.login.login');
})->name('login');

Route::get('/signup', function () {
    return view('frontend.login.signup');
})->name('signup');

Route::get('/forget', function () {
    return view('frontend.login.forget');
})->name('forget');

Route::get('/change', function () {
    return view('frontend.login.change');
})->name('change');

Route::get('/join', function () {
    return view('frontend.login.join');
})->name('join');

// lainnya
Route::get('/informasi', function () {
    return view('frontend.lainnya.informasi');
})->name('informasi');

Route::get('/materi', function () {
    return view('frontend.lainnya.materi');
})->name('materi');

Route::get('/detail-jelantah', function () {
    return view('frontend.lainnya.detail-jelantah');
})->name('detail-jelantah');

Route::get('/detail-pengelolaan', function () {
    return view('frontend.lainnya.detail-pengelolaan');
})->name('detail-pengelolaan');

Route::get('/statistik', function () {
    return view('frontend.lainnya.statistik');
})->name('statistik');

Route::get('/sapa', function () {
    return view('frontend.lainnya.sapa-relawan');
})->name('sapa');

Route::get('/dokumentasi', function () {
    return view('frontend.lainnya.dokumentasi-kegiatan');
})->name('dokumentasi');

Route::get('/lihat-semuanya-fpsn', function () {
    return view('frontend.lainnya.lihat-semuanya-fpsn');
})->name('lihat-semuanya-fpsn');

Route::get('/lihat-semuanya-mario', function () {
    return view('frontend.lainnya.lihat-semuanya-mario');
})->name('lihat-semuanya-mario');

Route::get('/lihat-semuanya-mario3', function () {
    return view('frontend.lainnya.lihat-semuanya-mario3');
})->name('lihat-semuanya-mario3');

Route::get('/lihat-semuanya-pengelolaan', function () {
    return view('frontend.lainnya.lihat-semuanya-pengelolaan');
})->name('lihat-semuanya-pengelolaan');

Route::get('/galeri', function () {
    return view('frontend.lainnya.galeri');
})->name('galeri');

// Rekening
Route::get('/rekening', function () {
    return view('frontend.rekening.index');
})->name('rekening');

// program
Route::get('/edukasi-kampanye', function () {
    return view('frontend.program.edukasi-kampanye');
})->name('edukasi-kampanye');

Route::get('/program', function () {
    return view('frontend.program.index');
})->name('program');

Route::get('/pengumpulan-jelantah', function () {
    return view('frontend.program.pengumpulan-jelantah');
})->name('pengumpulan-jelantah');

Route::get('/pengelolaan-jelantah', function () {
    return view('program.pengelolaan-jelantah');
})->name('pengelolaan-jelantah');

Route::get('/aksi-sosial', function () {
    return view('frontend.program.aksi-sosial');
})->name('aksi-sosial');

//artikel
Route::get('/artikel', function (){
    return view('frontend.artikel.index');
})->name('artikel');

// blog
Route::get('/blog', function () {
    return view('frontend.blog.index');

})->name('blog');

Route::get('/blog/read', function () {
    return view('frontend.blog.read');

})->name('blog-read');

Route::get('/blog/read1', function () {
    return view('frontend.blog.read1');

})->name('blog-read1');

Route::get('/blog/read2', function () {
    return view('frontend.blog.read2');

})->name('blog-read2');

Route::get('/blog/read3', function () {
    return view('frontend.blog.read3');

})->name('blog-read3');

// =================================================================================================================================
// =====================================================END FRONTEND ROUTE==========================================================
// =================================================================================================================================


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
