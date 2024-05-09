<?php

use App\Jobs\TestJob;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    TestJob::dispatch();

    return view('welcome');
});
