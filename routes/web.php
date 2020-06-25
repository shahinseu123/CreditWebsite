<?php

use App\Http\Controllers\PageController;
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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get("/", "PageController@home")->name("home");
Route::get("/service", "PageController@service")->name("service");
Route::get("/about", "PageController@about")->name("about");
Route::get("/contact", "PageController@contact")->name("contact");
Route::post("/contact-action", "PageController@contactAction")->name("contact-action");

// backend
Route::get("/dashboard", "AdminController@dashboard")->name("dashboard");
Route::get("/backend/register", "RegisterController@register_page")->name("register");
Route::post("/backend/register-action", "RegisterController@register_action")->name("register-action");
Route::get("/backend/login", "LoginController@login_page")->name("login");
Route::post("/backend/login-action", "LoginController@login_action")->name("login-action");
Route::get("/backent/customer-inquery", "AdminController@customer_inquery")->name("customer-inquery");
Route::get("/backent/delete-inquery/{id}", "AdminController@delete_inquery")->name("delete-inquery");
Route::get("/backent/show-info/{id}", "AdminController@show_info")->name("show-info");
Route::get("/backent/logout", "AdminController@logout")->name("logout");
