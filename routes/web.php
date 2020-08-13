
<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

// Route::get('/',function(Request $request){
//     return $request->server('HTTP_USER_AGENT');
// });

//Digishop route file
Route::prefix('/')->group(base_path('routes/'.setting('app.theme').'.php'));

//Paytm callback action
Route::post('/payment/paytm/status', 'Admin\PaytmWalletController@paymentCallback')->name('payment.paytm.status');

//Auto Deploy from github push
Route::post('/deploy/github-notify', 'Admin\GithubDeployController@notify')->name('git.notify');
Route::get('/deploy/github-pull', 'Admin\GithubDeployController@deploy')->name('git.deploy');

//Test Routes
Route::prefix('/test')->group(base_path('routes/test.php'));

//Auth Route
Auth::routes();

Route::get('/logged-in-devices', 'Admin\LoggedInDeviceManager@index')->name('logged-in-devices.list')->middleware('auth');
Route::get('/logout/all', 'Admin\LoggedInDeviceManager@logoutAllDevices')->name('logged-in-devices.logoutAll')->middleware('auth');
Route::get('/logout/{device_id}', 'Admin\LoggedInDeviceManager@logoutDevice')->name('logged-in-devices.logoutSpecific')->middleware('auth');

//Admin route
Route::prefix('appadmin')->middleware('auth')->group(base_path('routes/admin.php'));

