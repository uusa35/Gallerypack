<?php
/**
 * Created by PhpStorm.
 * User: usamaahmed
 * Date: 8/12/15
 * Time: 8:46 AM
 */

Route::group(['prefix' => 'backend'], function () {

    Route::resource('gallery', 'Usama\Gallerypack\Controllers\Backend\GalleryController');

});

Route::resource('gallery', 'Usama\Gallerypack\Controllers\Frontend\GalleryController');