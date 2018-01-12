<?php

use EloquentORM\Book;
use EloquentORM\User;
use Faker\Factory as Faker;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', [
    'as' => 'home',
    'uses' => 'PagesController@home'
]);

Route::get('/all', [
    'as' => 'all',
    'uses' => 'QueryController@eloquentAll'
]);

Route::get('/get/{gender}', [
    'as' => 'get',
    'uses' => 'QueryController@eloquentGet'
]);

Route::get('/get-custom', [
    'as' => 'get-custom',
    'uses' => 'QueryController@eloquentGetCustom'
]);

Route::delete('/delete/{id}', [
    'as' => 'delete',
    'uses' => 'QueryController@eloquentDelete'
]);

Route::get('/lists', [
    'as' => 'lists',
    'uses' => 'QueryController@eloquentLists'
]);

Route::get('/first-last', [
    'as' => 'first-last',
    'uses' => 'QueryController@eloquentFirstLast'
]);

Route::get('/paginate', [
    'as' => 'paginate',
    'uses' => 'QueryController@eloquentPaginate'
]);

// ORM AVANZADO
Route::get('/orm-all', [
    'as' => 'orm-all',
    'uses' => 'OrmController@ormAll'
]);

Route::delete('/orm-delete/{id}', [
    'as' => 'orm-delete',
    'uses' => 'OrmController@ormDelete'
]);

Route::delete('/orm-forceDelete/{id}', [
    'as' => 'orm-forceDelete',
    'uses' => 'OrmController@ormForceDelete'
]);

Route::delete('/orm-restore/{id}', [
    'as' => 'orm-restore',
    'uses' => 'OrmController@ormRestore'
]);

Route::delete('ebooksDeleteAll', 'OrmController@deleteAll');
Route::delete('ebooksforceDeleteAll', 'OrmController@forceDeleteAll');
Route::delete('ebooksRestoreAll', 'OrmController@restoreAll');

Route::delete('/orm-destroy', [
    'as' => 'orm-destroy',
    'uses' => 'OrmController@ormDestroy'
]);

/*Route::get('/registros-papelera', function(){
    $books = Book::onlyTrashed()->get();
    return $books;
});*/

Route::get('/books-trash', [
    'as' => 'books-trash',
    'uses' => 'OrmController@ormBooksTrashed'
]);