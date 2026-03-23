<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;

Route::get('/users', function () {
    $users = User::all();

    return response()->json($users);
});

Route::post('/users', function () {
    User::create([
        "name" => "Dummy" . (string)User::all()->count(),
        "email" => "dummy" . (string)User::all()->count() . "@email.com",
        "password" => "pswrd12345"
    ]);

    return response()->json([], 200);
});
