<?php
use Illuminate\Http\Request;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'index'])->name('home');
Route::get('/article/{slug}', [PublicController::class, 'showArticle'])->name('article.read');

// API Routes untuk Load More (AJAX)
Route::get('/api/articles', [PublicController::class, 'loadMoreArticles']);
Route::get('/api/members', [PublicController::class, 'loadMoreMembers']);
Route::get('/api/cerpens', [PublicController::class, 'loadMoreCerpens']); // Tambahan
Route::get('/cerpen/read/{id}', [PublicController::class, 'showCerpen'])->name('cerpen.detail');