
<?php



Route::get('/', function () {
    // $name = request('name');
    // return view('home', ['name' => $name]);

    $names = ['mamet', 'reni', 'adi'];
    return view('home', ['names' => $names]);
});
