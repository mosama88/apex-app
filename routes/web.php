<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController as AdminHome;
use App\Http\Controllers\Admin\TeamController as AdminTaem;
use App\Http\Controllers\Admin\AboutController as AdminAbout;
use App\Http\Controllers\Admin\ServiceController as AdminService;
use App\Http\Controllers\Admin\AppointmentController as AdminAppointment;
use App\Http\Controllers\Admin\FeaturesController as AdminFeatures;
use App\Http\Controllers\Admin\TestimonialController as AdminTestimonial;
use App\Http\Controllers\Admin\ContactController as AdminContact;
use App\Http\Controllers\front\HomeController;
use App\Http\Controllers\front\TeamController;
use App\Http\Controllers\front\AboutController;
use App\Http\Controllers\front\ContactController;
use App\Http\Controllers\front\FeatureController;
use App\Http\Controllers\front\ServiceController;
use App\Http\Controllers\front\AppointmentController;
use App\Http\Controllers\front\TestimonialController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('index');
// });



Auth::routes();

Route::group(['middleware'=>'auth'], function()
{
Route::name('dashboard.')->group(function () {
Route::resource('/index', AdminHome::class);
Route::get('/about', [AdminAbout::class, 'index'])->name('about');
Route::get('/service', [AdminService::class, 'index'])->name('service');
Route::get('/appointment', [AdminAppointment::class, 'index'])->name('appointment');
Route::get('/feature', [AdminFeatures::class, 'index'])->name('feature');
Route::get('/taem', [AdminTaem::class, 'index'])->name('team');
Route::get('/testimonial', [AdminTestimonial::class, 'index'])->name('testimonial');
Route::get('/contact', [AdminContact::class, 'index'])->name('contact');

});




});

    ################################
            // Routes Front
    ################################


    Route::name('front.')->group(function () {

        Route::get('/', [HomeController::class, 'index'])->name('home');
        Route::get('/about', [AboutController::class, 'index'])->name('about');
        Route::get('/service', [ServiceController::class, 'index'])->name('service');
        Route::get('/appointment', [AppointmentController::class, 'index'])->name('appointment');
        Route::get('/feature', [FeatureController::class, 'index'])->name('feature');
        Route::get('/taem', [TeamController::class, 'index'])->name('team');
        Route::get('/testimonial', [TestimonialController::class, 'index'])->name('testimonial');
        Route::get('/contact', [ContactController::class, 'index'])->name('contact');

        
    });

                ##############################################
                    // Routes DashBoard Admin With Auth
                ##############################################

            //     Route::group(['middleware'=>'auth'],function(){

            //         
            
            //         Route::get('/index', [AdminController::class, 'index'])->name('index');
            
            //         Route::get('/contacts', [AdminContactController::class, 'index'])->name('contactAdmin');
            
            //         Route::resource('/Adminposts', PostAdminController::class);
                
            //         Route::resource('/categories', CategoryController::class);
            // });
            // });
            
            
            
            
            ################################
            // Routes Front
            ################################
            
            // Route::name('front.')->group(function () {
            //     Route::get('/', [HomeController::class,'index'])->name('home');
            //     Route::get('/about', [AboutController::class,'index'])->name('about');
            //     Route::get('/contact', [ContactController::class,'index'])->name('contact');
            //     Route::post('/send-message', [ContactController::class,'sendMessage'])->name('contact.sendMessage');
            //     Route::get('/posts', [PostController::class,'index'])->name('posts');
            //     Route::get('/single-post', [PostController::class,'singlePost'])->name('posts.singlePost');    
            // });
            


  