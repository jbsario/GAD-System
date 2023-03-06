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

Route::get('/', function () {
    return view('index');
});
Route::get('/Action', function () {
    return view('action');
});

Route::get('/ActionAR', function () {
    return view('actionAR');
});

Route::get('/ActionSave', function () {
    return view('action');
});
Route::get('/Messages', function () {
    return view('messages');
});


Route::get('/myGADprofile', 'MainController@myGADprofile');
Route::post('/myGADprofile', 'MainController@myGADprofileSAVE');
Route::get('/generatePDF', 'MainController@generatePDF');
Route::get('/generatePDFPreview/{slug}', 'MainController@generatePDFPreview');
Route::post('/ActionSave','MainController@ActionSave');
Route::post('/ActionSaveAR','MainController@ActionSaveAR');

Route::get('/Action/{slug}','MainController@ActionCurrent');

Route::get('/prepareAdjustedGBP','MainController@prepareAdjustedGBP');
Route::get('/prepareAdjustedGBPEdit/{id}','MainController@prepareAdjustedGBPEdit');
Route::get('/prepareAdjustedGBPEditRow/{id}','MainController@prepareAdjustedGBPEditRow');

Route::get('/GetLines/{id}','MainController@GetLines');
Route::get('/GetLines/Performance/{id}','MainController@GetLinesPerformance');
Route::get('/GetLines/Performance/line/{lineid}','MainController@GetLinesPerformanceline');

//budget
Route::get('/GetLines/BUDGET/{id}','MainController@GetLinesBudget');
Route::get('/GetLines/BUDGET/line/{id}','MainController@GetLinesBudgetline');

// Office
Route::get('/GetLines/Office/{id}','MainController@GetLinesOffice');
Route::get('/GetLines/Office/line/{id}','MainController@GetLinesOfficeline');

Route::get('/TrackGBPAR','MainController@TrackGBPAR');


Route::get('deleteGADLine/{slug}','MainController@deleteGADLine');
Route::get('deleteAllGADLine/{slug}','MainController@deleteAllGADLine');

Route::get('Actionsubmit/{slug}','MainController@Actionsubmit');
Route::get('ActionARsubmit/{slug}','MainController@ActionARsubmit');
Route::get('allgadprofile','MainController@allgadprofile');
Route::get('Addadprofile','MainController@Addadprofile');
Route::post('AddGADprofile','MainController@SaveAddadprofile');
Route::get('/editGADprofile/{slug}', 'MainController@editGADprofile');
Route::post('/editGADprofilesave', 'MainController@editGADprofilesave');