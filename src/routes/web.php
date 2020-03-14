<?php

Route::group(['middleware' => 'web'], function () {
    Route::resource('/contactus', 'Jebpkgs\ContactUs\Http\ContactUsController');
});