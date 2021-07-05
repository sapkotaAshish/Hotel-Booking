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

Route::get('/','GuestController@index');

Route::get('admin/home', 'HomeController@adminHome')->name('admin.home')->middleware('is_admin');
Route::get('seller/home', 'HomeController@sellerHome')->name('seller.home')->middleware('is_seller');
Route::get('userHome','HomeController@userHome')->name('user.home');

Route::get('userFood','UserController@userFood')->name('userFood')->middleware('auth');
Route::get('userHotel','UserController@userHotel')->name('userHotel')->middleware('auth');
Route::get('userEvent','UserController@userEvent')->name('userEvent')->middleware('auth');
Route::get('userProduct','UserController@userProduct')->name('userProduct')->middleware('auth');
Route::get('bookingInfo/{hotel_id}','BookinginfoController@bookingInfo')->name('bookingInfo')->middleware('auth');

Route::get('/finalBooking/{room_id}','BookinginfoController@finalBooking')->name('finalBooking');
Route::post('myBooking','BookinginfoController@myBooking')->name('myBooking');

Route::get('/eventBooking/{hotel_id}','BookinginfoController@eventBooking')->name('eventBooking');


	Route::get('/bookProduct/{product_id}','BookinginfoController@bookProduct')->name('bookProduct');
Route::get('/confirmBooking/{product_id}','BookinginfoController@confirmBooking')->name('confirmBooking');
Route::get('/bookedProducts/{product_id}','BookinginfoController@bookedProducts')->name('bookedProducts');

Route::get('/foodInfo/{hotel_id}','BookinginfoController@foodInfo')->name('foodInfo');

Route::get('viewsellerProduct','BookinginfoController@sellerProduct')->name('sellerProduct');
Auth::routes();

Route::get('manageHotel', 'HotelController@manageHotel')->name('manageHotel')->middleware('is_admin');
Route::post('createHotel','HotelController@createHotel')->name('createHotel')->middleware('is_admin'); 
Route::get('/hotelinfoEdit/{hotel_id}','HotelinfoController@hotelinfoEdit')->name('hotelinfoEdit')->middleware('is_admin');
Route::get('/hotelinfoDelete/{hotel_id}','HotelinfoController@hotelinfoDelete')->name('hotelinfoDelete')->middleware('is_admin');


Route::get('/eventEdit/{hotel_id}','EventController@eventEdit')->name('eventEdit')->middleware('is_admin');
Route::get('/eventDelete/{hotel_id}','EventController@eventDelete')->name('eventDelete')->middleware('is_admin');
Route::get('/deleteFood/{hotel_id}','FoodController@deleteFood')->name('deleteFood')->middleware('is_admin');




Route::get('manageRoom', 'RoomController@manageRoom')->name('manageRoom')->middleware('is_admin');
Route::post('roomCreate','RoomController@roomCreate')->name('roomCreate')->middleware('is_admin'); 


Route::get('hotelRoom', 'RoomController@hotelRoom')->name('hotelRoom')->middleware('is_admin');
Route::post('findRoom','RoomController@findRoom')->name('findRoom')->middleware('is_admin'); 

Route::get('createFood', 'FoodController@createFood')->name('createFood')->middleware('is_admin');
Route::post('foodCreate','FoodController@foodCreate')->name('foodCreate')->middleware('is_admin');

Route::get('createHotelinfo', 'HotelinfoController@createHotelinfo')->name('createHotelinfo')->middleware('is_admin');

Route::get('createEvent', 'EventController@createEvent')->name('createEvent')->middleware('is_admin');

Route::post('eventCreate', 'EventController@eventCreate')->name('eventCreate')->middleware('is_admin');
Route::get('manageEvent', 'EventController@manageEvent')->name('manageEvent')->middleware('is_admin');

Route::get('createProduct', 'ProductController@createProduct')->name('createProduct')->middleware('is_admin');
Route::get('manageProduct', 'ProductController@manageProduct')->name('manageProduct')->middleware('is_admin');
Route::post('productCreate','ProductController@productCreate')->name('productCreate')->middleware('is_admin');
Route::post('findProduct','ProductController@findProduct')->name('findProduct')->middleware('is_admin');



Route::get('/editRoom/{room_id}','RoomController@editRoom')->name('editRoom')->middleware('is_admin');


Route::get('manageSeller', 'SellerController@manageSeller')->name('manageSeller')->middleware('is_admin');
Route::get('createSeller', 'SellerController@createSeller')->name('createSeller')->middleware('is_admin');
Route::post('addSeller', 'SellerController@addSeller')->name('addSeller')->middleware('is_admin');
Route::get('editSeller/{id}', 'SellerController@editSeller')->name('editSeller')->middleware('is_admin');
Route::post('updateSeller', 'SellerController@updateSeller')->name('updateSeller')->middleware('is_admin');
Route::get('/deleteSeller/{id}', 'SellerController@deleteSeller')->name('deleteSeller')->middleware('is_admin');






Route::get('manageBooking','BookingController@manageBooking')->name('manageBooking')->middleware('is_admin');







Route::get('createAddress', 'AddressController@createAddress')->name('createAddress')->middleware('is_admin');
Route::post('addressCreate', 'AddressController@addressCreate')->name('addressCreate')->middleware('is_admin');
Route::get('manageAddress', 'AddressController@manageAddress')->name('manageAddress')->middleware('is_admin');
Route::post('findAddress', 'AddressController@findAddress')->name('findAddress')->middleware('is_admin');


Route::get('manageFood', 'FoodController@manageFood')->name('manageFood')->middleware('is_admin');
Route::post('findFood', 'FoodController@findFood')->name('findFood')->middleware('is_admin');

Route::post('hotelinfoCreate', 'HotelinfoController@hotelinfoCreate')->name('hotelinfoCreate')->middleware('is_admin');
Route::get('manageHotelinfo', 'HotelinfoController@manageHotelinfo')->name('manageHotelinfo')->middleware('is_admin');
Route::post('findHotelinfo', 'HotelinfoController@findHotelinfo')->name('findHotelinfo')->middleware('is_admin');
Route::post('findEvent', 'EventController@findEvent')->name('findEvent')->middleware('is_admin');

Route::get('editHotel/{hotel_id}','HotelController@editHotel')->name('editHotel')->middleware('is_admin');
Route::post('updateHotel','HotelController@updateHotel')->name('updateHotel')->middleware('is_admin');
Route::get('/deleteHotel/{hotel_id}','HotelController@deleteHotel')->name('deleteHotel')->middleware('is_admin');

Route::get('editAddress/{address_id}','AddressController@editAddress')->name('editAddress')->middleware('is_admin');
Route::post('updateAddress','AddressController@updateAddress')->name('updateAddress')->middleware('is_admin');
Route::get('/deleteAddress/{address_id}','AddressController@deleteAddress')->name('deleteAddress')->middleware('is_admin');

Route::get('editFood/{food_id}','FoodController@editFood')->name('editFood')->middleware('is_admin');
Route::post('updateFood','FoodController@updateFood')->name('updateFood')->middleware('is_admin');

Route::get('cancelBooking/{room_id}','BookingController@cancelBooking')->name('cancelBooking')->middleware('is_admin');
Route::get('updateBooking/{room_id}','BookingController@updateBooking')->name('updateBooking')->middleware('is_admin');
Route::post('sellerProduct','SellerController@sellerProduct')->name('sellerProduct')->middleware('is_seller');













