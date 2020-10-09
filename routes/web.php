<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\EpisodeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\SeriesController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// HOMEPAGE
Route::get('/', [HomeController::class, 'index'])->name('home');


// KHUSUS SERI
Route::prefix('series')->group(function(){
    // halaman daftar seri ada apa aja (landing page be like, mirip kea home)
    Route::get('/', [SeriesController::class, 'home'])->name('series.home');

    // halaman hasil filter category seri
    Route::get('category/{slug}', [SeriesController::class, 'category'])->name('series.category');
    // halaman hasil filter label seri
    Route::get('label/{slug}', [SeriesController::class, 'label'])->name('series.label');

    Route::prefix('{slug}')->group(function(){
        // halaman list episode di dalam seri
        Route::get('/', [SeriesController::class, 'detail'])->name('series.detail');

        // tambahkan ke watchlist
        Route::get('/watchlist', [SeriesController::class, 'watchlist'])->name('series.watchlist');

        Route::prefix('episode/{id}')->group(function(){
            // halaman buka episode (nonton)
            Route::get('/', [SeriesController::class, 'episode'])->name('series.episode');

            // masih ada komentar & reply cuman aku bingung, sementara ak buatnya gini
            // post untuk komentar
            Route::post('komentar', [CommentController::class, 'comment']);
            // post untuk edit komentar
            Route::post('komentar/edit', [CommentController::class, 'editcomment']);
            // post untuk reply
            Route::post('reply', [CommentController::class, 'reply']);
            // post untuk edit reply
            Route::post('reply/edit', [CommentController::class, 'editreply']);
        });;

        // halaman buka quiz
        Route::get('quiz', [SeriesController::class, 'quiz'])->name('series.quiz');
        // post untuk submit quiz
        Route::post('quiz', [SeriesController::class, 'submit']);
    });
});


// KHUSUS MEMBERSHIP & PAYMENT
// halaman pilih membership plan
Route::get('membership', [TransactionController::class, 'home'])->name('membership.home');

// halaman form pembayaran & post
Route::get('payment', [TransactionController::class, 'form'])->name('membership.form');
Route::post('payment', [TransactionController::class, 'submit']);


// KHUSUS USER
// halaman watchlist user
Route::get('watchlist', [UserController::class, 'watchlist'])->name('watchlist');

    // KHUSUS HISTORY USER
    Route::prefix('history')->group(function(){
        // halaman lihat history quiz user
        Route::get('quiz', [UserController::class, 'quiz'])->name('history.quiz');

        // halaman lihat membership user
        Route::get('membership', [UserController::class, 'membership'])->name('history.membership');

        // halaman lihat history transaksi user
        Route::get('transaction', [UserController::class, 'transaction'])->name('history.transaction');
    });

// halaman lihat profile user
Route::get('user/{username}', [UserController::class, 'profile'])->name('user.profile');

    // KHUSUS PERUBAHAN USER
    Route::prefix('settings')->group(function(){
        // halaman edit profile user & post
        Route::get('profile', [UserController::class, 'edit'])->name('settings.edit');
        Route::post('profile', [UserController::class, 'editSubmit']);

        // halaman verifikasi email & post
        Route::get('verification', [UserController::class, 'verification'])->name('settings.verification');
        Route::post('verification', [UserController::class, 'verificationSubmit']);

        // halaman ganti password user & post
        Route::get('password', [UserController::class, 'password'])->name('settings.password');
        Route::post('password', [UserController::class, 'passwordSubmit']);
    });


// KHUSUS BLOG
Route::prefix('blog')->group(function(){
    // halaman daftar post
    Route::get('/', [PostController::class, 'home'])->name('blog.home');

    // halaman hasil search post
    Route::get('/search/{query}', [PostController::class, 'search'])->name('blog.search');

    //  halaman hasil filter category post
    Route::get('/category/{slug}', [PostController::class, 'category'])->name('blog.category');

    // halaman hasil filter label post
    Route::get('/label/{slug}', [PostController::class, 'label'])->name('blog.label');

    // halaman detail post
    Route::get('/{slug}', [PostController::class, 'detail'])->name('blog.detail');
});



// KHUSUS ADMIN
Route::prefix('admin')->group(function(){
    // HALAMAN HOME
    Route::get('/', [AdminController::class, 'index'])->name('admin.home');


    // KHUSUS SERIES
    Route::prefix('series')->group(function(){
        // halaman dashboard daftar series
        Route::get('/', [AdminController::class, 'series'])->name('admin.series');

        // halaman form tambah series
        Route::get('add', [AdminController::class, 'addSeries'])->name('admin.series.add');
        Route::post('add', [SeriesController::class, 'add']);

        Route::prefix('{slug}')->group(function(){
            // halaman form edit series
            Route::get('edit', [AdminController::class, 'editSeries'])->name('admin.series.edit');
            Route::post('edit', [SeriesController::class, 'edit']);

            // hapus series
            Route::get('delete', [AdminController::class, 'deleteSeries'])->name('admin.series.delete');
        });
        // detail series -> list episode dan quiz dari series tersebut
        Route::get('episode', [AdminController::class, 'episodeSeries'])->name('admin.series.episode');

        // detail series -> list episode dan quiz dari series tersebut
        Route::get('quiz', [AdminController::class, 'quizSeries'])->name('admin.series.quiz');
    });


    // KHUSUS EPISODE
    Route::prefix('episode')->group(function(){
        // halaman dashboard daftar episode
        Route::get('/', [AdminController::class, 'episodes'])->name('admin.episodes');

        // halaman form tambah episode
        Route::get('add', [AdminController::class, 'addEpisode'])->name('admin.episode.add');
        Route::post('add', [EpisodeController::class, 'add']);

        Route::prefix('/{slug}')->group(function(){
            // halaman show episode
            Route::get('/', [AdminController::class, 'episode'])->name('admin.episode');

            // halaman form edit episode
            Route::get('edit', [AdminController::class, 'editEpisode'])->name('admin.episode.edit');
            Route::post('edit', [EpisodeController::class, 'edit']);

            // masih ada komentar & reply cuman aku bingung, sementara ak buatnya gini
            // post untuk komentar
            Route::post('komentar', [CommentController::class, 'comment']);
            // post untuk edit komentar
            Route::post('komentar/edit', [CommentController::class, 'editcomment']);
            // post untuk hapus komentar
            Route::post('komentar/delete', [CommentController::class, 'deletecomment']);

            // post untuk reply
            Route::post('reply', [CommentController::class, 'reply']);
            // post untuk edit reply
            Route::post('reply/edit', [CommentController::class, 'editreply']);
            // post untuk hapus reply
            Route::post('reply/delete', [CommentController::class, 'deletereply']);

            // hapus episode
            Route::get('delete', [AdminController::class, 'deleteEpisode'])->name('admin.episode.delete');
        });
    });

    // KHUSUS QUIZ
    Route::prefix('quiz')->group(function(){
        // halaman dashboard daftar quiz
        Route::get('/', [AdminController::class, 'quizzes'])->name('admin.quizzes');

        // halaman form tambah quiz
        Route::get('add', [AdminController::class, 'addQuiz'])->name('admin.quiz.add');
        Route::post('add', [QuizController::class, 'add']);

        Route::prefix('/{slug}')->group(function(){
            // halaman show quiz
            Route::get('/', [AdminController::class, 'quiz'])->name('admin.quiz');
            Route::post('/', [QuizController::class, 'quiz'])->name('admin.quiz.submit');

            // halaman form edit quiz (header)
            Route::get('edit', [AdminController::class, 'editQuiz'])->name('admin.quiz.edit');
            Route::post('edit', [QuizController::class, 'edit']);

            // hapus episode
            Route::get('delete', [AdminController::class, 'deleteQuiz'])->name('admin.quiz.delete');
        });
    });

    // KHUSUS TRANSACTION & PAYMENT
    Route::prefix('transaction')->group(function(){
        // halaman daftar semua transaction
        Route::get('/', [AdminController::class, 'transaction'])->name('transaction.list');

        // halaman daftar transaction yang pending
        Route::get('pending', [AdminController::class, 'pendingTransaction'])->name('transaction.pending');

        // accept transaction
        Route::get('/{id}/accept', [TransactionController::class, 'accept'])->name('transaction.accept');

        // reject transaction
        Route::get('/{id}/reject', [TransactionController::class, 'reject'])->name('transaction.reject');
    });


    // KHUSUS MEMBER
    Route::prefix('member')->group(function(){
        // halaman daftar semua member
        Route::get('/', [AdminController::class, 'member'])->name('member.list');

        // halaman detail member
        Route::get('/{username}', [AdminController::class, 'memberDetail'])->name('member.detail');

        // halaman history transaksi member yang dipilih
        Route::get('/{username}/history/transaksi', [AdminController::class, 'memberTransaksi'])->name('member.transaction');
    });


    // KHUSUS BLOG
    Route::prefix('blog')->group(function(){
        // halaman daftar semua post
        Route::get('/', [AdminController::class, 'blog'])->name('blog.list');

        // halaman form tambah post
        Route::get('add', [AdminController::class, 'addPost'])->name('admin.blog.add');
        Route::post('add', [PostController::class, 'add']);

        Route::prefix('/{slug}')->group(function(){
            // halaman form edit post
            Route::get('edit', [AdminController::class, 'editPost'])->name('admin.blog.edit');
            Route::post('edit', [PostController::class, 'edit']);

            // hapus episode
            Route::get('delete', [AdminController::class, 'deletePost'])->name('admin.blog.delete');
        });
    });
});

// Log Out!
Route::get('/logout', [UserController::class, 'logout'])->name('logout');
