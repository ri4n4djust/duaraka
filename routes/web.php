<?php

use Illuminate\Support\Facades\Route;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DropzoneController;
  
Route::get('/foo', function () {
    Artisan::call('storage:link');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/admin-gallery', [App\Http\Controllers\galleryController::class , 'adminGallery'])->name('admin.gallery');
    Route::post('/admin-gallery/store', [App\Http\Controllers\galleryController::class , 'storeGallery'])->name('admin.gallery.store');
    Route::get('/admin-gallery-byid/{id}', [App\Http\Controllers\galleryController::class , 'getGalleryByAlbumId'])->name('admin.gallerybyid');
    


    Route::get('/admin-promo', [App\Http\Controllers\promoController::class , 'indexPromo'])->name('admin.promo');
    Route::get('/admin-promo/create', [App\Http\Controllers\promoController::class , 'createPromo'])->name('admin.promo.create');
    Route::post('/admin-promo/store', [App\Http\Controllers\promoController::class , 'storePromo'])->name('admin.promo.store');
    Route::get('/admin-promo/edit/{id}', [App\Http\Controllers\promoController::class , 'editPromo'])->name('admin.promo.edit');
    Route::patch('/admin-promo/update/{id}', [App\Http\Controllers\promoController::class , 'updatePromo'])->name('admin.promo.update');
    Route::delete('/admin-promo/delete/{id}', [App\Http\Controllers\promoController::class , 'deletePromo'])->name('admin.promo.delete');

    Route::get('/admin-page', [App\Http\Controllers\pageController::class, 'index'])->name('admin.page');
    Route::get('/admin-page/create', [App\Http\Controllers\pageController::class, 'create'])->name('admin.page.create');
    Route::post('/admin-page/store', [App\Http\Controllers\pageController::class, 'store'])->name('admin.page.store');
    Route::get('/admin-page/edit/{id}', [App\Http\Controllers\pageController::class, 'edit'])->name('admin.page.edit');
    Route::patch('/admin-page/update/{id}', [App\Http\Controllers\pageController::class, 'update'])->name('admin.page.update');
    Route::delete('/admin-page/delete/{id}', [App\Http\Controllers\pageController::class, 'destroy'])->name('admin.page.delete');


    Route::post('/dropzone/store', [DropzoneController::class, 'store'])->name('dropzone.store');
    Route::post('/dropzone/store-sl', [DropzoneController::class, 'storeSl'])->name('dropzone.storeSl');
    Route::post('/dropzone/store-bg', [DropzoneController::class, 'storeBg'])->name('dropzone.storeBg');
    Route::delete('/dropzone/delete', [DropzoneController::class, 'destroy'])->name('dropzone.delete');
    Route::delete('/dropzone/delete-bg', [DropzoneController::class, 'destroyBg'])->name('dropzone.deleteBg');
    Route::delete('/dropzone/delete-sl', [DropzoneController::class, 'destroySl'])->name('dropzone.deleteSl');

    
});

require __DIR__.'/auth.php';




Route::get('/', [App\Http\Controllers\villaController::class , 'home'])->name('home');
Route::get('/admin-slide', [App\Http\Controllers\galleryController::class , 'dataDasboard'])->name('admin.dataDasboard');
Route::get('/one-bedroom', [App\Http\Controllers\villaController::class , 'oneBedroom']);
Route::get('/two-bedroom', [App\Http\Controllers\villaController::class , 'twoBedroom']);

Route::get('/dining', [App\Http\Controllers\villaController::class , 'dining']);
Route::get('/gallery', [App\Http\Controllers\villaController::class , 'gallery']);
Route::get('/provide-services', [App\Http\Controllers\villaController::class , 'services']);
Route::get('/special-offers', [App\Http\Controllers\villaController::class , 'specialOffers']);
Route::get('/about-us', [App\Http\Controllers\villaController::class , 'aboutUs']);

Route::get('/sitemap', function(){
    $sitemap = Sitemap::create()
    ->add(Url::create('/one-bedroom'))
    ->add(Url::create('/two-bedroom'))
    ->add(Url::create('/dining'))
    ->add(Url::create('/gallery'))
    ->add(Url::create('/provide-services'))
    ->add(Url::create('/about-us'));

    $sitemap->writeToFile(public_path('sitemap.xml'));
   
    // $book = Booking::all();
    // foreach ($book as $book) {
    //     $sitemap->add(Url::create("/bookings/{$book->slug}"));
    // }
    // $sitemap->writeToFile(public_path('sitemap.xml'));

    // $activities = DB::table('activities')->get();
    // foreach ($activities as $act) {
    //     $sitemap->add(Url::create("/activities/{$act->slug}"));
    // }
    // $sitemap->writeToFile(public_path('sitemap.xml'));

    // $destinasi = DB::table('destinations')->get();
    // foreach ($destinasi as $des) {
    //     $sitemap->add(Url::create("/destinations/{$des->slug}"));
    // }
    // $sitemap->writeToFile(public_path('sitemap.xml'));

    // $tour = TourPackage::all();
    // foreach ($tour as $tur) {
    //     $sitemap->add(Url::create("/tour_packages/{$tur->slug}"));
    // }
    

    
}); 