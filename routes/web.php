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
Route::post('/form', [HomeController::class, 'form'])->name('form');

Route::group(["prefix"=>"go", 'middleware' => ['auth','web', 'admin']],function() {
    Route::get('/', 'DashboardController@index')->name('go');

    Route::get('/teklifler', 'OfferController@teklifler')->name('teklifler');
    Route::get('/teklif-olustur', 'OfferController@teklifolustur')->name('teklifolustur');
    Route::post('/teklifkaydet', 'OfferController@teklifkaydet')->name('teklifkaydet');
    Route::get('/teklifduzenle/{id}', 'OfferController@teklifduzenle')->name('teklif.edit');
    Route::put('/teklifduzenle/{id}', 'OfferController@teklifduzenlepost')->name('teklif.update');

    Route::get('/email/{id}', 'OfferController@emailGonder')->name('emailGonder');

    Route::get('/sablon' , 'OfferController@sablon')->name('sablon.index');
    Route::get('/sablon-olustur' , 'OfferController@sabloncreate')->name('sablon.create');
    Route::post('/sablon-olustur' , 'OfferController@sablonstore')->name('sablon.store');
    Route::put('/sablon-duzenle/{id}' , 'OfferController@sablonedit')->name('sablon.edit');
    Route::get('/sablon-onoff' , 'OfferController@getSwitch')->name('sablon.onoff');


    Route::get('/sikayet' , 'ComplaintController@index')->name('sikayet.index');
    Route::get('/sikayet-olustur' , 'ComplaintController@create')->name('sikayet.create');
    Route::post('/sikayet-kaydet' , 'ComplaintController@store')->name('sikayet.store');
    Route::get('/sikayet-duzenle/{id}' , 'ComplaintController@edit')->name('sikayet.edit');
    Route::put('/sikayet-duzenle/{id}', 'OfferController@update')->name('sikayet.update');

    Route::get('/kullanici' , 'OfferController@kullanici')->name('kullanici.index');
    Route::get('/kullanici-olustur' , 'OfferController@kullanicicreate')->name('kullanici.create');
    Route::post('/kullanici-olustur' , 'OfferController@kullanicistore')->name('kullanici.store');
    Route::get('/kullanici-duzenle/{id}' , 'OfferController@kullaniciedit')->name('kullanici.edit');
    Route::put('/kullanici-duzenle/{id}' , 'OfferController@kullaniciupdate')->name('kullanici.update');
    Route::get('/kullanici-onoff' , 'OfferController@kullanicigetSwitch')->name('kullanici.onoff');


    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
    Route::get('/formlar', 'DashboardController@formlar')->name('formlar');
    Route::delete('/formDelete/{id}', 'DashboardController@formDelete')->name('formDelete');
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
    Route::auto('/price', PriceController::class);

});

require __DIR__.'/auth.php';
