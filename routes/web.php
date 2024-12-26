<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;

// Assignment
/*
ตกแต่งความสวยงาม / css framework
เพิ่มรายละเอียดข้อมูล 10 รายการ
รูปภาพ
ถ้าจะดูรายละเอียดสินค้า show ต้องผ่าน Authentication
*/



Route::get('/', function () {
    return Inertia::render('Welcome'); // กำหนดให้โหลดหน้า Welcome
});

Route::middleware('auth')->get('/products/{id}', [ProductController::class, 'show'])->name('products.show');
//Route::middleware(['auth'])->get('/product/{id}', [ProductController::class, 'show']);

Route::get('/greeting', function () {
    return 'Hello World';
});

/*Route::get('/user/{id}', function (string $id) {
    return 'User '.$id;
});*/

Route::get('/users/{user}', [UserController::class, 'show']);
Route::get('/products', [ProductController::class, 'index'])->name('products.index');

Route::middleware(['auth'])->group(function () {
    
    Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');
});

Route::get('/user', [UserController::class, 'index'])->name('CSMJU');

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard'); // เปลี่ยนเป็น Inertia::render
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
