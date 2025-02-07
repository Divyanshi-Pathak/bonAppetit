<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [App\Http\Controllers\IndexController::class, 'index'])->name('index');
Route::get('/about',[App\Http\Controllers\IndexController::class, 'about'])->name('about');
Route::get('/contact', [App\Http\Controllers\IndexController::class, 'contact'])->name('contact');
Route::get('/services', [App\Http\Controllers\IndexController::class, 'services'])->name('services');
Route::get('/blogs', [App\Http\Controllers\IndexController::class, 'blogs'])->name('blogs');
Route::get('/reservation', [App\Http\Controllers\IndexController::class, 'reservation'])->name('reservation');
Route::get('/menu/{id}', [App\Http\Controllers\IndexController::class, 'menu'])->name('menu');



// ----------------------------------------------Admin-------------------------------------------------
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//-------------------------------------Items----------------------------------------------------
Route::get('/items', [App\Http\Controllers\ItemController::class, 'items'])->middleware(['auth'])->name('items');
Route::get('/items/add_new_item', [App\Http\Controllers\ItemController::class, 'add_new_item'])->middleware(['auth'])->name('add_new_item');
Route::post('/items/save_item', [App\Http\Controllers\ItemController::class, 'save_item'])->middleware(['auth'])->name('save_item');
Route::get('/items/delete/{id}', [App\Http\Controllers\ItemController::class, 'items_delete'])->middleware(['auth'])->name('items_delete');
Route::get('/items/edit/{id}', [App\Http\Controllers\ItemController::class, 'items_edit'])->middleware(['auth'])->name('items_edit');
Route::post('/items/update_item', [App\Http\Controllers\ItemController::class, 'update_item'])->middleware(['auth'])->name('update_item');


//---------------------------------------Category------------------------------------------------
Route::get('/category', [App\Http\Controllers\CategoryController::class, 'category'])->middleware(['auth'])->name('category');
Route::get('/category/add_new_category', [App\Http\Controllers\CategoryController::class, 'add_new_category'])->middleware(['auth'])->name('add_new_category');
Route::post('/category/save_category', [App\Http\Controllers\CategoryController::class, 'save_category'])->middleware(['auth'])->name('save_category');
Route::get('/category/delete/{id}', [App\Http\Controllers\CategoryController::class, 'category_delete'])->middleware(['auth'])->name('category_delete');
Route::get('/category/edit/{id}', [App\Http\Controllers\CategoryController::class, 'category_edit'])->middleware(['auth'])->name('category_edit');
Route::post('/category/update_category', [App\Http\Controllers\CategoryController::class, 'update_category'])->middleware(['auth'])->name('update_category');




//---------------------------------------Testimonials------------------------------------------------
Route::get('/testimonials', [App\Http\Controllers\TestimonialController::class, 'testimonials'])->middleware(['auth'])->name('testimonials');
Route::get('/testimonials/add_new_testimonial', [App\Http\Controllers\TestimonialController::class, 'add_new_testimonial'])->middleware(['auth'])->name('add_new_testimonial');
Route::post('/testimonials/save_testimonial', [App\Http\Controllers\TestimonialController::class, 'save_testimonial'])->middleware(['auth'])->name('save_testimonial');
Route::get('/testimonials/delete/{id}', [App\Http\Controllers\TestimonialController::class, 'testimonial_delete'])->middleware(['auth'])->name('testimonial_delete');
Route::get('testimonials/edit/{id}', [App\Http\Controllers\TestimonialController::class, 'testimonial_edit'])->middleware(['auth'])->name('testimonial_edit');
Route::post('/testimonials/update_testimonial', [App\Http\Controllers\TestimonialController::class, 'update_testimonial'])->middleware(['auth'])->name('update_testimonial');


//---------------------------------------Reservations------------------------------------------------
Route::get('/manage_reservation', [App\Http\Controllers\ReservationController::class, 'reservation'])->middleware(['auth'])->name('manage_reservation');
Route::get('/manage_reservation/make_reservation', [App\Http\Controllers\ReservationController::class, 'make_reservation'])->middleware(['auth'])->name('make_reservation');
Route::post('/manage_reservation/save_reservation', [App\Http\Controllers\ReservationController::class, 'save_reservation'])->middleware(['auth'])->name('save_reservation');
Route::get('/manage_reservation/delete/{id}', [App\Http\Controllers\ReservationController::class, 'reservation_delete'])->middleware(['auth'])->name('reservation_delete');
Route::get('manage_reservation/edit/{id}', [App\Http\Controllers\ReservationController::class, 'reservation_edit'])->middleware(['auth'])->name('reservation_edit');
Route::post('/manage_reservation/update_reservation', [App\Http\Controllers\ReservationController::class, 'update_reservation'])->middleware(['auth'])->name('update_reservation');


//---------------------------------------Services------------------------------------------------

Route::get('/manage_services', [App\Http\Controllers\ServiceController::class, 'service'])->middleware(['auth'])->name('service');
Route::get('/manage_services/add_new_service', [App\Http\Controllers\ServiceController::class, 'add_new_service'])->middleware(['auth'])->name('add_new_service');
Route::post('/manage_services/save_service', [App\Http\Controllers\ServiceController::class, 'save_service'])->middleware(['auth'])->name('save_service');
Route::get('/manage_services/delete/{id}', [App\Http\Controllers\ServiceController::class, 'service_delete'])->middleware(['auth'])->name('service_delete');
Route::get('manage_services/edit/{id}', [App\Http\Controllers\ServiceController::class, 'service_edit'])->middleware(['auth'])->name('service_edit');
Route::post('/manage_services/update_service', [App\Http\Controllers\ServiceController::class, 'update_service'])->middleware(['auth'])->name('update_service');



//---------------------------------------Blogs------------------------------------------------
Route::get('/manage_blogs', [App\Http\Controllers\BlogController::class, 'blog'])->middleware(['auth'])->name('blog');
Route::get('/manage_blogs/add_new_blog', [App\Http\Controllers\BlogController::class, 'add_new_blog'])->middleware(['auth'])->name('add_new_blog');
Route::post('/manage_blogs/save_blog', [App\Http\Controllers\BlogController::class, 'save_blog'])->middleware(['auth'])->name('save_blog');
Route::get('/manage_blogs/delete/{id}', [App\Http\Controllers\BlogController::class, 'blog_delete'])->middleware(['auth'])->name('blog_delete');
Route::get('manage_blogs/edit/{id}', [App\Http\Controllers\BlogController::class, 'blog_edit'])->middleware(['auth'])->name('blog_edit');
Route::post('/manage_blogs/update_blog', [App\Http\Controllers\BlogController::class, 'update_blog'])->middleware(['auth'])->name('update_blog');


