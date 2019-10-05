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
Route::get('/', 'PagesController@index');
Route::get('/committee ', 'PagesController@committee');
Route::get('/privacy-policy', 'PagesController@policy');
Route::get('/bylaws', 'PagesController@bylaws');
Route::get('/about', 'PagesController@about');
Route::get('/meetings', 'PagesController@meetings');
Route::get('/gallery', 'PagesController@gallery');
//Route::get('/login', 'PagesController@gallery')->name('login');
Route::get('/events', 'PagesController@events')->name('events');
Route::get('/thankyou', 'PagesController@thanks')->name('thanks');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/contact', 'PagesController@contact')->name('contact');
//Emails
Route::get('/verify/{token}', 'VerifyController@verify')->name('verify');
Route::get('/resend', 'VerifyController@resendEmail');
Route::get('/edit', 'PagesController@editProfile')->name('edit');
Route::post('/edit', 'PagesController@updateProfile')->name('update');
// Route::get('user/{id}', function($id){
//     return 'Hello ' .$id;
// });
Route::post('/meetings', 'PagesController@meetings')->name('meetings');
Route::get('/meetings', 'PagesController@meetingsPass')->name('lifetimePass');

Route::get('/elections', 'PagesController@elections')->name('elections');
Route::get('/directory', 'PagesController@directory')->name('directory');
Route::get('/join', 'PagesController@register');
//PAYPAL routes..
Route::post('/payment', 'PaymentController@paymentConfirmation')->name('confirm');
Route::post('/proceed', 'PaymentController@proceed')->name('proceed');
Route::get('/proceed', 'PaymentController@getPaymentStatus')->name('status');

Route::post('/eventProcess', 'PaymentController@eventProcess')->name('eventProcess');
Route::get('/event', 'PagesController@event')->name('event');
Route::post('/event', 'PaymentController@eventConfirmation')->name('eventConfirm');
Route::get('/lifetime', 'PagesController@lifetimeDirectory')->name('lifetime');

//TEST

// // route for view/blade file
// Route::get('paywithpaypal', array('as' => 'paywithpaypal','uses' => 'PaypalController@payWithPaypal',));
// // route for post request
// Route::post('paypal', array('as' => 'paypal','uses' => 'PaypalController@postPaymentWithpaypal',));
// // route for check status responce
// Route::get('paypal', array('as' => 'status','uses' => 'PaypalController@getPaymentStatus',));
//Personal info and membership
Auth::routes();

