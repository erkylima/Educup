<?php
Route::get('/', 'TelasController@index')->name('index');

Route::get('home', function() {
    return redirect(route('admin.inicio'));
});

Route::name('admin.')->prefix('admin')->middleware('auth')->group(function() {
    Route::get('inicio', 'DashboardController')->name('inicio');
    Route::get('planos', 'DashboardController@planos')->name('planos');
    Route::get('fatura', 'DashboardController@fatura')->name('fatura');
    Route::get('meus-cursos', 'DashboardController@meus_cursos')->name('meus-cursos');
    Route::get('curso', 'DashboardController@curso')->name('curso');
    Route::get('aula', 'DashboardController@aula')->name('aula');

    Route::get('users/roles', 'UserController@roles')->name('users.roles');
    Route::resource('users', 'UserController', [
        'names' => [
            'index' => 'users'
        ]
    ]);
    Route::get('addcurso', 'DashboardController@addCurso')->name('addcurso');
    Route::post('addcurso', 'DashboardController@sendCurso')->name('sendcurso');
    Route::get('editcurso', 'DashboardController@editCurso')->name('editcurso');
    Route::get('listacurso', 'DashboardController@listaCurso')->name('listacurso');
    Route::post('listacurso', 'DashboardController@deleteCurso')->name('deletecurso');
    Route::get('adddisciplina', 'DashboardController@addDisciplina')->name('adddisciplina');
    Route::post('adddisciplina', 'DashboardController@sendDisciplina')->name('senddisciplina');
    Route::get('editdisciplina', 'DashboardController@addCurso')->name('editdisciplina');
    Route::get('listadisciplina', 'DashboardController@listaDisciplina')->name('listadisciplina');
    Route::get('addvideo', 'DashboardController@addVideo')->name('addvideo');
    Route::post('addvideo', 'DashboardController@sendVideo')->name('sendvideo');
    Route::get('editvideo', 'DashboardController@editVideo')->name('editvideo');
    Route::get('listavideo', 'DashboardController@listaVideo')->name('listavideo');

});

Route::middleware('auth')->get('logout', function() {
    Auth::logout();
    return redirect(route('login'))->withInfo('Você acabou de sair de sua conta!');
})->name('logout');

Auth::routes(['verify' => true]);

Route::name('js.')->group(function() {
    Route::get('dynamic.js', 'JsController@dynamic')->name('dynamic');
});

// Get authenticated user
Route::get('users/auth', function() {
    return response()->json(['user' => Auth::check() ? Auth::user() : false]);
});
