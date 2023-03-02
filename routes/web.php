<?php


use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\AdminController;
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

// =======> root
Route::get('/', [HomeController::class, 'index']);

// =======> pages
Route::get('/my-doctors', [HomeController::class, 'my_doctors']);

Route::get('/appointment', [HomeController::class, 'appointment']);

Route::get('/pharmacy', [HomeController::class, 'pharmacy']);

Route::get('/contact-us', [HomeController::class, 'contact_us']);

// =======> Appointments
Route::get('/book-appointment/{id}', [HomeController::class, 'book_appointment']);
Route::post('/confirm-appointment/{id}', [HomeController::class, 'confirm_appointment']);
Route::get('/delete-appointment/{id}', [HomeController::class, 'delete_appointment']);
Route::get('/download-precription/{id}', [HomeController::class, 'download_precription']);

// =======> add to my doctor
Route::post('/add-to-mydoctor/{id}', [HomeController::class, 'add_to_mydoctor']);
Route::get('/remove-from-list/{id}', [HomeController::class, 'remove_Doctor']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// =======> redirect user
Route::get('/home', [UserController::class, 'redirect_user']);

// =======> logout
Route::post('logout', [UserController::class, 'logout'])->name('logout');

/*
|--------------------------------------------------------------------------
| Admin routes
|--------------------------------------------------------------------------
*/

Route::get('/add-doctor', [AdminController::class, 'add_doctor_Interface']);
Route::post('/add_doctor', [AdminController::class, 'save_doc_data']);

Route::get('/edit-doctor-info/{id}', [AdminController::class, 'goto_edit_doctor']);
Route::post('/update-doctor/{id}', [AdminController::class, 'save_edit_data']);

Route::get('/delete-doctor/{id}', [AdminController::class, 'delete_doctor']);

Route::get('/view-all-doctors',[AdminController::class, 'view_all_doctors']);

Route::get('/appointments', [AdminController::class, 'view_all_appoinments']);

Route::get('/drugs', [AdminController::class, 'view_all_drugs']);

Route::post('/add-drugs', [AdminController::class, 'save_drug_data']);




