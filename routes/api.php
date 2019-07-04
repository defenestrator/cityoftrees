<?php

use Illuminate\Http\Request;
use Illuminate\Routing\Router;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*
* Snippet for a quick route reference
*/
Route::get('/', function (Router $router) {
    return collect($router->getRoutes()->getRoutesByMethod()["GET"])->map(function($value, $key) {
        return url($key);
    })->values();   
});

Route::resource('roles', 'RoleAPIController', [
    'only' => ['index', 'show', 'store', 'update', 'destroy']
]);

Route::resource('shippingAddresses', 'ShippingAddressAPIController', [
    'only' => ['index', 'show', 'store', 'update', 'destroy']
]);

Route::resource('profiles', 'ProfileAPIController', [
    'only' => ['index', 'show', 'store', 'update', 'destroy']
]);

Route::resource('manufacturers', 'ManufacturerAPIController', [
    'only' => ['index', 'show', 'store', 'update', 'destroy']
]);

Route::resource('vendors', 'VendorAPIController', [
    'only' => ['index', 'show', 'store', 'update', 'destroy']
]);

Route::resource('products', 'ProductAPIController', [
    'only' => ['index', 'show', 'store', 'update', 'destroy']
]);

Route::resource('subscriptions', 'SubscriptionAPIController', [
    'only' => ['index', 'show', 'store', 'update', 'destroy']
]);

Route::resource('carts', 'CartAPIController', [
    'only' => ['index', 'show', 'store', 'update', 'destroy']
]);

Route::resource('paymentMethodTypes', 'PaymentMethodTypeAPIController', [
    'only' => ['index', 'show', 'store', 'update', 'destroy']
]);

Route::resource('invoices', 'InvoiceAPIController', [
    'only' => ['index', 'show', 'store', 'update', 'destroy']
]);

Route::resource('coupons', 'CouponAPIController', [
    'only' => ['index', 'show', 'store', 'update', 'destroy']
]);

Route::resource('payments', 'PaymentAPIController', [
    'only' => ['index', 'show', 'store', 'update', 'destroy']
]);

Route::resource('orders', 'OrderAPIController', [
    'only' => ['index', 'show', 'store', 'update', 'destroy']
]);

Route::resource('shipments', 'ShipmentAPIController', [
    'only' => ['index', 'show', 'store', 'update', 'destroy']
]);

Route::resource('images', 'ImageAPIController', [
    'only' => ['index', 'show', 'store', 'update', 'destroy']
]);

Route::resource('users', 'UserAPIController', [
    'only' => ['index', 'show', 'store', 'update', 'destroy']
]);