<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\MiddlewareController;
use App\Http\Controllers\TerminatemiddlewareController;
use App\Http\Controllers\CreatcontrollerController;
use App\Http\Controllers\MiddlewareconstructorController;
use App\Http\Controllers\RestfulresourceController;
use App\Http\Controllers\ImplicitController;
use App\Http\Controllers\ConstructorinjectionController;
use App\Http\Controllers\MethodinjectionController;
use App\Http\Controllers\RetrievingrequestController;
use App\Http\Controllers\RetrievinginputController;
use App\Http\Controllers\RetrievingcookieController;
use App\Http\Controllers\RedirectingactionsController;
use App\Http\Controllers\CrudController;
use App\Http\Controllers\HtmllinkRouteController;
use App\Http\Controllers\SetlocaleController;

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

// simple page load
Route::get('simple-page-load', function () {
    return view('simple-page-load');
});

// extra parameters
Route::get('extra-parameters/{id}',function($id) {
    echo 'Extra Parameters: '.$id;
});

// optional or conditional parameters
Route::get('optional-conditional/{name?}', function ($name = 'get any name of value') { 
    return $name;
});

// named routes
Route::get('named-route', [RouteController::class, 'namedroute'])->name('named-route');

// middleware
Route::get('role', [MiddlewareController::class, 'index'])->middleware('role:any word');

// terminable middleware
Route::get('terminable-middleware', [TerminatemiddlewareController::class, 'index'])->middleware('terminate');

// creat controller : syntax => Route::get(‘base URI’, [controllername::class, ‘method’]);
Route::get('creat-controller', [CreatcontrollerController::class, 'index']);

// assigning middleware within controller's constructor
Route::get('middleware-constructor', [MiddlewareconstructorController::class, 'showPath'])->middleware('middlewareconstructorfirst');

// restful resource in controller
Route::get('restful-resource', [RestfulresourceController::class, 'index']);

// implicit in controllers /* add prefix in url syntax : http://127.0.0.1:8000/<add prefix>/<base URI> */
Route::prefix('implicit')->group(function () {
    Route::get('index', [ImplicitController::class, 'implicitindex'])->name('implicit.index');
    Route::get('create', [ImplicitController::class, 'implicitcreate'])->name('implicit.create');
    Route::post('store', [ImplicitController::class, 'implicitstore'])->name('implicit.store');
    Route::get('show', [ImplicitController::class, 'implicitshow'])->name('implicit.show');
    Route::get('edit', [ImplicitController::class, 'implicitedit'])->name('implicit.edit');
    Route::put('update', [ImplicitController::class, 'implicitupdate'])->name('implicit.update');
    Route::delete('destroy', [ImplicitController::class, 'implicitdestroy'])->name('implicit.destroy');
});

// constructor injection in controller
Route::get('constructor-injection', [ConstructorinjectionController::class, 'index']);

// method injection in controller
Route::get('method-injection', [MethodinjectionController::class, 'index']);

// retrieving the request uri
Route::get('retrieving-request', [RetrievingrequestController::class, 'index']);

// retrieving input
Route::get('retrieving-input-form', function () {
    return view('retrievinginput');
});
Route::post('retrieving-input-view', [RetrievinginputController::class, 'index']);

// retrieving a cookie
Route::get('retrieving-cookie-set', [RetrievingcookieController::class, 'setcookie']);
Route::get('retrieving-cookie-get', [RetrievingcookieController::class, 'getcookie']);

// basic response
Route::get('basic-response', function () {
    return 'Basic Response';
});

// attaching headers response
Route::get('attaching-headers', function() {
    return response("Hello", 200)->header('Content-Type', 'text/html');
});

// attaching cookies response
Route::get('attaching-cookies',function() {
    return response("Hello", 200)
    ->header('Content-Type', 'text/html')
    ->withcookie('word','set any word');
});

// json response
Route::get('json-response',function() {
    return response()->json(['name' => 'Virat Gandhi', 'state' => 'Gujarat', 'details' => ['mobile' => '+121234567890', 'address' => 'india']]);
});

// simple view
Route::get('simple-view', function () {
    return view('simpleview');
});

// passing data in view
Route::get('passingdata-views', function () {
    return view('passingdataviews', ['name' => 'any words']);
});

// data sharing in view /* add one line in boot() function in app/Providers/AppServiceProvider.php => view()->share('name', 'Virat Gandhi'); */
Route::get('datasharing-view1', function () {
    return view('datasharingview1');
});
Route::get('datasharing-view2', function () {
    return view('datasharingview2');
});

// blade template layout
Route::get('bladetemplate-layout', function () {
    return view('bladetemplatelayout');
});

// redirecting to named routes
Route::get('redirect-route', function() {
    return view('redirectingroutes');
})->name('redirecting');
Route::get('redirected-name', function() {
    return redirect()->route('redirecting');
});

// redirecting to controller actions
Route::get('redirect-actions', [RedirectingactionsController::class, 'index']);
Route::get('redirected-controller', function() {
    return redirect()->action([RedirectingactionsController::class, 'index']);
});

// crud operation
Route::prefix('crud')->group(function () {
    Route::get('index', [CrudController::class, 'index'])->name('crud.index');
    Route::get('create', function() { return view('crud.create'); })->name('crud.create');
    Route::post('store', [CrudController::class, 'store'])->name('crud.store');
    Route::get('show/{id}', [CrudController::class, 'show'])->name('crud.show');
    Route::get('edit/{id}', [CrudController::class, 'edit'])->name('crud.edit');
    Route::put('update/{id}', [CrudController::class, 'update'])->name('crud.update');
    Route::get('destroy/{id}', [CrudController::class, 'destroy'])->name('crud.destroy');
});

// html form using laravelcollective/html package
Route::get('laravelhtml-package', function () {
    return view('laravelhtml-package');
});
Route::get('htmllink-route/{id}', [HtmllinkRouteController::class, 'index'])->name('htmllink-route');
Route::get('htmllink-route-withparameters/{id}', [HtmllinkRouteController::class, 'withparameters'])->name('htmllink-route-withparameters');

// set localization feature of laravel
Route::get('localization', function () {
    return view('localization');
});

// set setLocale in controller
// Route::get('localization/{locale}', [SetlocaleController::class, 'index'])->name('localization');