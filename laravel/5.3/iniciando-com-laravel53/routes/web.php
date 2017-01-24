<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'eloquent', 'as' => 'eloquent.'], function (){
    Route::get('clients', 'EloquentClientsController@index')->name('client.list');
    Route::get('clients/create', 'EloquentClientsController@create')->name('client.create');
    Route::post('clients/store', 'EloquentClientsController@store')->name('client.store');

});

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function (){
    Route::get('client', 'ClientsController@create')->name('client.create');
    Route::post('client', 'ClientsController@store')->name('client.store');
});

Route::group(['prefix' => '', 'as' => 'site.'], function (){
    Route::get('client', 'SiteClientsController@create')->name('client.create');
    Route::post('client', 'SiteClientsController@store')->name('client.store');
});


/*Route::get('/minharota', function() {
    return view('hello');
});

Route::get('/minharota/rota1', function() {
    return view('hello1');
});

Route::get('client', function (){
    return view('client');
});

Route::post('client', function (\Illuminate\Http\Request $request){
    return $request->get('value');
})->name('client.store');

Route::get('client/{id}/{name?}', function ($id, $name = 'Estevam'){
    return view('client-name')
        ->with('id', $id)
        ->with('name', $name)
        ->with('conteudo', 'teste');
    /*return view('client-name', [
        'id' => $id,
        'name' => $name
    ]);
});*/

/*Route::get('/if-for', function() {
    return view('if-for');
});*/

/*Route::get('client', function (){
    $csrfToken = csrf_token();
    $action = route('client.store');
    $html = <<<HTML
    <html>
        <body>
            <form method="post" action="$action">
                <label>Nome</label>
                <input type="hidden" name="_token" value="$csrfToken">
                <input type="text" name="value">
                <button type="submit">Enviar</button>
            </form>
        </body>
    </html>
HTML;
    return $html;
});

Route::post('client', function (\Illuminate\Http\Request $request){
    return $request->get('value');
})->name('client.store');
Route::get('client/{id}/{name?}', function ($id, $name = 'Estevam'){
    return "Client $id, $name";
});*/


