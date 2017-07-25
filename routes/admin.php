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

if (config('backpack.base.setup_dashboard_routes')) {
    Route::get('dashboard', 'CustomAdminController@dashboard');
}

CRUD::resource('article', 'ArticleCrudController');
CRUD::resource('category', 'CategoryCrudController');
CRUD::resource('tag', 'TagCrudController');

CRUD::resource('settings', 'SettingCrudController');
Route::post('settings-dropzone', ['uses' => 'SettingCrudController@handleDropzoneUpload']);

CRUD::resource('bars', 'BarCrudController');
CRUD::resource('tickets', 'TicketCrudController');

CRUD::resource('main-partners', 'MainpartnersCrudController');
CRUD::resource('partners', 'PartnersCrudController');

CRUD::resource('programs', 'ProgramCrudController');
CRUD::resource('scenes', 'SceneCrudController');
CRUD::resource('speakers', 'SpeakerCrudController');

CRUD::resource('contact', 'ContactCrudController');
CRUD::resource('members', 'MemberCrudController');

CRUD::resource('event', 'EventCrudController');
Route::post('event-dropzone', ['uses' => 'EventCrudController@handleDropzoneUpload']);
