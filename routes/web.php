<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/iletisim', [HomeController::class, 'contactus'])->name('contactus');
Route::get('/fiyatlar', [HomeController::class, 'price'])->name('price');
Route::get('/destek', [HomeController::class, 'support'])->name('support');
Route::get('/kurumsal', [HomeController::class, 'corporate'])->name('corporate');
Route::get('/sayfa/{url}', [HomeController::class, 'corporatedetail'])->name('corporatedetail');
Route::get('/hizmetlerimiz', [HomeController::class, 'service'])->name('service');
Route::get('/hizmet/{url}', [HomeController::class, 'servicedetail'])->name('servicedetail');
Route::get('/cozumlerimiz', [HomeController::class, 'solutions'])->name('solutions');
Route::get('/cozumler/{url}', [HomeController::class, 'solutiondetail'])->name('solutiondetail');
Route::get('/sektor/{url}', [HomeController::class, 'sectordetails'])->name('sectordetail');
Route::get('/haberler', [HomeController::class, 'news'])->name('news');
Route::get('/haber/{url}', [HomeController::class, 'newsdetail'])->name('newsdetail');
Route::get('/bankahesapbilgileri', [HomeController::class, 'bankinfo'])->name('bankinfo');
Route::get('/sss', [HomeController::class, 'sss'])->name('sss');
Route::get('/api', [HomeController::class, 'api'])->name('api');

Route::group(["prefix"=>"go", 'middleware' => ['auth','web', 'admin']],function() {
    Route::get('/', 'DashboardController@index')->name('go');
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
    Route::auto('/page', PageController::class);
    Route::auto('/page-categories', PageCategoryController::class);
    Route::auto('/blog', BlogController::class);
    Route::auto('/blog-categories', BlogCategoryController::class);
    Route::auto('/faq', FaqController::class);
    Route::auto('/faq-categories', FaqCategoryController::class);
    Route::auto('/gallery', GalleryController::class);
    Route::auto('/service', ServiceController::class);
    Route::auto('/service-categories', ServiceCategoryController::class);
    Route::auto('/gallery-categories', GalleryCategoryController::class);
    Route::auto('/slider', SliderController::class);
    Route::auto('/video', VideoController::class);
    Route::auto('/video-categories', VideoCategoryController::class);
    Route::auto('/settings', SettingController::class);
    Route::auto('/contact', ContactController::class);
    Route::auto('/features', FeaturesController::class);
    Route::auto('/reference', ReferenceController::class);
});

require __DIR__.'/auth.php';
