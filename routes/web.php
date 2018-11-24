<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'HomeController@index');


Auth::routes();


Route::group([
    'middleware' => 'auth'
], function() {
	
    include_once 'Backend/categories.php';
    include_once 'Backend/clubs.php';
    include_once 'Backend/comments.php';
    include_once 'Backend/events.php';
    include_once 'Backend/likes.php';
    include_once 'Backend/posts.php';
    include_once 'Backend/tags.php';
    include_once 'Backend/user.php';



    include_once 'frontend/departments.php';


});

    Route::prefix('admin')->group(function () {
    Route::get('login', 'Auth\AdminLoginController@login')->name('admin.auth.login');
    Route::post('login', 'Auth\AdminLoginController@loginAdmin')->name('admin.auth.loginAdmin');
    Route::post('logout', 'Auth\AdminLoginController@logout')->name('admin.auth.logout');
});

Route::group([
    // 'middleware' => 'auth:admin'
], function() {
    
    include_once 'admin/admin_profile.php';
    include_once 'admin/alumni.php';
    include_once 'admin/clubs.php';
    include_once 'admin/currentstd.php';
    include_once 'admin/dashboard.php';
    include_once 'admin/department.php';
    include_once 'admin/event.php';
    include_once 'admin/map.php';
    include_once 'admin/notifications.php';
    include_once 'admin/users_post.php';

});